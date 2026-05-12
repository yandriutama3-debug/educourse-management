{{-- ══════════════════════════════════════════════════════════════
     resources/views/articles/index.blade.php
     ══════════════════════════════════════════════════════════════ --}}
@extends('layouts.app')
@section('title', 'Artikel - EduCourse')

@section('content')
<div class="container my-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Artikel</li>
        </ol>
    </nav>

    <h2 class="fw-bold mb-4"><i class="bi bi-newspaper me-2 text-primary"></i>Artikel & Blog</h2>

    <div class="row g-4">
        @foreach($articles as $article)
        <div class="col-md-6 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <span class="badge bg-primary mb-2 align-self-start">{{ $article['category'] }}</span>
                    <h5 class="card-title fw-bold">{{ $article['title'] }}</h5>
                    <p class="card-text text-muted small flex-grow-1">{{ $article['excerpt'] }}</p>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <small class="text-muted"><i class="bi bi-calendar3 me-1"></i>{{ $article['date'] }}</small>
                        <a href="{{ route('articles.show', $article['slug']) }}" class="btn btn-sm btn-primary">
                            Baca <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="card-footer text-muted small bg-transparent">
                    <i class="bi bi-person me-1"></i>{{ $article['author'] }}
                    &bull;
                    <span class="badge bg-light text-dark">{{ $article['tag'] }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection


{{-- ══════════════════════════════════════════════════════════════
     resources/views/articles/show.blade.php
     ══════════════════════════════════════════════════════════════ --}}
{{-- NOTE: Save this as a SEPARATE file: resources/views/articles/show.blade.php --}}