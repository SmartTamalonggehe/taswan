@extends('admin.layout.default')

@section('judul','Dashboard')

@section('Dashboard','mm-active mm-show')

@section('content')

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Selamat Datang {{ Auth::user()->guru->nm_guru }} NIP {{ Auth::user()->NIP }}
                    <div class="page-title-subheading">Silahkan mengisi nilai sesuai pelajaran yang diajarkan.
                    </div>
                </div>
            </div>
        </div>
    </div>            
    <div class="row">
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-midnight-bloom">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Siswa</div>
                        <div class="widget-subheading"></div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>{{ $siswa->count() }}</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-arielle-smile">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Pelajaran</div>
                        <div class="widget-subheading"></div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>{{ $pelajaran->count() }}</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-grow-early">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Mengajar</div>
                        <div class="widget-subheading"></div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>{{ $ajar->count() }}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
