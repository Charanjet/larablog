<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('assets/bootstrap5/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css')}}">
    <title>Blog</title>
</head>
<body>
    <!--header nav-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-0 py-3">
        <div class="container-xl">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="./assets/images/logo.png" class="h-2" alt="...">
            </a>
            <!-- Navbar toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Nav -->
                <div class="navbar-nav mx-lg-auto">
                    <a class="nav-item nav-link active" href="#" aria-current="page">Home</a>
                    <a class="nav-item nav-link" href="#">Product</a>
                    <a class="nav-item nav-link" href="#">Features</a>
                    <a class="nav-item nav-link" href="#">Pricing</a>
                </div>
                <!-- Right navigation -->
                <div class="navbar-nav ms-lg-4">
                    <a class="nav-item nav-link" href="#">Sign in</a>
                </div>
                <!-- Action -->
                <div class="d-flex align-items-lg-center mt-3 mt-lg-0">
                    <a href="#" class="btn btn-sm btn-primary w-full w-lg-auto">
                        Register
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!--header nav end-->
    <!-- main slider -->
    <div id="maincarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#maincarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#maincarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img class="d-block w-100" src="./assets/images/banner1.jpg" alt="swamp">
            </div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="./assets/images/banner2.jpg" alt="flight">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#maincarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#maincarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button

    </div>
    <!-- main slider end-->
    <!-- posts listing -->
    <h2 class="text-center mt-5"> Blog </h2>
    <div class="posts-wrapper m-5">
        <a href="" class="row">
            <div class="col-md-4">
                <img src="./assets//images/comp2.jpeg" alt="" class="w-100">
            </div>
            <div class="col-md-7">
                    <div class="post-title h2"> Dummy Post</div>
                    <div class="post-author h5">By: Charanjeet</div>
                    <div class="post-date h6">On: 2012-06-21</div>

                    <div class="post-excerpt">Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                    elit,Lorem ipsum dolor sit amet.</div>
            </div>
        </a>
    </div>
    <div class="posts-wrapper m-5">
        <a href="" class="row">
            <div class="col-md-4">
                <img src="./assets//images/comp.jpeg" alt="" class="w-100">
            </div>
            <div class="col-md-7">
                    <div class="post-title h2"> Dummy Post</div>
                    <div class="post-author h5">By: Charanjeet</div>
                    <div class="post-date h6">On: 2012-06-21</div>

                    <div class="post-excerpt">Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                    elit,Lorem ipsum dolor sit amet.</div>
            </div>
        </a>
    </div>
    <div class="posts-wrapper m-5">
        <a href="" class="row">
            <div class="col-md-4">
                <img src="./assets//images/comp3.jpeg" alt="" class="w-100">
            </div>
            <div class="col-md-7">
                    <div class="post-title h2"> Dummy Post</div>
                    <div class="post-author h5">By: Charanjeet</div>
                    <div class="post-date h6">On: 2012-06-21</div>

                    <div class="post-excerpt">Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                    elit,Lorem ipsum dolor sit amet.</div>
            </div>
        </a>
    </div>
    <div class="posts-wrapper m-5">
        <a href="" class="row">
            <div class="col-md-4">
                <img src="./assets//images/comp2.jpeg" alt="" class="w-100">
            </div>
            <div class="col-md-7">
                    <div class="post-title h2"> Dummy Post</div>
                    <div class="post-author h5">By: Charanjeet</div>
                    <div class="post-date h6">On: 2012-06-21</div>

                    <div class="post-excerpt">Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                    elit,Lorem ipsum dolor sit amet.</div>
            </div>
        </a>
    </div>
    <!-- posts listing end-->
<!-- footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>Lorem ipsum 12 , 161893, Ludhiana</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>9876543210 0</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>mail@info.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="./assets/images/logo.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                    elit,Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Expert Team</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class="fab fa-telegram-plane"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2012, All Right Reserved 9878873813</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!-- footer end-->

</body>
<script src="{{ url('assets/bootstrap5/js/bootstrap.min.js')}}"></script>
<script src="{{ url('assets/js/jquery.min.js')}}"></script>
</html>