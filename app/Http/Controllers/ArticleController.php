<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private function getArticles()
    {
        return [
            'belajar-laravel-10' => [
                'title' => 'Cara Mudah Belajar Laravel 10',
                'slug' => 'belajar-laravel-10',
                'content' => 'Laravel 10 membawa banyak fitur baru yang memudahkan proses web development tanpa perlu pusing mikirin konfigurasi yang ribet.',
                'author' => 'Admin'
            ],
            'tips-bootstrap-5' => [
                'title' => 'Tips UI Responsive dengan Bootstrap 5',
                'slug' => 'tips-bootstrap-5',
                'content' => 'Gunakan sistem grid seperti container, row, dan col untuk membuat layout yang rapi dan pas di layar HP maupun laptop.',
                'author' => 'Admin'
            ]
        ];
    }

    public function index()
    {
        $articles = $this->getArticles();
        return view('articles.index', compact('articles'));
    }

    public function show($slug)
    {
        $articles = $this->getArticles();

        if (!array_key_exists($slug, $articles)) {
            abort(404);
        }

        $article = $articles[$slug];
        return view('articles.show', compact('article'));
    }
}