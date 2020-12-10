<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function index(){
        $siswa=DB::table('siswa')->get();
        $guru=DB::table('guru')->get();
        $pelajaran=DB::table('pelajaran')->get();

        return view('Admin.dashboard.index',[
            'siswa'=>$siswa,
            'guru'=>$guru,
            'pelajaran'=>$pelajaran,
        ]);

    }
}
