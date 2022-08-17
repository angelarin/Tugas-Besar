@extends('layouts.mainAdminKonfirmasiTop')

@section('title', 'Admin')
@section('css')
    <link href="{{ asset('images/logoe-tas.png') }}" rel="icon">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/core.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/menu.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('../plugins/switchery/switchery.min.css') }}">
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script type="text/javascript">
        function valid() {
            if (document.chngpwd.password.value == "") {
                alert("Current Password Filed is Empty !!");
                document.chngpwd.password.focus();
                return false;
            } else if (document.chngpwd.newpassword.value == "") {
                alert("New Password Filed is Empty !!");
                document.chngpwd.newpassword.focus();
                return false;
            } else if (document.chngpwd.confirmpassword.value == "") {
                alert("Confirm Password Filed is Empty !!");
                document.chngpwd.confirmpassword.focus();
                return false;
            } else if (document.chngpwd.newpassword.value != document.chngpwd.confirmpassword.value) {
                alert("Password and Confirm Password Field do not match  !!");
                document.chngpwd.confirmpassword.focus();
                return false;
            }
            return true;
        }
    </script>
    </head>
@endsection
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Informasi Admin</h4>
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
                        <div class="card-box" style="padding-left: 12cm">
                            <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img"
                                style="width: 20%;">
                            <h2>Hai, {{ Auth::user()->name }}</h2>
                        </div>

                        <div class="row">
                            <div class="col-md-10">
                                <form class="form-horizontal" name="chngpwd" method="post" onSubmit="return valid();">

                                    <div class="form-group">
                                        <label class="col-md-4 control-label">E-mail </label>
                                        <div class="col-md-8">
                                            <p>{{ Auth::user()->email }}</p>
                                        </div>
                                    </div>

                                    <!--
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Event</label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control" value=""
                                                                    name="confirmpassword" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">Tagihan</label>
                                                            <div class="col-md-8">
                                                                <input type="text" class="form-control" value=""
                                                                    name="confirmpassword" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-4 control-label">&nbsp;</label>
                                                            <div class="col-md-8">

                                                                <button type="submit"
                                                                    class="btn btn-custom waves-effect waves-light btn-md"
                                                                    name="submit">
                                                                    Setuju
                                                                </button>
                                                            </div>
                                                        </div>
                                                        -->
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
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/detect.js') }}"></script>
    <script src="{{ asset('assets/js/fastclick.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>
    <script src="../plugins/switchery/switchery.min.js')}}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.app.js') }}"></script>
    </body>

@endsection
