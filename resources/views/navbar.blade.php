<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="/">EduCourse</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link {{ request()->is('students') ? 'active text-primary fw-bold' : '' }}" href="/students">Mahasiswa</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->is('courses') ? 'active text-primary fw-bold' : '' }}" href="/courses">Mata Kuliah</a></li>
        <li class="nav-item"><a class="nav-link {{ request()->is('profile') ? 'active text-primary fw-bold' : '' }}" href="/profile">Profile</a></li>
      </ul>
      <button class="btn btn-outline-secondary btn-sm" id="darkModeToggle">Dark Mode</button>
    </div>
  </div>
</nav>