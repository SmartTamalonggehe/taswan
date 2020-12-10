@extends('admin.layout.default')

@section('judul','Register')

@section('register','mm-active')

{{-- @section('ruang','mm-show') --}}

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
                    <form action="{{ route('User.store') }}" class="needs-validation" novalidate method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="NIP">Kelas</label>
                                <select type="select" name="NIP" id="NIP" name="customSelect" class="custom-select" required>
                                    <option value="">Pilih</option>
                                    @foreach ($guru as $item)
                                    <option value="{{ old('NIP') ?? $item->NIP }}">{{ $item->NIP }} - {{ $item->nm_guru }}</option>
                                    @endforeach
                                </select>
                                @error('NIP')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" id="password" name="password" value="{{ old('password') }}" required>
                                @error('password')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="hak">Hak</label>
                                <select type="select" name="hak" id="hak" name="customSelect" class="custom-select" required>
                                    <option value="guru" selected>Guru</option>
                                    <option value="kepsek">Kepsek</option>
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
