<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/">EduCourse</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active text-primary fw-bold' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('students*') ? 'active text-primary fw-bold' : '' }}" href="/students">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('courses*') ? 'active text-primary fw-bold' : '' }}" href="/courses">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('profile') ? 'active text-primary fw-bold' : '' }}" href="/profile">Profile</a>
        </li>
      </ul>
      <button class="btn btn-outline-secondary btn-sm" id="darkModeToggle">Toggle Dark Mode</button>
    </div>
  </div>
</nav>