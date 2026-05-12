<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Bikin fungsi khusus penyedia data dummy array
    private function getCourses()
    {
        return [
            1 => ['id' => 1, 'nama' => 'Pemrograman Web (Laravel)', 'sks' => 3, 'semester' => 1, 'dosen' => 'Hendra Gunawan, M.Kom.', 'status' => 'Wajib'],
            2 => ['id' => 2, 'nama' => 'Basis Data (SQL)', 'sks' => 3, 'semester' => 1, 'dosen' => 'Siti Aminah, M.Kom.', 'status' => 'Wajib'],
            3 => ['id' => 3, 'nama' => 'Logika Pemrograman (Java)', 'sks' => 2, 'semester' => 1, 'dosen' => 'Dr. Budi Santoso', 'status' => 'Wajib'],
            4 => ['id' => 4, 'nama' => 'Jaringan Komputer (VLAN)', 'sks' => 3, 'semester' => 2, 'dosen' => 'Andi Wijaya, M.T.', 'status' => 'Wajib'],
        ];
    }

    // Menampilkan semua list mata kuliah
    public function index()
    {
        $courses = $this->getCourses();
        return view('courses.index', compact('courses'));
    }

    // Menampilkan detail SATU mata kuliah berdasarkan ID
    public function show($id)
    {
        $courses = $this->getCourses();

        // INI SYARAT WAJIB TUGAS: Cek apakah ID ada di dalam array
        if (!array_key_exists($id, $courses)) {
            abort(404); // Kalau dicari nggak ada, lemparkan ke halaman Error 404
        }

        $course = $courses[$id]; // Ambil data yang pas sesuai ID
        return view('courses.show', compact('course')); // Lempar ke view detail
    }
}