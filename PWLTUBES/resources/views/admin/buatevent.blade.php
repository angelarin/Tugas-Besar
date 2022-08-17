@extends('layouts.mainAdminKonfirmasiTop')

@section('title', 'Create Event')
@section('css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="{{asset('../plugins/summernote/summernote.css')}}" rel="stylesheet" />

    <link href="{{asset('../plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('../plugins/jquery.filer/css/jquery.filer.css')}}" rel="stylesheet" />
    <link href="{{asset('../plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css')}}" rel="stylesheet" />

    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('../plugins/switchery/switchery.min.css')}}">
    <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
    <script>
        function getSubCat(val) {
            $.ajax({
                type: "POST",
                url: "get_subcategory.php",
                data: 'catid=' + val,
                success: function(data) {
                    $("#subcategory").html(data);
                }
            });
        }
    </script>
</head>
@endsection
@section('content')

@endsection
        <div class="content-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Add Post </h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="#">Post</a>
                                    </li>
                                    <li>
                                        <a href="#">Add Post </a>
                                    </li>
                                    <li class="active">
                                        Add Post
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="alert alert-success" role="alert">
                                <strong>Well done!</strong>
                            </div>
                            <div class="alert alert-danger" role="alert">
                                <strong>Oh snap!</strong>
                            </div>
                        </div>
                    </div>
                -->
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="p-6">
                                <div class="">
                                    <form action="isievent" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group m-b-20">
                                            <label for="exampleInputEmail1">Post Title</label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                placeholder="Enter title" required>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box">
                                                    <h4 class="m-b-30 m-t-0 header-title"><b>Post Details</b></h4>
                                                    <textarea class="summernote" name="desc" id="desc" required></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <label for="exampleInputEmail1">Harga Kegiatan</label>
                                            <input type="text" class="form-control" id="harga" name="harga"
                                                placeholder="Masukkan Harga Kegiatan" required>
                                        </div>

                                        <div class="form-group m-b-20">
                                            <label for="exampleInputEmail1">Gambar</label>
                                                <input type="file" name="image" placeholder="Choose image" id="image">
                                            @error('image')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror

                                        </div>
                                        <!--
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card-box">
                                                    <h4 class="m-b-30 m-t-0 header-title"><b>Feature Image</b></h4>
                                                    <input type="file" class="form-control" id="postimage"
                                                        name="postimage" required>
                                                </div>
                                            </div>
                                        </div>
                                        -->

                                        <button type="submit" name="submit"
                                            class="btn btn-success waves-effect waves-light">Save and Post</button>
                                        <button type="button"
                                            class="btn btn-danger waves-effect waves-light">Discard</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@section('script')
    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/detect.js')}}"></script>
    <script src="{{asset('assets/js/fastclick.js')}}"></script>
    <script src="{{asset('assets/js/jquery.blockUI.js')}}></script>
    <script src="{{asset('assets/js/waves.js')}}"></script>
    <script src="{{asset('ssets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('../plugins/switchery/switchery.min.js')}}"></script>

    <!--Summernote js-->
    <script src="{{asset('../plugins/summernote/summernote.min.js')}}"></script>
    <!-- Select 2 -->
    <script src="{{asset('../plugins/select2/js/select2.min.js')}}"></script>
    <!-- Jquery filer js -->
    <script src="{{asset('../plugins/jquery.filer/js/jquery.filer.min.js')}}"></script>

    <!-- page specific js -->
    <script src="{{asset('assets/pages/jquery.blog-add.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/jquery.core.js')}}"></script>
    <script src="{{asset('assets/js/jquery.app.js')}}"></script>

    <script>
        jQuery(document).ready(function() {

            $('.summernote').summernote({
                height: 240, // set editor height
                minHeight: null, // set minimum height of editor
                maxHeight: null, // set maximum height of editor
                focus: false // set focus to editable area after initializing summernote
            });
            // Select2
            $(".select2").select2();

            $(".select2-limiting").select2({
                maximumSelectionLength: 2
            });
        });
    </script>
    <script src="{{asset('../plugins/switchery/switchery.min.js')}}"></script>

    <!--Summernote js-->
    <script src="{{asset('../plugins/summernote/summernote.min.js')}}"></script>
</body>
</html>
@endsection
