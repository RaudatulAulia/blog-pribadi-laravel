@extends('layouts.app')

@section('content')

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

*{
    font-family:'Poppins',sans-serif;
}

body{
    background:linear-gradient(135deg,#EEF8FF,#FFFFFF,#F5FFF9);
}

/*==============================
        HERO
===============================*/

.hero{

    position:relative;

    overflow:hidden;

    background:linear-gradient(135deg,#D8F2FF,#FFFFFF,#E8FFF4);

    border-radius:28px;

    padding:38px;

    margin-bottom:28px;

    text-align:center;

    box-shadow:0 12px 35px rgba(0,0,0,.08);

}

.hero::before{

    content:"";

    position:absolute;

    width:220px;

    height:220px;

    border-radius:50%;

    background:#BFEAFF;

    top:-90px;

    right:-80px;

    opacity:.45;

}

.hero::after{

    content:"";

    position:absolute;

    width:170px;

    height:170px;

    border-radius:50%;

    background:#D6F9E8;

    bottom:-70px;

    left:-60px;

    opacity:.65;

}

.hero h2{

    position:relative;

    z-index:2;

    font-size:30px;

    font-weight:700;

    color:#24536D;

    margin-bottom:8px;

}

.hero h5{

    position:relative;

    z-index:2;

    color:#4A9FEA;

    font-weight:600;

    margin-bottom:15px;

}

.hero p{

    position:relative;

    z-index:2;

    max-width:650px;

    margin:auto;

    color:#6C7A89;

    line-height:28px;

}

/*==============================
      CARD UMUM
===============================*/

.dashboard-card{

    border:none;

    border-radius:22px;

    background:white;

    box-shadow:0 10px 25px rgba(0,0,0,.07);

    transition:.35s;

    overflow:hidden;

}

.dashboard-card:hover{

    transform:translateY(-6px);

    box-shadow:0 18px 35px rgba(0,0,0,.12);

}

.dashboard-card .card-body{

    padding:25px;

}

/*==============================
      CARD STATISTIK
===============================*/

.stat-card{

    text-align:center;

}

.stat-icon{

    width:60px;

    height:60px;

    border-radius:18px;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:28px;

    margin:auto;

    margin-bottom:18px;

}

.bg-blue{

    background:#DDF2FF;

}

.bg-green{

    background:#DDF8EA;

}

.bg-orange{

    background:#FFF1DB;

}

.bg-red{

    background:#FFE7E7;

}

.stat-title{

    font-size:14px;

    color:#75879B;

    margin-bottom:6px;

}

.stat-number{

    font-size:34px;

    font-weight:700;

    color:#24536D;

}

.section-title{

    color:#24536D;

    font-size:21px;

    font-weight:700;

}

.btn-soft{

    border:none;

    border-radius:40px;

    padding:10px 24px;

    font-weight:600;

    transition:.3s;

}

.btn-soft:hover{

    transform:translateY(-3px);

}

</style>

<div class="container py-4">

<!-- HERO -->

<div class="hero">

    <h2>

        👋 Selamat Datang, {{ Auth::user()->name }}

    </h2>

    <h5>

        Dashboard Blog Pribadi

    </h5>

    <p>

        Kelola artikel, kategori, dan publikasi blog dengan lebih mudah.
        Semua aktivitas blog dapat dilakukan melalui dashboard yang sederhana,
        bersih, dan nyaman digunakan.

    </p>

</div>

<div class="row">

<!-- Total Artikel -->

<div class="col-lg-3 col-md-6 mb-4">

<div class="dashboard-card stat-card">

<div class="card-body">

<div class="stat-icon bg-blue">

📝

</div>

<div class="stat-title">

Total Artikel

</div>

<div class="stat-number">

{{ \App\Models\Article::where('user_id',auth()->id())->count() }}

</div>

</div>

</div>

</div>

<!-- Total Kategori -->

<div class="col-lg-3 col-md-6 mb-4">

<div class="dashboard-card stat-card">

<div class="card-body">

<div class="stat-icon bg-green">

📂

</div>

<div class="stat-title">

Kategori

</div>

<div class="stat-number">

{{ \App\Models\Category::where('user_id',auth()->id())->count() }}

</div>

</div>

</div>

</div>
<!-- Artikel Dipublikasikan -->

<div class="col-lg-3 col-md-6 mb-4">

    <div class="dashboard-card stat-card">

        <div class="card-body">

            <div class="stat-icon bg-orange">

                🌍

            </div>

            <div class="stat-title">

                Dipublikasikan

            </div>

            <div class="stat-number">

                {{ \App\Models\Article::where('user_id',auth()->id())->where('status','published')->count() }}

            </div>

        </div>

    </div>

</div>

<!-- Draft -->

<div class="col-lg-3 col-md-6 mb-4">

    <div class="dashboard-card stat-card">

        <div class="card-body">

            <div class="stat-icon bg-red">

                📄

            </div>

            <div class="stat-title">

                Draft

            </div>

            <div class="stat-number">

                {{ \App\Models\Article::where('user_id',auth()->id())->where('status','draft')->count() }}

            </div>

        </div>

    </div>

</div>

</div>

<!-- ========================= -->

<div class="row">

    <!-- ARTIKEL TERBARU -->

    <div class="col-lg-8 mb-4">

        <div class="dashboard-card">

            <div class="card-body">

                <h4 class="section-title mb-4">

                    📰 Artikel Terbaru

                </h4>

                @php

                    $latestArticles = \App\Models\Article::where('user_id',auth()->id())
                                        ->latest()
                                        ->take(5)
                                        ->get();

                @endphp

                @forelse($latestArticles as $article)

                <div class="d-flex justify-content-between align-items-center py-3 border-bottom">

                    <div>

                        <h6 class="mb-1 fw-semibold">

                            {{ $article->title }}

                        </h6>

                        <small class="text-muted">

                            {{ $article->created_at->format('d M Y') }}

                        </small>

                    </div>

                    <span class="badge rounded-pill

                    {{ $article->status=='published'

                        ? 'bg-success'

                        : 'bg-warning text-dark' }}">

                        {{ ucfirst($article->status) }}

                    </span>

                </div>

                @empty

                <div class="text-center py-5 text-muted">

                    <h5>Belum Ada Artikel</h5>

                    <p>

                        Silakan buat artikel pertama Anda.

                    </p>

                </div>

                @endforelse

            </div>

        </div>

    </div>
        <!-- SIDEBAR KANAN -->

    <div class="col-lg-4 mb-4">

        <!-- Progress Blog -->

        <div class="dashboard-card mb-4">

            <div class="card-body">

                <h4 class="section-title mb-4">

                    📊 Progress Blog

                </h4>

                @php

                    $total = \App\Models\Article::where('user_id',auth()->id())->count();

                    $publish = \App\Models\Article::where('user_id',auth()->id())
                                ->where('status','published')
                                ->count();

                    $draft = \App\Models\Article::where('user_id',auth()->id())
                                ->where('status','draft')
                                ->count();

                    $persen = $total > 0 ? ($publish / $total) * 100 : 0;

                @endphp

                <div class="progress mb-3" style="height:10px;border-radius:30px;">

                    <div class="progress-bar bg-success"

                         style="width:{{ $persen }}%;border-radius:30px;">

                    </div>

                </div>

                <div class="d-flex justify-content-between">

                    <small class="text-muted">

                        Published

                    </small>

                    <strong class="text-success">

                        {{ number_format($persen,0) }}%

                    </strong>

                </div>

                <hr>

                <div class="row text-center">

                    <div class="col-6">

                        <h4 class="fw-bold text-primary">

                            {{ $publish }}

                        </h4>

                        <small class="text-muted">

                            Publish

                        </small>

                    </div>

                    <div class="col-6">

                        <h4 class="fw-bold text-warning">

                            {{ $draft }}

                        </h4>

                        <small class="text-muted">

                            Draft

                        </small>

                    </div>

                </div>

            </div>

        </div>

        <!-- Informasi -->

        <div class="dashboard-card mb-4">

            <div class="card-body">

                <h4 class="section-title mb-3">

                    📅 Hari Ini

                </h4>

                <h5 class="fw-bold text-primary">

                    {{ now()->translatedFormat('l') }}

                </h5>

                <p class="text-muted mb-0">

                    {{ now()->translatedFormat('d F Y') }}

                </p>

            </div>

        </div>

        <!-- Tips -->

        <div class="dashboard-card">

            <div class="card-body">

                <h4 class="section-title mb-3">

                    💡 Tips Menulis

                </h4>

                <ul class="mb-0 ps-3 text-muted">

                    <li>Gunakan judul yang menarik.</li>

                    <li>Tambahkan thumbnail berkualitas.</li>

                    <li>Pilih kategori yang sesuai.</li>

                    <li>Tulis artikel secara konsisten.</li>

                </ul>

            </div>

        </div>

    </div>

</div>

<!-- QUICK ACTION -->

<div class="dashboard-card mt-2">

    <div class="card-body">

        <h4 class="section-title text-center mb-4">

            🚀 Quick Action

        </h4>

        <div class="row text-center">

            <div class="col-md-4 mb-3">

                <a href="{{ route('articles.create') }}"
                   class="btn btn-primary rounded-pill px-4 py-2">

                    ➕ Tambah Artikel

                </a>

            </div>

            <div class="col-md-4 mb-3">

                <a href="{{ route('categories.create') }}"
                   class="btn btn-success rounded-pill px-4 py-2">

                    📂 Tambah Kategori

                </a>

            </div>

            <div class="col-md-4 mb-3">

                <a href="{{ route('blog.index') }}"
                   class="btn btn-info text-white rounded-pill px-4 py-2">

                    🌐 Lihat Blog

                </a>

            </div>

        </div>

    </div>



</div>

</div>

<style>

/* ==========================
        ANIMASI
========================== */

.dashboard-card{

    animation:fadeUp .6s ease;

}

@keyframes fadeUp{

    from{

        opacity:0;

        transform:translateY(20px);

    }

    to{

        opacity:1;

        transform:translateY(0);

    }

}

/* ==========================
      SHINE EFFECT
========================== */

.dashboard-card{

    position:relative;

    overflow:hidden;

}

.dashboard-card::before{

    content:"";

    position:absolute;

    top:0;

    left:-120%;

    width:80%;

    height:100%;

    background:linear-gradient(

        120deg,

        transparent,

        rgba(255,255,255,.45),

        transparent

    );

    transition:.9s;

}

.dashboard-card:hover::before{

    left:140%;

}

/* ==========================
        BUTTON
========================== */

.btn{

    transition:.3s;

}

.btn:hover{

    transform:translateY(-3px);

    box-shadow:0 12px 20px rgba(0,0,0,.12);

}

/* ==========================
      RESPONSIVE
========================== */

@media(max-width:992px){

.hero{

padding:28px;

}

.hero h2{

font-size:25px;

}

.hero p{

font-size:15px;

line-height:26px;

}

.stat-number{

font-size:28px;

}

.section-title{

font-size:20px;

}

}

@media(max-width:768px){

.hero{

padding:22px;

}

.hero h2{

font-size:22px;

}

.hero h5{

font-size:18px;

}

.dashboard-card .card-body{

padding:20px;

}

.stat-icon{

width:50px;

height:50px;

font-size:22px;

}

.stat-number{

font-size:24px;

}

.btn{

width:100%;

margin-bottom:10px;

}

}

</style>

@endsection