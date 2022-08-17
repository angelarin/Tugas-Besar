@extends('layouts.mainAdminKonfirmasiTop')

@section('title', 'Accounts')
@section('css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <title>Newsportal | Manage Posts</title>

    <link rel="stylesheet" href="{{asset('../plugins/morris/morris.css')}}">

    <link href="{{asset('../plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('../plugins/switchery/switchery.min.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>

    </head>
@endsection
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
                                    <form class="form-horizontal" action="gantiisiacc" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Nama</label>
                                            <div class="col-md-8">
                                                @foreach ($users as $user)
                                                @if ($user->id == $sid)
                                                <input type="text" class="form-control" value="{!!$user->name!!}" id="name" name="name" required>
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Email</label>
                                            <div class="col-md-8">
                                                @foreach ($users as $user)
                                                @if ($user->id == $sid)
                                                <input type="text" class="form-control" value="{!!$user->email!!}" id="email" name="email" required>
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Password</label>
                                            <div class="col-md-8">
                                                @foreach ($users as $user)
                                                @if ($user->id == $sid)
                                                <input type="text" class="form-control" value="Password Baru" id="password" name="password" required>
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Pin</label>
                                            <div class="col-md-8">
                                                @foreach ($users as $user)
                                                @if ($user->id == $sid)
                                                <input type="text" class="form-control" value="{!!$user->pin!!}" id="pin" name="pin" required>
                                                @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Status Level</label>
                                            <div class="col-md-8">
                                                <div class="form-group m-b-20">
                                                    <select class="form-control" name="status" id="status"
                                                        onChange="getSubCat(this.value);" required>
                                                        <option value="{!!$user->status!!}">{!!$user->status!!}</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="siswa">Siswa</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">&nbsp;</label>
                                            <div class="col-md-8">
                                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md"
                                                    name="submit">
                                                    Update
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
@section('script')
    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/detect.js')}}"></script>
    <script src="{{asset('assets/js/fastclick.js')}}"></script>
    <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
    <script src="../plugins/switchery/switchery.min.js')}}"></script>

    <!-- CounterUp  -->
    <script src="../plugins/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="../plugins/counterup/jquery.counterup.min.js')}}"></script>

    <!--Morris Chart-->
    <script src="../plugins/morris/morris.min.js')}}"></script>
    <script src="../plugins/raphael/raphael-min.js')}}"></script>

    <!-- Load page level scripts-->
    <script src="../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="../plugins/jvectormap/gdp-data.js')}}"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>


    <!-- Dashboard Init js -->
    <script src="{{asset('assets/pages/jquery.blog-dashboard.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/jquery.core.js')}}"></script>
    <script src="{{asset('assets/js/jquery.app.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>


    </body>

    </html>
@endsection
