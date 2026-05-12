@extends('layouts.app')
@section('title', 'Dashboard - EduCourse')

@section('content')
<div class="p-5 mb-4 bg-body-tertiary rounded-3 text-center">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Selamat Datang di EduCourse!</h1>
        <p class="col-md-8 mx-auto fs-4">Sistem Informasi Manajemen Akademik Kampus</p>
    </div>
</div>

<div class="row text-center">
    <div class="col-md-4">
        <div class="card text-bg-primary mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Mahasiswa</h5>
                <p class="card-text fs-1">{{ $stats['total_students'] }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Dosen</h5>
                <p class="card-text fs-1">{{ $stats['total_lecturers'] }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-bg-warning mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Mata Kuliah</h5>
                <p class="card-text fs-1">{{ $stats['total_courses'] }}</p>
            </div>
        </div>
    </div>
</div>
@endsection