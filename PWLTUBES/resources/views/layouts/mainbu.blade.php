<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="images/logoe-tas.png" rel="icon">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <a href="index.html"><img src="images/logoe.png" alt="" style="width: 150%;" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
                    <li><a class="nav-link scrollto" href="#news">News</a></li>
                    <li><a class="nav-link scrollto" href="aboutus.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin/">Sign-In</a></li>
                    <li>
                        <form name="search" action="search.php" method="post">
                            <div class="input-group">

                                <input style="font-family:'Open Sans', sans-serif; border-radius: 20px;" type="text"
                                    name="searchtitle" class="form-control" placeholder="Search for..." required>
                                <span class="input-group-btn">
                                    <button style="font-family:'Open Sans', sans-serif; border-radius: 20px;"
                                        class="btn btn-secondary" type="submit">Go!</button>
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

    @yield('content2')

    <footer id="footer">
        <div class="container">
            <h4>“Games have so much freedom. you can go anywhere you want.” – Jeneva Chen.</h4>
            <p>Thank you for visiting our website</p>
            <div class="copyright">
                &copy; Copyright <strong><span>Kelompok 4</span></strong>.
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>