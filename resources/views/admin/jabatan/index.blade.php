@extends('admin.layout.default')

@section('judul','Jabatan')

@section('jabatan','mm-active')

@section('item','mm-show')

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
            <a href="{{ route('jabatan.create') }}"class="mb-2 mr-2 btn-transition btn btn-outline-secondary">Tambah Data @yield('judul')</a>
            <div class="main-card mb-3 card">
                <div class="card-body table-responsive"><h5 class="card-title">Data @yield('judul')</h5>
                    <table class="mb-0 table table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Jabatan</th>
                            <th>Pilihan</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($jabatan as $item)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{ $item->kd_jabatan }}</td>
                            <td>{{ $item->nm_jabatan }}</td>
                            <td>
                                <div class="text-left">
                                    <div role="group" class="btn-group-sm btn-group btn-group-toggle" data-toggle="buttons">
                                        <button id="edit" href="jabatan/{{ $item->id }}/edit" type="button" class="btn btn-alternate">Edit
                                        </button>
                                        <button id="delete" href="jabatan/{{ $item->id }}" class="btn btn-danger">Hapus</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('skrip')

<script src="{{ asset('sweetAlert/sweetalert2.js') }}"></script>
{{-- Sweet alert Hapus --}}
<script>
    $('button#delete').on('click',function(e){
        e.preventDefault();

        var href = $(this).attr('href');

        Swal.fire({
        title: 'Yakin menghapus data ini?',
        text: "Data akan diahapus secara permanen!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yakin!',
        cancelButtonText: 'Tidak!',
        }).then((result) => {
        if (result.value) {
            document.getElementById('deleteForm').action=href;
            document.getElementById('deleteForm').submit();
            Swal.fire(
            'Dihapus!',
            'Data berhasil dihapus.',
            'success'
            )
        }
        })
    })
</script>

<form action="" method="POST" id="deleteForm">
    @csrf
    @method("DELETE")
    <input type="submit" value="Hapus" style="display:none">
</form>

{{-- konversi button edit --}}
<script>
     $('button#edit').on('click',function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        window.location=href;
     })
</script>
@endsection
