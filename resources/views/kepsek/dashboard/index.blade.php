@extends('admin.layout.default')

@section('judul','Dashboard')

@section('Dashboard','mm-active mm-show')

@section('content')

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-smile icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Selamat Datang Kepala Sekolah {{ Auth::user()->guru->nm_guru }} 
                    <div class="page-title-subheading">
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
                        {{-- <div class="widget-subheading">Last year expenses</div> --}}
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
                        <div class="widget-heading">Total Guru</div>
                        {{-- <div class="widget-subheading">Total Clients Profit</div> --}}
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>{{ $guru->count() }}</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card mb-3 widget-content bg-grow-early">
                <div class="widget-content-wrapper text-white">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Pelajaran</div>
                        {{-- <div class="widget-subheading">People Interested</div> --}}
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-white"><span>{{ $pelajaran->count() }}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
