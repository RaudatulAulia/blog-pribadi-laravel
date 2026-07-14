@extends('layouts.app')

@section('content')

<style>

body{
    background:#F8FCFF;
}

/* Header */

.edit-header{
    background:linear-gradient(135deg,#DDF4FF,#F8FDFF,#EEFFF6);
    border-radius:20px;
    padding:28px 35px;
    margin-bottom:30px;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
}

.edit-header h2{
    color:#184B6B;
    font-weight:700;
    margin-bottom:6px;
}

.edit-header p{
    margin:0;
    color:#6B7280;
}

/* Card */

.form-card{
    background:#fff;
    border:none;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,.06);
    padding:35px;
}

/* Label */

.form-label{
    font-weight:600;
    color:#184B6B;
    margin-bottom:8px;
}

/* Input */

.form-control{
    border:1px solid #D9EAF7;
    border-radius:12px;
    padding:12px 15px;
    background:#FCFEFF;
}

.form-control:focus{
    border-color:#47B5FF;
    box-shadow:0 0 0 .15rem rgba(71,181,255,.18);
}

/* Tombol */

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
    text-decoration:none;
    transition:.3s;
}

.btn-back:hover{
    background:#DDEFFD;
    color:#184B6B;
}

/* Error */

.alert{
    border-radius:12px;
}

@media(max-width:768px){

.form-card{
    padding:25px;
}

.edit-header{
    padding:22px;
}

}

</style>

<div class="container py-4" style="max-width:850px;">

    <div class="edit-header">

        <h2>✏️ Edit Kategori</h2>

        <p>
            Perbarui informasi kategori blog Anda.
        </p>

    </div>

    @if($errors->any())

    <div class="alert alert-danger">

        <ul class="mb-0">

            @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

    @endif

    <div class="form-card">

        <form action="{{ route('categories.update',$category->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">

                <label class="form-label">

                    Nama Kategori

                </label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name',$category->name) }}"
                    class="form-control"
                    required>

            </div>

            <div class="mb-4">

                <label class="form-label">

                    Deskripsi

                </label>

                <textarea
                    name="description"
                    rows="5"
                    class="form-control">{{ old('description',$category->description) }}</textarea>

            </div>

            <div class="d-flex gap-2">

                <button class="btn btn-update">

                    💾 Simpan Perubahan

                </button>

                <a
                    href="{{ route('categories.index') }}"
                    class="btn btn-back">

                    ← Kembali

                </a>

            </div>

        </form>

    </div>

</div>

@endsection