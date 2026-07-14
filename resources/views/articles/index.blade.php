@extends('layouts.app')

@section('content')

<style>

body{
    background:#F8FCFF;
}

/* Header */

.article-header{

    position:relative;
    overflow:hidden;

    background:linear-gradient(135deg,#D8F2FF,#FFFFFF,#E8FFF4);

    border-radius:28px;

    padding:40px 35px;

    margin-bottom:30px;

    box-shadow:0 12px 30px rgba(0,0,0,.08);

}

.article-header::before{

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

.article-header::after{

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

.article-header>{

    position:relative;
    z-index:2;

}

.article-header h2{

    color:#24536D;

    font-size:32px;

    font-weight:700;

    margin-bottom:5px;

}

.article-header p{

    color:#6B7280;

    margin:0;

}

/* Button */

.btn-add{
    background:#47B5FF;
    color:white;
    border:none;
    border-radius:12px;
    padding:10px 22px;
    font-weight:600;
}

.btn-add:hover{
    background:#2196F3;
    color:white;
}

/* Card */

.table-card{
    background:white;
    border-radius:18px;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
    padding:18px;
}

/* Table */

.table{
    margin-bottom:0;
    vertical-align:middle;
}

.table thead th{
    background:#DFF4FF;
    color:#184B6B;
    border:1px solid #D8EAF6;
    padding:16px;
}

.table tbody td{
    border:1px solid #E7EEF4;
    padding:16px;
    vertical-align:middle;
}

.table tbody tr:hover{
    background:#F8FCFF;
}

/* Thumbnail */

.thumb{
    width:90px;
    height:65px;
    object-fit:cover;
    border-radius:10px;
}

.no-image{
    width:90px;
    height:65px;
    background:#EEF6FB;
    color:#6B7280;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:10px;
    font-size:12px;
}

/* Badge */

.badge-publish{
    background:#DFF8E8;
    color:#228B5A;
    padding:7px 14px;
    border-radius:20px;
    font-size:13px;
}

.badge-draft{
    background:#FFF3D9;
    color:#B7791F;
    padding:7px 14px;
    border-radius:20px;
    font-size:13px;
}

/* Button */

.btn-detail{

    background:#E6F4FF;
    color:#0B74D1;
    border:none;
    border-radius:10px;
    padding:6px 14px;
    font-size:13px;
    font-weight:600;
    transition:.3s;

}

.btn-detail:hover{

    background:#CFE9FF;
    color:#0B74D1;

}

.btn-edit{

    background:#FFF3D6;
    color:#B7791F;
    border:none;
    border-radius:10px;
    padding:6px 14px;
    font-size:13px;
    font-weight:600;
    transition:.3s;

}

.btn-edit:hover{

    background:#FFE6A8;
    color:#9A6B0D;

}

.btn-delete{

    background:#FDE7E7;
    color:#D64545;
    border:none;
    border-radius:10px;
    padding:6px 14px;
    font-size:13px;
    font-weight:600;
    transition:.3s;

}

.btn-delete:hover{

    background:#FFD2D2;
    color:#B92C2C;

}

</style>

<div class="container py-4">

<div class="article-header d-flex justify-content-between align-items-center flex-wrap">

<div>

<h2>

📝 Daftar Artikel

</h2>

<p>

Kelola seluruh artikel blog Anda.

</p>

</div>

<a
href="{{ route('articles.create') }}"
class="btn btn-add">

➕ Tambah Artikel

</a>

</div>

@if(session('success'))

<div class="alert alert-success">

{{ session('success') }}

</div>

@endif

<div class="table-card">
    <form method="GET" class="row mb-4">

    <div class="col-md-7">
        <input
            type="text"
            name="search"
            class="form-control"
            placeholder="🔍 Cari judul artikel..."
            value="{{ request('search') }}">
    </div>

    <div class="col-md-3">
        <select name="status" class="form-select">
            <option value="">Semua Status</option>

            <option value="published"
                {{ request('status')=='published' ? 'selected' : '' }}>
                Published
            </option>

            <option value="draft"
                {{ request('status')=='draft' ? 'selected' : '' }}>
                Draft
            </option>

        </select>
    </div>

    <div class="col-md-2">
        <button class="btn btn-add w-100">
            Cari
        </button>
    </div>

</form>

<table class="table">

<thead>

<tr>

<th width="60">No</th>

<th width="120">Thumbnail</th>

<th width="220">Judul</th>

<th width="170">Kategori</th>

<th width="120">Status</th>

<th width="130">Dibuat</th>

<th width="220">Aksi</th>

</tr>



</thead>

<tbody>

@forelse($articles as $article)

<tr>

<td>

{{ $loop->iteration }}

</td>

<td>

@if($article->thumbnail)

<img
src="{{ asset('storage/'.$article->thumbnail) }}"
class="thumb">

@else

<div class="no-image">

Tidak Ada

</div>

@endif

</td>

<td>

<strong>

{{ $article->title }}

</strong>

</td>

<td>

{{ $article->category->name }}

</td>

<td>

@if($article->status=='published')

<span class="badge-publish">

🟢 Publish

</span>

@else

<span class="badge-draft">

🟡 Draft

</span>

@endif
<td>

{{ $article->created_at->format('d M Y') }}

</td>
<td>
    

<a
href="{{ route('articles.show',$article->id) }}"
class="btn btn-detail btn-sm me-1">

👁️ Detail

</a>

<a
href="{{ route('articles.edit',$article->id) }}"
class="btn btn-edit btn-sm me-1">

✏️ Edit

</a>

<form
action="{{ route('articles.destroy',$article->id) }}"
method="POST"
class="d-inline">

@csrf
@method('DELETE')

<button
type="submit"
class="btn btn-delete btn-sm"
onclick="return confirm('Yakin ingin menghapus artikel ini?')">

🗑️ Hapus

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="7" class="text-center py-5">

📰 Belum ada artikel.

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

</div>

<style>

.table thead th:first-child{

border-top-left-radius:12px;

}

.table thead th:last-child{

border-top-right-radius:12px;

}

.table tbody tr:last-child td:first-child{

border-bottom-left-radius:12px;

}

.table tbody tr:last-child td:last-child{

border-bottom-right-radius:12px;

}

.alert{

border-radius:12px;

}

@media(max-width:992px){

.table-card{

overflow-x:auto;

}

.table{

min-width:900px;

}

}

</style>

@endsection