<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>

    <style>
        .container {
            width: 90%;
            margin: 0 auto;
        }

        .text-center {
            text-align: center !important
        }

        .col-4 {
            width: 30%;
            float: left;
        }

        .col-12 {
            width: 100%
        }

        .myTable {
            width: 100%;
        }

        .myTable,
        .myTable td {
            padding: 5px;
            text-align: left;
            border-collapse: collapse;
            border: 1px solid rgb(0, 0, 0);
        }

        .myTable th {
            border-collapse: collapse;
            border: 1px solid rgb(0, 0, 0);
            padding: 10px
        }

        .pt-4 {
            padding-top: 3rem !important;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @foreach ($data as $item)
                    <h1 class=" text-uppercase text-center">Sekolah Dasar Negeri Inpres Waena</h1>
                    <hr>
                    <h2 class=" text-uppercase text-center mb-3">LAPORAN HASIL BELAJAR SISWA SEMESTER
                        {{ $item->semester }}
                        TAHUN AJARAN {{ $item->thn }}
                    </h2>
                    <div class="row">
                        <div class="col-4">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Nama Siswa</td>
                                        <td>:</td>
                                        <td>{{ $item->siswa->nm_siswa }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-4">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>NIS / NISN</td>
                                        <td>:</td>
                                        <td>{{ $item->NIS }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-4">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Tahun Ajaran</td>
                                        <td>:</td>
                                        <td>{{ $item->thn }}-{{ $item->semester }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 pt-4">
                            <table class=" myTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Nilai</th>
                                        <th>Keterangan Raport</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($item->siswa->nilai as $itemNilai)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $itemNilai->pelajaran->nm_pelajaran }}</td>
                                            <td>{{ $itemNilai->nilai }}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 mt-5 mb-5">
                            <div class="mt-5 text-center col-4 float-right">
                                <p class=" mt-5">Mengetahui Wali Kelas</p>
                                <br>
                                <br>
                                <br>
                                <p>---------------------------------------</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</body>

</html>
