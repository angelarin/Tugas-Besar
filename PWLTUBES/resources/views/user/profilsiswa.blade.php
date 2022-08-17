<!DOCTYPE html>
<html lang="en">

<head>

    <title>Profil Siswa</title>
    <link href="{{ asset('images/logoe-tas.png') }}" rel="icon">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/menu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('plugins/switchery/switchery.min.css') }}">
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

</head>

<body class="fixed">
    <div id="wrapper">
        <div class="content">
            <div sty class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Informasi Siswa</h4>
                            <ol class="breadcrumb p-0 m-0">

                                <li>
                                    <a href="/siswa">Home</a>
                                </li>
                                <li class="active">
                                    Detail Profile
                                </li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-md-6">
                        <div class="demo-box m-t-20">
                            <div class="row" style="">
                                <div class="">
                                    <img src="assets/images/users/avatar-1.jpg" alt="gambar pp">
                                </div>
                            </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Nama</label>
                                        <div class="col-md-4">
                                            <p>{{ Auth::user()->name }}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">E-Mail</label>
                                        <div class="col-md-4">
                                            @foreach ($user as $email)
                                                @if ($email->id == Auth::user()->id)
                                                    <p>{{ $email->email }}</p>
                                                @endif
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">PIN</label>
                                        <div class="col-md-4">
                                                    <p>{{Auth::user()->pin}}</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Saldo </label>
                                        <div class="col-md-4">
                                            @foreach ($saldo as $uang)
                                                @if ($uang->id_siswa == Auth::user()->id)
                                                    <p>{{ $uang->saldo }}</p>
                                                @endif
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    </div>


    </div>

    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/detect.js') }}"></script>
    <script src="{{ asset('assets/js/fastclick.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('plugins/switchery/switchery.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.app.js') }}"></script>


</body>

</html>
