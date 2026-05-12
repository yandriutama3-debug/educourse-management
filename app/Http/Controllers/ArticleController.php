<?php
// ════════════════════════════════════════
// ArticleController.php
// ════════════════════════════════════════
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private function getAllArticles(): array
    {
        return [
            [
                'id'      => 1,
                'title'   => 'Mengenal Framework Laravel untuk Pemula',
                'slug'    => 'mengenal-framework-laravel-untuk-pemula',
                'excerpt' => 'Laravel adalah framework PHP yang elegan dengan sintaks yang ekspresif. Pelajari cara memulai proyek pertama Anda.',
                'content' => 'Laravel adalah framework web PHP yang bersifat open-source, dikembangkan oleh Taylor Otwell. Framework ini menggunakan pola arsitektur MVC (Model-View-Controller) yang memisahkan logika bisnis dari tampilan. Laravel menyediakan banyak fitur seperti Eloquent ORM, routing yang kuat, blade templating, authentication, dan masih banyak lagi. Untuk memulai, Anda hanya perlu menjalankan perintah composer create-project laravel/laravel nama-project. Setelah itu, konfigurasi file .env sesuai kebutuhan, lalu jalankan php artisan serve untuk memulai server development.',
                'author'  => 'Admin EduCourse',
                'date'    => '1 Juni 2025',
                'category'=> 'Tutorial',
                'tag'     => 'Laravel',
            ],
            [
                'id'      => 2,
                'title'   => 'Panduan Lengkap Bootstrap 5 Grid System',
                'slug'    => 'panduan-lengkap-bootstrap-5-grid-system',
                'excerpt' => 'Pahami sistem grid Bootstrap 5 untuk membuat layout responsif yang sempurna di semua ukuran layar.',
                'content' => 'Bootstrap 5 hadir dengan sistem grid 12 kolom yang powerful. Grid system Bootstrap menggunakan flexbox sebagai dasarnya. Kelas-kelas utama yang perlu Anda ketahui adalah container, row, dan col. Container adalah wrapper utama yang memberikan horizontal padding. Row adalah pembungkus kolom yang menggunakan negative margin. Col mendefinisikan lebar konten berdasarkan 12 kolom yang tersedia. Breakpoints Bootstrap 5: xs (<576px), sm (≥576px), md (≥768px), lg (≥992px), xl (≥1200px), xxl (≥1400px). Gunakan kelas seperti col-md-6 untuk 6 kolom pada layar medium ke atas.',
                'author'  => 'Tim Pengajar',
                'date'    => '5 Juni 2025',
                'category'=> 'Tutorial',
                'tag'     => 'Bootstrap',
            ],
            [
                'id'      => 3,
                'title'   => '10 Tips Produktivitas untuk Mahasiswa Informatika',
                'slug'    => '10-tips-produktivitas-mahasiswa-informatika',
                'excerpt' => 'Jadilah mahasiswa informatika yang produktif dengan 10 tips ini yang telah terbukti meningkatkan performa akademik.',
                'content' => 'Menjadi mahasiswa informatika yang produktif membutuhkan strategi yang tepat. Pertama, kuasai version control dengan Git dari awal. Kedua, bangun portofolio proyek sejak semester pertama. Ketiga, ikuti komunitas developer online seperti GitHub, Stack Overflow, dan forum-forum teknologi. Keempat, pelajari satu bahasa pemrograman secara mendalam sebelum berpindah ke yang lain. Kelima, biasakan menulis dokumentasi untuk setiap proyek yang Anda buat. Keenam, praktikkan clean code dan coding standards. Ketujuh, bergabung dengan UKM atau organisasi mahasiswa teknologi. Kedelapan, manfaatkan resources gratis seperti freeCodeCamp, The Odin Project, dan dokumentasi resmi. Kesembilan, bangun kebiasaan belajar mandiri (self-learning). Kesepuluh, jaga kesehatan mental dan fisik karena itu sama pentingnya.',
                'author'  => 'Redaksi EduCourse',
                'date'    => '8 Juni 2025',
                'category'=> 'Tips & Trik',
                'tag'     => 'Produktivitas',
            ],
            [
                'id'      => 4,
                'title'   => 'Memahami Konsep OOP dalam PHP Modern',
                'slug'    => 'memahami-konsep-oop-dalam-php-modern',
                'excerpt' => 'Object-Oriented Programming adalah paradigma penting yang wajib dikuasai setiap developer PHP.',
                'content' => 'Object-Oriented Programming (OOP) adalah paradigma pemrograman yang mengorganisir kode dalam bentuk objek. Empat pilar utama OOP adalah Encapsulation, Inheritance, Polymorphism, dan Abstraction. Dalam PHP, class didefinisikan dengan keyword class. Properties adalah variabel dalam class, sedangkan methods adalah fungsi dalam class. Constructor (__construct) dijalankan saat objek dibuat. Inheritance memungkinkan class anak mewarisi properties dan methods dari class induk menggunakan keyword extends. Interface mendefinisikan kontrak yang harus dipenuhi oleh class yang mengimplementasikannya.',
                'author'  => 'Dr. Rina Kartika',
                'date'    => '10 Juni 2025',
                'category'=> 'Akademik',
                'tag'     => 'PHP',
            ],
            [
                'id'      => 5,
                'title'   => 'Karier di Bidang Data Science: Peluang dan Tantangan',
                'slug'    => 'karier-data-science-peluang-dan-tantangan',
                'excerpt' => 'Data Science menjadi salah satu profesi paling diminati. Apa yang dibutuhkan untuk berkarier di bidang ini?',
                'content' => 'Data Science adalah bidang interdisipliner yang menggabungkan statistik, matematika, dan pemrograman untuk mengekstrak pengetahuan dari data. Seorang Data Scientist perlu menguasai Python atau R, SQL, machine learning, statistik, dan kemampuan visualisasi data. Tools yang umum digunakan antara lain Jupyter Notebook, pandas, NumPy, scikit-learn, TensorFlow, dan Tableau. Di Indonesia, permintaan Data Scientist terus meningkat terutama di sektor fintech, e-commerce, dan startup teknologi. Gaji awal seorang Data Scientist junior bisa mencapai 8-15 juta rupiah per bulan.',
                'author'  => 'Prof. Joko Widodo',
                'date'    => '12 Juni 2025',
                'category'=> 'Karier',
                'tag'     => 'Data Science',
            ],
        ];
    }

    public function index()
    {
        $articles = $this->getAllArticles();
        return view('articles.index', compact('articles'));
    }

    public function show($slug)
    {
        $articles = $this->getAllArticles();
        $article  = null;

        foreach ($articles as $a) {
            if ($a['slug'] === $slug) {
                $article = $a;
                break;
            }
        }

        if (!$article) {
            return response()->view('errors.404', [], 404);
        }

        $related = array_filter($articles, fn($a) => $a['category'] === $article['category'] && $a['slug'] !== $slug);
        $related = array_slice(array_values($related), 0, 3);

        return view('articles.show', compact('article', 'related'));
    }
}