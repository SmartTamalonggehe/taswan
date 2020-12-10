@extends('admin.layout.default')

@section('judul','Laporan Siswa')

@section('ls','mm-show mm-active')

{{-- @section('item','mm-show') --}}

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                    </i>
                </div>
                <div>@yield('judul')</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ route('laporanCetakSeluruhSiswa') }}" class="needs-validation" novalidate method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-2 mb-3">
                        <label for="kd_kelas">Pilih Kelas</label>
                        <select type="select" name="kd_kelas" id="kd_kelas" name="customSelect" class="custom-select" required>
                            <option value="">Select</option>
                            @foreach ($kelas as $item)
                            <option value="{{ $item->kd_kelas }}">{{ $item->kd_kelas }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-tooltip">
                            Tidak Boleh Kosong
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="thn">Pilih Tahun</label>
                        <select type="select" name="thn" id="thn" name="customSelect" class="custom-select" required>
                            <option value="">Select</option>
                            @foreach ($pilihthn as $item)
                            <option value="{{ old('thn') ?? $item->thn }}">{{ $item->thn }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-tooltip">
                            Tidak Boleh Kosong
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="semester">Pilih Semester</label>
                        <select type="select" name="semester" id="semester" name="customSelect" class="custom-select" required>
                            <option value="">Select</option>
                            @foreach ($pilihSemester as $item)
                            <option value="{{ old('semester') ?? $item->semester }}">{{ $item->semester }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-tooltip">
                            Tidak Boleh Kosong
                        </div>
                    </div>
                    <button type="submit" class="mb-2 mr-2 btn-transition btn btn-outline-primary">Cetal @yield('judul')</button>
                </div>
            </form>
            {{-- <div class="main-card mb-3 card">
                <div class="card-body table-responsive"><h5 class="card-title">Data @yield('judul')</h5>
                    <table class="mb-0 table table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama guru</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat</th>
                            <th>Tgl. Lahir</th>
                            <th>Golongan</th>
                            <th>Jabatan</th>
                            <th>MK Tahun</th>
                            <th>MK Bulan</th>
                            <th>Pend. Terkahir</th>
                            <th>Tgl. Dinas</th>
                            <th>Agama</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($siswa as $item)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $item->NIP }}</td>
                            <td>{{ $item->nm_guru }}</td>
                            <td>{{ $item->jenkel }}</td>
                            <td>{{ $item->tempat }}</td>
                            <td>{{ $item->tgl_lahir }}</td>
                            <td>{{ $item->kd_gol }}</td>
                            <td>{{ $item->Jabatan->nm_jabatan}}</td>
                            <td>{{ $item->MkGol->thn }}</td>
                            <td>{{ $item->MkGol->bln }}</td>
                            <td>{{ $item->pend_terakhir }}</td>
                            <td>{{ $item->tgl_dinas }}</td>
                            <td>{{ $item->agama }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection

@section('skrip')

@endsection
