<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\GeneralInfor;

class AddGeneralInforController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $general_infors = GeneralInfor::all();
        // dd($general_infors);
        return view('generalInfor.index_general_infor',compact('general_infors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('generalInfor.create_general_infor');
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
            'school_tel' => 'required',
            'school_mobile' => 'required',
            'school_email' => 'required|email',
            'address' => 'required',
        ]);

        $general_infor = new GeneralInfor();
        $general_infor-> school_tel = $request->input('school_tel');
        $general_infor-> school_mobile = $request->input('school_mobile');
        $general_infor-> school_email = $request->input('school_email');
        $general_infor-> address = $request->input('address');
        $general_infor->save();
        return redirect(route('generalInfor.index_general_infor'));
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
        $general_infor = GeneralInfor::find($id);
        return view('generalInfor.edit_general_infor', compact('general_infor'));
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
            'school_tel' => 'required',
            'school_mobile' => 'required',
            'school_email' => 'required|email',
            'address' => 'required',
        ]);

        $general_infor = GeneralInfor::find($id);
        $general_infor-> school_tel = $request->input('school_tel');
        $general_infor-> school_mobile = $request->input('school_mobile');
        $general_infor-> school_email = $request->input('school_email');
        $general_infor-> address = $request->input('address');
        $general_infor->save();
        return redirect(route('generalInfor.index_general_infor'));
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
        $general_infors = GeneralInfor::find($id);
        $general_infors->delete();
        return redirect(route('generalInfor.index_general_infor'));
    }
}
