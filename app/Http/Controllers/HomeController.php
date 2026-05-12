<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $stats = [
            'students'  => 150,
            'lecturers' => 24,
            'courses'   => 48,
        ];

        $announcements = [
            [
                'title' => 'Pendaftaran KRS Semester Genap 2024/2025',
                'date'  => '10 Juni 2025',
                'badge' => 'Penting',
                'type'  => 'danger',
            ],
            [
                'title' => 'Seminar Nasional Teknologi Informasi',
                'date'  => '15 Juni 2025',
                'badge' => 'Acara',
                'type'  => 'primary',
            ],
            [
                'title' => 'Ujian Tengah Semester Dimulai',
                'date'  => '20 Juni 2025',
                'badge' => 'Akademik',
                'type'  => 'warning',
            ],
        ];

        $carouselSlides = [
            [
                'title'    => 'Selamat Datang di EduCourse',
                'subtitle' => 'Sistem Manajemen Pendidikan Modern',
                'bg'       => 'primary',
            ],
            [
                'title'    => 'Kelola Data Mahasiswa',
                'subtitle' => 'Mudah, Cepat, dan Terpercaya',
                'bg'       => 'success',
            ],
            [
                'title'    => 'Ratusan Mata Kuliah Tersedia',
                'subtitle' => 'Kurikulum Terbaik untuk Masa Depan',
                'bg'       => 'info',
            ],
        ];

        return view('home.index', compact('stats', 'announcements', 'carouselSlides'));
    }
}