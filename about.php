<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - CoreX</title>

    <!-- All CDN included -->
    <?php include "commonPhp/allCDN.php" ?>

    <!-- Owl Carousel CSS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" />

    <!-- About page css  -->
    <link rel="stylesheet" href="css/about.css">

</head>

<body onscroll="scrollFunction()">

    <!-- FIxed button and top contact details  -->
    <?php include "commonPhp/topDetails.php"?>
    <!-- End Here-->

    <!-- Header Start  -->
    <?php include "commonPhp/header2.php" ?>
    <!-- Header End -->

    <!-- Who we are section  -->
    <section class="who-we-are py-5">
        <div class="container">
            <h3 class="section-top-title"> Who we are </h3>
            <h2 class="section-title"> Built for your fitness journey </h2>
            <div class="row">
                <div class="col-lg-7 mt-4">
                    <p class="fs-5 about-para">
                        Our gym is designed for people who are serious about improving their health and fitness. Whether
                        you're taking your first step into fitness or looking to reach the next level, we provide the
                        right environment, guidance, and equipment to help you succeed. <br>

                        We believe fitness is not just about lifting weights or looking good—it’s about building
                        discipline, confidence, strength, and a healthier lifestyle.
                    </p>
                    <div class="row about-customers">
                        <div class="col-4 px-1 px-sm-2 px-lg-3">
                            <div class="card py-4">
                                <h2 class="m-0"> 500+ </h2>
                                <p class="m-0"> Happy Customers </p>
                            </div>
                        </div>
                        <div class="col-4 px-1 px-sm-2 px-lg-3">
                            <div class="card py-4">
                                <h2 class="m-0"> 6+ </h2>
                                <p class="m-0"> Expert trainers </p>
                            </div>
                        </div>
                        <div class="col-4 px-1 px-sm-2 px-lg-3">
                            <div class="card py-4">
                                <h2 class="m-0"> 5+ </h2>
                                <p class="m-0"> years of excellence </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <img src="assests/images/slider1.jpg" class="img-fluid rounded-4" width="100%" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Who we are section End -->

    <!-- What we offer section start -->
    <section class="what-offer py-5">
        <div class="container">
            <h2 class="section-title"> what we offer </h2>
            <div class="row my-4">
                <div class="mb-3 col-6 col-md-3">
                    <div class="card py-4 h-100">
                        <img src="assests/svg/strength.png" alt="" height="70px" style="color:red;">
                        <p class="m-0 fs-5 px-md-4 fw-semibold mt-3"> Strength Training</p>
                    </div>
                </div>
                <div class="mb-3 col-6 col-md-3">
                    <div class="card py-4 h-100">
                        <img src="assests/svg/weight.png" alt="" height="70px" style="color:red;">
                        <p class="m-0 fs-5 px-md-4 fw-semibold mt-3"> Weight Management </p>
                    </div>
                </div>
                <div class="mb-3 col-6 col-md-3">
                    <div class="card py-4 h-100">
                        <img src="assests/svg/stretching.png" alt="" height="70px" style="color:red;">
                        <p class="m-0 fs-5 px-md-4 fw-semibold mt-3"> Flexibility & Mobility</p>
                    </div>
                </div>
                <div class="mb-3 col-6 col-md-3">
                    <div class="card py-4 h-100">
                        <img src="assests/svg/guide.png" alt="" height="70px" style="color:red;">
                        <p class="m-0 fs-5 px-md-4 fw-semibold mt-3"> Fitness <br> Guidance </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What we offer section end -->


    <!-- Why we stand out Section start -->
    <section class="why-stand-out py-5">
        <div class="container">
            <p class="section-top-title"> why we stand out </p>
            <h2 class="section-title">more than just a gym</h2>
            <p class="fs-5">We create an environment where every workout has a purpose. From professional guidance to
                modern equipment and a supportive community, everything is designed to keep you motivated and moving
                forward.</p>
            <div class="row fs-5">
                <div class="col-md-6">
                    <div>
                        <i class="fas fa-check-circle" style="color:var(--primary-color);"></i> Expert & Supportive
                        Trainers
                    </div>
                    <div>
                        <i class="fas fa-check-circle" style="color:var(--primary-color);"></i> Modern Fitness Equipment
                    </div>
                    <div>
                        <i class="fas fa-check-circle" style="color:var(--primary-color);"></i> Clean & Comfortable
                        Environment
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <i class="fas fa-check-circle" style="color:var(--primary-color);"></i> Flexible Membership
                        Plans
                    </div>
                    <div>
                        <i class="fas fa-check-circle" style="color:var(--primary-color);"></i> Personalized Workout
                        Guidance
                    </div>
                    <div>
                        <i class="fas fa-check-circle" style="color:var(--primary-color);"></i> Motivating Fitness
                        Community
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why we stand out section end -->

    <!-- Trainers Section start -->
    <section class="trainers py-5">
        <div class="container">
            <h2 class="section-title mb-5"> meet our trainers </h2>
            <div id="owl-demo" class="owl-carousel owl-theme owl-ltr">
                <div class="profile-card item">
                    <img src="assests/images/trainer1.jpg" alt="">
                    <span class="social-icons">
                        <a href="#"> <span class="icon icon1"> <i class="f-icon fab fa-facebook-f"></i></span></a>
                        <a href="#"> <span class="icon icon2"> <i class="f-icon fab fa-instagram"></i></span></a>
                        <a href="#"> <span class="icon icon3"> <i class="f-icon fab fa-x-twitter"></i></span></a>
                    </span>
                    <span class="trainer-name fs-3"> Aditi Sharma </span>
                    <div class="trainer-profession fs-5"> Fitness Trainer</div>
                </div>
                <div class="profile-card item">
                    <img src="assests/images/trainer2.jpg" alt="">
                    <span class="social-icons">
                        <a href="#"> <span class="icon icon1"> <i class="f-icon fab fa-facebook-f"></i></span></a>
                        <a href="#"> <span class="icon icon2"> <i class="f-icon fab fa-instagram"></i></span></a>
                        <a href="#"> <span class="icon icon3"> <i class="f-icon fab fa-x-twitter"></i></span></a>
                    </span>
                    <span class="trainer-name fs-3"> Arjun Mehta </span>
                    <div class="trainer-profession fs-5"> Strength Coach</div>
                </div>
                <div class="profile-card item">
                    <img src="assests/images/trainer3.jpg" alt="">
                    <span class="social-icons">
                        <a href="#"> <span class="icon icon1"> <i class="f-icon fab fa-facebook-f"></i></span></a>
                        <a href="#"> <span class="icon icon2"> <i class="f-icon fab fa-instagram"></i></span></a>
                        <a href="#"> <span class="icon icon3"> <i class="f-icon fab fa-x-twitter"></i></span></a>
                    </span>
                    <span class="trainer-name fs-3"> Vikram Singh </span>
                    <div class="trainer-profession fs-5"> Fitness Coach</div>
                </div>
                <div class="profile-card item">
                    <img src="assests/images/trainer4.jpg" alt="">
                    <span class="social-icons">
                        <a href="#"> <span class="icon icon1"> <i class="f-icon fab fa-facebook-f"></i></span></a>
                        <a href="#"> <span class="icon icon2"> <i class="f-icon fab fa-instagram"></i></span></a>
                        <a href="#"> <span class="icon icon3"> <i class="f-icon fab fa-x-twitter"></i></span></a>
                    </span>
                    <span class="trainer-name fs-3"> Rohan Sharma </span>
                    <div class="trainer-profession fs-5"> Personal Trainer</div>
                </div>
                <div class="profile-card item">
                    <img src="assests/images/trainer5.jpg" alt="">
                    <span class="social-icons">
                        <a href="#"> <span class="icon icon1"> <i class="f-icon fab fa-facebook-f"></i></span></a>
                        <a href="#"> <span class="icon icon2"> <i class="f-icon fab fa-instagram"></i></span></a>
                        <a href="#"> <span class="icon icon3"> <i class="f-icon fab fa-x-twitter"></i></span></a>
                    </span>
                    <span class="trainer-name fs-3"> Ananya Rao </span>
                    <div class="trainer-profession fs-5"> Yoga Trainer</div>
                </div>
                <div class="profile-card item">
                    <img src="assests/images/trainer6.jpg" alt="">
                    <span class="social-icons">
                        <a href="#"> <span class="icon icon1"> <i class="f-icon fab fa-facebook-f"></i></span></a>
                        <a href="#"> <span class="icon icon2"> <i class="f-icon fab fa-instagram"></i></span></a>
                        <a href="#"> <span class="icon icon3"> <i class="f-icon fab fa-x-twitter"></i></span></a>
                    </span>
                    <span class="trainer-name fs-3"> Aditya Verma </span>
                    <div class="trainer-profession fs-5"> Fitness Trainer</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trainers Section End -->

   <!-- Join Today Section Start Here  -->
   <?php include "commonPhp/join_today.php" ?>
    <!-- Join Today Section End Here  -->

    <!-- footer Section Start Here  -->
    <?php include "commonPhp/footer.php" ?>
    <!-- footer Section End Here  -->

    <!-- JS Files CDN  -->
   <?php include "commonPhp/JavaScript_links.php" ?>

    <!-- Owl Carousel JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        let subHeroTitle = document.querySelectorAll(".sub-hero-title");
        let subHeroPara = document.querySelectorAll(".sub-hero-para");

        subHeroTitle[0].innerHTML = "<span> Stronger</span> Every Day. Better <span>Every Day.</span>"
        subHeroPara[0].innerHTML = " We more than just a gym - we're community dedicated to helping you become <br class='d-none d-lg-block'> stronger, healthier, and more confident."


        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                center: true,
                items: 3,
                loop: true,
                // nav: true,
                margin: 20,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                smartSpeed: 1000,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        // loop: false
                    }
                }
            });
        });
    </script>
</body>

</html>