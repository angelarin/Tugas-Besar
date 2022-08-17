@extends('layouts.mainsiswa')

@section('title', 'Konfirmasi Transaksi')
@section('content')
    <div id="wrapper">


        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Konfirmasi Transaksi</h4>
                            <ol class="breadcrumb p-0 m-0">
                                <li>
                                    <a href="#">Admin</a>
                                </li>

                                <li class="active">
                                    Transaksi
                                </li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>Detail Transaksi </b></h4>
                            <hr/>

                            <div class="row">
                                <div class="col-sm-6">

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                    <form class="form-horizontal" action="ikutevent" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Nama : </label>
                                            <div class="col-md-8">
                                                {{Auth::user()->name}}
                                            </div>
                                        </div>
                                        <input type="hidden" name="id_siswa" value="{{ Auth::user()->id }}" />
                                        <input type="hidden" name="id_kegiatan" value="{{$events->id}}" />
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">PIN : </label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" id="pin" name="pin"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Event : </label>
                                            <div class="col-md-8">
                                                {{$events->nama}}
                                            </div>
                                        </div>
                                        <input type="hidden" name="total_tagihan" value="{{$events->harga}}"/>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Tagihan : </label>
                                            <div class="col-md-8">
                                                {{$events->harga}}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">&nbsp;</label>
                                            <div class="col-md-8">

                                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md"
                                                    name="submit">
                                                    Setuju
                                                </button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
