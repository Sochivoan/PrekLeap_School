<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Banner;
use App\Models\ClassTitle;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboardpage.dashboard');
    }

    public function index_page()
    {
        $banners = Banner::all();
        return view('dashboardpage.index',compact('banners'));
    }

    public function indexbanner()
    {
        $banners = Banner::all();
        return view('dashboardpage.index_banner',compact('banners'));
    }

    // public function index_about()
    // {
    //     return view('dashboardpage.index_about_banner');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardpage.create_banner');
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
            'image' => 'required|mimes:jpg,png,jpeg,gif|unique:banners'
        ]);
        $banner = new Banner();

        if ($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('images', $filename);
            $banner->image = $filename;
        }else {
            return $request;
            $banner->image = '';
        }
        $banner->save();
        return redirect(route('dashboardpage.index_banner'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // return view('dashboardpage.show')->with('show_banner',$show_banner);
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
        $banner = Banner::find($id);
        return view('dashboardpage.edit_banner', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $this->validate($request,[
            'image' => 'required'
        ]);

        $banner = Banner::find($id);

        if ($request->hasfile('image'))
        {
            $destination = 'images/'.$banner->image;
            if(File::exists($destination))
            {
                File::exists($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('images', $filename);
            $banner->image = $filename;
        }
        $banner->update();
        return redirect(route('dashboardpage.index_banner'));

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
        $banner = Banner::find($id);
        $banner->delete();
        return redirect(route('dashboardpage.index_banner'));
    }
}
