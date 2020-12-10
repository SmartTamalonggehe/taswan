@extends('admin.layout.default')

@section('judul','Kelas')

@section('kelas','mm-active')

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
                    <form action="{{ route('kelas.update',$kelas) }}" class="needs-validation" novalidate method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-md-1 mb-3">
                                <label for="kd_kelas">Kelas</label>
                                <input type="text" class="form-control" id="kd_kelas" name="kd_kelas" value="{{ old('kd_kelas') ?? $kelas->kd_kelas }}" required>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                                @error('kd_kelas')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="jmlh_kursi">Jumlah Kursi</label>
                                <input type="text" class="form-control" id="jmlh_kursi" name="jmlh_kursi" value="{{ old('jmlh_kursi') ?? $kelas->jmlh_kursi }}" required>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="jmlh_meja">Jumlah Meja</label>
                                <input type="text" class="form-control" id="jmlh_meja" name="jmlh_meja" value="{{ old('jmlh_meja') ?? $kelas->jmlh_meja }}" required>
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
