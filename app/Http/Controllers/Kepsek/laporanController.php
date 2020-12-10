<?php

namespace App\Http\Controllers\Kepsek;

use App\guru;
use App\Http\Controllers\Controller;
use App\kelas;
use App\siswa;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class laporanController extends Controller
{
    public function guru()
    {
        $guru=guru::all();
        return view('kepsek.laporan.guru.index',[
            'guru'=>$guru,
        ]);
    }

    public function cetakGuru()
    {
        $guru = guru::get();
        $pdf = PDF::loadView('kepsek.laporan.guru.guru_pdf',['guru'=>$guru]);
        $pdf->setPaper('A4', 'landscape');
        $pdf->save(storage_path().'_filename.pdf');
        return $pdf->stream('laporan guru.pdf');
    }

    public function siswa ()
    {
        $siswa = siswa::get();
        $kelas = kelas::orderBy('kd_kelas','ASC')->get();
        $pilihthn = DB::table('kelas_det')
            ->select('thn')
            ->groupBy('thn')
            ->get();
        $pilihSemester = DB::table('kelas_det')
            ->select('semester')
            ->groupBy('semester')
            ->get();
        return view('kepsek.laporan.siswa.perkelas',[
            'siswa'=>$siswa,
            'kelas'=>$kelas,
            'pilihthn'=>$pilihthn,
            'pilihSemester'=>$pilihSemester,
            ]);
    }

    public function cetakSeluruhSiswa (Request $request)
    {
        if ($request->kd_kelas=='') {
            $kd_kelas='%';
            $tp_kd_kelas='';
        }
        else{
            $kd_kelas=$request->kd_kelas;
            $tp_kd_kelas='Kelas '.$request->kd_kelas;
        }
        $thn=$request->thn;
        $semester=$request->semester;

        $lapSiswa=DB::table('kelas_det')
            ->join('kelas','kelas.kd_kelas','=','kelas_det.kd_kelas')
            ->join('siswa','siswa.NIS','=','kelas_det.NIS')
            ->where('kelas_det.kd_kelas','like',''.$kd_kelas.'',
                    'AND','kelas_det.thn','=',$thn,
                    'AND','kelas_det.NIS','=',$semester)
            ->orderBy('kelas.kd_kelas')->get();

        // return view('kepsek.laporan.siswa.cetak_perkelas',[
        //     'lapSiswa'=>$lapSiswa,
        //     'tp_kd_kelas'=>$tp_kd_kelas,
        //     'thn'=>$thn,
        //     'semester'=>$semester,
        // ]);

        $pdf = PDF::loadView('kepsek.laporan.siswa.cetak_perkelas',[
            'lapSiswa'=>$lapSiswa,
            'tp_kd_kelas'=>$tp_kd_kelas,
            'thn'=>$thn,
            'semester'=>$semester,
        ]);

        $pdf->setPaper('A4', 'landscape');
        $pdf->save(storage_path().'_filename.pdf');
        return $pdf->stream('laporan Siswa.pdf');

    }
}
