@extends('layouts.app')

@section('content')

<style>

body{

background:#F8FCFF;

font-family:'Poppins',sans-serif;

}

/*=========================
        HEADER
=========================*/

.edit-header{

background:linear-gradient(135deg,#DDF4FF,#F8FDFF,#EEFFF6);

border-radius:22px;

padding:30px 35px;

margin-bottom:30px;

box-shadow:0 10px 25px rgba(0,0,0,.06);

}

.edit-header h2{

color:#184B6B;

font-weight:700;

margin-bottom:8px;

}

.edit-header p{

margin:0;

color:#6B7280;

}

/*=========================
        CARD
=========================*/

.form-card{

background:#fff;

border-radius:20px;

padding:35px;

box-shadow:0 10px 25px rgba(0,0,0,.06);

}

/*=========================
        LABEL
=========================*/

.form-label{

font-weight:600;

color:#184B6B;

margin-bottom:8px;

}

/*=========================
        INPUT
=========================*/

.form-control,
.form-select{

border:1px solid #DCEAF7;

border-radius:12px;

padding:12px 15px;

background:#FCFEFF;

transition:.3s;

}

.form-control:focus,
.form-select:focus{

border-color:#47B5FF;

box-shadow:0 0 0 .15rem rgba(71,181,255,.18);

}

textarea{

resize:none;

}

.old-thumb{

width:180px;

border-radius:14px;

margin-top:12px;

box-shadow:0 8px 20px rgba(0,0,0,.08);

}

.btn-update{

background:#47B5FF;

color:white;

border:none;

border-radius:12px;

padding:10px 24px;

font-weight:600;

transition:.3s;

}

.btn-update:hover{

background:#2196F3;

color:white;

}

.btn-back{

background:#EEF5FA;

color:#184B6B;

border:none;

border-radius:12px;

padding:10px 24px;

font-weight:600;

transition:.3s;

}

.btn-back:hover{

background:#DCEFFF;

color:#184B6B;

}

.alert{

border-radius:12px;

}

</style>

<div class="container py-4" style="max-width:900px;">

<div class="edit-header">

<h2>

✏️ Edit Artikel

</h2>

<p>

Perbarui informasi artikel Anda dengan mudah.

</p>

</div>

@if ($errors->any())

<div class="alert alert-danger">

<ul class="mb-0">

@foreach ($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

</div>

@endif

<div class="form-card">

<form
action="{{ route('articles.update',$article->id) }}"
method="POST"
enctype="multipart/form-data">

@csrf
@method('PUT')

<div class="mb-4">

<label class="form-label">

Judul Artikel

</label>

<input
type="text"
name="title"
class="form-control"
value="{{ old('title',$article->title) }}"
required>

</div>

<div class="row">

<div class="col-md-6 mb-4">

<label class="form-label">

Kategori

</label>

<select
name="category_id"
class="form-select"
required>

@foreach($categories as $category)

<option
value="{{ $category->id }}"
{{ old('category_id',$article->category_id)==$category->id ? 'selected':'' }}>

{{ $category->name }}

</option>

@endforeach

</select>

</div>

<div class="col-md-6 mb-4">

<label class="form-label">

Status

</label>

<select
name="status"
class="form-select"
required>

<option
value="draft"
{{ old('status',$article->status)=='draft' ? 'selected':'' }}>

📝 Draft

</option>

<option
value="published"
{{ old('status',$article->status)=='published' ? 'selected':'' }}>

🌍 Published

</option>

</select>

</div>

</div>

<div class="mb-4">

<label class="form-label">

Konten

</label>

<textarea
name="content"
rows="10"
class="form-control"
required>{{ old('content',$article->content) }}</textarea>

</div>

<div class="mb-4">

<label class="form-label">

Thumbnail Baru

</label>

<input
type="file"
name="thumbnail"
class="form-control">
@if($article->thumbnail)

<div class="mt-3">

<label class="form-label">

Thumbnail Saat Ini

</label>

<br>

<img
src="{{ asset('storage/'.$article->thumbnail) }}"
class="old-thumb">

</div>

@endif

</div>

<div class="d-flex gap-2 flex-wrap">

<button
type="submit"
class="btn btn-update">

💾 Update Artikel

</button>

<a
href="{{ route('articles.index') }}"
class="btn btn-back">

← Kembali

</a>

</div>

</form>

</div>

</div>

<style>

/*=========================
      HOVER EFFECT
=========================*/

.form-card{

transition:.35s;

}

.form-card:hover{

transform:translateY(-4px);

box-shadow:0 18px 35px rgba(0,0,0,.08);

}

.btn-update,
.btn-back{

transition:.3s;

}

.btn-update:hover,
.btn-back:hover{

transform:translateY(-2px);

}

.form-control:hover,
.form-select:hover{

border-color:#9FD8FF;

}

/*=========================
      RESPONSIVE
=========================*/

@media(max-width:768px){

.edit-header{

padding:22px;

}

.edit-header h2{

font-size:26px;

}

.form-card{

padding:25px;

}

.old-thumb{

width:100%;

max-width:220px;

}

.btn-update,
.btn-back{

width:100%;

}

}

</style>

@endsection