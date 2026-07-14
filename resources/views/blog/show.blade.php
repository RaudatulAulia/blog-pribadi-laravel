@extends('layouts.app')

@section('content')

<style>

body{
    background:#F8FCFF;
}

/* Container */

.article-wrapper{
    max-width:900px;
    margin:auto;
}

/* Card */

.article-card{
    background:#fff;
    border:none;
    border-radius:20px;
    padding:35px;
    box-shadow:0 10px 30px rgba(0,0,0,.06);
}

/* Judul */

.article-title{
    font-size:34px;
    font-weight:700;
    color:#1E4E68;
    margin-bottom:18px;
    line-height:1.4;
}

/* Meta */

.article-meta{
    display:flex;
    flex-wrap:wrap;
    gap:12px;
    margin-bottom:25px;
}

.article-meta span{
    background:#EAF7FF;
    color:#1F6EA3;
    padding:7px 14px;
    border-radius:25px;
    font-size:14px;
}

/* Thumbnail */

.article-image{
    width:100%;
    height:300px;
    object-fit:cover;
    border-radius:16px;
    margin-bottom:30px;
}

/* Isi */

.article-content{
    font-size:16px;
    line-height:32px;
    color:#555;
    text-align:justify;
}

/* Tombol */

.btn-back{
    display:inline-block;
    margin-top:35px;
    background:#47B5FF;
    color:#fff;
    text-decoration:none;
    padding:11px 24px;
    border-radius:12px;
    transition:.3s;
}

.btn-back:hover{
    background:#2196F3;
    color:white;
}

/* Responsive */

@media(max-width:768px){

.article-card{

padding:22px;

}

.article-title{

font-size:27px;

}

.article-image{

height:210px;

}

.article-content{

font-size:15px;
line-height:28px;

}

}

</style>

<div class="container py-5">

<div class="article-wrapper">

<div class="article-card">

<h1 class="article-title">

{{ $article->title }}

</h1>

<div class="article-meta">

<span>

👤 {{ $article->user->name }}

</span>

<span>

📂 {{ $article->category->name }}

</span>

<span>

📅 {{ $article->created_at->format('d M Y') }}

</span>

</div>

@if($article->thumbnail)

<img
src="{{ asset('storage/'.$article->thumbnail) }}"
class="article-image">

@endif

<div class="article-content">

{!! nl2br(e($article->content)) !!}

</div>

<a
href="{{ route('blog.index') }}"
class="btn-back">

← Kembali ke Blog

</a>

</div>

</div>

</div>

@endsection