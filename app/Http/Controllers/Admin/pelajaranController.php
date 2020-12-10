<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\pelajaran;
use Illuminate\Http\Request;

class pelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelajaran=pelajaran::orderBy('kd_pelajaran','ASC')->get();
        return view('admin.pelajaran.index',[
            'pelajaran'=>$pelajaran
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pelajaran.create');
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
            'kd_pelajaran'=>'required|unique:pelajaran',
            'nm_pelajaran'=>'required',
        ],[
            'kd_pelajaran.unique'=>'Kode Pelajaran ' .$request->kd_pelajaran. ' Sudah ada',
        ]);
        $pelajaran = new pelajaran;
        $pelajaran->kd_pelajaran=$request->kd_pelajaran;
        $pelajaran->nm_pelajaran=$request->nm_pelajaran;

        $pelajaran->save();
        return redirect()->route('pelajaran.index')
            ->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(pelajaran $pelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pelajaran $pelajaran)
    {
        return view('admin.pelajaran.edit',[
            'pelajaran'=>$pelajaran,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pelajaran $pelajaran)
    {
        pelajaran::where('id',$pelajaran->id)
        ->update([
            'kd_pelajaran'=>$request->kd_pelajaran,
            'nm_pelajaran'=>$request->nm_pelajaran,
        ]);

    return redirect()->route('pelajaran.index')
        ->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pelajaran $pelajaran)
    {
        $pelajaran->delete();
        return redirect()->route('pelajaran.index');
    }
}
