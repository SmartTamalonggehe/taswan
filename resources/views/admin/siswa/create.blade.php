@extends('admin.layout.default')

@section('judul','Siswa')

@section('siswa','mm-active')

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
                    <form action="{{ route('siswa.store') }}" class="needs-validation" novalidate method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="NIS">NIS</label>
                                <input type="text" class="form-control" id="NIS" name="NIS" value="{{ old('NIS') }}" required>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                                @error('NIS')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="nm_siswa">Nama siswa</label>
                                <input type="text" class="form-control" id="nm_siswa" name="nm_siswa" value="{{ old('nm_siswa') }}" required>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="jenkel">Jenis Kelamin</label>
                                <div class="position-relative form-group">
                                    <div class="custom-radio custom-control custom-control-inline">
                                        <input type="radio" id="Laki-laki" value="Laki-laki" name="jenkel" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="Laki-laki">Laki-laki</label>
                                    </div>
                                    <div class="custom-radio custom-control custom-control-inline">
                                        <input type="radio" id="Perempuan" value="Perempuan" name="jenkel" class="custom-control-input">
                                        <label class="custom-control-label" for="Perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="tgl_masuk">Tgl. Masuk</label>
                                <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk" value="{{ old('tgl_masuk') }}" required>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-10 mb-3">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}" required>
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
