@extends('admin.layout.default')

@section('judul','Jadwal')

@section('jadwal','mm-active')

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
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Form data @yield('judul')</h5>
                    <form action="{{ route('jadwal.update',$jadwal) }}" class="needs-validation" novalidate method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="NIP">NIP</label>
                                <select type="select" name="NIP" id="NIP" name="customSelect" class="custom-select" required>
                                    <option value="">Pilih</option>
                                    @foreach ($guru as $item)
                                    <option value="{{ old('NIP') ?? $item->NIP }}" @if ($item->NIP==$jadwal->NIP)
                                        selected
                                    @endif>{{ $item->NIP }} | {{ $item->nm_guru }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="kd_pelajaran">Pelajaran</label>
                                <select type="select" name="kd_pelajaran" id="kd_pelajaran" name="customSelect" class="custom-select" required>
                                    <option value="">Pilih</option>
                                    @foreach ($pelajaran as $item)
                                    <option value="{{ old('kd_pelajaran') ?? $item->kd_pelajaran }}" @if ($item->kd_pelajaran==$jadwal->kd_pelajaran)
                                        selected
                                    @endif>{{ $item->kd_pelajaran }} | {{ $item->nm_pelajaran }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="tema">Tema</label>
                                <select type="select" name="tema" id="tema" name="customSelect" class="custom-select" required>
                                    <option value="">Pilih</option>
                                    <option value="Tema 1" @if ($jadwal->tema=='Tema 1') selected @endif>Tema 1</option>
                                    <option value="Tema 2" @if ($jadwal->tema=='Tema 2') selected @endif>Tema 2</option>
                                    <option value="Tema 3" @if ($jadwal->tema=='Tema 3') selected @endif>Tema 3</option>
                                    <option value="Tema 4" @if ($jadwal->tema=='Tema 4') selected @endif>Tema 4</option>
                                </select>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="hari">Hari</label>
                                <select type="select" name="hari" id="hari" name="customSelect" class="custom-select" required>
                                    <option value="">Pilih</option>
                                    <option value="Senin" @if ($jadwal->hari=='Senin') selected @endif>Senin</option>
                                    <option value="Selasa" @if ($jadwal->hari=='Senin') selected @endif>Selasa</option>
                                    <option value="Rabu" @if ($jadwal->hari=='Senin') selected @endif>Rabu</option>
                                    <option value="Kamis" @if ($jadwal->hari=='Senin') selected @endif>Kamis</option>
                                    <option value="Jumat" @if ($jadwal->hari=='Senin') selected @endif>Jumat</option>
                                    <option value="Sabtu" @if ($jadwal->hari=='Senin') selected @endif>Sabtu</option>
                                </select>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="jam_masuk">Jam Masuk</label>
                                <input type="time" class="form-control" id="jam_masuk" name="jam_masuk" value="{{ old('jam_masuk') ?? $jadwal->jam_masuk }}" required>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="jam_seles">Jam Seles</label>
                                <input type="time" class="form-control" id="jam_seles" name="jam_seles" value="{{ old('jam_seles') ?? $jadwal->jam_seles }}" required>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="thn">Tahun</label>
                                <select type="select" name="thn" id="thn" name="customSelect" class="custom-select" required>
                                    <option value="">Pilih</option>
                                    <?php
                                        $thn_skr = date('Y');
                                        for ($x = $thn_skr; $x >= 2018; $x--) {
                                        ?>
                                            <option value="<?php echo $x ?>" @if ($jadwal->thn==$x) selected @endif ><?php echo $x ?></option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="semester">Semester</label>
                                <select type="select" name="semester" id="semester" name="customSelect" class="custom-select" required>
                                    <option value="">Pilih</option>
                                    <option value="Ganjil" @if ($jadwal->semester=='Ganjil') selected @endif>Ganjil</option>
                                    <option value="Genap" @if ($jadwal->semester=='Genap') selected @endif>Genap</option>
                                </select>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
