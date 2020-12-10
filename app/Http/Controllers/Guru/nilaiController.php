<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\nilai;
use App\pelajaran;
use App\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class nilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nip=Auth::user()->NIP;
        $nilai = DB::table('jadwal')
            ->join('nilai','jadwal.kd_pelajaran','=','nilai.kd_pelajaran')
            ->join('pelajaran','jadwal.kd_pelajaran','=','pelajaran.kd_pelajaran')
            ->join('siswa','nilai.NIS','=','siswa.NIS')
            ->select('nilai.*','nm_pelajaran','nm_siswa')
            ->where('jadwal.NIP','=',$nip)
            ->get();
        return view('guru.nilai.index',['nilai'=>$nilai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nip=Auth::user()->NIP;
        return view('guru.nilai.create',[
            'pelajaran'=>DB::table('jadwal')
                ->join('pelajaran','jadwal.kd_pelajaran','=','pelajaran.kd_pelajaran')
                ->where('jadwal.NIP','=',$nip)
                ->get(),
            'siswa'=> siswa::orderBy('nm_siswa','ASC')->get(),
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
            'NIS'=>'required',
        ]);

        $nilai = new nilai;
        $nilai->NIS=$request->NIS;
        $nilai->kd_pelajaran=$request->kd_pelajaran;
        $nilai->nilai=$request->nilai;
        $nilai->thn=$request->thn;
        $nilai->semester=$request->semester;

        $nilai->save();
        return redirect()->route('nilai.index')
            ->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function show(nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function edit(nilai $nilai)
    {
        return view('guru.nilai.edit',[
            'nilai'=>$nilai,
            'pelajaran'=> pelajaran::orderBy('nm_pelajaran','ASC')->get(),
            'siswa'=> siswa::orderBy('nm_siswa','ASC')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nilai $nilai)
    {
        nilai::where('id',$nilai->id)
            ->update([
                'NIS'=>$request->NIS,
                'kd_pelajaran'=>$request->kd_pelajaran,
                'nilai'=>$request->nilai,
                'thn'=>$request->thn,
                'semester'=>$request->semester,
            ]);
        return redirect()->route('nilai.index')
            ->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nilai  $nilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(nilai $nilai)
    {
        $nilai->delete();
        return redirect()->route('nilai.index');
    }
}
