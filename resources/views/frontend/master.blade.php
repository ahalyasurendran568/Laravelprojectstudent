<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>student management landing page template</title>

        <!-- CSS FILES -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap-icons.css">
        <link rel="stylesheet" href="{{asset('frontend')}}/css/templatemo-ebook-landing.css">

    </head>

    <body>

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <i class="navbar-brand-icon bi-book me-2"></i>
                        <span>student management</span>
                    </a>

                    <div class="d-lg-none ms-auto me-3">
                        <a href="#" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                            <i class="btn-icon bi-cloud-download"></i>
                            <span>Download</span><!-- duplicated another one below for mobile -->
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto me-lg-4">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('StudentCreate')}}">Student</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('teacherPage')}}">Teacher</a>
                            </li>
                            <!--
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Course</a>
                            </li>
                        -->
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 pb-5 pb-lg-0 mb-lg-0">

                            <h6>Introducing student management</h6>

                            <h1 class="text-white mb-4">student management landing page</h1>

                            <a href="#section_2" class="btn custom-btn smoothscroll me-3">Discover More</a>

                            <a href="#section_3" class="link link--kale smoothscroll">Meet the Author</a>
                        </div>

                        <div class="hero-image-wrap col-lg-6 col-12 mt-3 mt-lg-0">
                            <img src="{{asset('frontend')}}/images/education-online-books.png" class="hero-image img-fluid" alt="education online books">
                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12">
                            <div class="avatar-group d-flex flex-wrap align-items-center">
                                <img src="{{asset('frontend')}}/images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg" class="img-fluid avatar-image" alt="">

                                <img src="{{asset('frontend')}}/images/avatar/portrait-young-redhead-bearded-male.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                                <img src="{{asset('frontend')}}/images/avatar/pretty-blonde-woman.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                                <img src="{{asset('frontend')}}/images/avatar/studio-portrait-emotional-happy-funny-smiling-boyfriend.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                                <div class="reviews-group mt-3 mt-lg-0">
                                    <strong>4.5</strong>

                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>

                                    <small class="ms-3">2,564 reviews</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="py-lg-5"></section>


            <section class="book-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="{{asset('frontend')}}/images/tablet-screen-contents.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="book-section-info">
                                <h6>Modern &amp; Creative</h6>


                                <h2 class="mb-4">About The student management</h2>

                            </div>
                        </div>

                    </div>
                </div>
            </section>





            <section class="author-section section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="{{asset('frontend')}}/images/portrait-mature-smiling-authoress-sitting-desk.jpg" class="author-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <h6>Meet Author</h6>

                            <h2 class="mb-4">Prof. Sophia</h2>

                        </div>

                    </div>
                </div>
            </section>


            <section class="reviews-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center mb-5">
                            <h6>Reviews</h6>

                            <h2>What people saying...</h2>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="custom-block d-flex flex-wrap">
                                <div class="custom-block-image-wrap d-flex flex-column">
                                    <img src="{{asset('frontend')}}/images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg" class="img-fluid avatar-image" alt="">

                                    <div class="text-center mt-3">
                                        <span class="text-white">Sandy</span>

                                        <strong class="d-block text-white">Artist</strong>
                                    </div>
                                </div>

                                <div class="custom-block-info">
                                    <div class="reviews-group mb-3">
                                        <strong>4.5</strong>

                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                    </div>

                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 my-5 my-lg-0">
                            <div class="custom-block d-flex flex-wrap">
                                <div class="custom-block-image-wrap d-flex flex-column">
                                    <img src="{{asset('frontend')}}/images/avatar/portrait-young-redhead-bearded-male.jpg" class="img-fluid avatar-image avatar-image-left" alt="">

                                    <div class="text-center mt-3">
                                        <span class="text-white">John</span>

                                        <strong class="d-block text-white">Producer</strong>
                                    </div>
                                </div>

                                <div class="custom-block-info">
                                    <div class="reviews-group mb-3">
                                        <strong>3.5</strong>

                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star"></i>
                                        <i class="bi-star"></i>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="custom-block d-flex flex-wrap">
                                <div class="custom-block-image-wrap d-flex flex-column">
                                    <img src="{{asset('frontend')}}/images/avatar/pretty-blonde-woman.jpg" class="img-fluid avatar-image" alt="">

                                    <div class="text-center mt-3">
                                        <span class="text-white">Candy</span>

                                        <strong class="d-block text-white">VP, Design</strong>
                                    </div>
                                </div>

                                <div class="custom-block-info">
                                    <div class="reviews-group mb-3">
                                        <strong>5</strong>

                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                        <i class="bi-star-fill"></i>
                                    </div>

                                    <p class="mb-0">Please tell your friends about our website that we provide deatils about Student Management System.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="contact-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12 mx-auto">
                            <form class="custom-form ebook-download-form bg-white shadow" action="#" method="post" role="form">
                                <div class="text-center mb-5">
                                    <h2 class="mb-1">Get a details</h2>
                                </div>

                                <div class="ebook-download-form-body">
                                    <div class="input-group mb-4">
                                        <input type="text" name="ebook-form-name" id="ebook-form-name" class="form-control" aria-label="ebook-form-name" aria-describedby="basic-addon1" placeholder="Your Name" required>

                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="custom-form-icon bi-person"></i>
                                        </span>
                                    </div>

                                    <div class="input-group mb-4">
                                        <input type="email" name="ebook-email" id="ebook-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="your@gmail.com" aria-label="ebook-form-email" aria-describedby="basic-addon2" required="">

                                        <span class="input-group-text" id="basic-addon2">
                                            <i class="custom-form-icon bi-envelope"></i>
                                        </span>
                                    </div>

                                    <div class="col-lg-8 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control">Download student management</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12">
                            <h6 class="mt-5">Say hi and talk to us</h6>

                            <h2 class="mb-4">Contact</h2>

                            <p class="mb-3">
                                <i class="bi-geo-alt me-2"></i>
                                Kerala, India
                            </p>

                            <p class="mb-2">
                                <a href="tel: 010-020-0340" class="contact-link">
                                    010-020-0340
                                </a>
                            </p>

                            <p>
                                <a href="mailto:info@company.com" class="contact-link">
                                    info@gmail.com
                                </a>
                            </p>

                            <h6 class="site-footer-title mt-5 mb-3">Social</h6>

                            <ul class="social-icon mb-4">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-whatsapp"></a>
                                </li>
                            </ul>

                            <p class="copyright-text">Copyright © 2048 student management
                            <br><br><a rel="nofollow" href="https://templatemo.com" target="_blank">designed by emergio</a></p>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('frontend')}}/js/jquery.min.js"></script>
        <script src="{{asset('frontend')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('frontend')}}/js/jquery.sticky.js"></script>
        <script src="{{asset('frontend')}}/js/click-scroll.js"></script>
        <script src="{{asset('frontend')}}/js/custom.js"></script>

    </body>
</html>
