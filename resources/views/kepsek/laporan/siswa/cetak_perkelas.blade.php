<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Siswa</title>
    <link href="{{ asset('tabelPrint.css') }}" rel="stylesheet">
</head>
<body>
<h3 style="text-align: center">Laporan Siswa @if ($tp_kd_kelas=='' && $thn=='' && $semester=='')
Keseluruhan
@endif {{ $tp_kd_kelas }} {{ $thn }} {{ $semester }}</h3>
    <table>
        <thead>
        <tr>
            <th>No</th>
            @if ($tp_kd_kelas=='')
            <th>Kelas</th>
            @endif
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tgl. Masuk</th>
            <th>Alamat</th>
            <th>Tahun</th>
            <th>Semester</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($lapSiswa as $item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            @if ($tp_kd_kelas=='')
            <td>{{ $item->kd_kelas }}</td>
            @endif
            <td>{{ $item->NIS }}</td>
            <td>{{ $item->nm_siswa }}</td>
            <td>{{ $item->jenkel }}</td>
            <td>{{ $item->tgl_masuk }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->thn }}</td>
            <td>{{ $item->semester }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>

