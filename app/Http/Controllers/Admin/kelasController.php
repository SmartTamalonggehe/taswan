<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\kelas;
use Illuminate\Http\Request;

class kelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas=kelas::orderBy('kd_kelas','ASC')->get();
        return view('admin.kelas.index',['kelas'=>$kelas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kelas.create');
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
            'kd_kelas'=>'required',
        ],[
            'kd_kelas.unique'=>'kd_kelas ' .$request->kd_kelas. ' Sudah ada',
        ]);

        $kelas = new kelas;
        $kelas->kd_kelas=$request->kd_kelas;
        $kelas->jmlh_kursi=$request->jmlh_kursi;
        $kelas->jmlh_meja=$request->jmlh_meja;

        $kelas->save();
        return redirect()->route('kelas.index')
            ->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(kelas $kela)
    {
        return view('admin.kelas.edit',[
            'kelas'=>$kela,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kelas $kela)
    {
        kelas::where('id',$kela->id)
        ->update([
            'kd_kelas'=>$request->kd_kelas,
            'jmlh_kursi'=>$request->jmlh_kursi,
            'jmlh_meja'=>$request->jmlh_meja,
        ]);
        return redirect()->route('kelas.index')
            ->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(kelas $kela)
    {
        $kela->delete();
        return redirect()->route('kelas.index');
    }
}
