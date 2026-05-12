<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function index()
    {
        // Data dummy dosen
        $lecturers = [
            ['id' => 1, 'nama' => 'Dr. Budi Santoso', 'nidn' => '0011223344', 'keahlian' => 'Software Engineering'],
            ['id' => 2, 'nama' => 'Siti Aminah, M.Kom.', 'nidn' => '0022334455', 'keahlian' => 'Database Systems'],
            ['id' => 3, 'nama' => 'Andi Wijaya, M.T.', 'nidn' => '0033445566', 'keahlian' => 'Computer Networks'],
            ['id' => 4, 'nama' => 'Rina Melati, M.Cs.', 'nidn' => '0044556677', 'keahlian' => 'Artificial Intelligence'],
            ['id' => 5, 'nama' => 'Hendra Gunawan, M.Kom.', 'nidn' => '0055667788', 'keahlian' => 'Web Development']
        ];

        return view('lecturers.index', compact('lecturers'));
    }
}