# 🎓 EduCourse Management

Sistem Manajemen Pendidikan berbasis **Laravel 11** dan **Bootstrap 5** — project akademik untuk mengelola data mahasiswa, dosen, dan mata kuliah secara efisien.

---

## 📋 Deskripsi

EduCourse Management adalah aplikasi web yang dibangun menggunakan framework Laravel dengan pendekatan MVC. Aplikasi ini dirancang untuk memenuhi kebutuhan manajemen data akademik kampus, termasuk pengelolaan mahasiswa, dosen, mata kuliah, dan artikel informatif.

---

## ✨ Fitur

| Fitur | Status |
|-------|--------|
| 🏠 Halaman Home dengan Carousel & Statistik | ✅ |
| 👨‍🎓 Data Mahasiswa (20+ data dummy) | ✅ |
| 👨‍🏫 Data Dosen dengan Card UI | ✅ |
| 📚 Daftar Mata Kuliah & Detail Dinamis | ✅ |
| 📰 Artikel Mini CMS dengan Slug | ✅ |
| 👤 Halaman Profile Developer | ✅ |
| 🛡️ Admin Dashboard | ✅ |
| 🌙 Dark Mode Toggle | ✅ |
| 🔍 Search Realtime (JavaScript) | ✅ |
| 📱 Responsive Design (Mobile-Friendly) | ✅ |
| ⚠️ Custom 404 Page | ✅ |
| 🔔 Toast Notification | ✅ |
| 🧩 Blade Components (`<x-alert>`, `<x-card>`) | ✅ |

---

## 📸 Screenshot

> *(Tambahkan screenshot di sini setelah project berjalan)*

```
screenshots/
├── home.png
├── students.png
├── courses.png
└── dark-mode.png
```

---

## 🛠️ Teknologi

- **Framework**: Laravel 11
- **Frontend**: Bootstrap 5.3, Bootstrap Icons
- **Template Engine**: Blade
- **Bahasa**: PHP 8.2+
- **Version Control**: Git & GitHub
- **Data**: Array PHP (tanpa database)

---

## 📦 Cara Install

### Prasyarat
- PHP >= 8.2
- Composer
- Node.js (opsional)
- Git

### Langkah Instalasi

```bash
# 1. Clone repository
git clone https://github.com/username/educourse-management.git

# 2. Masuk ke folder project
cd educourse-management

# 3. Install dependencies PHP
composer install

# 4. Salin file environment
cp .env.example .env

# 5. Generate application key
php artisan key:generate
```

---

## 🚀 Cara Menjalankan

```bash
# Jalankan development server
php artisan serve

# Akses di browser:
# http://127.0.0.1:8000
```

---

## 📁 Struktur Folder

```
educourse-management/
│
├── app/
│   └── Http/
│       └── Controllers/
│           ├── HomeController.php
│           ├── StudentController.php
│           ├── LecturerController.php
│           ├── CourseController.php
│           ├── ArticleController.php
│           └── ProfileController.php
│
├── resources/views/
│   ├── layouts/
│   │   └── app.blade.php          ← Master layout
│   ├── partials/
│   │   ├── navbar.blade.php
│   │   ├── footer.blade.php
│   │   └── toast.blade.php
│   ├── components/
│   │   ├── alert.blade.php        ← <x-alert>
│   │   └── card.blade.php         ← <x-card>
│   ├── home/
│   │   └── index.blade.php
│   ├── students/
│   │   └── index.blade.php
│   ├── lecturers/
│   │   └── index.blade.php
│   ├── courses/
│   │   ├── index.blade.php
│   │   └── show.blade.php
│   ├── articles/
│   │   ├── index.blade.php
│   │   └── show.blade.php
│   ├── profile/
│   │   └── index.blade.php
│   ├── admin/
│   │   └── dashboard.blade.php
│   └── errors/
│       └── 404.blade.php
│
├── routes/
│   └── web.php                    ← Semua routing
│
└── README.md
```

---

## 🌐 Daftar Route

| URL | Fungsi | Named Route |
|-----|--------|-------------|
| `/` | Home | `home` |
| `/students` | Data Mahasiswa | `students` |
| `/student/{name?}` | Optional param | `student.greet` |
| `/lecturers` | Data Dosen | `lecturers` |
| `/courses` | Daftar Mata Kuliah | `courses` |
| `/course/{id}` | Detail Mata Kuliah | `course.detail` |
| `/profile` | Profile Developer | `profile` |
| `/articles` | List Artikel | `articles` |
| `/articles/{slug}` | Detail Artikel | `articles.show` |
| `/admin/dashboard` | Admin Dashboard | `admin.dashboard` |

---

## 👨‍💻 Developer

| Info | Detail |
|------|--------|
| **Nama** | [Nama Mahasiswa] |
| **NIM** | [NIM] |
| **Kelas** | [Kelas] |
| **Prodi** | Teknik Informatika |
| **Universitas** | [Nama Universitas] |
| **GitHub** | [@username](https://github.com/username) |

---

## 📝 Commit History

```
feat: initial Laravel setup
feat: add routing configuration
feat: create all controllers
feat: implement blade layout & partials  
style: bootstrap UI components & dark mode
feat: add dark mode toggle & search realtime
docs: final project & README update
```

---

*Dibuat dengan ❤️ menggunakan Laravel & Bootstrap 5*