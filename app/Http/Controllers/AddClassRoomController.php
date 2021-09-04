<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\ClassRoom;


class AddClassRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class_rooms = ClassRoom::all();
        return view('dashclassroom.index_classroom', compact('class_rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashclassroom.create_classroom');
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
            'title' => 'required|unique:class_rooms',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif'
        ]);
        $class_room = new ClassRoom();
        $class_room->title = $request->input('title');
        $class_room->description = $request->input('description');

        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images', $filename);
            $class_room->image = $filename;
        }else {
            return $request;
            $class_room->image = '';
        }
        $class_room->save();
        return redirect(route('dashclassroom.index_classroom'));
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
        $class_room = ClassRoom::find($id);
        return view('dashclassroom.edit_classroom', compact('class_room'));

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
        //
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'

        ]);
        $class_room = ClassRoom::find($id);
        $class_room->title = $request->input('title');
        $class_room->description = $request->input('description');

        if ($request->hasfile('image'))
        {
            $destination = 'images/'.$class_room->image;
            if(File::exists($destination))
            {
                File::exists($destination);
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images', $filename);
            $class_room->image = $filename;
        }
        $class_room->update();
        return redirect(route('dashclassroom.index_classroom'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $class_room = ClassRoom::find($id);
        $class_room->delete();
        return redirect(route('dashclassroom.index_classroom'));
    }
}
