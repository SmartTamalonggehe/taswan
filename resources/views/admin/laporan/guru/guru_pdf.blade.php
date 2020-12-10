<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Guru</title>
    <link href="{{ asset('tabelPrint.css') }}" rel="stylesheet">
</head>
<body>
<h1 style="text-align: center">Laporan Guru </h1>
    <table>
        <thead>
        <tr>
            <th>No</th>
            <th>NIP</th>
            <th>Nama guru</th>
            <th>Jenis Kelamin</th>
            <th>Tempat</th>
            <th>Tgl. Lahir</th>
            <th>Golongan</th>
            <th>Jabatan</th>
            <th>MK Tahun</th>
            <th>MK Bulan</th>
            <th>Pend. Terkahir</th>
            <th>Tgl. Dinas</th>
            <th>Agama</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($guru as $item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{ $item->NIP }}</td>
            <td>{{ $item->nm_guru }}</td>
            <td>{{ $item->jenkel }}</td>
            <td>{{ $item->tempat }}</td>
            <td>{{ $item->tgl_lahir }}</td>
            <td>{{ $item->kd_gol }}</td>
            <td>{{ $item->Jabatan->nm_jabatan}}</td>
            <td>{{ $item->MkGol->thn }}</td>
            <td>{{ $item->MkGol->bln }}</td>
            <td>{{ $item->pend_terakhir }}</td>
            <td>{{ $item->tgl_dinas }}</td>
            <td>{{ $item->agama }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>

