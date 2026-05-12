{{-- resources/views/admin/dashboard.blade.php --}}
@extends('layouts.app')
@section('title', 'Admin Dashboard - EduCourse')

@section('content')
<div class="container my-4">
    <div class="d-flex align-items-center mb-4">
        <div class="bg-warning rounded p-2 me-3">
            <i class="bi bi-shield-lock-fill text-dark fs-4"></i>
        </div>
        <div>
            <h2 class="fw-bold mb-0">Admin Dashboard</h2>
            <p class="text-muted mb-0 small">Panel pengelolaan sistem EduCourse</p>
        </div>
    </div>

    <x-alert type="info" message="Anda berada di panel admin. Gunakan fitur ini dengan bijaksana." />

    <div class="row g-4 mt-2">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-primary text-white text-center py-4">
                <div class="card-body">
                    <i class="bi bi-people-fill display-5"></i>
                    <h3 class="fw-bold mt-2">150</h3>
                    <p class="mb-0">Total Mahasiswa</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-success text-white text-center py-4">
                <div class="card-body">
                    <i class="bi bi-person-badge-fill display-5"></i>
                    <h3 class="fw-bold mt-2">24</h3>
                    <p class="mb-0">Total Dosen</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-info text-white text-center py-4">
                <div class="card-body">
                    <i class="bi bi-book-fill display-5"></i>
                    <h3 class="fw-bold mt-2">48</h3>
                    <p class="mb-0">Mata Kuliah</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-warning text-dark text-center py-4">
                <div class="card-body">
                    <i class="bi bi-newspaper display-5"></i>
                    <h3 class="fw-bold mt-2">5</h3>
                    <p class="mb-0">Artikel</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mt-2">
        <div class="col-md-6">
            <x-card title="Menu Admin" icon="bi-grid-fill">
                <div class="list-group list-group-flush">
                    <a href="{{ route('students') }}" class="list-group-item list-group-item-action">
                        <i class="bi bi-people me-2"></i>Kelola Mahasiswa
                    </a>
                    <a href="{{ route('lecturers') }}" class="list-group-item list-group-item-action">
                        <i class="bi bi-person-badge me-2"></i>Kelola Dosen
                    </a>
                    <a href="{{ route('courses') }}" class="list-group-item list-group-item-action">
                        <i class="bi bi-book me-2"></i>Kelola Mata Kuliah
                    </a>
                    <a href="{{ route('articles') }}" class="list-group-item list-group-item-action">
                        <i class="bi bi-newspaper me-2"></i>Kelola Artikel
                    </a>
                </div>
            </x-card>
        </div>
        <div class="col-md-6">
            <x-card title="Aktivitas Terbaru" icon="bi-clock-history">
                <ul class="list-unstyled">
                    <li class="py-2 border-bottom"><i class="bi bi-person-plus text-success me-2"></i>Mahasiswa baru: Tania Putri <span class="float-end text-muted small">2 jam lalu</span></li>
                    <li class="py-2 border-bottom"><i class="bi bi-book-fill text-primary me-2"></i>Mata kuliah ditambah: Cloud Computing <span class="float-end text-muted small">1 hari lalu</span></li>
                    <li class="py-2 border-bottom"><i class="bi bi-newspaper text-warning me-2"></i>Artikel baru dipublish <span class="float-end text-muted small">2 hari lalu</span></li>
                    <li class="py-2"><i class="bi bi-person-badge-fill text-info me-2"></i>Dosen baru bergabung <span class="float-end text-muted small">3 hari lalu</span></li>
                </ul>
            </x-card>
        </div>
    </div>
</div>
@endsection