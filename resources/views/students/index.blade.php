@extends('layouts.app')
@section('title', 'Daftar Mahasiswa')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Data Mahasiswa</h2>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Cari NIM/Nama...">
        <button class="btn btn-outline-primary" type="submit">Cari</button>
    </form>
</div>

<div class="table-responsive">
    <table class="table table-hover shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>No</th><th>Nama</th><th>NIM</th><th>Jurusan</th><th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $mhs)
            <tr>
                <td>{{ $loop->iteration }}</td>
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
</div>
@endsection