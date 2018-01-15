<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\ModelKontak;
use View;
use Hash;

class User extends Controller
{
    //
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('index');
        }
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){
        // $email = $request->email;
        $password = $request->password;
        $username = $request->username;

        $data = ModelKontak::where('username',$username)->first();
        
        
        if(count($data) > 0){//apakah user tsb ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('username',$data->username);
                Session::put('nik',$data->nik);
                Session::put('nik_atasan',$data->nik_atasan);
                // Session::put('email',$data->email);
                Session::put('login',TRUE);
                Session::put('jabatan',$data->jabatan);
                // if($data){//untuk menentukan sesi login
                //     if(Session::check($data))
                // }
                //return redirect('index')->with('infojabatan','Jabatan adalah '.Session::get('jabatan'));  
                if ($data->jabatan=='Outsourcing'){
                    return redirect('index-outsource');
                }elseif ($data->jabatan=='KASI'){
                    return redirect('laporan-kerja-kasi');
                }elseif ($data->jabatan=='KABID'){
                    return redirect('laporan-kerja-kabid');
                }elseif ($data->jabatan=='Admin'){
                    return redirect('index');
                }
                else{
                   
                }
                //
                
                
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !'.Hash::check($password,$data->password));
        }
    }
    else{
        return redirect('login')->with('alert','Password atau Email, Salahaa!');
    }
}

public function logout(){
    Session::flush();
    return redirect('login')->with('alert','Kamu sudah logout');
    }
}