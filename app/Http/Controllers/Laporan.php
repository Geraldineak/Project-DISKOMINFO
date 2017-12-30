<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelLaporan;
use View;

class Laporan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelLaporan::all();
        return view('laporan',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporan_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ModelLaporan();
        $data->judul = $request->judul;
        $data->isi = $request->isi;
        $data->save();
        return redirect()->route('laporan.index')->with('alert-success','Berhasil Memasukkan Data!');
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
        $data = ModelLaporan::where('id',$id)->get();

        return view('laporan_edit',compact('data'));
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
        $data = ModelLaporan::where('id',$id)->first();
        $data->judul = $request->judul;
        $data->isi = $request->isi;
        $data->save();
        return redirect()->route('laporan.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelLaporan::where('id',$id)->first();
        $data->delete();
        return redirect()->route('laporan.index')->with('alert-success','Data berhasil dihapus');
    }
}
