@extends('layouts.main')
{{-- bisa menggunakan . atau / --}}


@section('content')
    {{-- banner --}}
    <section class="jumbotron" id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-content-center flex-wrap">
                    <h1 class="display-4 fw-bolder">Software House Surabaya</h1>
                    <p class="lead">Jasa Pembuatan Aplikasi Dekstop, Website, Dan Mobile (Android & Ios) Yang Dapat Dicustom Sesuai Dengan Kebutuhan Anda</p>
                    <a class="btn btn-primary btn-lg rounded-pill mt-3" href="#" role="button">Contact Kami</a>
                </div>
                <div class="col-md-5">
                    <img src="../img/software.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#759aff" fill-opacity="1" d="M0,64L120,85.3C240,107,480,149,720,144C960,139,1200,85,1320,58.7L1440,32L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg> 
    </section>
    {{-- end-banner --}}

    {{-- why us --}}
    <section id="why-us">
        <div class="row text-center pb-3">
            <div class="col">
                <h2>Kenapa Harus Memilih Kami</h2>
                <p>SoftAge telah berpengalaman dalam memenuhi kebutuhan IT untuk meningkatkan profit mitra <br> Kami akan memenuhi kebutuhan produktivitas dan kredibilitas anda</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-5 text-center">
                <img src="../img/work.jpg" class="" alt="">
            </div>
            <div class="col-md-4 mt-2">
                <div class="card card-shadow rounded-pill " >
                    <div class="card-body rounded">
                        <i class="fa-solid fa-gears"></i> Teknologi Terkini
                    </div>
                </div>
                <div class="card rounded-pill card-shadow">
                    <div class="card-body rounded">
                        <i class="fa-solid fa-battery-three-quarters"></i> Pemeliharaan Berkelanjutan
                    </div>
                </div>
                <div class="card rounded-pill card-shadow">
                    <div class="card-body rounded">
                        <i class="fa-regular fa-clock"></i> Pengerjaan Cepat
                    </div>
                </div>
                <div class="card rounded-pill card-shadow">
                    <div class="card-body rounded">
                        <i class="fa-solid fa-lock"></i> Aman dan Terjamin
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,128L40,112C80,96,160,64,240,64C320,64,400,96,480,138.7C560,181,640,235,720,224C800,213,880,139,960,117.3C1040,96,1120,128,1200,133.3C1280,139,1360,117,1400,106.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>
    {{-- end why us --}}
    
    {{-- servis --}}
    <section id="service">
        <div class="row text-center pb-4">
            <div class="col">
                <h2>Layanan yang Kami Berikan</h2>
                <p>SoftAge menghadirkan layanan  terbaik untuk memenuhi kebutuhan produktivitas anda</p>
            </div>
        </div>
        <div class="container">
        <div class="row row-cols-md-3 d-flex justify-content-center">
            @foreach ($service as $s)
            <div class="col">
                <div class="card-service text-center">
                    @if($s->icon)
                    <img src="/../storage/{{ $s["icon"] }}" class="card-img-top" alt="{{ $s->name }}">
                    @else
                    <img src="https://source.unsplash.com/500x500?application" class="card-img-top card-icon" alt="{{ $s->name }}">
                    @endif
                    <h5 class="fs-4 text-center">{{ $s["name"] }}</h5>
                    <p class="text-center fs-6 fw-light">{{ $s["description"] }}</p>
                </div>
            </div>
            @endforeach
        </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#759aff" fill-opacity="1" d="M0,128L48,117.3C96,107,192,85,288,106.7C384,128,480,192,576,186.7C672,181,768,107,864,101.3C960,96,1056,160,1152,176C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    {{-- end servis --}}

    {{-- contact kami --}}
    <section id="contact">
        <div class="row d-flex justify-content-center">
        <div class="col-1"><a href=""><i class="fa-brands fa-square-instagram" ></i></a></div>
        <div class="col-1"><a href=""><i class="fa-brands fa-square-twitter"></i></a></div>
        <div class="col-1"><a href=""><i class="fa-brands fa-square-whatsapp"></i></a></div>
    </div>
    </section>
    
    {{-- end contact --}}
@endsection