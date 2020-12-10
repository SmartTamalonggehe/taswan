<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\jabatan;
use Illuminate\Http\Request;

class jabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan=jabatan::orderBy('kd_jabatan','ASC')->get();
        return view ('admin.jabatan.index',[
            'jabatan'=>$jabatan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = jabatan::limit(1)->orderBy('kd_jabatan', 'DESC')->get();
        $noUrutAkhir = jabatan::max('kd_jabatan');
        $idMax = $noUrutAkhir;
        $NoUrut = (int) substr($idMax, 2, 4);
        $NoUrut++;
        $kd_baru ='JB' .sprintf('%02s', $NoUrut);

        return view('admin.jabatan.create',[
            'jabatan'=>$jabatan,
            'kd_baru'=>$kd_baru,
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
            'nm_jabatan'=>'required',
        ]);

        $jabatan = new jabatan;

        $jabatan->kd_jabatan=$request->kd_jabatan;
        $jabatan->nm_jabatan=$request->nm_jabatan;

        $jabatan->save();

        return redirect()->route('jabatan.index')
            ->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit(jabatan $jabatan)
    {
        return view('admin.jabatan.edit',[
            'jabatan'=>$jabatan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jabatan $jabatan)
    {
        jabatan::where('id',$jabatan->id)
            ->update([
                'kd_jabatan'=>$request->kd_jabatan,
                'nm_jabatan'=>$request->nm_jabatan,
            ]);

        return redirect()->route('jabatan.index')
            ->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(jabatan $jabatan)
    {
        $jabatan->delete();
        return redirect()->route('jabatan.index');
    }
}
