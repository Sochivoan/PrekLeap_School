<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutBanner;

class AddAboutPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about_banners = AboutBanner::all();
        return view('dashaboutbanner.index_about_banner', compact('about_banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashaboutbanner.create_about_banner');
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
            'image' => 'required|mimes:jpg,png,jpeg,gif|unique:about_banners'
        ]);

        $about_banner = new AboutBanner();
        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images', $filename);
            $about_banner->image = $filename;
        }else {
            return $request;
            $about_banner->image = '';
        }
        $about_banner->save();
        return redirect(route('dashaboutbanner.index_about_banner'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about_banner = AboutBanner::find($id);
        return view('dashaboutbanner.edit_about_banner', compact('about_banner'));
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
        //    $this->validate($request,[
        //     'title' => 'required|unique:about_banners',
        //     'image' => 'required|mimes:jpg,png,jpeg,gif'
        // ]);

        $about_banner = AboutBanner::find($id);

        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images', $filename);
            $about_banner->image = $filename;
        }
        $about_banner->update();
        return redirect(route('dashaboutbanner.index_about_banner'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about_banner = AboutBanner::find($id);
        $about_banner->delete();
        return redirect(route('dashaboutbanner.index_about_banner'));
    }
}
