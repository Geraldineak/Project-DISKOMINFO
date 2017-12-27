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
}
