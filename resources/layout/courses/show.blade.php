{{-- resources/views/courses/show.blade.php --}}
@extends('layouts.app')
@section('title', $course['nama'] . ' - EduCourse')

@section('content')
<div class="container my-4">
    {{-- Breadcrumb --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('courses') }}">Mata Kuliah</a></li>
            <li class="breadcrumb-item active">{{ $course['nama'] }}</li>
        </ol>
    </nav>

    <div class="row g-4">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex align-items-start mb-3">
                        <div class="bg-primary text-white rounded p-3 me-3">
                            <i class="bi bi-book-fill fs-2"></i>
                        </div>
                        <div>
                            <h2 class="fw-bold mb-1">{{ $course['nama'] }}</h2>
                            <div class="d-flex gap-2 flex-wrap">
                                <span class="badge bg-secondary">{{ $course['sks'] }} SKS</span>
                                <span class="badge bg-info text-dark">Semester {{ $course['semester'] }}</span>
                                @if($course['tipe'] === 'Wajib')
                                    <span class="badge bg-danger">Wajib</span>
                                @else
                                    <span class="badge bg-success">Pilihan</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <hr>
                    <h5 class="fw-semibold">Deskripsi Mata Kuliah</h5>
                    <p class="text-muted">{{ $course['deskripsi'] }}</p>

                    <h5 class="fw-semibold mt-3">Dosen Pengampu</h5>
                    <div class="d-flex align-items-center">
                        <img src="https://i.pravatar.cc/60?img=5" class="rounded-circle me-2" width="50" height="50">
                        <span class="fw-semibold">{{ $course['dosen'] }}</span>
                    </div>

                    <div class="mt-4 d-flex gap-2">
                        <a href="{{ route('courses') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left me-1"></i>Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sidebar: Related Courses --}}
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header fw-semibold">
                    <i class="bi bi-collection me-2"></i>Mata Kuliah Terkait
                </div>
                <div class="card-body">
                    @forelse($related as $rel)
                    <a href="{{ route('course.detail', $rel['id']) }}" class="text-decoration-none">
                        <div class="d-flex align-items-center mb-3 p-2 rounded hover-bg">
                            <div class="bg-primary text-white rounded p-2 me-2">
                                <i class="bi bi-book"></i>
                            </div>
                            <div>
                                <p class="mb-0 fw-semibold small">{{ $rel['nama'] }}</p>
                                <span class="text-muted small">{{ $rel['sks'] }} SKS</span>
                            </div>
                        </div>
                    </a>
                    @empty
                    <p class="text-muted small">Tidak ada mata kuliah terkait.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection