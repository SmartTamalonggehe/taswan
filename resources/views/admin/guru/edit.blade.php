@extends('admin.layout.default')

@section('judul','Guru')

@section('guru','mm-active')

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
                    <form action="{{ route('guru.update',$guru) }}" class="needs-validation" novalidate method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label for="NIP">NIP</label>
                                <input type="text" class="form-control" id="NIP" name="NIP" value="{{ old('NIP') ?? $guru->NIP }}" required>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                                @error('NIP')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="nm_guru">Nama Guru</label>
                                <input type="text" class="form-control" id="nm_guru" name="nm_guru" value="{{ old('nm_guru') ?? $guru->nm_guru }}" required>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="jenkel">Jenis Kelamin</label>
                                <div class="position-relative form-group">
                                    <div class="custom-radio custom-control custom-control-inline">
                                        <input type="radio" id="Laki-laki" value="Laki-laki" name="jenkel" class="custom-control-input" @if ($guru->jenkel=='Laki-laki')
                                        checked
                                        @endif>
                                        <label class="custom-control-label" for="Laki-laki">Laki-laki</label>
                                    </div>
                                    <div class="custom-radio custom-control custom-control-inline">
                                        <input type="radio" id="Perempuan" value="Perempuan" name="jenkel" class="custom-control-input" @if ($guru->jenkel=='Perempuan')
                                        checked
                                        @endif class="custom-control-input">
                                        <label class="custom-control-label" for="Perempuan">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="tempat">Tempat</label>
                                <input type="text" class="form-control" id="tempat" name="tempat" value="{{ old('tempat') ?? $guru->tempat }}" required>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="tgl_lahir">Tgl. Lahir</label>
                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir') ?? $guru->tgl_lahir }}" required>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="kd_gol">Golongan</label>
                                <select type="select" name="kd_gol" id="kd_gol" name="customSelect" class="custom-select" required>
                                    <option value="">Select</option>
                                    @foreach ($golongan as $item)
                                    <option value="{{ $item->kd_gol }}" @if ($item->kd_gol==$guru->kd_gol)
                                        selected
                                    @endif>{{ $item->kd_gol }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="kd_jabatan">Jabatan</label>
                                <select type="select" name="kd_jabatan" id="kd_jabatan" name="customSelect" class="custom-select" required>
                                    <option value="">Select</option>
                                    @foreach ($jabatan as $item)
                                    <option value="{{ $item->kd_jabatan }}" @if ($item->kd_jabatan==$guru->kd_jabatan)
                                        selected
                                    @endif>{{ $item->nm_jabatan }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="kd_mk_gol">MK Gol</label>
                                <select type="select" name="kd_mk_gol" id="kd_mk_gol" name="customSelect" class="custom-select" required>
                                    <option value="">Select</option>
                                    @foreach ($mkGol as $item)
                                    <option value="{{ old('kd_mk_gol') ?? $item->kd_mk_gol }}" @if ($item->kd_mk_gol==$guru->kd_mk_gol)
                                        selected
                                    @endif>{{ $item->kd_mk_gol }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="pend_terakhir">Pendidikan Terakhir</label>
                                <input type="text" class="form-control" id="pend_terakhir" name="pend_terakhir" value="{{ old('pend_terakhir') ?? $guru->pend_terakhir }}" required>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="tgl_dinas">Tgl. Dinas</label>
                                <input type="date" class="form-control" id="tgl_dinas" name="tgl_dinas" value="{{ old('tgl_dinas') ?? $guru->tgl_dinas }}" required>
                                <div class="invalid-tooltip">
                                    Tidak Boleh Kosong
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="agama">Agama</label>
                                <select type="select" name="agama" id="agama" name="customSelect" class="custom-select" required>
                                    <option value="">Select</option>
                                    <option value="Kristen Protestan" @if ($guru->agama=='Kristen Protestan')
                                        selected
                                    @endif>Kristen Protestan</option>
                                    <option value="Kristen Katolik"  @if ($guru->agama=='Kristen Katolik')
                                        selected
                                    @endif>Kristen Katolik</option>
                                    <option value="Islam" @if ($guru->agama=='Islam')
                                        selected
                                    @endif>Islam</option>
                                    <option value="Hindu" @if ($guru->agama=='Hindu')
                                        selected
                                    @endif>Hindu</option>
                                    <option value="Budha" @if ($guru->agama=='Budha')
                                        selected
                                    @endif>Budha</option>
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
