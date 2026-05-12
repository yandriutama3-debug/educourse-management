@extends('layouts.app')
@section('content')
<h2>Data Mahasiswa</h2>
<table class="table table-striped">
    <thead><tr><th>No</th><th>Nama</th><th>NIM</th><th>Jurusan</th><th>Status</th></tr></thead>
    <tbody>
        @foreach($students as $mhs)
        <tr>
            <td>{{ $mhs['nomor'] }}</td>
            <td>{{ $mhs['nama'] }}</td>
            <td>{{ $mhs['nim'] }}</td>
            <td>{{ $mhs['jurusan'] }}</td>
            <td>
                @if($mhs['status'] == 'Aktif')
                    <span class="badge bg-success">Aktif</span>
                @else
                    <span class="badge bg-danger">Nonaktif</span>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection