{{-- ══════════════════════════════════════════════════════════════
     resources/views/courses/index.blade.php
     ══════════════════════════════════════════════════════════════ --}}
@extends('layouts.app')
@section('title', 'Mata Kuliah - EduCourse')

@section('content')
<div class="container my-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Mata Kuliah</li>
        </ol>
    </nav>

    <h2 class="fw-bold mb-4"><i class="bi bi-book-fill me-2 text-primary"></i>Daftar Mata Kuliah</h2>

    {{-- Search realtime --}}
    <div class="mb-3">
        <input type="text" id="searchInput" class="form-control" placeholder="🔍 Cari mata kuliah...">
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <th>Dosen</th>
                            <th>Tipe</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courses as $i => $course)
                        <tr data-search-row>
                            <td>{{ $i + 1 }}</td>
                            <td class="fw-semibold">{{ $course['nama'] }}</td>
                            <td><span class="badge bg-secondary">{{ $course['sks'] }} SKS</span></td>
                            <td>Semester {{ $course['semester'] }}</td>
                            <td class="text-muted small">{{ $course['dosen'] }}</td>
                            <td>
                                @if($course['tipe'] === 'Wajib')
                                    <span class="badge bg-danger">Wajib</span>
                                @else
                                    <span class="badge bg-success">Pilihan</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('course.detail', $course['id']) }}"
                                   class="btn btn-sm btn-primary">
                                    <i class="bi bi-arrow-right-circle"></i> Detail
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection