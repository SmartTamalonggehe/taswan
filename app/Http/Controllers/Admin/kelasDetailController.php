<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\kelas;
use App\kelasDetail;
use App\siswa;
use Illuminate\Http\Request;

class kelasDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelasDetail = kelasDetail::with('siswa')->get();
        $kelasDetail = kelasDetail::with('kelas')->get();
        $kelasDetail = kelasDetail::orderBy('kd_kelas', 'ASC')->get();
        return view('admin.KelasDetail.index', ['kelasDetail' => $kelasDetail]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kelasDetail.create', [
            'kelas' => kelas::orderBy('kd_kelas', 'ASC')->get(),
            'siswa' => siswa::orderBy('nm_siswa', 'ASC')->get(),
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
        $this->validate($request, [
            'NIS' => 'required',
        ]);

        $kelasDetail = new kelasDetail;
        $kelasDetail->NIS = $request->NIS;
        $kelasDetail->kd_kelas = $request->kd_kelas;
        $kelasDetail->thn = $request->thn;
        $kelasDetail->semester = $request->semester;

        $kelasDetail->save();
        return redirect()->route('kelasDetail.index')
            ->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kelasDetail  $kelasDetail
     * @return \Illuminate\Http\Response
     */
    public function show(kelasDetail $kelasDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kelasDetail  $kelasDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(kelasDetail $kelasDetail)
    {
        return view('admin.kelasDetail.edit', [
            'kelasDetail' => $kelasDetail,
            'kelas' => kelas::orderBy('kd_kelas', 'ASC')->get(),
            'siswa' => siswa::orderBy('nm_siswa', 'ASC')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kelasDetail  $kelasDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kelasDetail $kelasDetail)
    {
        kelasDetail::where('id', $kelasDetail->id)
            ->update([
                'NIS' => $request->NIS,
                'kd_kelas' => $request->kd_kelas,
                'thn' => $request->thn,
                'semester' => $request->semester,
            ]);
        return redirect()->route('kelasDetail.index')
            ->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kelasDetail  $kelasDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(kelasDetail $kelasDetail)
    {
        $kelasDetail->delete();
        return redirect()->route('kelasDetail.index');
    }
}
