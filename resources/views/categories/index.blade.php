@extends('layouts.app')

@section('content')

<style>

body{
    background:#F8FCFF;
}

/* Hero */

.category-header{

    position:relative;

    overflow:hidden;

    background:linear-gradient(135deg,#D8F2FF,#FFFFFF,#E8FFF4);

    border-radius:28px;

    padding:40px 35px;

    margin-bottom:30px;

    box-shadow:0 12px 30px rgba(0,0,0,.08);

}

.category-header::before{

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

.category-header::after{

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

.category-header>*{

    position:relative;

    z-index:2;

}

.category-header h2{

    color:#24536D;

    font-size:32px;

    font-weight:700;

    margin-bottom:5px;

}

.category-header p{

    color:#6B7280;

    margin:0;

}

.category-header h2{

    color:#184B6B;

    font-weight:700;

    margin-bottom:8px;

}

.category-header p{

    color:#6B7280;

    margin:0;

}

/* Card */

.table{
    margin:0;
    border-collapse:separate;
    border-spacing:0;
}

.table thead th{

    background:#DFF4FF;
    color:#184B6B;
    font-weight:600;
    border:1px solid #D6EAF8;
    padding:16px;
}

.table tbody td{

    border:1px solid #E6EEF5;
    padding:16px;
    vertical-align:middle;
    background:#fff;
}

.table tbody tr:hover td{

    background:#F7FCFF;

}

.table thead th:first-child{

    border-top-left-radius:14px;

}

.table thead th:last-child{

    border-top-right-radius:14px;

}

.table tbody tr:last-child td:first-child{

    border-bottom-left-radius:14px;

}

.table tbody tr:last-child td:last-child{

    border-bottom-right-radius:14px;

}

/* Button */

.btn-add{

    background:#47B5FF;

    color:white;

    border:none;

    border-radius:12px;

    padding:10px 22px;

    font-weight:600;

    transition:.3s;

}

.btn-add:hover{

    background:#2196F3;

    color:white;

}

/* Table */

.table{
    margin:0;
    border-collapse:separate;
    border-spacing:0;
}

.table thead th{

    background:#DFF4FF;
    color:#184B6B;
    font-weight:600;
    border:1px solid #D6EAF8;
    padding:16px;
}

.table tbody td{

    border:1px solid #E6EEF5;
    padding:16px;
    vertical-align:middle;
    background:#fff;
}

.table tbody tr:hover td{

    background:#F7FCFF;

}

.table thead th:first-child{

    border-top-left-radius:14px;

}

.table thead th:last-child{

    border-top-right-radius:14px;

}

.table tbody tr:last-child td:first-child{

    border-bottom-left-radius:14px;

}

.table tbody tr:last-child td:last-child{

    border-bottom-right-radius:14px;

}
/* Badge */

.badge-slug{

    background:#EDF8FF;

    color:#1E6DA8;

    padding:7px 14px;

    border-radius:20px;

    font-size:13px;

}

/* Button Edit */

.btn-edit{

    background:#FFE8A3;

    color:#7A5A00;

    border:none;

    border-radius:10px;

    padding:7px 15px;

}

/* Button Delete */

.btn-delete{

    background:#FFDCDC;

    color:#C0392B;

    border:none;

    border-radius:10px;

    padding:7px 15px;

}

.btn-edit:hover{

    background:#FFD76A;

}

.btn-delete:hover{

    background:#FFC7C7;

}

.alert{

    border-radius:12px;

}

</style>

<div class="container py-4">

<div class="category-header d-flex justify-content-between align-items-center flex-wrap">

<div>

<h2>

📂 Daftar Kategori

</h2>

<p>

Kelola kategori blog agar artikel lebih rapi dan mudah ditemukan.

</p>

</div>

<a href="{{ route('categories.create') }}"
class="btn btn-add">

➕ Tambah Kategori

</a>

</div>

@if(session('success'))

<div class="alert alert-success">

{{ session('success') }}

</div>

@endif

<div class="table-card">

<table class="table">

<thead>

<tr>

<th width="60">No</th>

<th>Nama Kategori</th>

<th>Slug</th>

<th>Deskripsi</th>

<th width="170">Aksi</th>

</tr>

</thead>

<tbody>

@forelse($categories as $category)

<tr>

<td>

{{ $loop->iteration }}

</td>

<td>

<strong>

{{ $category->name }}

</strong>

</td>

<td>

<span class="badge-slug">

{{ $category->slug }}

</span>

</td>

<td>

{{ $category->description }}

</td>

<td>

<a
href="{{ route('categories.edit',$category->id) }}"
class="btn btn-edit btn-sm">

✏️ Edit

</a>

<form
action="{{ route('categories.destroy',$category->id) }}"
method="POST"
class="d-inline">

@csrf

@method('DELETE')

<button
class="btn btn-delete btn-sm"
onclick="return confirm('Yakin ingin menghapus kategori ini?')">

🗑️

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="5" class="text-center py-5">

📂 Belum ada kategori.

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

</div>

@endsection