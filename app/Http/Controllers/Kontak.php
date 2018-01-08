<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelKontak;
use View;

class Kontak extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelKontak::all();
        return view('kontak',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kontak_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelKontak();
        $data->nama_lengkap = $request->nama_lengkap;
        $data->alamat = $request->alamat;
        $data->no_telp = $request->no_telp;
        $data->jabatan = $request->jabatan;
        $data->departemen = $request->departemen;
        $data->username = $request->username;
        $pass = $request->password;
        $encpass = bcrypt($pass);
        $data->password = $encpass;
        $data->save();
        return redirect()->route('kontak.index')->with('alert-success','Berhasil Menambahkan Data!');
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

    // /**Fungsi dropdown departemen */
    // public function details($id){
    //     $departemens = \App\ModelDepartemen::pluck('nama_departemen','id');
    //     $departemens = DB::table('kontak_create')->orderBy('nama_departemen','asc')->pluck('nama_departemen','id');

    //     return view('kontak_create')->with('departemens',$departemens);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ModelKontak::where('id',$id)->get();

        return view('kontak_edit',compact('data'));
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
        $data = \App\ModelKontak::where('id',$id)->first();
        $data->nama_lengkap = $request->nama_lengkap;
        $data->no_telp = $request->no_telp;
        $data->alamat = $request->alamat;
        $data->jabatan = $request->jabatan;
        $data->departemen = $request->departemen;
        $data->save();
        return redirect()->route('kontak.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = \App\ModelKontak::where('id',$id)->first();
        $data->delete();
        return redirect()->route('kontak.index')->with('alert-success','Data berhasil dihapus!');
    }
}
