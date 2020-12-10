<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\mkGol;
use Illuminate\Http\Request;

class mkGolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mkGol = mkGol::orderBy('kd_mk_gol', 'DESC')->get();
        return view('admin.mkGol.index',[
            'mkGol'=>$mkGol
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mkGol = mkGol::limit(1)->orderBy('kd_mk_gol', 'DESC')->get();
        // Kode Otomatis
        $noUrutAkhir = mkGol::max('kd_mk_gol');
        $idMax = $noUrutAkhir;
        $NoUrut = (int) substr($idMax, 2, 5);
        $NoUrut++;
        $kd_baru ='MK' .sprintf('%03s', $NoUrut);

        return view('admin.mkGol.create',[
            'mkGol'=>$mkGol,
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
            'thn'=>'required',
            'bln'=>'required',
        ]);

        $mkGol = new mkGol;

        $mkGol->kd_mk_gol=$request->kd_mk_gol;
        $mkGol->thn=$request->thn;
        $mkGol->bln=$request->bln;

        $mkGol->save();

        return redirect()->route('mkGol.index')
            ->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mkGol  $mkGol
     * @return \Illuminate\Http\Response
     */
    public function show(mkGol $mkGol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mkGol  $mkGol
     * @return \Illuminate\Http\Response
     */
    public function edit(mkGol $mkGol)
    {
        return view('admin.mkGol.edit',[
            'mkGol'=>$mkGol,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mkGol  $mkGol
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mkGol $mkGol)
    {
        mkGol::where('id',$mkGol->id)
            ->update([
                'kd_mk_gol'=>$request->kd_mk_gol,
                'thn'=>$request->thn,
                'bln'=>$request->bln,
            ]);

        return redirect()->route('mkGol.index')
            ->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mkGol  $mkGol
     * @return \Illuminate\Http\Response
     */
    public function destroy(mkGol $mkGol)
    {
        $mkGol->delete();
        return redirect()->route('mkGol.index');
    }
}
