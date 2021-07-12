<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MyBlog</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="resources/blog/assets/img/favicon.png" rel="icon">
    <link href="resources/blog/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="{{ URL::asset('css/blog.css') }}" rel="stylesheet">

<!-- =======================================================
    * Template Name: DevFolio - v2.4.1
    * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body id="page-top">

<!-- ======= Header/ Navbar ======= -->
<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll" href="#page-top" >DevFolio</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="{{route('news.index')}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="{{route('MyBlogDashboard')}}">About</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts.index')}}" class="nav-link js-scroll" >Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="copyright-box">
                    <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
                    <div class="credits">
                        <!--
                        All the links in the footer should remain intact.
                        You can delete the links only if you purchased the pro version.
                        Licensing information: https://bootstrapmade.com/license/
                        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                      -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<script type="text/javascript" src="{{URL::asset('js/blog.js')}}"></script>
</body>

</html>
