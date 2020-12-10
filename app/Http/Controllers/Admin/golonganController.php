<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\golongan;
use Illuminate\Http\Request;

class golonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $golongan=golongan::all();
        return view('admin.golongan.index',['golongan'=>$golongan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.golongan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'kd_gol'=>'required|unique:golongan',
            'pangkat'=>'required',
        ],[
            'kd_gol.unique'=>'Kode Golongan Sudah ada',
        ]);
        $golongan = new golongan;
        $golongan->kd_gol=$request->kd_gol;
        $golongan->pangkat=$request->pangkat;

        $golongan->save();

        return redirect()->route('golongan.index')
            ->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\golongan  $golongan
     * @return \Illuminate\Http\Response
     */
    public function show(golongan $golongan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\golongan  $golongan
     * @return \Illuminate\Http\Response
     */
    public function edit(golongan $golongan)
    {
        return view('admin.golongan.edit',[
            'golongan'=>$golongan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\golongan  $golongan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, golongan $golongan)
    {
        golongan::where('id',$golongan->id)
            ->update([
                'kd_gol'=>$request->kd_gol,
                'pangkat'=>$request->pangkat,
            ]);

        return redirect()->route('golongan.index')
            ->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\golongan  $golongan
     * @return \Illuminate\Http\Response
     */
    public function destroy(golongan $golongan)
    {
        $golongan->delete();
        return redirect()->route('golongan.index');
    }
}
