<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Data dummy untuk statistik dashboard
        $stats = [
            'total_students' => 15,
            'total_lecturers' => 5,
            'total_courses' => 4
        ];
        
        return view('home', compact('stats')); // Pastikan punya file resources/views/home.blade.php
    }
}