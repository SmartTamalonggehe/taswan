<?php

namespace App\Http\Controllers\Admin;

use App\golongan;
use App\Http\Controllers\Controller;
use App\guru;
use App\jabatan;
use App\mkGol;
use Illuminate\Http\Request;

class guruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = guru::with('golongan')->get();
        $guru = guru::with('jabatan')->get();
        $guru = guru::with('mkGol')->where('NIP', 'not like', "%12345678%")->get();
        return view('admin.guru.index',['guru'=>$guru]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.guru.create',[
            'golongan'=> golongan::orderBy('kd_gol','ASC')->get(),
            'jabatan'=> jabatan::orderBy('nm_jabatan','ASC')->get(),
            'mkGol'=> mkGol::orderBy('kd_mk_gol','ASC')->get(),
        ]);
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
            'NIP'=>'required|unique:guru',
            'nm_guru'=>'required',
        ],[
            'NIP.unique'=>'NIP ' .$request->NIP. ' Sudah ada',
        ]);
        $guru = new guru;
        $guru->NIP=$request->NIP;
        $guru->nm_guru=$request->nm_guru;
        $guru->jenkel=$request->jenkel;
        $guru->tempat=$request->tempat;
        $guru->tgl_lahir=$request->tgl_lahir;
        $guru->kd_gol=$request->kd_gol;
        $guru->kd_jabatan=$request->kd_jabatan;
        $guru->kd_mk_gol=$request->kd_mk_gol;
        $guru->pend_terakhir=$request->pend_terakhir;
        $guru->tgl_dinas=$request->tgl_dinas;
        $guru->agama=$request->agama;

        $guru->save();
        return redirect()->route('guru.index')
            ->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(guru $guru)
    {
        return view('admin.guru.edit',[
            'guru'=>$guru,
            'golongan'=> golongan::orderBy('kd_gol','ASC')->get(),
            'jabatan'=> jabatan::orderBy('nm_jabatan','ASC')->get(),
            'mkGol'=> mkGol::orderBy('kd_mk_gol','ASC')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, guru $guru)
    {
        guru::where('id',$guru->id)
        ->update([
            'NIP'=>$request->NIP,
            'nm_guru'=>$request->nm_guru,
            'jenkel'=>$request->jenkel,
            'tempat'=>$request->tempat,
            'tgl_lahir'=>$request->tgl_lahir,
            'kd_gol'=>$request->kd_gol,
            'kd_jabatan'=>$request->kd_jabatan,
            'kd_mk_gol'=>$request->kd_mk_gol,
            'pend_terakhir'=>$request->pend_terakhir,
            'tgl_dinas'=>$request->tgl_dinas,
            'agama'=>$request->agama,
        ]);

    return redirect()->route('guru.index')
        ->with('success','Data Berhasil Diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(guru $guru)
    {
        $guru->delete();
        return redirect()->route('guru.index');
    }
}
