<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{asset('images/logoe-tas.png')}}" rel="icon">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    @yield('script')

</head>

<body>

    <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <a href="/siswa"><img src="{{asset('images/logoe.png')}}" alt="" style="width: 150%;" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto @yield('statusHome')" href="/siswa">Home</a></li>
                    <li><a class="nav-link scrollto" href="/index#event">Event</a></li>
                    <li><a class="nav-link scrollto @yield('statusAbout')" href="/about">About</a></li>
                    <li class="dropdown user-box">
                        <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown"
                            aria-expanded="true">
                            <img src="{{asset('images/icons8-user-64.png')}}" alt="user-img" class="img-circle user-img" height="30">
                        </a>
                        <ul
                            class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                            <li>
                                <h5 align="center">Hi,
                                    {{ Auth::user()->name }}
                                </h5>
                            </li>
                            <li><a href="/profilsiswa"><i class="ti-settings m-r-5"></i>Profil</a></li>
                            <li><a href="/historitransaksi"><i class="ti-settings m-r-5"></i>Transaksi</a></li>
                            <li><a href="/topup"><i class="ti-settings m-r-5"></i>Top Up</a></li>
                            <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"><i class="ti-settings m-r-5"></i>
                                 {{ __('Logout') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form></li>
                        </ul>
                    </li>
                    <li>
                        <form action="/siswa/cari" method="GET">
                            <div class="input-group">

                                <input style="font-family:'Open Sans', sans-serif; border-radius: 20px;" type="text"
                                    name="cari" class="form-control" placeholder="Cari Kegiatan..." required>
                                <span class="input-group-btn">
                                    <button style="font-family:'Open Sans', sans-serif; border-radius: 20px;"
                                        class="btn btn-secondary" type="submit">CARI</button>
                                </span>
                        </form>
                    </li>
                    <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>

    @yield('content')

    <!--
    <div class="col-md-4">

        <style>
            input,
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            ul,
            li {
                font-family: 'Open Sans', sans-serif;
            }
        </style>

        <div class="card mb-4" style="border-radius: 20px;">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                <form name="search" action="search.php" method="post">
                    <div class="input-group">

                        <input style="border-radius: 20px;" type="text" name="searchtitle" class="form-control"
                            placeholder="Search for..." required>
                        <span class="input-group-btn">
                            <button style="border-radius: 20px;" class="btn btn-secondary" type="submit">Go!</button>
                        </span>
                </form>
            </div>
        </div>
    </div>
    <div class="card my-4" style="border-radius: 20px;">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">


                        <li>
                            <a href="">

                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card my-4" style="border-radius: 20px;">
        <h5 class="card-header">Recent News</h5>
        <div class="card-body">
            <ul class="mb-0">

                <li>
                    <a href="news-details.php?nid=/* echo htmlentities($row['pid']) */">

                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="card my-4" style="border-radius: 20px;">
        <h5 class="card-header">Popular News</h5>
        <div class="card-body">
            <ul>


                <li>
                    <a href="news-details.php?nid=/* echo htmlentities($result['pid']) */">

                    </a>
                </li>

            </ul>
        </div>
    </div>
-->
    </div>
    </div>
    </section>

    <footer id="footer">
        <div class="container">
            <h4>"The more you learn, the more you earn." – Warren Buffett</h4>
            <p>Thank you for visiting our website</p>
            <div class="copyright">
                &copy; Copyright <strong><span>Kelompok 1</span></strong>.
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
