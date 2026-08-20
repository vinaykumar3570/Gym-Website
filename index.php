    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CoreX - A Gym website</title>

        <!-- All CDN included -->
        <?php include "commonPhp/allCDN.php" ?>

        <!-- Homepage css  -->
        <link rel="stylesheet" href="css/home.css">

    </head>

    <body onscroll="scrollFunction()">

        <!-- FIxed button and top contact details  -->
        <?php include "commonPhp/topDetails.php"?>
        <!-- End Here-->

        <!-- Header Start Here  -->
        <?php include "commonPhp/header1.php" ?>
        <!-- Header End Here  -->

        <!-- Quotes Slider start here  -->
        <section class="quotes">
            <div class="quotes-slide">
            </div>
        </section>
        <!-- Quotes Slider end here  -->

        <!-- Why Choose us Section Start -->
        <section class="why-choose">
            <div class="container px-3 px-sm-0">
                <h2 class="section-title"> Why Choose Us ?</h2>
                <p class="section-para"> Discover what make us the perfect place to achieve your fitness goals.</p>
                <div class="row mt-5">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="card">
                            <div class="card-content d-flex flex-column justify-content-between">
                                <i class="fas fa-screwdriver-wrench card-icon"></i>
                                <div>
                                    <h4 class="fw-medium"> Modern Equipment </h4>
                                    <p>Train with premium machines and the latest fitness equipment for maximum performance.
                                    </p>
                                </div>
                                <a href="#"> Explore Now
                                    <i class="fas fa-arrow-right-long card-arrow-icon"></i></a>
                            </div>
                            <div class="number-box">
                                <span class="number"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="card">
                            <div class="card-content d-flex flex-column justify-content-between">
                                <i class="fas fa-users card-icon"></i>
                                <div>
                                    <h4 class="fw-medium"> Expert Trainers</h4>
                                    <p>Certified trainers guide every workout with personalized fitness plans and
                                        motivation.</p>
                                </div>
                                <a href="#"> Explore Now
                                    <i class="fas fa-arrow-right-long card-arrow-icon"></i></a>
                            </div>
                            <div class="number-box">
                                <span class="number"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="card">
                            <div class="card-content d-flex flex-column justify-content-between">
                                <i class="fas fa-clock-rotate-left card-icon"></i>
                                <div>
                                    <h4 class="fw-medium">Flexible Timing</h4>
                                    <p>Choose workout sessions that fit your schedule with convenient opening hours.</p>
                                </div>
                                <a href="#"> Explore Now
                                    <i class="fas fa-arrow-right-long card-arrow-icon"></i></a>
                            </div>
                            <div class="number-box">
                                <span class="number"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="card">
                            <div class="card-content d-flex flex-column justify-content-between">
                                <i class="fas fa-user-doctor card-icon"></i>
                                <div>
                                    <h4 class="fw-medium"> Healthy Lifestyle </h4>
                                    <p>Improve strength, endurance, and overall wellness through balanced fitness programs.
                                    </p>
                                </div>
                                <a href="#"> Explore Now
                                    <i class="fas fa-arrow-right-long card-arrow-icon"></i></a>
                            </div>
                            <div class="number-box">
                                <span class="number"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="card">
                            <div class="card-content d-flex flex-column justify-content-between">
                                <i class="fas fa-money-check-dollar card-icon mb-0"></i>
                                <div>
                                    <h4 class="fw-medium"> Affordable Membership </h4>
                                    <p>Emjoy premium facilities with flexible membership plans that fit every budget.</p>
                                </div>
                                <a href="#"> Explore Now
                                    <i class="fas fa-arrow-right-long card-arrow-icon"></i>
                                </a>
                            </div>
                            <div class="number-box">
                                <span class="number"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="card">
                            <div class="card-content d-flex flex-column justify-content-between">
                                <i class="fas fa-hand-holding-hand card-icon"></i>
                                <div>
                                    <h4 class="fw-medium"> Supportive Community </h4>
                                    <p>Stay inspired with a friendly fitness community that motivates you everyday.</p>
                                </div>
                                <a href="#"> Explore Now
                                    <i class="fas fa-arrow-right-long card-arrow-icon"></i></a>
                            </div>
                            <div class="number-box">
                                <span class="number"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why choose Us section end -->

        <!-- Join Today Section Start Here  -->
        <?php include "commonPhp/join_today.php" ?>
        <!-- Join Today Section End Here  -->

        <!-- footer Section Start Here  -->
        <?php include "commonPhp/footer.php" ?>
        <!-- footer Section End Here  -->

        <!-- JS Files CDN  -->
        <?php include "commonPhp/JavaScript_links.php" ?>

    </body>

    </html>