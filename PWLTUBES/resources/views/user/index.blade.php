@extends('layouts.main')

@section('title', 'index')
@section('statusHome', 'active')
@section('content')
<section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        @foreach ($kegiatans as $keg)
        <div class="carousel-item {{$loop->iteration == 1 ? 'active' : ''}} row" style="margin-top: 10%;">

            <a href="/eventdetails/{{$keg->id}}">
                <div class="carousel-container section-title">
                    <img style="width: 60%;" class="animate__animated animate__fadeInDown"
                        src="{{ asset('/storage/'.$keg->picPath) }}">
                    <p class="animate__animated animate__fadeInUp">
                        {{$keg->nama}}
                    </p>
                </div>
            </a>
        </div>
        @endforeach


        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </g>
    </svg>

</section>
<section id="event" style="margin-left: 10%; margin-right: 10%; margin-top: 10%;" data-aos="zoom-out">
    <div class="section-title" data-aos="zoom-out">
        <h2>latest</h2>
        <p>Event</p>
    </div>
    <div class="row">
        <div class="col-md-8">
            @foreach ($kegiatansPag as $keg)
            <div class="container mb-4">
                <img class="card-img-top" src="{{ asset('/storage/'.$keg->picPath) }}" alt="nama gambar">
                <div class="card-body">
                    <h2 style="font-family:'Open Sans', sans-serif;">{{$keg->nama}}</h2>
                    <a href="/eventdetails/{{$keg->id}}" class="btn btn-primary">Read More
                        &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    <h6 style="font-family:'Open Sans', sans-serif;">{{$keg->created_at}}</h6>
                </div>
            </div>
            @endforeach
            <div class="section-title pagination  justify-content-center" data-aos="zoom-out">
                <h5>Halaman {{ $kegiatansPag->currentPage() }} dari {{ $kegiatansPag->lastPage() }}</h2>
            </div>
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a href="{{$kegiatansPag->Url(1)}}" class="page-link">First</a>
                </li>
                <li>
                    <a href="{{$kegiatansPag->previousPageUrl()}}" class="page-link">Prev</a>
                </li>
                <li>
                    <a href="{{$kegiatansPag->nextPageUrl()}}" class="page-link">Next</a>
                </li>
                <li class="page-item">
                    <a href="{{$kegiatansPag->url($kegiatansPag->lastPage())}}" class="page-link">Last</a>
                </li>
            </ul>
        </div>


        @endsection
