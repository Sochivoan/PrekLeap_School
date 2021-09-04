<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use App\Models\UsersRegister;
use App\Models\Banner;
use App\Models\ClassTitle;
use App\Models\ClassTests;
use App\Models\ClassRoom;
use App\Models\Benefits;
use App\Models\AboutBanner;
use App\Models\Location;
use App\Models\AboutUs;
use App\Models\Ourvision;
use App\Models\GeneralInfor;
use App\Models\ClassRoomTitle;


class MainController extends Controller
{
    function index(){
        $banners = Banner::all();
        $class_titles = ClassTitle::all();
        $class_tests = ClassTests::all();
        $class_rooms = ClassRoom::all();
        $benefits = Benefits::all();
        $class_rooms_titles = ClassRoomTitle::all();

        return view('auth.index',compact(
            'banners',
            'class_titles',
            'class_tests',
            'class_rooms',
            'benefits',
            'class_rooms_titles'
        ));
    }

    function about_Page(){
        $about_banners = AboutBanner::all();
        $about_uss = AboutUs::all();
        $our_visions = Ourvision::all();
        $general_infors = GeneralInfor::all();
        return view ('auth.aboutPage', compact(
            'about_banners',
            'about_uss',
            'our_visions',
            'general_infors'
        ));
    }

    function createClass(){
        return view('auth.createClass');
    }

    function login (){
        return view ('auth.login');
    }

    function register (){
        return view ('auth.register');
    }

    function user_lists()
    {
        $user_lists = UsersRegister::all();
        return view('auth.user_lists',compact(
            'user_lists'
        ));
    }
    function created_users()
    {
        return view('auth.created_users');
    }

    function users_store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:admins',
            'user_type'=>'required',
            'password'=>'required|min:8|max:12',
            'password_confirm'=>'required|min:8|max:12|same:password'
        ]);

        $admin = new UsersRegister;
        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        $admin->user_type = $request->user_type;
        $admin->password = Hash::make($request->password);
        $admin->password_confirm = Hash::make($request->password_confirm);
        $save = $admin->save();
        return redirect(route('auth.user_lists'));

    }
    function users_show($id)
    {
        $users = UsersRegister::find($id);
        return view('auth.show_users', compact('users'));
    }

    function users_edit($id)
    {
        $users = UsersRegister::find($id);
        return view('auth.edit_users', compact('users'));
    }

    function users_update(Request $request, $id )
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:admins',
            'user_type'=>'required'
        ]);

        $admin = UsersRegister::find($id);
        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        $admin->user_type = $request->user_type;
        $save = $admin->update();
        return redirect(route('auth.user_lists'));
    }

    function users_delete($id)
    {
        $user_lists = UsersRegister::find($id);
        $user_lists->delete();
        return redirect(route('auth.user_lists'));
    }

    function save (Request $request){
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:admins',
            'user_type'=>'required',
            'password'=>'required|min:8|max:12',
            'password_confirm'=>'required|min:8|max:12|same:password'
        ]);

        // Insert data
        $admin = new UsersRegister;
        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        $admin->user_type = $request->user_type;
        $admin->password = Hash::make($request->password);
        $admin->password_confirm = Hash::make($request->password_confirm);
        $save = $admin->save();

        if($save){
            return back()->with('successs','អ្នកប្រើថ្មីត្រូវបានបន្ថែមដោយជោគជ័យទៅក្នុងឃ្លាំងទិន្នន័យ');
        }else{
            return back()->with('fail','មានអ្វីមួយមិនប្រក្រតីសូមព្យាយាមម្តងទៀតនៅពេលក្រោយ');
        }
    }

    function check(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:12'
        ]);

        $UserInfor = UsersRegister::where('email','=', $request->email)->first();

        if(!$UserInfor){
            return back()->with('fail','យើងមិនស្គាល់អាសយដ្ឋានអ៊ីមែលរបស់អ្នកទេ');
        }else{

            if(Hash::check($request->password, $UserInfor->password)){

                $request->session()->put('LoggedUser', $UserInfor->id);
                return redirect('admin/dashboard');

            }else{
                return back()->with('fail','ពាក្យសម្ងាត់មិនត្រឹមត្រូវ');
            }
        }
    }


    function logout(Request $request){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');

        }
    }

    function dashboard(){
        $data = ['LoggedUserInfor'=>UsersRegister::where('id','=', session('LoggedUser'))->first()];
        return view('admin.dashboard', $data);
    }
}


