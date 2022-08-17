@extends('layouts.main')

@section('title', 'news detail')
@section('content')


<section>
    <div class="container">
        <div class="row" style="margin-top: 4%">
            <div class="col-2"></div>
            <div class="col-md-8">

                <div class="card mb-4" style="border-radius: 20px;">

                    <div class="card-body">
                        <h2 class="card-title">{{$events->nama}}</h2>
                        <hr />

                        <img class="img-fluid rounded" src="{{ asset('/storage/'.$events->picPath) }}" alt="gambar">

                        <p class="card-text">
                            {!!$events->desc!!}
                        </p>
                        <h5>Harga Kegiatan : Rp{{$events->harga}}</h5>

                    </div>
                    <div class="card-footer text-muted">
                        <div class="row">
                            <div class="col-10"></div>
                            <div class="col-md-2">
                                <a href="/{{$events->id}}/konfirmasi"><button style="width: 100px" type="button"
                                        class="btn btn-primary">Ikuti</button></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-2"></div>
            @endsection

        </div>
        @section('content2')
        <div class="row">
            <div class="col-2"></div>

            <div class="col-8">
                <div class="card mb-4">
                    <h5 class="card-header">Silahkan Login Untuk Memberikan Komentar</h5>
                    <div class="media mb-4">
                        <img class="d-flex mr-3 rounded-circle" src="{{asset('images/usericon.png')}}" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">Nama<br />
                                <span style="font-size:11px;"><b>at</b>posting date</span>
                            </h5>
                            komen
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>
    </div>
    </div>
</section>

@endsection
