<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>

     <!-- All CDN included -->
     <?php include "commonPhp/allCDN.php" ?>

    <!-- Contact css  -->
    <link rel="stylesheet" href="css/contact.css">

</head>

<body onscroll="scrollFunction()">

     <!-- FIxed button and top contact details  -->
     <?php include "commonPhp/topDetails.php"?>
    <!-- End Here-->

    <!-- Header Starts Here -->
    <?php include "commonPhp/header2.php" ?>
    <!-- Header End Here  -->


    <!-- Contact Section Start  -->
    <section class="contact py-5">
        <div class="container">
            <p class="section-top-title">have a question?</p>
            <h2 class="section-title">we're here to help </h2>
            <p class="section-para">Fill out the form and our team will get back to you as soon as possible.</p>

            <div class="row mt-5">
                <div class="col-md-6 left-contact">
                    <div class="contact-details">
                        <div class="icon"> <i class="fas fa-location-dot"></i></div>
                        <div class="icon-details">
                            <h3> Visit Us</h3>
                            <p> Near GangaNagar <br class="d-none d-lg-block"> Mawana Road, Meerut</p>
                        </div>
                    </div>
                    <div class="contact-details">
                        <div class="icon"> <i class="fas fa-phone"></i></div>
                        <div class="icon-details">
                            <h3> contact Us</h3>
                            <p>+91-9874561230, +91-9587456670</p>
                        </div>
                    </div>
                    <div class="contact-details">
                        <div class="icon"> <i class="fas fa-envelope"></i></div>
                        <div class="icon-details">
                            <h3> Mail Us</h3>
                            <p> info@corexfitness.com</p>
                        </div>
                    </div>
                    <div class="contact-details">
                        <div class="icon"> <i class="fas fa-clock-rotate-left"></i></div>
                        <div class="icon-details">
                            <h3> opening hours </h3>
                            <pre class="m-0"><p>Mon - Sat   06:00AM - 10:00PM
Sun              07:00AM - 08:00PM</p></pre>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 contact-form mt-5 mt-md-0 px-md-4">
                    <form action="#">
                        <div class="row">
                            <div class="col-12 ">
                                <input type="text" class="input-box" name="" id="" placeholder="Full Name">
                            </div>
                            <div class="col-lg-6 g-4">
                                <input type="email" class="input-box" name="" id="" placeholder="Email">
                            </div>
                            <div class="col-lg-6 g-4">
                                <input type="text" class="input-box" name="" id="" placeholder="Phone Number">
                            </div>
                            <div class="col-12 g-4">
                                <input type="text" class="input-box" name="" id="" placeholder="Subject">
                            </div>
                            <div class="col-12 g-4">
                                <textarea name="" id="" cols="30" rows="6" class="input-box"
                                    placeholder="Your text here..."></textarea>
                            </div>
                            <div class="col-12 g-4">
                                <input type="submit" class="button button-primary w-100" name="" id="">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->


    <!-- footer Section Start Here  -->
    <?php include "commonPhp/footer.php" ?>
    <!-- footer Section End Here  -->

    <!-- JS Files CDN  -->
    <?php include "commonPhp/JavaScript_links.php" ?>

    <script>
        let subHeroTitle = document.querySelectorAll(".sub-hero-title");
        let subHeroPara = document.querySelectorAll(".sub-hero-para");

        subHeroTitle[0].innerHTML = "Let's <span>Start</span> Your <span>Fitness Journey</span>";
        subHeroPara[0].innerHTML = "Have questions about our membership, training programs, or facilities> Get in touch with our team. <br class='d-none d-lg-block'> We're here to help you choose the right fitness plan.";
    </script>
</body>

</html>