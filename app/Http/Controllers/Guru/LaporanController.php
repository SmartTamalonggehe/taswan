<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\kelasDetail;
use App\nilai;
use App\siswa;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade as PDF;

class LaporanController extends Controller
{
    public function index()
    {
        $thn = nilai::orderBy('thn')
            ->get()->unique('thn');
        $semester = nilai::orderBy('semester')
            ->get()->unique('semester');
        $siswa = siswa::orderBy('nm_siswa')->get();

        return view('guru.raport.index', [
            'thn' => $thn,
            'semester' => $semester,
            'siswa' => $siswa
        ]);
    }
    public function tampilRaport(Request $request)
    {
        $data = kelasDetail::inRandomOrder()
            ->where('NIS', 'like', '%' . $request->nis . '%')
            ->where('thn', 'like', '%' . $request->thn . '%')
            ->where('semester', 'like', '%' . $request->semester . '%')
            ->limit(1)->get();
        return view('guru.raport.cetak', [
            'data' => $data,
        ]);
    }

    public function cetakRaport(Request $request)
    {
        $data = kelasDetail::inRandomOrder()
            ->where('NIS', 'like', '%' . $request->nis . '%')
            ->where('thn', 'like', '%' . $request->thn . '%')
            ->where('semester', 'like', '%' . $request->semester . '%')
            ->limit(1)->get();


        $pdf = PDF::loadView('guru.raport.cetak', [
            'data' => $data,
        ]);
        return $pdf->stream('Raport ' . $request->nis . '.pdf');
    }
}
