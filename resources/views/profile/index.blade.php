@extends('layouts.app')
@section('title', 'Profile Developer')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-body text-center">
                <img src="https://ui-avatars.com/api/?name=Yandri+Utama&size=150" class="rounded-circle mb-3" alt="Foto Profile">
                <h3>{{ $profile['nama'] }}</h3>
                <p class="text-muted">{{ $profile['nim'] }} | {{ $profile['kelas'] }}</p>
                <hr>
                <h5 class="text-start">Skills:</h5>
                @foreach($profile['skills'] as $skill => $level)
                <div class="mb-2 text-start">
                    <small>{{ $skill }}</small>
                    <div class="progress" style="height: 10px;">
                        <div class="progress-bar" role="progressbar" style="width: {{ $level }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection