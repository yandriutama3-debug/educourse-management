<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    private function getAllCourses(): array
    {
        return [
            ['id' => 1,  'nama' => 'Algoritma & Pemrograman',     'sks' => 3, 'semester' => 1, 'dosen' => 'Dr. Bambang Irawan',   'tipe' => 'Wajib',   'deskripsi' => 'Dasar-dasar logika pemrograman dan struktur algoritma. Mahasiswa akan belajar cara berpikir komputasional dan menyelesaikan masalah secara sistematis.'],
            ['id' => 2,  'nama' => 'Kalkulus',                     'sks' => 3, 'semester' => 1, 'dosen' => 'Prof. Sri Wahyuni',     'tipe' => 'Wajib',   'deskripsi' => 'Konsep limit, diferensial, dan integral yang menjadi fondasi matematika teknik dan sains.'],
            ['id' => 3,  'nama' => 'Basis Data',                   'sks' => 3, 'semester' => 2, 'dosen' => 'Prof. Sri Wahyuni',     'tipe' => 'Wajib',   'deskripsi' => 'Perancangan dan implementasi sistem basis data relasional menggunakan SQL dan ERD.'],
            ['id' => 4,  'nama' => 'Jaringan Komputer',            'sks' => 3, 'semester' => 3, 'dosen' => 'Ir. Hadi Santoso',      'tipe' => 'Wajib',   'deskripsi' => 'Arsitektur, protokol, dan implementasi jaringan komputer dari layer fisik hingga aplikasi.'],
            ['id' => 5,  'nama' => 'Pemrograman Web',              'sks' => 3, 'semester' => 3, 'dosen' => 'Drs. Agus Prasetyo',    'tipe' => 'Wajib',   'deskripsi' => 'Pengembangan aplikasi web menggunakan HTML, CSS, JavaScript, dan framework modern.'],
            ['id' => 6,  'nama' => 'Kecerdasan Buatan',            'sks' => 3, 'semester' => 4, 'dosen' => 'Dr. Bambang Irawan',    'tipe' => 'Wajib',   'deskripsi' => 'Konsep AI meliputi machine learning, neural network, dan penerapannya pada permasalahan nyata.'],
            ['id' => 7,  'nama' => 'Rekayasa Perangkat Lunak',     'sks' => 3, 'semester' => 4, 'dosen' => 'Dr. Rina Kartika',      'tipe' => 'Wajib',   'deskripsi' => 'Metodologi pengembangan perangkat lunak, manajemen proyek, dan quality assurance.'],
            ['id' => 8,  'nama' => 'Data Science',                 'sks' => 3, 'semester' => 5, 'dosen' => 'Prof. Joko Widodo',     'tipe' => 'Pilihan', 'deskripsi' => 'Analisis data besar menggunakan Python, pandas, dan teknik visualisasi data modern.'],
            ['id' => 9,  'nama' => 'Keamanan Siber',               'sks' => 3, 'semester' => 5, 'dosen' => 'Dr. Lilis Suryani',     'tipe' => 'Pilihan', 'deskripsi' => 'Prinsip keamanan informasi, kriptografi, ethical hacking, dan perlindungan sistem.'],
            ['id' => 10, 'nama' => 'Mobile Application',           'sks' => 3, 'semester' => 5, 'dosen' => 'Dr. Fitri Amalia',      'tipe' => 'Pilihan', 'deskripsi' => 'Pengembangan aplikasi mobile untuk Android dan iOS menggunakan Flutter/React Native.'],
            ['id' => 11, 'nama' => 'Cloud Computing',              'sks' => 2, 'semester' => 6, 'dosen' => 'Ir. Hadi Santoso',      'tipe' => 'Pilihan', 'deskripsi' => 'Arsitektur cloud, layanan AWS/GCP/Azure, dan deployment aplikasi berbasis cloud.'],
            ['id' => 12, 'nama' => 'Skripsi',                      'sks' => 6, 'semester' => 8, 'dosen' => 'TBD',                   'tipe' => 'Wajib',   'deskripsi' => 'Penelitian mandiri mahasiswa sebagai syarat kelulusan program sarjana.'],
        ];
    }

    public function index()
    {
        $courses = $this->getAllCourses();
        return view('courses.index', compact('courses'));
    }

    public function show($id)
    {
        $courses = $this->getAllCourses();
        $course  = null;

        foreach ($courses as $c) {
            if ($c['id'] == $id) {
                $course = $c;
                break;
            }
        }

        if (!$course) {
            return response()->view('errors.404', [], 404);
        }

        // Related courses (same semester, different id)
        $related = array_filter($courses, fn($c) => $c['semester'] === $course['semester'] && $c['id'] != $id);
        $related = array_slice(array_values($related), 0, 3);

        return view('courses.show', compact('course', 'related'));
    }
}