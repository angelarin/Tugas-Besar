@extends('layouts.main')

@section('title', 'index')
@section('statusHome', 'active')
@section('content')

<section id="event" style="margin-left: 10%; margin-right: 10%; margin-top: 10%;" data-aos="zoom-out">
    <div class="section-title" data-aos="zoom-out">
        <h2>Hasil Pencarian</h2>
        <p>{{$cari}}</p>
    </div>
    <div class="row">
        <div class="col-md-8">
            @foreach ($kegiatans as $keg)
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
                <h5>Halaman {{ $kegiatans->currentPage() }} dari {{ $kegiatans->lastPage() }}</h2>
            </div>
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a href="{{$kegiatans->Url(1)}}" class="page-link">First</a>
                </li>
                <li>
                    <a href="{{$kegiatans->previousPageUrl()}}" class="page-link">Prev</a>
                </li>
                <li>
                    <a href="{{$kegiatans->nextPageUrl()}}" class="page-link">Next</a>
                </li>
                <li class="page-item">
                    <a href="{{$kegiatans->url($kegiatans->lastPage())}}" class="page-link">Last</a>
                </li>
            </ul>
        </div>


        @endsection
