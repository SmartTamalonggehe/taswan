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
                    <form action="{{ route('jadwal.store') }}" class="needs-validation" novalidate method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="NIP">NIP</label>
                                <select type="select" name="NIP" id="NIP" name="customSelect" class="custom-select" required>
                                    <option value="">Pilih</option>
                                    @foreach ($guru as $item)
                                    <option value="{{ old('NIP') ?? $item->NIP }}">{{ $item->NIP }} | {{ $item->nm_guru }}</option>
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
                                    <option value="{{ old('kd_pelajaran') ?? $item->kd_pelajaran }}">{{ $item->kd_pelajaran }} | {{ $item->nm_pelajaran }}</option>
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
                                    <option value="Tema 1">Tema 1</option>
                                    <option value="Tema 2">Tema 2</option>
                                    <option value="Tema 3">Tema 3</option>
                                    <option value="Tema 4">Tema 4</option>
                                </select>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="hari">Hari</label>
                                <select type="select" name="hari" id="hari" name="customSelect" class="custom-select" required>
                                    <option value="">Pilih</option>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                </select>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="jam_masuk">Jam Masuk</label>
                                <input type="time" class="form-control" id="jam_masuk" name="jam_masuk" value="{{ old('jam_masuk') }}" required>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="jam_seles">Jam Seles</label>
                                <input type="time" class="form-control" id="jam_seles" name="jam_seles" value="{{ old('jam_seles') }}" required>
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
                                            <option value="<?php echo $x ?>"><?php echo $x ?></option>
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
                                    <option value="Ganjil">Ganjil</option>
                                    <option value="Genap">Genap</option>
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
