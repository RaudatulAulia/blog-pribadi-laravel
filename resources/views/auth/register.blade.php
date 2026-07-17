<x-guest-layout>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Figtree',sans-serif;
}

body{
    background:linear-gradient(135deg,#EEF6FF,#F8FCFF,#F4FFFC);
}

.register-page{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:35px;
}

.register-card{
    width:1350px;
    max-width:100%;
    background:#fff;
    border-radius:28px;
    overflow:hidden;
    display:grid;
    grid-template-columns:52% 48%;
    box-shadow:0 25px 60px rgba(15,23,42,.08);
}

.left-side{
    position:relative;
    padding:60px;
    background:linear-gradient(135deg,#DFF1FF,#D9EEFF,#EAF9FF);
    overflow:hidden;
}

.left-side::before{
    content:"";
    position:absolute;
    width:320px;
    height:320px;
    border-radius:50%;
    background:rgba(255,255,255,.28);
    right:-120px;
    top:-120px;
}

.left-side::after{
    content:"";
    position:absolute;
    width:250px;
    height:250px;
    border-radius:50%;
    background:rgba(255,255,255,.20);
    left:-80px;
    bottom:-90px;
}

.right-side{
    background:#fff;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:55px;
}

.brand{
    display:flex;
    align-items:center;
    gap:15px;
    margin-bottom:55px;
}

.brand-logo{
    width:62px;
    height:62px;
    border-radius:18px;
    background:#fff;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:28px;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
}

.brand-title{
    font-size:34px;
    font-weight:700;
    color:#2563EB;
}

.brand-sub{
    color:#64748B;
    margin-top:4px;
}

.hero-title{
    font-size:54px;
    line-height:1.2;
    font-weight:800;
    color:#183B66;
    margin-bottom:20px;
}

.hero-desc{
    font-size:19px;
    line-height:1.9;
    color:#5C728B;
    margin-bottom:42px;
    max-width:580px;
}

.feature{
    display:flex;
    gap:18px;
    margin-bottom:24px;
}

.feature-icon{
    width:58px;
    height:58px;
    border-radius:18px;
    background:#fff;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:24px;
    box-shadow:0 8px 18px rgba(0,0,0,.08);
}

.feature-title{
    font-size:20px;
    font-weight:700;
    color:#183B66;
    margin-bottom:5px;
}

.feature-desc{
    color:#64748B;
    line-height:1.8;
}

.hero-image{
    margin-top:45px;
    text-align:center;
}

.hero-image img{
    width:92%;
    max-width:420px;
}

.form-card{
    width:100%;
    max-width:560px;
    background:#fff;
    border-radius:24px;
    padding:45px;
    box-shadow:0 20px 55px rgba(0,0,0,.08);
}

.register-icon{
    width:95px;
    height:95px;
    margin:auto;
    border-radius:50%;
    background:#EEF5FF;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:44px;
    margin-bottom:22px;
}

.form-title{
    text-align:center;
    font-size:38px;
    font-weight:700;
    color:#183B66;
}

.form-sub{
    text-align:center;
    color:#64748B;
    margin-top:12px;
    margin-bottom:35px;
    line-height:1.8;
}

</style>

<div class="register-page">

<div class="register-card">

<!-- PANEL KIRI -->

<div class="left-side">

<div class="brand">

<div class="brand-logo">
💻
</div>

<div>

<div class="brand-title">
TechInsight
</div>

<div class="brand-sub">
Blog Teknologi Modern
</div>

</div>

</div>

<h1 class="hero-title">
Bergabung Bersama
<br>
TechInsight
</h1>

<p class="hero-desc">
Buat akun untuk mulai membaca, menulis,
dan berbagi artikel teknologi terbaru
dengan tampilan modern serta pengalaman
yang nyaman.
</p>

<div class="feature">

<div class="feature-icon">
📝
</div>

<div>

<div class="feature-title">
Tulis Artikel
</div>

<div class="feature-desc">
Bagikan wawasan, tutorial, dan pengalaman
seputar dunia teknologi.
</div>

</div>

</div>

<div class="feature">

<div class="feature-icon">
📚
</div>

<div>

<div class="feature-title">
Baca Konten
</div>

<div class="feature-desc">
Temukan berbagai artikel teknologi,
programming, database, dan AI.
</div>

</div>

</div>

<div class="feature">

<div class="feature-icon">
🛡️
</div>

<div>

<div class="feature-title">
Akun Aman
</div>

<div class="feature-desc">
Data akun dilindungi sehingga proses
registrasi lebih aman dan nyaman.
</div>

</div>

</div>

<div class="hero-image">

<img
        src="{{ asset('images/login-hero.png') }}"
        alt="register Illustration">


</div>

</div>

<!-- PANEL KANAN -->
 <div class="right-side">

<div class="form-card">

<div class="register-icon">
👤
</div>

<h2 class="form-title">
Buat Akun
</h2>

<p class="form-sub">
Daftarkan akun baru untuk mulai mengelola
dan membaca artikel teknologi.
</p>

<x-auth-session-status
    class="mb-4"
    :status="session('status')" />

<form method="POST" action="{{ route('register') }}">

@csrf

<div style="margin-bottom:20px;">

<label
style="
display:block;
margin-bottom:8px;
font-weight:600;
color:#334155;
">

Nama Lengkap

</label>

<x-text-input
id="name"
class="block w-full"
type="text"
name="name"
:value="old('name')"
required
autofocus
autocomplete="name"
style="
width:100%;
height:56px;
border:1px solid #D8E4F0;
border-radius:14px;
padding:0 18px;
"/>

<x-input-error
:messages="$errors->get('name')"
class="mt-2"/>

</div>

<div style="margin-bottom:20px;">

<label
style="
display:block;
margin-bottom:8px;
font-weight:600;
color:#334155;
">

Email

</label>

<x-text-input
id="email"
class="block w-full"
type="email"
name="email"
:value="old('email')"
required
autocomplete="username"
style="
width:100%;
height:56px;
border:1px solid #D8E4F0;
border-radius:14px;
padding:0 18px;
"/>

<x-input-error
:messages="$errors->get('email')"
class="mt-2"/>

</div>

<div style="margin-bottom:20px;">

<label
style="
display:block;
margin-bottom:8px;
font-weight:600;
color:#334155;
">

Password

</label>

<x-text-input
id="password"
class="block w-full"
type="password"
name="password"
required
autocomplete="new-password"
style="
width:100%;
height:56px;
border:1px solid #D8E4F0;
border-radius:14px;
padding:0 18px;
"/>

<x-input-error
:messages="$errors->get('password')"
class="mt-2"/>

</div>

<div style="margin-bottom:28px;">

<label
style="
display:block;
margin-bottom:8px;
font-weight:600;
color:#334155;
">

Konfirmasi Password

</label>

<x-text-input
id="password_confirmation"
class="block w-full"
type="password"
name="password_confirmation"
required
autocomplete="new-password"
style="
width:100%;
height:56px;
border:1px solid #D8E4F0;
border-radius:14px;
padding:0 18px;
"/>

<x-input-error
:messages="$errors->get('password_confirmation')"
class="mt-2"/>

</div>

<button
type="submit"
style="
width:100%;
height:58px;
border:none;
border-radius:15px;
background:linear-gradient(135deg,#4FACFE,#2979FF);
color:#fff;
font-size:17px;
font-weight:700;
cursor:pointer;
transition:.3s;
box-shadow:0 15px 30px rgba(41,121,255,.25);
">

✨ Daftar Sekarang

</button>

<div
style="
margin-top:28px;
text-align:center;
color:#64748B;
">

Sudah punya akun?

<a
href="{{ route('login') }}"
style="
color:#2563EB;
font-weight:700;
text-decoration:none;
">

Masuk

</a>

</div>
</form>

<div
style="
margin-top:35px;
text-align:center;
color:#94A3B8;
font-size:14px;
">

© {{ date('Y') }} TechInsight
<br>
Blog Teknologi Modern

</div>

</div>

</div>

</div>

</div>

<style>

@media(max-width:1200px){

.register-card{

grid-template-columns:1fr;

max-width:720px;

}

.left-side{

padding:45px;

}

.right-side{

padding:40px;

}

.hero-title{

font-size:42px;

}

.hero-desc{

font-size:17px;

}

.hero-image img{

max-width:340px;

}

}

@media(max-width:768px){

.register-page{

padding:15px;

}

.register-card{

border-radius:20px;

}

.left-side{

padding:30px 24px;

}

.right-side{

padding:24px 18px;

}

.brand{

margin-bottom:30px;

}

.brand-logo{

width:52px;

height:52px;

font-size:22px;

}

.brand-title{

font-size:28px;

}

.hero-title{

font-size:32px;

}

.hero-desc{

font-size:15px;

line-height:1.7;

margin-bottom:25px;

}

.feature{

margin-bottom:18px;

}

.feature-icon{

width:46px;

height:46px;

font-size:20px;

}

.feature-title{

font-size:18px;

}

.feature-desc{

font-size:14px;

}

.hero-image{

margin-top:30px;

}

.hero-image img{

width:100%;

max-width:270px;

}

.form-card{

padding:28px 22px;

box-shadow:none;

}

.register-icon{

width:75px;

height:75px;

font-size:34px;

}

.form-title{

font-size:30px;

}

.form-sub{

font-size:14px;

margin-bottom:24px;

}

button{

height:54px !important;

font-size:16px !important;

}

}

</style>

</x-guest-layout>