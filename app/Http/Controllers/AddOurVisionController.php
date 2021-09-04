<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ourvision;
use Illuminate\Support\Str;

class AddOurVisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $our_visions = Ourvision::all();
        return view('dashvision.index_vision', compact('our_visions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashvision.create_vision');
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
            'title' => 'required|unique:ourvisions',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif'
        ]);
        $our_vision = new Ourvision();
        $our_vision->title = $request->input('title');
        $our_vision->description = $request->input('description');
        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images', $filename);
            $our_vision->image = $filename;
        }else {
            return $request;
            $our_vision->image = '';
        }
        $our_vision->save();
        return redirect(route('dashvision.index_vision'));
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
        $our_vision = Ourvision::find($id);
        return view('dashvision.edit_vision', compact('our_vision'));
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
        $our_vision = Ourvision::find($id);
        $our_vision->title = $request->input('title');
        $our_vision->description = $request->input('description');
        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images', $filename);
            $our_vision->image = $filename;
        }
        $our_vision->update();
        return redirect(route('dashvision.index_vision'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $our_vision = Ourvision::find($id);
        $our_vision->delete();
        return redirect(route('dashvision.index_vision'));
    }
}
