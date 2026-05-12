{{-- ══════════════════════════════════════════════════════════════
     resources/views/profile/index.blade.php
     ══════════════════════════════════════════════════════════════ --}}
@extends('layouts.app')
@section('title', 'Profile - EduCourse')

@section('content')
<div class="container my-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </nav>

    <div class="row g-4">
        {{-- Profile Card --}}
        <div class="col-md-4">
            <div class="card border-0 shadow-sm text-center">
                <div class="card-body py-5">
                    <img src="{{ $profile['foto'] }}" alt="{{ $profile['nama'] }}"
                         class="rounded-circle border border-4 border-primary mb-3"
                         width="150" height="150">
                    <h3 class="fw-bold">{{ $profile['nama'] }}</h3>
                    <p class="text-muted mb-1"><code>{{ $profile['nim'] }}</code></p>
                    <p class="text-muted small mb-2">{{ $profile['kelas'] }} &bull; {{ $profile['prodi'] }}</p>
                    <p class="text-muted small mb-3"><i class="bi bi-building me-1"></i>{{ $profile['universitas'] }}</p>
                    <p class="fst-italic text-primary">{{ $profile['motto'] }}</p>
                    <hr>
                    {{-- Social Media --}}
                    <div class="d-flex justify-content-center gap-3 mt-2">
                        <a href="{{ $profile['sosmed']['github'] }}" class="text-dark fs-4" target="_blank">
                            <i class="bi bi-github"></i>
                        </a>
                        <a href="{{ $profile['sosmed']['instagram'] }}" class="text-danger fs-4" target="_blank">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="{{ $profile['sosmed']['linkedin'] }}" class="text-primary fs-4" target="_blank">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="{{ $profile['sosmed']['twitter'] }}" class="text-info fs-4" target="_blank">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Skills & Bio --}}
        <div class="col-md-8">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="fw-bold mb-3"><i class="bi bi-person-lines-fill me-2 text-primary"></i>Tentang Saya</h5>
                    <p>{{ $profile['bio'] }}</p>
                    <p class="mb-0 text-muted small"><i class="bi bi-envelope me-2"></i>{{ $profile['email'] }}</p>
                </div>
            </div>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="fw-bold mb-3"><i class="bi bi-lightning-fill me-2 text-warning"></i>Skills</h5>
                    @foreach($profile['skills'] as $skill)
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-semibold">{{ $skill['nama'] }}</span>
                            <span class="text-muted small">{{ $skill['nilai'] }}%</span>
                        </div>
                        <div class="progress" style="height: 10px;">
                            <div class="progress-bar bg-primary progress-bar-striped progress-bar-animated"
                                 role="progressbar"
                                 style="width: {{ $skill['nilai'] }}%">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold mb-3"><i class="bi bi-award-fill me-2 text-success"></i>Sertifikasi</h5>
                    @foreach($profile['sertifikasi'] as $cert)
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-patch-check-fill text-success me-2"></i>
                        <span>{{ $cert }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection