{{-- resources/views/partials/footer.blade.php --}}
<footer class="bg-dark text-light pt-4 pb-3 mt-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <h5 class="fw-bold"><i class="bi bi-mortarboard-fill me-2 text-primary"></i>EduCourse</h5>
                <p class="text-muted small">Sistem Manajemen Pendidikan berbasis Laravel. Memudahkan pengelolaan data akademik kampus Anda.</p>
            </div>
            <div class="col-md-4">
                <h6 class="fw-semibold">Navigasi Cepat</h6>
                <ul class="list-unstyled small">
                    <li><a href="{{ route('home') }}"       class="text-muted text-decoration-none"><i class="bi bi-chevron-right"></i> Home</a></li>
                    <li><a href="{{ route('students') }}"   class="text-muted text-decoration-none"><i class="bi bi-chevron-right"></i> Mahasiswa</a></li>
                    <li><a href="{{ route('lecturers') }}"  class="text-muted text-decoration-none"><i class="bi bi-chevron-right"></i> Dosen</a></li>
                    <li><a href="{{ route('courses') }}"    class="text-muted text-decoration-none"><i class="bi bi-chevron-right"></i> Mata Kuliah</a></li>
                    <li><a href="{{ route('articles') }}"   class="text-muted text-decoration-none"><i class="bi bi-chevron-right"></i> Artikel</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h6 class="fw-semibold">Kontak</h6>
                <p class="text-muted small mb-1"><i class="bi bi-envelope me-2"></i>info@educourse.ac.id</p>
                <p class="text-muted small mb-1"><i class="bi bi-telephone me-2"></i>(0721) 123-456</p>
                <p class="text-muted small"><i class="bi bi-geo-alt me-2"></i>Bandar Lampung, Indonesia</p>
            </div>
        </div>
        <hr class="border-secondary">
        <p class="text-center text-muted small mb-0">
            &copy; {{ date('Y') }} EduCourse Management &mdash; Dibuat dengan <i class="bi bi-heart-fill text-danger"></i> menggunakan Laravel & Bootstrap 5
        </p>
    </div>
</footer>