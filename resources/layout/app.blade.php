{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="id" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'EduCourse Management')</title>

    {{-- Bootstrap 5 CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Bootstrap Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        /* ── Dark Mode Variables ───────────────────────────────── */
        [data-bs-theme="dark"] {
            --bs-body-bg: #0f1117;
            --bs-body-color: #e2e8f0;
            --card-bg: #1a1d27;
        }
        [data-bs-theme="light"] {
            --card-bg: #ffffff;
        }

        body { transition: background-color 0.3s ease, color 0.3s ease; }

        /* ── Navbar ────────────────────────────────────────────── */
        .navbar-brand { font-weight: 800; letter-spacing: -0.5px; }

        /* ── Footer ────────────────────────────────────────────── */
        footer { margin-top: auto; }

        /* ── Dark mode toggle button ───────────────────────────── */
        #darkModeToggle { cursor: pointer; }

        /* ── Page transitions ──────────────────────────────────── */
        main { animation: fadeIn 0.3s ease; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(8px); } to { opacity: 1; transform: translateY(0); } }
    </style>

    @stack('styles')
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- ── Navbar ──────────────────────────────────────────────── --}}
    @include('partials.navbar')

    {{-- ── Toast Notification Area ────────────────────────────── --}}
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 9999">
        @include('partials.toast')
    </div>

    {{-- ── Main Content ─────────────────────────────────────────── --}}
    <main class="flex-grow-1">
        {{-- Alert / Flash Messages --}}
        @if(session('success'))
            <div class="container mt-3">
                <x-alert type="success" message="{{ session('success') }}" />
            </div>
        @endif
        @if(session('error'))
            <div class="container mt-3">
                <x-alert type="danger" message="{{ session('error') }}" />
            </div>
        @endif

        @yield('content')
    </main>

    {{-- ── Footer ──────────────────────────────────────────────── --}}
    @include('partials.footer')

    {{-- Bootstrap 5 JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- ── Dark Mode Script ────────────────────────────────────── --}}
    <script>
        const toggleBtn  = document.getElementById('darkModeToggle');
        const htmlEl     = document.documentElement;
        const savedTheme = localStorage.getItem('theme') || 'light';

        // Apply saved theme on load
        htmlEl.setAttribute('data-bs-theme', savedTheme);
        updateToggleIcon(savedTheme);

        toggleBtn.addEventListener('click', () => {
            const current = htmlEl.getAttribute('data-bs-theme');
            const next    = current === 'dark' ? 'light' : 'dark';
            htmlEl.setAttribute('data-bs-theme', next);
            localStorage.setItem('theme', next);
            updateToggleIcon(next);
        });

        function updateToggleIcon(theme) {
            if (!toggleBtn) return;
            toggleBtn.innerHTML = theme === 'dark'
                ? '<i class="bi bi-sun-fill"></i>'
                : '<i class="bi bi-moon-fill"></i>';
        }
    </script>

    {{-- ── Search Realtime Script ──────────────────────────────── --}}
    <script>
        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
            searchInput.addEventListener('input', function () {
                const query = this.value.toLowerCase();
                document.querySelectorAll('[data-search-row]').forEach(row => {
                    const text = row.textContent.toLowerCase();
                    row.style.display = text.includes(query) ? '' : 'none';
                });
            });
        }
    </script>

    @stack('scripts')
</body>
</html>