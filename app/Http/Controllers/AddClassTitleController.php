<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Banner;
use App\Models\ClassTitle;

class AddClassTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class_titles=ClassTitle::all();
        return view('dashclasstitle.index_classtitle', compact('class_titles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashclasstitle.create_classtitle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'title' => 'required|unique:class_titles',
            'description' => 'required'
        ]);

        $class_title = new ClassTitle();
        $class_title-> title = $request->input('title');
        $class_title-> description = $request->input('description');
        $class_title->save();
        return redirect(route('dashclasstitle.index_classtitle'));

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
        //
       $class_title = ClassTitle::find($id);
        return view('dashclasstitle.edit_classtitle', compact('class_title'));
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

        $class_title = ClassTitle::find($id);
        $class_title-> title = $request->input('title');
        $class_title-> description = $request->input('description');
        $class_title->save();
        return redirect(route('dashclasstitle.index_classtitle'));
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
        $class_title = ClassTitle::find($id);
        $class_title->delete();
        return redirect(route('dashclasstitle.index_classtitle'));
    }


}
