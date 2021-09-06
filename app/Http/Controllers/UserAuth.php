<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserAuth extends Controller
{
    function userLogin(Request $request)
    {   
        $userLoginName = Str::lower($request->input('name')); //Name of the login user
        $userLoginPassword = Str::lower($request->input('password')); //Password of the login user

        $userSelected = Teacher::where('name', $userLoginName)->first(); //search and select user from DB to compare


        //check if the user is exited 
        if($userSelected != null){
            $userNameFromDB = Str::lower($userSelected->name); //User name from DB
            $userPasswordFromDB = Str::lower($userSelected->password); //User name from DB

            //compare the name and password
            if (strcmp($userLoginName, $userNameFromDB) == 0 && strcmp($userLoginPassword, $userPasswordFromDB) == 0) {
                // echo 'Both strings are  equal';
                session()->put('userName', $userNameFromDB);
                session()->put('userID' , $userSelected->id );
                session()->put('isTeacher', 1);
                return redirect('classroom');
            }
            else{
                return redirect()->route('login');
            }
        }

        $studentSelected = Student::where('name', $userLoginName)->first();

        if($studentSelected != null){
            $userNameFromDB = Str::lower($studentSelected->name); //User name from DB
            $userPasswordFromDB = Str::lower($studentSelected->password); //User name from DB

            //compare the name and password
            if (strcmp($userLoginName, $userNameFromDB) == 0 && strcmp($userLoginPassword, $userPasswordFromDB) == 0) {
                // echo 'Both strings are  equal';
                session()->put('userName', $userNameFromDB);
                session()->put('userID' , $studentSelected->id);
                session()->put('isTeacher', 0);
                return redirect('classroom');
            }
            else{
                return redirect()->route('login');
            }
        }
        else{
            return redirect()->route('login');
        }
    }
}
