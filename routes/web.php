<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, StudentController, LecturerController, CourseController, ArticleController, ProfileController};

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/lecturers', [LecturerController::class, 'index'])->name('lecturers.index');
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/course/{id}', [CourseController::class, 'show'])->name('course.detail');

Route::get('/student/{name?}', function ($name = 'Guest') {
    return "Hello " . $name;
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
});

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});