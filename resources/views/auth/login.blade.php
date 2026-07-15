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

.login-page{

    min-height:100vh;

    display:flex;

    justify-content:center;

    align-items:center;

    padding:35px;

}

.login-card{

    width:1450px;
    max-width:96%;
    min-height:860px;

    background:#fff;
    border-radius:30px;
    overflow:hidden;

    display:grid;
    grid-template-columns:48% 52%;

    box-shadow:0 25px 60px rgba(0,0,0,.10);

}
.left-side{

    position:relative;

    padding:55px 60px;

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

    font-size:42px;
    line-height:1.25;
    font-weight:800;

    color:#183B66;

    margin-bottom:18px;

}

.hero-desc{

     font-size:18px;
    line-height:1.7;

    color:#5C728B;

    max-width:620px;

    margin-bottom:30px;

}

.feature{

    display:flex;
    gap:16px;
    margin-bottom:18px;

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

    font-size:22px;

    font-weight:700;

    color:#183B66;

    margin-bottom:4px;

}

.feature-desc{

    color:#64748B;

    line-height:1.8;

}

.hero-image{

    margin-top:20px;

    text-align:center;

}

.hero-image img{

    width:100%;

    max-width:470px;

}

.form-card{

    width:100%;

    max-width:620px;

    background:#fff;

    border-radius:26px;

    padding:55px;

    box-shadow:0 20px 55px rgba(0,0,0,.08);

}

.lock-circle{

    width:95px;

    height:95px;

    border-radius:50%;

    background:#EEF5FF;

    display:flex;

    justify-content:center;

    align-items:center;

    margin:auto;

    font-size:45px;

    margin-bottom:25px;

}

.form-title{

    text-align:center;

    font-size:48px;

    color:#183B66;

    font-weight:700;

}

.form-sub{

    text-align:center;

    color:#64748B;

    margin-top:12px;

    margin-bottom:35px;

    line-height:1.8;

}

.form-group{

    margin-bottom:22px;

}

.form-group label{

    display:block;

    font-weight:600;

    color:#334155;

    margin-bottom:8px;

}

.input-modern{

    width:100%;

    height:60px;

    border:1px solid #D9E4EF;

    border-radius:14px;

    padding:0 18px;

    font-size:16px;

    transition:.3s;

}

.input-modern:focus{

    border-color:#3B82F6;

    outline:none;

    box-shadow:0 0 0 4px rgba(59,130,246,.10);

}

