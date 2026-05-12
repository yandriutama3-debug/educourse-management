{{-- ══════════════════════════════════════════════════════════════
     resources/views/errors/404.blade.php
     ══════════════════════════════════════════════════════════════ --}}
@extends('layouts.app')
@section('title', '404 - Halaman Tidak Ditemukan')

@section('content')
<div class="container my-5 text-center">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="display-1 fw-bold text-primary">404</div>
            <h2 class="fw-bold mb-3">Halaman Tidak Ditemukan</h2>
            <p class="text-muted lead mb-4">
                Maaf, halaman yang Anda cari tidak ada atau telah dipindahkan.
            </p>

            <x-alert type="warning" message="URL yang Anda masukkan tidak valid." />

            <div class="mt-4">
                <a href="{{ route('home') }}" class="btn btn-primary btn-lg me-2">
                    <i class="bi bi-house-door me-2"></i>Kembali ke Home
                </a>
                <a href="{{ route('courses') }}" class="btn btn-outline-secondary btn-lg">
                    <i class="bi bi-book me-2"></i>Lihat Mata Kuliah
                </a>
            </div>
        </div>
    </div>
</div>
@endsection


{{-- ══════════════════════════════════════════════════════════════
     resources/views/admin/dashboard.blade.php
     ══════════════════════════════════════════════════════════════ --}}
{{-- NOTE: Save as separate file resources/views/admin/dashboard.blade.php --}}