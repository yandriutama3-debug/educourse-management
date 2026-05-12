<?php
namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            'nama' => 'Yandri Utama',
            'nim' => '25781025',
            'kelas' => 'Manajemen Informatika (Semester 1)',
            'instansi' => 'Politeknik Negeri Lampung',
            'skills' => ['Laravel' => 85, 'PHP' => 90, 'Bootstrap' => 88, 'Java' => 75]
        ];
        return view('profile.index', compact('profile'));
    }
}