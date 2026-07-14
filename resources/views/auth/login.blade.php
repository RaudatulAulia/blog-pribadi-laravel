<x-guest-layout>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{

    font-family:'Segoe UI',sans-serif;

    background:linear-gradient(135deg,#EAF8FF,#F7FCFF,#F1FFF8);

    min-height:100vh;

}

/*===========================
        CONTAINER
===========================*/

.login-wrapper{

    width:100%;

    min-height:100vh;

    display:flex;

    justify-content:center;

    align-items:center;

    padding:40px;

}

.login-box{

    width:1100px;

    max-width:100%;

    min-height:670px;

    display:flex;

    overflow:hidden;

    border-radius:30px;

    background:white;

    box-shadow:0 20px 45px rgba(0,0,0,.08);

}

/*===========================
        LEFT PANEL
===========================*/

.left-panel{

    width:45%;

    position:relative;

    overflow:hidden;

    background:linear-gradient(145deg,#56CCF2,#7FD8FF,#A7F3D0);

    color:white;

    padding:60px 50px;

    display:flex;

    flex-direction:column;

    justify-content:center;

    align-items:center;

    text-align:center;

}

.left-panel::before{

    content:"";

    position:absolute;

    width:280px;

    height:280px;

    background:rgba(255,255,255,.12);

    border-radius:50%;

    top:-90px;

    right:-90px;

}

.left-panel::after{

    content:"";

    position:absolute;

    width:190px;

    height:190px;

    background:rgba(255,255,255,.16);

    border-radius:50%;

    bottom:-70px;

    left:-70px;

}

.left-panel>*{

    position:relative;

    z-index:10;

}

.logo-circle{

    width:95px;

    height:95px;

    border-radius:50%;

    background:white;

    display:flex;

    align-items:center;

    justify-content:center;

    font-size:42px;

    margin-bottom:25px;

    color:#47B5FF;

    box-shadow:0 15px 30px rgba(0,0,0,.15);

}

.brand-title{

    font-size:36px;

    font-weight:700;

    margin-bottom:15px;

}

.brand-desc{

    line-height:1.9;

    font-size:15px;

    opacity:.96;

    max-width:340px;

}

.tech-box{

    margin-top:45px;

    background:rgba(255,255,255,.18);

    backdrop-filter:blur(12px);

    border-radius:20px;

    padding:22px;

    width:100%;

}

.tech-item{

    display:flex;

    justify-content:space-between;

    padding:10px 0;

    border-bottom:1px solid rgba(255,255,255,.15);

}

.tech-item:last-child{

    border:none;

}

/*===========================
        RIGHT PANEL
===========================*/

.right-panel{

    width:55%;

    background:#FCFEFF;

    display:flex;

    justify-content:center;

    align-items:center;

    padding:60px;

}

.login-card{

    width:100%;

    max-width:420px;

}

.login-title{

    font-size:34px;

    color:#184B6B;

    font-weight:700;

    margin-bottom:8px;

}

.login-subtitle{

    color:#64748B;

    line-height:1.8;

    margin-bottom:35px;

}

.form-control{

    width:100%;

    height:54px;

    border-radius:14px;

    border:1px solid #DCEAF5;

    padding:0 18px;

    outline:none;

    transition:.3s;

    margin-top:8px;

}

.form-control:focus{

    border-color:#47B5FF;

    box-shadow:0 0 0 4px rgba(71,181,255,.15);

}

.btn-login{

    width:100%;

    height:54px;

    border:none;

    border-radius:14px;

    background:#47B5FF;

    color:white;

    font-weight:700;

    font-size:15px;

    transition:.3s;

}

.btn-login:hover{

    background:#2D9BF0;

    transform:translateY(-2px);

}

</style>

<div class="login-wrapper">

<div class="login-box">
    <!-- ===========================
        LEFT PANEL
=========================== -->

<div class="left-panel">

    <div class="logo-circle">

        💻

    </div>

    <h1 class="brand-title">

        Blog Teknologi

    </h1>

    <p class="brand-desc">

        Kelola artikel, bagikan wawasan, dan publikasikan
        konten teknologi dengan tampilan yang modern,
        sederhana, dan nyaman dibaca.

    </p>

    <div class="tech-box">

        <div class="tech-item">

            <span>🚀 Framework</span>

            <strong>Laravel</strong>

        </div>

        <div class="tech-item">

            <span>📝 Konten</span>

            <strong>Artikel</strong>

        </div>

        <div class="tech-item">

            <span>📂 Kategori</span>

            <strong>Manajemen</strong>

        </div>

        <div class="tech-item">

            <span>🌐 Database</span>

            <strong>MySQL</strong>

        </div>

    </div>

    <div style="margin-top:45px;">

        <svg width="260" height="170" viewBox="0 0 260 170" fill="none">

            <rect x="35"
                  y="20"
                  width="190"
                  height="110"
                  rx="12"
                  fill="rgba(255,255,255,.22)"/>

            <rect x="50"
                  y="35"
                  width="160"
                  height="80"
                  rx="8"
                  fill="white"/>

            <rect x="90"
                  y="138"
                  width="80"
                  height="10"
                  rx="5"
                  fill="rgba(255,255,255,.55)"/>

            <rect x="70"
                  y="148"
                  width="120"
                  height="8"
                  rx="4"
                  fill="rgba(255,255,255,.35)"/>

            <circle cx="82"
                    cy="58"
                    r="6"
                    fill="#56CCF2"/>

            <rect x="96"
                  y="53"
                  width="80"
                  height="8"
                  rx="4"
                  fill="#D7F2FF"/>

            <rect x="60"
                  y="74"
                  width="130"
                  height="7"
                  rx="3"
                  fill="#EAF8FF"/>

            <rect x="60"
                  y="89"
                  width="90"
                  height="7"
                  rx="3"
                  fill="#EAF8FF"/>

            <rect x="60"
                  y="103"
                  width="110"
                  height="7"
                  rx="3"
                  fill="#EAF8FF"/>

        </svg>

    </div>

</div>

<!-- ===========================
        RIGHT PANEL
=========================== -->

<div class="right-panel">

<div class="login-card">

<x-auth-session-status
class="mb-4"
:status="session('status')" />

<h2 class="login-title">

Selamat Datang 👋

</h2>

<p class="login-subtitle">

Masuk ke dashboard untuk mengelola artikel,
kategori, serta seluruh konten pada
<strong>Blog Teknologi</strong>.

</p>

<form method="POST" action="{{ route('login') }}">

@csrf
<!-- ===========================
        EMAIL
=========================== -->

<div class="mb-4">

    <x-input-label
        for="email"
        :value="__('Email')"
        class="mb-2"/>

    <x-text-input
        id="email"
        class="form-control"
        type="email"
        name="email"
        :value="old('email')"
        required
        autofocus
        autocomplete="username"
        placeholder="Masukkan email Anda"/>

    <x-input-error
        :messages="$errors->get('email')"
        class="mt-2"/>

</div>

<!-- ===========================
        PASSWORD
=========================== -->

<div class="mb-4">

    <x-input-label
        for="password"
        :value="__('Password')"
        class="mb-2"/>

    <x-text-input
        id="password"
        class="form-control"
        type="password"
        name="password"
        required
        autocomplete="current-password"
        placeholder="Masukkan password"/>

    <x-input-error
        :messages="$errors->get('password')"
        class="mt-2"/>

</div>

<!-- ===========================
      REMEMBER & FORGOT
=========================== -->

<div class="d-flex justify-content-between align-items-center mb-4">

    <label class="d-flex align-items-center">

        <input
            type="checkbox"
            name="remember"
            class="me-2">

        <span style="color:#64748B;">

            Ingat Saya

        </span>

    </label>

    @if (Route::has('password.request'))

        <a
            href="{{ route('password.request') }}"
            style="
                color:#47B5FF;
                text-decoration:none;
                font-weight:600;
            ">

            Lupa Password?

        </a>

    @endif

</div>

<!-- ===========================
        BUTTON
=========================== -->

<button
    type="submit"
    class="btn-login">

    🔐 Masuk ke Dashboard

</button>

<div
style="
margin-top:30px;
text-align:center;
color:#94A3B8;
font-size:14px;
">

© {{ date('Y') }}

<strong style="color:#47B5FF">

Blog Teknologi

</strong>

<br>

Laravel • MySQL • Bootstrap

</div>

</form>
</div>

</div>

<style>

/*===========================
        ANIMATION
===========================*/

.login-box{

    animation:fadeIn .8s ease;

}

@keyframes fadeIn{

    from{

        opacity:0;

        transform:translateY(30px);

    }

    to{

        opacity:1;

        transform:translateY(0);

    }

}

/*===========================
        INPUT EFFECT
===========================*/

input[type="checkbox"]{

    accent-color:#47B5FF;

    width:16px;

    height:16px;

    cursor:pointer;

}

a{

    transition:.3s;

}

a:hover{

    color:#2196F3!important;

}

/*===========================
        RESPONSIVE
===========================*/

@media(max-width:991px){

.login-wrapper{

    padding:20px;

}

.login-box{

    flex-direction:column;

    min-height:auto;

}

.left-panel{

    width:100%;

    padding:45px 30px;

}

.right-panel{

    width:100%;

    padding:40px 25px;

}

.brand-title{

    font-size:30px;

}

.tech-box{

    margin-top:30px;

}

}

@media(max-width:576px){

.left-panel{

    display:none;

}

.right-panel{

    width:100%;

    padding:30px 20px;

}

.login-card{

    max-width:100%;

}

.login-title{

    font-size:28px;

}

.login-subtitle{

    font-size:14px;

}

.form-control{

    height:50px;

}

.btn-login{

    height:50px;

}

}

</style>

</x-guest-layout>