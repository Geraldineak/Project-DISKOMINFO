<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function myTestAddToLog()
    {
        \LogActivity::addToLog('Coba nambah Testing di Log.');
        dd('log berhasil masuk.');
    }

    public function logActivity()
    {
        $logs = \LogActivity::logActivityLists();
        return view('logActivity',compact('logs'));
    }
}
