@extends('layouts.app')
@section('title', 'Data Mahasiswa')

@section('content')
<h2>Data Mahasiswa</h2>
<x-alert type="info" message="Menampilkan 15 data mahasiswa (Dummy Data)"/>

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>No</th><th>Nama</th><th>NIM</th><th>Jurusan</th><th>Angkatan</th><th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $mhs)
            <tr>
                <td>{{ $mhs['nomor'] }}</td>
                <td>{{ $mhs['nama'] }}</td>
                <td>{{ $mhs['nim'] }}</td>
                <td>{{ $mhs['jurusan'] }}</td>
                <td>{{ $mhs['angkatan'] }}</td>
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
</div>
@endsection