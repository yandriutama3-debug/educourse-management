<?php
namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function index()
    {
        $students = [];
        for ($i = 1; $i <= 15; $i++) {
            $students[] = [
                'nomor' => $i,
                'nama' => 'Mahasiswa ' . $i,
                'nim' => '257810' . str_pad($i, 2, '0', STR_PAD_LEFT),
                'jurusan' => 'Manajemen Informatika',
                'angkatan' => 2025,
                'status' => $i % 3 == 0 ? 'Nonaktif' : 'Aktif'
            ];
        }
        return view('students.index', compact('students'));
    }
}