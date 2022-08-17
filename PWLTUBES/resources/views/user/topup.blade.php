@extends('layouts.mainsiswa')

@section('title', 'Top Up')
@section('content')

    <div id="wrapper">


        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Informasi TopUp</h4>
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
                            <h4 class="m-t-0 header-title"><b>Detail TopUp Tabungan</b></h4>
                            <hr />

                            <div class="row">
                                <div class="col-sm-6">

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                    <form class="form-horizontal" action="isinabung" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Nama :</label>
                                            <div class="col-md-8">
                                                <p>{{ Auth::user()->name }}</p>
                                            </div>
                                        </div>
                                        <input type="hidden" name="id_siswa" value="{{ Auth::user()->id }}" />
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Bank</label>
                                            <div class="col-md-8">
                                                <div class="form-group m-b-20">
                                                    <select class="form-control" name="id_bank" id="id_bank"
                                                        onChange="getSubCat(this.value);" required>
                                                        <option value="">Pilih Bank </option>
                                                        @foreach ($banks as $ban)
                                                        <option value="{{$ban->id}}">{{$ban->nama_bank}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Total Top Up</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" value="" name="nominal"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">PIN</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" value="" name="pin"
                                                    required>
                                            </div>
                                        </div>
                                        <input type="hidden" name="status" value="pending" />
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">&nbsp;</label>
                                            <div class="col-md-8">

                                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md"
                                                    name="submit">
                                                    Top Up
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
