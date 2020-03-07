<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getLogin() {

        return view('user.login');
    }
    public function postLogin(Request $request){


        $user =  \App\Users::create([
            'name'=>$request->input('name'),
        ]);
        $user->save();


        return view('user.login');
    }


}
