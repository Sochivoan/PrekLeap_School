<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\ClassTests;

class AddClassTestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $class_tests = ClassTests::all();
        return view('dashclasstests.index_classtests', compact('class_tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashclasstests.create_classtests');
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
            'courses_name' => 'required|unique:class_tests',
            'courses_description' => 'required',
            'link_to_class' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif'
            // 'required|mimes:jpg,png,jpeg,gif'

        ]);


        $class_tests = new ClassTests();
        $class_tests ->courses_name = $request->input('courses_name');
        $class_tests ->courses_description = $request->input('courses_description');
        $class_tests ->link_to_class = $request->input('link_to_class');

        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images', $filename);
            $class_tests->image = $filename;
        }else {
            return $request;
            $class_tests->image = '';
        }
        $class_tests->save();
        return redirect(route('dashclasstests.index_classtests'));
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
        $class_test = ClassTests::find($id);
        return view('dashclasstests.edit_classtests', compact('class_test'));


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
            'courses_name' => 'required',
            'courses_description' => 'required',
            'link_to_class' => 'required'
            // 'image' => 'required'

        ]);

        $class_test = ClassTests::find($id);

        $class_test ->courses_name = $request->input('courses_name');
        $class_test ->courses_description = $request->input('courses_description');
        $class_test ->link_to_class = $request->input('link_to_class');

        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images', $filename);
            $class_test->image = $filename;
        }
        $class_test->update();
        return redirect(route('dashclasstests.index_classtests'));
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
        $class_test = ClassTests::find($id);
        $class_test->delete();
        return redirect(route('dashclasstests.index_classtests'));
    }
}
