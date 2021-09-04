<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Benefits;

class AddBenefitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $benefits = Benefits::all();
        return view('dashbenefits.index_benefits', compact('benefits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashbenefits.create_benefits');
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
            'name' => 'required|unique:benefits',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif'
        ]);

        $benefit = new Benefits();
        $benefit->name = $request->input('name');
        $benefit->description = $request->input('description');

        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images', $filename);
            $benefit->image = $filename;
        }else {
            return $request;
            $benefit->image = '';
        }
        $benefit->save();
        return redirect(route('dashbenefits.index_benefits'));



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
        $benefit = Benefits::find($id);
        return view('dashbenefits.edit_benefits', compact('benefit'));
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
        //       $this->validate($request,[
        //     'name' => 'required|unique:benefits',
        //     'description' => 'required',
        //     'image' => 'required'
        // ]);

        $benefit =  Benefits::find($id);
        $benefit->name = $request->input('name');
        $benefit->description = $request->input('description');

        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images', $filename);
            $benefit->image = $filename;
        }
        $benefit->update();
        return redirect(route('dashbenefits.index_benefits'));
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
        $benefits = Benefits::find($id);
        $benefits->delete();
        return redirect(route('dashbenefits.index_benefits'));
    }
}
