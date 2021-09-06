<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Classroom;
use App\Models\QuestionClasswork;
use App\Models\QuestionText;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\Console\Question\Question;

class ClassroomController extends Controller
{
    function classroom()
    {
        if(session('isTeacher') == 1)
        {
            $classroomChecked = Classroom::where('teacher_id', session('userID'))->get();
            if(!$classroomChecked->isEmpty()){
                return view('classroom.classroom')->with('classroomChecked', $classroomChecked);
            }
            return view('classroom.createClass');
        }
        else
        {
            $student = Student::where('id', session('userID'))->first();
            $classroomChecked = $student->classrooms()->get();
            if(!$classroomChecked->isEmpty()){
                return view('classroom.classroom')->with('classroomChecked', $classroomChecked);
            }
            return view('classroom.joinClassroom');
        }
    }


    function show($id)
    {
        $classRoomSelected = Classroom::where('id', $id)->first();
        session()->put('classID', $id);
        session()->put('classRoomSelected', $classRoomSelected);
        $classworks = QuestionClasswork::where('c_id', $classRoomSelected->id)->get();
        return view('classroom.insideClass')
                ->with('classRoomSelected', $classRoomSelected)
                ->with('classworks',  $classworks);
    }


    function classwork($id)
    {
        $allClassworks = QuestionClasswork::where('c_id',$id)->get();
        session()->put('classwork', $id);
        return view('classroom.classwork')->with('allClassworks' , $allClassworks);
    }


    function createClass(Request $request)
    {
        $request->validate([
            'class_name' => 'required',
            'class_subject' => 'required',
            'class_room' => 'required',
        ]);

        $classRoom = new Classroom;
        $classRoom->name = $request->input('class_name');
        $classRoom->subject = $request->input('class_subject');
        $classRoom->room = $request->input('class_room');
        $classRoom->c_code = Str::random(6);
        $classRoom->teacher_id = session('userID');

        $classRoom->save();

        $classRoomSelected = Classroom::where('name', $request->input('class_name'))->first();
        session()->put('class_id' , $classRoomSelected->id);
        return view('classroom.insideClass')->with('classRoomSelected', $classRoomSelected);

    }
    

    function joinClass(Request $request)
    {   
        $request->validate([
            'c_code' => 'required',
        ]);
        $classRoom = Classroom::where('c_code', $request->input('c_code'))->first();
        if($classRoom != null){
            $classRoom->students()->attach(session('userID'));
            return redirect()->route('classroom.show', ['id' => $classRoom->id]);
        }
        else return redirect()->route('joinClassroom');
    }


    function classworkDetail($id)
    {
        $classwork = QuestionClasswork::where('id', $id)->first();
        $classworkDetail = QuestionText::where('qc_id', $id)->get();
        return view('classroom.classworkDetail')
            ->with('classwork', $classwork)
            ->with('classworkDetail', $classworkDetail);
    }


    function storeClassworkDetail(Request $request)
    {  
        foreach($request->answer as $key=>$answer){
            $data = new Answer();
            $data->answer = $answer;
            $data->q_id = $request->questionID[$key];
            $data->s_id = session('userID');
            $data->save();
            return redirect()->route('classroom.classwork', ['id' => session('classwork')]);
        }
    }


    function people()
    {
        $classroom = Classroom::where('id', session('classID'))->first();
        $students = $classroom->students()->orderBy('name')->distinct()->get();
        $teacher =  $classroom->teacher;

        return view('classroom.people')
            ->with('students', $students)
            ->with('teacher', $teacher);
    }


    function grade()
    {
        
        $classworks = QuestionClasswork::where('c_id', session('classID'))->get();
        $students = Classroom::where('id', session('classID'))->first()->students()->orderBy('name')->distinct()->get();
        return view('classroom.grade')
            ->with('students', $students)
            ->with('classworks', $classworks);

    }

    function studentWork($cid, $sid = null)
    {
        $questions  = QuestionText::where('qc_id', $cid)->get();
        $answers = Answer::where('s_id' , $sid)->get();     
        return view('classroom.studentwork')
                ->with('questions', $questions)
                ->with('answers', $answers);
    }

    function storeScore($cid , $id)
    { 
        return "Success";
    }
}
