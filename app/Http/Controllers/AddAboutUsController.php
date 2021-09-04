<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;

class AddAboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_uss = AboutUs::all();
        return view('dashaboutus.index_about_us', compact('about_uss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashaboutus.create_about_us');
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
            'title' => 'required|unique:about_us',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif'
        ]);
        $about_us = new AboutUs();
        $about_us->title = $request->input('title');
        $about_us->description = $request->input('description');

        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images', $filename);
            $about_us->image = $filename;
        }else {
            return $request;
            $about_us->image = '';
        }
        $about_us->save();
        return redirect(route('dashaboutus.index_about_us'));
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
        $about_us = AboutUs::find($id);
        return view('dashaboutus.edit_about_us', compact('about_us'));
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

        $about_us = AboutUs::find($id);
        $about_us->title = $request->input('title');
        $about_us->description = $request->input('description');

        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images', $filename);
            $about_us->image = $filename;
        }
        $about_us->update();
        return redirect(route('dashaboutus.index_about_us'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about_us = AboutUs::find($id);
        $about_us->delete();
        return redirect(route('dashaboutus.index_about_us'));
    }
}
