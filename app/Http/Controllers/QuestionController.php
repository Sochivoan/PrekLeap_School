<?php

namespace App\Http\Controllers;


use App\Models\QuestionClasswork;
use App\Models\QuestionText;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    function question()
    {
        return view('classroom.question');
    }
    
    function createQuestions(Request $request)
    {

        $questionClasswork = new QuestionClasswork();

        $questionClasswork->title = $request->input('title');
        $questionClasswork->instruction = $request->input('instruction');
        $questionClasswork->score = $request->input('score');
        $questionClasswork->due_date = $request->input('due_date');
        $questionClasswork->c_id = session('class_id');
        
        $questionClasswork->save();

        $quesionClassworkSelected = QuestionClasswork::where('title', $request->input('title'))->first();

        
        foreach($request->question as $key=>$question){
            $data = new QuestionText();
            $data->question = $question;
            $data->qc_id = $quesionClassworkSelected->id;
            $data->save();
        }

        // return $quesionClassworkSelected;
        // return $request->input('title');
        return redirect(route('classroom.classwork' , session('classID')));
    }
}
