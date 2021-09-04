<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoomTitle;

class AddClassRoomTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class_rooms_titles = ClassRoomTitle::all();
        return view('dashclassroomtitle.index_classroomtitle', compact('class_rooms_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashclassroomtitle.create_classroomtitle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|unique:class_room_titles',
            'description' => 'required',
        ]);

        $class_rooms_title = new ClassRoomTitle();
        $class_rooms_title-> title = $request->input('title');
        $class_rooms_title-> description = $request->input('description');
        $class_rooms_title->save();
        return redirect(route('dashclassroomtitle.index_classroomtitle'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class_rooms_title = ClassRoomTitle::find($id);
        return view('dashclassroomtitle.edit_classroomtitle',compact('class_rooms_title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);

        $class_rooms_title = ClassRoomTitle::find($id);
        $class_rooms_title-> title = $request->input('title');
        $class_rooms_title-> description = $request->input('description');
        $class_rooms_title->save();
        return redirect(route('dashclassroomtitle.index_classroomtitle'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class_rooms_title = ClassRoomTitle::find($id);
        $class_rooms_title->delete();
        return redirect(route('dashclassroomtitle.index_classroomtitle'));
    }
}
