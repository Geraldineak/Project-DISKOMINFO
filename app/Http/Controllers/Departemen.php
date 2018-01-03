<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelDepartemen;
use View;

class Departemen extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = ModelDepartemen::all();
        return view('departemen',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departemen_create');
    }

    // /**Fungsi dropdown departemen */
    // public function details($id){
    //     $departemens = ModelDepartemen::pluck('nama_departemen','id');
    //     $departemens = DB::table('kontak_create')->orderBy('nama_departemen','asc')->pluck('nama_departemen','id');

    //     return view('kontak_create')->with('departemens',$departemens);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelDepartemen();
        $data->nama_departemen = $request->nama_departemen;
        $data->save();
        return redirect()->route('departemen.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = ModelDepartemen::where('id',$id)->get();

        return view('departemen_edit',compact('data'));
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
        $data = ModelDepartemen::where('id',$id)->first();
        $data->nama_departemen = $request->nama_departemen;
        $data->save();
        return redirect()->route('departemen.index')->with('alert-success','Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelDepartemen::where('id',$id)->first();
        $data->delete();
        return redirect()->route('departemen.index')->with('alert-success','Data berhasil dihapus!');
    }
}
