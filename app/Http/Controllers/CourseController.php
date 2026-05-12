<?php
namespace App\Http\Controllers;

class CourseController extends Controller
{
    private function getCourses() {
        return [
            1 => ['id' => 1, 'nama' => 'Pemrograman Web', 'sks' => 3, 'semester' => 1, 'dosen' => 'Budi', 'status' => 'Wajib'],
            2 => ['id' => 2, 'nama' => 'Basis Data', 'sks' => 3, 'semester' => 1, 'dosen' => 'Siti', 'status' => 'Wajib'],
        ];
    }

    public function index() {
        $courses = $this->getCourses();
        return view('courses.index', compact('courses'));
    }

    public function show($id) {
        $courses = $this->getCourses();
        if (!array_key_exists($id, $courses)) abort(404);
        $course = $courses[$id];
        return view('courses.show', compact('course'));
    }
}