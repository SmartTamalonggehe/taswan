@extends('admin.layout.default') @section('judul', 'Raport') @section('cetak',
'mm-active')

{{-- @section('ruang', 'mm-show') --}}

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-drawer icon-gradient bg-happy-itmeo"> </i>
                </div>
                <div>@yield('judul')</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="main-card mb-2 card">
                <div class="card-body table-responsive">
                    <div class="row">
                        <div class="col-4">
                            <select name="NIS" id="NIS" class=" custom-select">
                                <option value="">Pilih Siswa</option>
                                @foreach ($siswa as $item)
                                <option value="{{ $item->NIS }}">{{ $item->NIS }}-{{ $item->nm_siswa }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-3">
                            <select name="thn" id="thn" class=" custom-select">
                                <option value="">Pilih Tahun Ajaran</option>
                                @foreach ($thn as $item)
                                <option value="{{ $item->thn }}">{{ $item->thn }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-3">
                            <select name="semester" id="semester" class=" custom-select">
                                <option value="">Pilih Semester</option>
                                @foreach ($semester as $item)
                                <option value="{{ $item->semester }}">{{ $item->semester }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-2">
                            <a href="" id="btnCetak" class="btn btn-primary d-block">
                                Cetak Raport
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body table-responsive">
                    <div id="cetak"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection @section('skrip')

<script>
    function kirimParams(nis = "", thn = "", semester = "") {
        $.ajax({
            url: "/guru/tampilRaport",
            type: "get",
            datatype: "html",
            data: {
                nis: nis,
                thn: thn,
                semester: semester
            },
            success: function(tampil) {
                $("#cetak").html(tampil);
            }
        });
    }

    kirimParams();

    var myNis='', myThn='', mySemester='';

    $("#NIS").on("change", function() {
        myNis = $(this).val();
        kirimParams(myNis, myThn, mySemester);
    });
    $("#thn").on("change", function() {
        myThn = $(this).val();
        kirimParams(myNis, myThn, mySemester);
    });
    $("#semester").on("change", function() {
        mySemester = $(this).val();
        kirimParams(myNis, myThn, mySemester);
    });

    $('#btnCetak').on('click', function (e) {
        e.preventDefault();
        console.log(myNis);
        window.location='/guru/cetakRaport?nis='+ myNis + '&thn=' + myThn + '&semester=' +mySemester;
    })
</script>

@endsection
