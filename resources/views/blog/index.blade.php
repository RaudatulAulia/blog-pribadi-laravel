@extends('layouts.app')

@section('content')

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
    font-family:'Poppins',sans-serif;
}

body{
    background:#F7FBFF;
}

/* HERO */

.hero{
    background:linear-gradient(135deg,#DFF4FF,#F7FCFF,#EEFFF6);
    border-radius:22px;
    padding:35px 40px;
    margin-bottom:30px;
    text-align:center;
    position:relative;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,.06);
}

.hero::before{
    content:"";
    position:absolute;
    width:180px;
    height:180px;
    border-radius:50%;
    background:#CFEFFF;
    top:-70px;
    right:-70px;
    opacity:.6;
}

.hero::after{
    content:"";
    position:absolute;
    width:150px;
    height:150px;
    border-radius:50%;
    background:#DFFBEA;
    bottom:-60px;
    left:-60px;
    opacity:.6;
}

.hero h2{
    color:#184B6B;
    font-weight:700;
    font-size:42px;
    margin-bottom:12px;
    position:relative;
    z-index:2;
}

.hero p{
    color:#6B7280;
    max-width:650px;
    margin:auto;
    line-height:28px;
    position:relative;
    z-index:2;
}

/* SEARCH */

.search-box{
    background:white;
    border-radius:18px;
    padding:20px;
    margin-bottom:30px;
    box-shadow:0 8px 22px rgba(0,0,0,.05);
}

.form-control,
.form-select{
    height:48px;
    border:none;
    border-radius:12px;
    background:#F2F8FD;
}

.form-control:focus,
.form-select:focus{
    box-shadow:none;
    background:#ECF7FF;
}

.btn-search{
    width:100%;
    height:48px;
    border:none;
    border-radius:12px;
    background:#47B5FF;
    color:white;
    font-weight:600;
    transition:.3s;
}

.btn-search:hover{
    background:#2196F3;
}

/* CARD */

.blog-card{
    border:none;
    border-radius:18px;
    overflow:hidden;
    background:white;
    box-shadow:0 8px 22px rgba(0,0,0,.06);
    transition:.3s;
}

.blog-card:hover{
    transform:translateY(-6px);
    box-shadow:0 15px 35px rgba(0,0,0,.10);
}

.blog-card img{
    width:100%;
    height:170px;
    object-fit:cover;
}

.blog-card .card-body{
    padding:18px;
}

.category{
    display:inline-block;
    background:#EAF7FF;
    color:#2185C5;
    padding:5px 12px;
    border-radius:20px;
    font-size:12px;
    margin-bottom:12px;
}

.blog-title{
    color:#1E4E68;
    font-size:21px;
    font-weight:700;
    margin-bottom:10px;

    display:-webkit-box;
    -webkit-line-clamp:2;
    -webkit-box-orient:vertical;
    overflow:hidden;
}

.blog-desc{
    color:#6B7280;
    font-size:15px;
    line-height:24px;
    margin-bottom:15px;

    display:-webkit-box;
    -webkit-line-clamp:3;
    -webkit-box-orient:vertical;
    overflow:hidden;
}

.meta{
    display:flex;
    justify-content:space-between;
    font-size:13px;
    color:#7B8794;
    margin-bottom:15px;
}

.btn-read{
    display:block;
    text-align:center;
    text-decoration:none;
    background:#47B5FF;
    color:white;
    padding:10px;
    border-radius:10px;
    font-weight:600;
    transition:.3s;
}

.btn-read:hover{
    background:#2196F3;
    color:white;
}

</style>

<div class="container py-4">

<div class="hero">

<h2>💻 Blog Pribadi</h2>

<p>

Temukan berbagai artikel mengenai teknologi,
pemrograman, Artificial Intelligence,
Web Development, dan informasi digital terbaru.

</p>

</div>

<div class="search-box">

<form action="{{ route('blog.index') }}" method="GET">

<div class="row g-3">

<div class="col-md-5">

<input
type="text"
name="search"
class="form-control"
placeholder="🔍 Cari artikel..."
value="{{ request('search') }}">

</div>

<div class="col-md-4">

<select
name="category"
class="form-select">

<option value="">Semua Kategori</option>

@foreach($categories as $category)

<option
value="{{ $category->id }}"
{{ request('category')==$category->id ? 'selected':'' }}>

{{ $category->name }}

</option>

@endforeach

</select>

</div>

<div class="col-md-3">

<button class="btn-search">

Cari Artikel

</button>

</div>

</div>

</form>

</div>

<div class="row justify-content-center">

@forelse($articles as $article)

<div class="col-xl-5 col-lg-6 col-md-6 mx-auto mb-4">

<div class="blog-card">

@if($article->thumbnail)

<img src="{{ asset('storage/'.$article->thumbnail) }}">

@endif

<div class="card-body">

<span class="category">

📂 {{ $article->category->name }}

</span>

<h3 class="blog-title">

{{ $article->title }}

</h3>

<p class="blog-desc">

{{ Str::limit(strip_tags($article->content),100) }}

</p>
<div class="meta">

    <span>

        👤 {{ $article->user->name }}

    </span>

    <span>

        📅 {{ $article->created_at->format('d M Y') }}

    </span>

</div>

<a href="{{ route('blog.show',$article->slug) }}"
   class="btn-read">

    Baca Selengkapnya →

</a>

</div>

</div>

</div>

@empty

<div class="col-12">

    <div class="card border-0 shadow-sm"
         style="border-radius:18px;">

        <div class="card-body text-center py-5">

            <div style="font-size:60px;">

                📄

            </div>

            <h4 class="fw-bold mt-3"
                style="color:#184B6B;">

                Belum Ada Artikel

            </h4>

            <p class="text-muted mb-0">

                Belum ada artikel yang dipublikasikan.

            </p>

        </div>

    </div>

</div>

@endforelse

</div>

</div>

<style>

/* RESPONSIVE */

@media(max-width:992px){

.blog-card img{

height:160px;

}

.hero{

padding:30px;

}

}

@media(max-width:768px){
.hero{
    padding:45px 40px;
}

.hero h2{

font-size:25px;

}

.hero p{

font-size:15px;

line-height:24px;

}

.blog-card img{

height:150px;

}

.meta{

flex-direction:column;

gap:6px;

}

.btn-search{

margin-top:5px;

}

}

</style>

@endsection