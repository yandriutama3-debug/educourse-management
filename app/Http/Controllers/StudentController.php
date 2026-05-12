<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private function getAllStudents(): array
    {
        return [
            ['nama' => 'Budi Santoso',       'nim' => '220001', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2022, 'status' => 'Aktif'],
            ['nama' => 'Siti Rahayu',         'nim' => '220002', 'jurusan' => 'Sistem Informasi',   'angkatan' => 2022, 'status' => 'Aktif'],
            ['nama' => 'Ahmad Fauzi',         'nim' => '210003', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2021, 'status' => 'Aktif'],
            ['nama' => 'Dewi Lestari',        'nim' => '210004', 'jurusan' => 'Manajemen Informatika', 'angkatan' => 2021, 'status' => 'Nonaktif'],
            ['nama' => 'Rizky Pratama',       'nim' => '220005', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2022, 'status' => 'Aktif'],
            ['nama' => 'Nur Hidayah',         'nim' => '230006', 'jurusan' => 'Sistem Informasi',   'angkatan' => 2023, 'status' => 'Aktif'],
            ['nama' => 'Dian Permata',        'nim' => '200007', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2020, 'status' => 'Nonaktif'],
            ['nama' => 'Fajar Nugroho',       'nim' => '230008', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2023, 'status' => 'Aktif'],
            ['nama' => 'Indah Kusuma',        'nim' => '220009', 'jurusan' => 'Manajemen Informatika', 'angkatan' => 2022, 'status' => 'Aktif'],
            ['nama' => 'Hendra Wijaya',       'nim' => '210010', 'jurusan' => 'Sistem Informasi',   'angkatan' => 2021, 'status' => 'Aktif'],
            ['nama' => 'Lina Marlina',        'nim' => '230011', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2023, 'status' => 'Aktif'],
            ['nama' => 'Kevin Aldrian',       'nim' => '220012', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2022, 'status' => 'Nonaktif'],
            ['nama' => 'Maya Angelika',       'nim' => '230013', 'jurusan' => 'Sistem Informasi',   'angkatan' => 2023, 'status' => 'Aktif'],
            ['nama' => 'Rian Saputra',        'nim' => '210014', 'jurusan' => 'Manajemen Informatika', 'angkatan' => 2021, 'status' => 'Aktif'],
            ['nama' => 'Tania Putri',         'nim' => '230015', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2023, 'status' => 'Aktif'],
            ['nama' => 'Yoga Firmansyah',     'nim' => '220016', 'jurusan' => 'Sistem Informasi',   'angkatan' => 2022, 'status' => 'Aktif'],
            ['nama' => 'Wulandari Sari',      'nim' => '200017', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2020, 'status' => 'Nonaktif'],
            ['nama' => 'Anggara Putra',       'nim' => '230018', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2023, 'status' => 'Aktif'],
            ['nama' => 'Cindy Aulia',         'nim' => '220019', 'jurusan' => 'Manajemen Informatika', 'angkatan' => 2022, 'status' => 'Aktif'],
            ['nama' => 'Doni Setiawan',       'nim' => '210020', 'jurusan' => 'Teknik Informatika', 'angkatan' => 2021, 'status' => 'Aktif'],
        ];
    }

    public function index(Request $request)
    {
        $students = $this->getAllStudents();
        $search   = $request->query('search', '');

        if ($search) {
            $students = array_filter($students, function ($s) use ($search) {
                return stripos($s['nama'], $search) !== false
                    || stripos($s['nim'], $search) !== false
                    || stripos($s['jurusan'], $search) !== false;
            });
            $students = array_values($students);
        }

        return view('students.index', compact('students', 'search'));
    }
}