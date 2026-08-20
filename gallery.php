<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery - CoreX</title>

    <!-- All CDN included -->
    <?php include "commonPhp/allCDN.php" ?>

    <!-- About page css  -->
    <link rel="stylesheet" href="css/gallery.css">

</head>

<body onscroll="scrollFunction()">

    <!-- FIxed button and top contact details  -->
    <?php include "commonPhp/topDetails.php" ?>
    <!-- End Here-->

    <!-- Header Start Here  -->
   <?php include "commonPhp/header2.php" ?>
    <!-- Header End Here -->


    <!-- Inside Gym Gallery Section Start -->
    <section class="inside-gym py-5">
        <div class="container">
            <p class="section-top-title">inside our gym</p>
            <h2 class="section-title">built for strength. designed for result</h2>
            <div class="gym-gallery my-5">
                <!-- Large Hero Image -->
                <div class="gallery-img gallery-item hero">
                    <img src="assests/images/reception.jpg" alt="CoreX gym reception">
                    <p> Reception Area </p>
                </div>

                <!-- Top Right -->
                <div class="gallery-img gallery-item training">
                    <img src="assests/images/slider2.jpg" alt="Gym strength training">
                    <p> Weight Training Area </p>
                </div>

                <!-- Bottom Left -->
                <div class="gallery-img gallery-item ropes">
                    <img src="assests/images/cardio-area.jpg" alt="Battle rope workout">
                    <p> Cardio Area </p>
                </div>

                <!-- Bottom Center -->
                <div class="gallery-img gallery-item weights">
                    <img src="assests/images/weight-lift.jpg" alt="Gym weights area">
                    <p> Weight Lifting Area </p>
                </div>

                <!-- Right Column Bottom -->
                <div class="gallery-img gallery-item cardio">
                    <img src="assests/images/personal-train.jpg" alt="Gym cardio area">
                    <p> Personal Training Area </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Inside gym gallery section end  -->


    <!-- Training Gallery Section Start -->
    <section class="training-gallery">
        <div class="container">
            <p class="section-top-title">Traning gallery</p>
            <h2 class="section-title"> train with purpose </h2>
            <p class="section-para">From intense strength sessions to focused personal training, our workouts are
                designed to challenge you and help you make progress.</p>
            <div class="row ">
                <div class="g-3 col-sm-6 col-md-6">
                    <div class="gallery-img">
                        <img src="assests/images/slider1.jpg" alt="" width="100%">
                    </div>
                </div>
                <div class="g-3 col-sm-6 col-md-6">
                    <div class="gallery-img">
                        <img src="assests/images/training2.jpg" alt="" width="100%">
                    </div>
                </div>
                <div class="g-3 col-sm-6 col-md-5">
                    <div class="gallery-img">
                        <img src="assests/images/training3.jpg" alt="" width="100%">
                    </div>
                </div>
                <div class="g-3 col-sm-6 col-md-7">
                    <div class="gallery-img">
                        <img src="assests/images/training6.jpg" alt="" width="100%">
                    </div>
                </div>
                <div class="g-3 col-sm-6 col-md-6">
                    <div class="gallery-img">
                        <img src="assests/images/training4.jpg" alt="" width="100%">
                    </div>
                </div>
                <div class="g-3 col-sm-6 col-md-6">
                    <div class="gallery-img">
                        <img src="assests/images/training5.jpg  " alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trainig Gallery Section End -->


    <!-- Join Today Section Start Here  -->
    <?php include "commonPhp/join_today.php" ?>
    <!-- Join Today Section End Here  -->

    <!-- footer Section Start Here  -->
    <?php include "commonPhp/footer.php" ?>
    <!-- footer Section End Here  -->

    <!-- JS Files CDN  -->
    <?php include "commonPhp/JavaScript_links.php" ?>

    <script>
        let subHeroTitle = document.querySelectorAll(".sub-hero-title");
        let subHeroPara = document.querySelectorAll(".sub-hero-para");

        subHeroTitle[0].innerHTML = "Experience the <span>Energy.</span>"
        subHeroPara[0].innerHTML = " Explore our gym, training sessions, modern equipment,andfitness community. Every image represents the energy, <br class=' d-none d-lg-block'> dadication, and passion that drive usforward."
    </script>
</body>

</html>