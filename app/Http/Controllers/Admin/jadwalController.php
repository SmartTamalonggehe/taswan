<?php

namespace App\Http\Controllers\Admin;

use App\guru;
use App\Http\Controllers\Controller;
use App\jadwal;
use App\pelajaran;
use Illuminate\Http\Request;

class jadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = jadwal::with('guru')->get();
        $jadwal = jadwal::with('pelajaran')->get();
        return view('admin.jadwal.index',['jadwal'=>$jadwal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jadwal.create',[
            'guru'=> guru::orderBy('nm_guru','ASC')->get(),
            'pelajaran'=> pelajaran::orderBy('nm_pelajaran','ASC')->get(),
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
            'NIP'=>'required',
        ]);


        $kd_baru=$request->semester.$request->thn;

        $jadwal = new jadwal;
        $jadwal->kd_jadwal=$kd_baru;
        $jadwal->NIP=$request->NIP;
        $jadwal->kd_pelajaran=$request->kd_pelajaran;
        $jadwal->tema=$request->tema;
        $jadwal->hari=$request->hari;
        $jadwal->jam_masuk=$request->jam_masuk;
        $jadwal->jam_seles=$request->jam_seles;
        $jadwal->thn=$request->thn;
        $jadwal->semester=$request->semester;

        $jadwal->save();
        return redirect()->route('jadwal.index')
            ->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(jadwal $jadwal)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(jadwal $jadwal)
    {
        return view('admin.jadwal.edit',[
            'jadwal'=>$jadwal,
            'guru'=> guru::orderBy('nm_guru','ASC')->get(),
            'pelajaran'=> pelajaran::orderBy('nm_pelajaran','ASC')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jadwal $jadwal)
    {
        $kd_baru=$request->semester.$request->thn;
        jadwal::where('id',$jadwal->id)
        ->update([
            'kd_jadwal'=>$kd_baru,
            'NIP'=>$request->NIP,
            'kd_pelajaran'=>$request->kd_pelajaran,
            'tema'=>$request->tema,
            'hari'=>$request->hari,
            'jam_masuk'=>$request->jam_masuk,
            'jam_seles'=>$request->jam_seles,
            'thn'=>$request->thn,
            'semester'=>$request->semester,
        ]);
        return redirect()->route('jadwal.index')
            ->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(jadwal $jadwal)
    {
        $jadwal->delete();
        return redirect()->route('jadwal.index');
    }
}
