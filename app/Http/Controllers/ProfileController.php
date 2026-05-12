<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            'nama'        => 'Nama Mahasiswa',          // ← Ganti dengan nama Anda
            'nim'         => '22XXXXX',                  // ← Ganti dengan NIM Anda
            'kelas'       => 'TI-3A',                    // ← Ganti dengan kelas Anda
            'prodi'       => 'Teknik Informatika',
            'universitas' => 'Universitas Anda',         // ← Ganti
            'email'       => 'email@example.com',        // ← Ganti
            'foto'        => 'https://i.pravatar.cc/200?img=33',
            'motto'       => '"Code is poetry."',
            'bio'         => 'Mahasiswa Teknik Informatika yang passionate dalam pengembangan web dan teknologi modern. Senang belajar hal-hal baru dan berkontribusi dalam komunitas developer.',
            'sosmed'      => [
                'github'    => 'https://github.com/username',
                'instagram' => 'https://instagram.com/username',
                'linkedin'  => 'https://linkedin.com/in/username',
                'twitter'   => 'https://twitter.com/username',
            ],
            'skills'      => [
                ['nama' => 'PHP / Laravel', 'nilai' => 85],
                ['nama' => 'HTML & CSS',    'nilai' => 90],
                ['nama' => 'JavaScript',    'nilai' => 75],
                ['nama' => 'Bootstrap 5',   'nilai' => 88],
                ['nama' => 'MySQL',         'nilai' => 70],
                ['nama' => 'Git & GitHub',  'nilai' => 80],
            ],
            'sertifikasi' => [
                'Laravel Certified Developer',
                'Bootstrap UI Expert',
                'Web Development Fundamentals',
            ],
        ];

        return view('profile.index', compact('profile'));
    }
}