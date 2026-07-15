@extends('layouts.app')

@section('content')

<style>

body{
    background:#F8FCFF;
}

/*==========================
        HEADER
===========================*/

.detail-header{

    background:linear-gradient(135deg,#DDF4FF,#F8FDFF,#EEFFF6);

    border-radius:22px;

    padding:28px 35px;

    margin-bottom:30px;

    box-shadow:0 10px 25px rgba(0,0,0,.06);

}

.detail-header h2{

    color:#184B6B;

    font-weight:700;

    margin-bottom:8px;

}

.detail-header p{

    margin:0;

    color:#6B7280;

}

/*==========================
        CARD
===========================*/

.detail-card{

    background:white;

    border:none;

    border-radius:22px;

    overflow:hidden;

    box-shadow:0 10px 25px rgba(0,0,0,.06);

}

/*==========================
        IMAGE
===========================*/

.article-image{

    width:100%;

    max-height:360px;
border-radius:16px;
    object-fit:cover;

}

/*==========================
        BODY
===========================*/

.detail-body{

    padding:35px;

}

.article-title{

    color:#184B6B;

    font-weight:700;

    margin-bottom:25px;

}

/*==========================
        INFO
===========================*/

.info-box{

    background:#F8FCFF;

    border:1px solid #E4EEF7;

    border-radius:15px;

    padding:18px;

    margin-bottom:30px;

}

.info-item{

    margin-bottom:10px;

    color:#475569;

}

.info-item:last-child{

    margin-bottom:0;

}

.badge-publish{

    background:#DDF8E6;

    color:#198754;

    padding:6px 14px;

    border-radius:20px;

}

.badge-draft{

    background:#FFF3D8;

    color:#B7791F;

    padding:6px 14px;

    border-radius:20px;

}

/*==========================
        CONTENT
===========================*/

.content-box{

    line-height:1.9;

    color:#444;

    font-size:15px;

}
.content-card{

    background:#FCFEFF;

    border:1px solid #E3EEF7;

    border-radius:16px;

    padding:25px;

    line-height:1.9;
    text-align: justify;
    color:#475569;

    box-shadow:0 4px 10px rgba(0,0,0,.04);

}
</style>

<div class="container py-4" style="max-width:900px;">

<div class="detail-header">

<h2>

👁️ Detail Artikel

</h2>

<p>

Lihat informasi lengkap artikel yang telah dibuat.

</p>

</div>

<div class="detail-card">

@if($article->thumbnail)

<img
src="{{ asset('storage/'.$article->thumbnail) }}"
class="article-image">

@endif

<div class="detail-body">

<h2 class="article-title">

{{ $article->title }}

</h2>

<div class="info-box">

<div class="row">

<div class="col-md-6">

<div class="info-item">

<strong>📂 Kategori :</strong>

{{ $article->category->name }}

</div>

<div class="info-item">

<strong>👤 Penulis :</strong>

{{ $article->user->name }}

</div>

</div>

<div class="col-md-6">

<div class="info-item">

<strong>🌍 Status :</strong>

@if($article->status=='published')

<span class="badge-publish">

Published

</span>

@else

<span class="badge-draft">

Draft

</span>

@endif

</div>

<div class="info-item">

<strong>📅 Tanggal :</strong>

{{ $article->created_at->translatedFormat('d F Y') }}

</div>

</div>

</div>

</div>

<h5 class="mb-3">

📝 Konten

</h5>

<div class="content-card">

{!! nl2br(e($article->content)) !!}

</div>
<hr class="my-4">
<div class="d-flex gap-2 flex-wrap">

    <a href="{{ route('articles.edit',$article->id) }}"
       class="btn btn-edit">

        ✏️ Edit Artikel

    </a>

    <a href="{{ route('articles.index') }}"
       class="btn btn-back">

        ← Kembali

    </a>

</div>

</div>

</div>

</div>

<style>

/*==========================
        BUTTON
===========================*/

.btn-edit{

    background:#FFF4D6;

    color:#B7791F;

    border:none;

    border-radius:12px;

    padding:10px 22px;

    font-weight:600;

    transition:.3s;

}

.btn-edit:hover{

    background:#FFE6A8;

    color:#9A6B0D;

    transform:translateY(-2px);

}

.btn-back{

    background:#EEF5FA;

    color:#184B6B;

    border:none;

    border-radius:12px;

    padding:10px 22px;

    font-weight:600;

    transition:.3s;

}

.btn-back:hover{

    background:#DCEFFF;

    color:#184B6B;

    transform:translateY(-2px);

}

/*==========================
        CARD EFFECT
===========================*/

.detail-card{

    transition:.35s;

}

.detail-card:hover{

    transform:translateY(-4px);

    box-shadow:0 18px 35px rgba(0,0,0,.08);

}

/*==========================
        RESPONSIVE
===========================*/

@media(max-width:768px){

.detail-header{

    padding:22px;

}

.detail-header h2{

    font-size:26px;

}

.detail-body{

    padding:25px;

}

.article-title{

    font-size:26px;

}

.article-image{

    max-height:240px;

}

.btn-edit,
.btn-back{

    width:100%;

}

}

</style>

@endsection