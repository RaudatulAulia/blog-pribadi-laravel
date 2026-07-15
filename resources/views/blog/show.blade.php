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
    height:auto;
    max-height:600px;
    object-fit:contain;
    display:block;
    margin:0 auto 30px;
    border-radius:16px;
    background:#fff;
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
/* =======================
   KOMENTAR
======================= */

.comment-section{
    margin-top:60px;
}

.comment-title{
    font-size:28px;
    font-weight:700;
    color:#1E4E68;
    margin-bottom:25px;
}

.comment-form{

    background:#FDFEFF;
    border-radius:20px;
    padding:30px;
    box-shadow:0 8px 25px rgba(0,0,0,.05);
    margin-bottom:45px;

}

.comment-form label{

    font-weight:600;
    color:#456;

}

.comment-form .form-control{

    border-radius:12px;
    border:1px solid #DCEAF4;
    padding:12px;

}

.comment-form .form-control:focus{

    border-color:#47B5FF;
    box-shadow:0 0 0 .2rem rgba(71,181,255,.15);

}

.btn-comment{

    background:#47B5FF;
    color:white;
    border:none;
    padding:12px 28px;
    border-radius:12px;
    transition:.3s;

}

.btn-comment:hover{

    background:#279AF1;

}

.comment-count{

    font-size:22px;
    font-weight:700;
    color:#1E4E68;
    margin-bottom:25px;

}

.comment-card{

    background:white;
    border-radius:18px;
    padding:22px;
    margin-bottom:18px;
    box-shadow:0 8px 25px rgba(0,0,0,.05);
    transition:.3s;

}

.comment-card:hover{

    transform:translateY(-2px);

}

.comment-header{

    display:flex;
    align-items:center;
    margin-bottom:15px;

}

.avatar{

    width:50px;
    height:50px;
    border-radius:50%;
    background:#47B5FF;
    color:white;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:20px;
    font-weight:bold;
    margin-right:15px;

}

.comment-name{

    font-size:18px;
    font-weight:700;
    color:#1E4E68;

}

.comment-date{

    font-size:13px;
    color:#888;

}

.comment-text{

    font-size:15px;
    color:#555;
    line-height:28px;

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
<hr class="my-5">

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="comment-section">

<h2 class="comment-title">
💬 Tinggalkan Komentar
</h2>

@if(session('success'))

<div class="alert alert-success rounded-4">

{{ session('success') }}

</div>

@endif

<div class="comment-form">

<form action="{{ route('comments.store',$article->id) }}" method="POST">

@csrf

<div class="mb-3">

<label>Nama</label>

<input
type="text"
name="name"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Email</label>

<input
type="email"
name="email"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Komentar</label>

<textarea
name="comment"
rows="5"
class="form-control"
required></textarea>

</div>

<button
class="btn-comment">

Kirim Komentar

</button>

</form>

</div>

<h3 class="comment-count">

Semua Komentar ({{ $article->comments->count() }})

</h3>

@forelse($article->comments as $comment)

<div class="comment-card">

<div class="comment-header">

<div class="avatar">

{{ strtoupper(substr($comment->name,0,1)) }}

</div>

<div>

<div class="comment-name">

{{ $comment->name }}

</div>

<div class="comment-date">

{{ $comment->created_at->format('d M Y H:i') }}

</div>

</div>

</div>

<div class="comment-text">

{{ $comment->comment }}

</div>

</div>

@empty

<div class="alert alert-light rounded-4">

Belum ada komentar.

</div>

@endforelse

</div>
@endsection