.login-btn{

    width:100%;

    height:60px;

    border:none;

    border-radius:15px;

    background:linear-gradient(135deg,#52B6FF,#2979FF);

    color:white;

    font-size:18px;

    font-weight:700;

    cursor:pointer;

    transition:.3s;

    box-shadow:0 15px 30px rgba(41,121,255,.25);

}

.login-btn:hover{

    transform:translateY(-2px);

    box-shadow:0 18px 40px rgba(41,121,255,.35);

}

.divider{

    display:flex;

    align-items:center;

    gap:15px;

    margin:28px 0;

}

.divider::before,
.divider::after{

    content:"";

    flex:1;

    height:1px;

    background:#E5E7EB;

}

.divider span{

    color:#94A3B8;

    font-size:14px;

}

.social{

    display:flex;

    justify-content:center;

    gap:18px;

    margin-top:18px;

}

.social a{

    width:42px;

    height:42px;

    border-radius:50%;

    background:#F1F5F9;

    display:flex;

    justify-content:center;

    align-items:center;

    text-decoration:none;

    font-size:18px;

    transition:.3s;

}

.social a:hover{

    background:#DBEAFE;

}

.footer{

    margin-top:25px;

    text-align:center;

    color:#94A3B8;

    font-size:14px;

}

</style>

<div class="login-page">

<div class="login-card">

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
Tempat Berbagi<br>
Wawasan Teknologi
</h1>

<p class="hero-desc">
Kelola artikel, kategori, dan konten teknologi
dengan tampilan modern, ringan, serta mudah digunakan.
</p>
<div class="feature">

    <div class="feature-icon">
        📝
    </div>

    <div>

        <div class="feature-title">
            Kelola Artikel
        </div>

        <div class="feature-desc">
            Buat, edit, publikasikan, dan kelola seluruh artikel
            teknologi dengan tampilan yang rapi dan profesional.
        </div>

    </div>

</div>

<div class="feature">

    <div class="feature-icon">
        📂
    </div>

    <div>

        <div class="feature-title">
            Kelola Kategori
        </div>

        <div class="feature-desc">
            Susun kategori artikel agar pengunjung dapat
            menemukan topik yang mereka cari dengan lebih mudah.
        </div>

    </div>

</div>

<div class="feature">

    <div class="feature-icon">
        🚀
    </div>

    <div>

        <div class="feature-title">
            Publikasikan Konten
        </div>

        <div class="feature-desc">
            Bagikan tutorial, informasi, serta wawasan terbaru
            seputar dunia teknologi kepada pembaca.
        </div>

    </div>

</div>

<div class="feature">

    <div class="feature-icon">
        🛡️
    </div>

    <div>

        <div class="feature-title">
            Dashboard Aman
        </div>

        <div class="feature-desc">
            Sistem login yang aman sehingga seluruh data artikel
            dan kategori dapat dikelola dengan nyaman.
        </div>

    </div>

</div>

<div class="hero-image">

    <img
        src="{{ asset('images/login-hero.png') }}"
        alt="Login Illustration">

</div>

</div>

<!-- ===========================
        PANEL KANAN
=========================== -->

<div class="right-side">

<div class="form-card">

<div class="lock-circle">
🔒
</div>

<h2 class="form-title">
Selamat Datang
</h2>

<p class="form-sub">
Masuk ke dashboard untuk mengelola artikel,
kategori, serta seluruh konten Blog Teknologi.
</p>

<x-auth-session-status
    class="mb-4"
    :status="session('status')" />

<form method="POST" action="{{ route('login') }}">

@csrf
<!-- Email -->
<div class="form-group">

    <label for="email">
        Email
    </label>

    <x-text-input
        id="email"
        class="input-modern"
        type="email"
        name="email"
        :value="old('email')"
        required
        autofocus
        autocomplete="username" />

    <x-input-error
        :messages="$errors->get('email')"
        class="mt-2" />

</div>

<!-- Password -->
<div class="form-group">

    <label for="password">
        Password
    </label>

    <x-text-input
        id="password"
        class="input-modern"
        type="password"
        name="password"
        required
        autocomplete="current-password" />

    <x-input-error
        :messages="$errors->get('password')"
        class="mt-2" />

</div>

<div
style="
display:flex;
justify-content:space-between;
align-items:center;
margin-bottom:25px;
">

<label
style="
display:flex;
align-items:center;
gap:8px;
font-size:15px;
color:#64748B;
">

<input
id="remember_me"
type="checkbox"
name="remember">

Remember Me

</label>

@if (Route::has('password.request'))

<a
href="{{ route('password.request') }}"
style="
text-decoration:none;
color:#2563EB;
font-weight:600;
">

Lupa Password?

</a>

@endif

</div>

<button
type="submit"
class="login-btn">

🚀 Masuk ke Dashboard

</button>

<div class="divider">

<span>
atau
</span>

</div>

@if (Route::has('register'))

<div
style="
text-align:center;
font-size:15px;
color:#64748B;
">

Belum mempunyai akun?

<a
href="{{ route('register') }}"
style="
color:#2563EB;
font-weight:700;
text-decoration:none;
">

Daftar Sekarang

</a>

</div>

@endif

<div class="social">

<a href="#">
🌐
</a>

<a href="#">
📘
</a>

<a href="#">
📧
</a>

</div>

<div class="footer">

© {{ date('Y') }} TechInsight
<br>

Blog Teknologi Modern

</div>

</form>

</div>

</div>
</div>
</div>

</div>

<style>

@media (max-width:1200px){

.login-card{

grid-template-columns:1fr;

max-width:700px;

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

.hero-image{

margin-top:40px;

}

.hero-image img{

max-width:360px;

}

}

@media (max-width:768px){

.login-page{

padding:15px;

}

.login-card{

border-radius:20px;

}

.left-side{

padding:30px 25px;

}

.right-side{

padding:25px 18px;

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

margin-bottom:28px;

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

.hero-image img{

width:100%;

max-width:280px;

}

.form-card{

padding:28px 22px;

box-shadow:none;

}

.lock-circle{

width:75px;

height:75px;

font-size:34px;

}

.form-title{

font-size:30px;

}

.form-sub{

font-size:14px;

margin-bottom:25px;

}

.login-btn{

height:54px;

font-size:16px;

}

.footer{

font-size:13px;

}

.social{

gap:12px;

}

.social a{

width:38px;

height:38px;

}

}

</style>

</x-guest-layout>