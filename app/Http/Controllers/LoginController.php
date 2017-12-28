<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\User;
use Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $user = $request->all();
        $validator = $this->validation($user);

        if($validator->fails()){
            $errors = $validator->errors();
            return redirect('/login')->with(compact('errors'))->withInput($request->only('username'));
        }else{
            if(Auth::guard('web')->attempt(['username', 'Invalid Username or Password :/']))
        }
    }
}
