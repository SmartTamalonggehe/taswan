@extends('admin.layout.default')

@section('judul','Kelas Detail')

@section('kelasDetail','mm-active')

@section('ruang','mm-show')

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
                    <form action="{{ route('kelasDetail.update',$kelasDetail) }}" class="needs-validation" novalidate method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="kd_kelas">Kelas</label>
                                <select type="select" name="kd_kelas" id="kd_kelas" name="customSelect" class="custom-select" required>
                                    <option value="">Pilih</option>
                                    @foreach ($kelas as $item)
                                    <option value="{{ old('kd_kelas') ?? $item->kd_kelas }}" @if ($item->kd_kelas==$kelasDetail->kd_kelas)
                                        selected
                                    @endif>{{ $item->kd_kelas }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="NIS">NIS</label>
                                <select type="select" name="NIS" id="NIS" name="customSelect" class="custom-select" required>
                                    <option value="">Pilih</option>
                                    @foreach ($siswa as $item)
                                    <option value="{{ old('NIS') ?? $item->NIS }}" @if ($item->NIS==$kelasDetail->NIS)
                                        selected
                                    @endif>{{ $item->NIS }} | {{ $item->nm_siswa }}</option>
                                    @endforeach
                                </select>
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
                                            <option value="<?php echo $x ?>" @if ($x==$kelasDetail->thn)
                                                selected
                                            @endif><?php echo $x ?></option>
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
                                    <option value="Ganjil" @if ($kelasDetail->semester=='Ganjil') selected @endif>Ganjil</option>
                                    <option value="Genap" @if ($kelasDetail->semester=='Genap') selected @endif>Genap</option>
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
