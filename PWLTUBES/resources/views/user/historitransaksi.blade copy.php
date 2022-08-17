@extends('layouts.mainHistAcc')

@section('title', 'Histori Transaksi')
@section('content')

<body class="fixed-left">

    <div id="wrapper">


        <div class="content">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Lihat transaksi</h4>
                            <ol class="breadcrumb p-0 m-0">
                                <li>
                                    <a href="#">Pengguna</a>
                                </li>
                                <li>
                                    <a href="#">Transaksi</a>
                                </li>
                                <li class="active">
                                    Manage Transaksi
                                </li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="container" style="width: 80%">
                    <div class="row">
                        <div class="col-sm-6">

                            <h2>Histori {{ Auth::user()->name }}</h2>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="demo-box m-t-20">
                                    <div class="m-b-30">

                                        <h4>Histori Top Up</h4>

                                    </div>


                                    <div class="table-responsive">
                                        <table id="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>

                                                    <th>Kegiatan</th>
                                                    <th>Nominal</th>
                                                    <th>Transaction Date</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tagih as $tagi)
                                                @if ($tagi->id_siswa == Auth::user()->id)

                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $tagi->kegiatans->nama }}</td>
                                                    <td>{{ $tagi->total_tagihan }}</td>
                                                    <td>{{ $tagi->created_at }}</td>

                                                </tr>
                                                @endif
                                                @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="demo-box m-t-20">
                                    <div class="m-b-30">

                                        <h4>Histori Top Up</h4>

                                    </div>

                                    <div class="table-responsive">
                                        <table id="table1">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Bank</th>
                                                    <th>Nominal</th>
                                                    <th>Status</th>
                                                    <th>Transaction Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                {{-- <tr>

                                                    <td colspan="7" align="center">
                                                        <h3 style="color:red">No record found</h3>
                                                    </td>
                                                <tr> --}}

                                                @foreach ($topup as $top)
                                                @if ($tagi->id_siswa == Auth::user()->id)

                                                <tr>
                                                    <th scope="row">{{ $no++ }}</th>
                                                    <th>{{ $top->banks->nama_bank }}</th>
                                                    <th>{{ $top->nominal}}</th>
                                                    <th>{{ $top->status}}</th>
                                                    <th>{{ $top->created_at }}</th>

                                                </tr>
                                                @endif
                                                @endforeach

                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
