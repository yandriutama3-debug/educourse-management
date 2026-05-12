{{-- resources/views/articles/show.blade.php --}}
@extends('layouts.app')
@section('title', $article['title'] . ' - EduCourse')

@section('content')
<div class="container my-4">
    {{-- Breadcrumb --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('articles') }}">Artikel</a></li>
            <li class="breadcrumb-item active">{{ Str::limit($article['title'], 40) }}</li>
        </ol>
    </nav>

    <div class="row g-4">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <span class="badge bg-primary mb-3">{{ $article['category'] }}</span>
                    <h1 class="fw-bold mb-3">{{ $article['title'] }}</h1>
                    <div class="d-flex gap-3 text-muted small mb-4">
                        <span><i class="bi bi-person me-1"></i>{{ $article['author'] }}</span>
                        <span><i class="bi bi-calendar3 me-1"></i>{{ $article['date'] }}</span>
                        <span><i class="bi bi-tag me-1"></i>{{ $article['tag'] }}</span>
                    </div>
                    <hr>
                    <p class="lead text-muted fst-italic mb-4">{{ $article['excerpt'] }}</p>
                    <div class="article-content">
                        {!! nl2br(e($article['content'])) !!}
                    </div>
                    <hr class="mt-4">
                    <a href="{{ route('articles') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left me-1"></i>Kembali ke Artikel
                    </a>
                </div>
            </div>
        </div>

        {{-- Sidebar: Related --}}
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-header fw-semibold">
                    <i class="bi bi-collection me-2"></i>Artikel Terkait
                </div>
                <div class="card-body">
                    @forelse($related as $rel)
                    <div class="mb-3 pb-3 border-bottom">
                        <a href="{{ route('articles.show', $rel['slug']) }}" class="text-decoration-none">
                            <p class="fw-semibold small mb-1">{{ $rel['title'] }}</p>
                        </a>
                        <small class="text-muted">{{ $rel['date'] }}</small>
                    </div>
                    @empty
                    <p class="text-muted small">Tidak ada artikel terkait.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection