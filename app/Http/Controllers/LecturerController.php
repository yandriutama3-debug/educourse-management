<?php
// ═══════════════════════════════════════════════════════════════
//  LecturerController.php
// ═══════════════════════════════════════════════════════════════
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function index()
    {
        $lecturers = [
            ['nama' => 'Dr. Bambang Irawan, M.Kom',   'nidn' => '0112345678', 'keahlian' => 'Kecerdasan Buatan',      'foto' => 'https://i.pravatar.cc/150?img=1'],
            ['nama' => 'Prof. Sri Wahyuni, Ph.D',      'nidn' => '0198765432', 'keahlian' => 'Basis Data',             'foto' => 'https://i.pravatar.cc/150?img=5'],
            ['nama' => 'Ir. Hadi Santoso, M.T',        'nidn' => '0145678901', 'keahlian' => 'Jaringan Komputer',      'foto' => 'https://i.pravatar.cc/150?img=3'],
            ['nama' => 'Dr. Rina Kartika, M.Si',       'nidn' => '0167890123', 'keahlian' => 'Rekayasa Perangkat Lunak','foto' => 'https://i.pravatar.cc/150?img=9'],
            ['nama' => 'Drs. Agus Prasetyo, M.Kom',   'nidn' => '0134567890', 'keahlian' => 'Pemrograman Web',        'foto' => 'https://i.pravatar.cc/150?img=7'],
            ['nama' => 'Dr. Lilis Suryani, M.T',       'nidn' => '0189012345', 'keahlian' => 'Keamanan Siber',         'foto' => 'https://i.pravatar.cc/150?img=11'],
            ['nama' => 'Prof. Joko Widodo, Ph.D',      'nidn' => '0156789012', 'keahlian' => 'Data Science',           'foto' => 'https://i.pravatar.cc/150?img=15'],
            ['nama' => 'Dr. Fitri Amalia, M.Kom',      'nidn' => '0123456789', 'keahlian' => 'Mobile Computing',       'foto' => 'https://i.pravatar.cc/150?img=20'],
        ];

        return view('lecturers.index', compact('lecturers'));
    }
}