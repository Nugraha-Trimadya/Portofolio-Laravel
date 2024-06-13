@extends('nav')

@section('konten')
<section>
    <div class="center-text" >
        <h2>My<span> Certificate </span></h2>
    </div>
    <div class="sertifikat-content">
        <div class="row">
            <img src="public/assets/wb.jpg" class="bisa">
            <div class="main-row">
                <div class="row-text">
                    <h5>
                        <a href="c:\Users\Nugraha\Documents\Sertifikat\Belajar dasar pengembangan web.pdf" target=""><em>Dasar Pengembangan Web</em></a>
                    </h5>
                </div>
                <div class="row-icon">
                    <i class="ri-shield-user-fill"></i>
                </div>
                <h4>dicoding</h4>
            </div>
        </div>
        <div class="row">
            <img src="public/assets/fe.jpg" class="bisa">
            <div class="main-row">
                <div class="row-text">
                    <h5>
                        <a href="c:\Users\Nugraha\Documents\Sertifikat\Front-end pemula.pdf" target="_blank"><em>Front-end Pemula</em></a>
                    </h5>
                </div>
                <div class="row-icon">
                    <i class="ri-shield-user-fill"></i>
                </div>
                <h4>dicoding</h4>
            </div>
        </div>
        
    </div>
</section>
@endsection