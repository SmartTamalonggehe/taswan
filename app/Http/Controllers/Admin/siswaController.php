<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\siswa;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa=siswa::orderBy('nm_siswa','ASC')->get();
        return view('admin.siswa.index',['siswa'=>$siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.siswa.create');
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
            'NIS'=>'required',
        ],[
            'NIS.unique'=>'NIS ' .$request->NIS. ' Sudah ada',
        ]);

        $siswa = new siswa;
        $siswa->NIS=$request->NIS;
        $siswa->nm_siswa=$request->nm_siswa;
        $siswa->jenkel=$request->jenkel;
        $siswa->tgl_masuk=$request->tgl_masuk;
        $siswa->alamat=$request->alamat;

        $siswa->save();
        return redirect()->route('siswa.index')
            ->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(siswa $siswa)
    {
        return view('admin.siswa.edit',[
            'siswa'=>$siswa,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, siswa $siswa)
    {
        siswa::where('id',$siswa->id)
        ->update([
            'NIS'=>$request->NIS,
            'nm_siswa'=>$request->nm_siswa,
            'jenkel'=>$request->jenkel,
            'tgl_masuk'=>$request->tgl_masuk,
            'alamat'=>$request->alamat,
        ]);
        return redirect()->route('siswa.index')
            ->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}
