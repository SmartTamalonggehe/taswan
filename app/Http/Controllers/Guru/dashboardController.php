<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function index()
    {
        $NIP=Auth::user()->NIP;

        $siswa=DB::table('siswa')->get();
        $ajar=DB::table('jadwal')->where('NIP','=',$NIP)->get();
        $pelajaran=DB::table('pelajaran')->get();

        return view('guru.dashboard.index',[
            'siswa'=>$siswa,
            'ajar'=>$ajar,
            'pelajaran'=>$pelajaran,
        ]);
    }
}
