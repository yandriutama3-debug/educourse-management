{{-- resources/views/partials/navbar.blade.php --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        {{-- Brand --}}
        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="bi bi-mortarboard-fill me-2"></i>EduCourse
        </a>

        {{-- Toggler --}}
        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Nav Links --}}
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active fw-bold' : '' }}"
                       href="{{ route('home') }}">
                       <i class="bi bi-house-door me-1"></i>Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('students') ? 'active fw-bold' : '' }}"
                       href="{{ route('students') }}">
                       <i class="bi bi-people me-1"></i>Mahasiswa
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('lecturers') ? 'active fw-bold' : '' }}"
                       href="{{ route('lecturers') }}">
                       <i class="bi bi-person-badge me-1"></i>Dosen
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('courses*') ? 'active fw-bold' : '' }}"
                       href="{{ route('courses') }}">
                       <i class="bi bi-book me-1"></i>Mata Kuliah
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('articles*') ? 'active fw-bold' : '' }}"
                       href="{{ route('articles') }}">
                       <i class="bi bi-newspaper me-1"></i>Artikel
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('profile') ? 'active fw-bold' : '' }}"
                       href="{{ route('profile') }}">
                       <i class="bi bi-person-circle me-1"></i>Profile
                    </a>
                </li>
            </ul>

            {{-- Right Side: Dark Mode Toggle + Admin --}}
            <div class="d-flex align-items-center gap-2">
                <button id="darkModeToggle" class="btn btn-outline-light btn-sm">
                    <i class="bi bi-moon-fill"></i>
                </button>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-warning btn-sm fw-semibold">
                    <i class="bi bi-shield-lock me-1"></i>Admin
                </a>
            </div>
        </div>
    </div>
</nav>