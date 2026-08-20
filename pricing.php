<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CoreX - Pricing </title>

    <!-- All CDN included -->
    <?php include "commonPhp/allCDN.php" ?>

    <!-- Homepage css  -->
    <link rel="stylesheet" href="css/pricing.css">

</head>

<body onscroll="scrollFunction()">

    <!-- FIxed button and top contact details  -->
    <?php include "commonPhp/topDetails.php" ?>
    <!-- End Here-->

    <!-- Header Start  -->
    <?php include "commonPhp/header2.php" ?>
    <!-- Header End -->


    <!-- Pricing Section Starts here  -->
    <section class="pricing py-5">
        <div class="container">
            <p class="section-top-title">membership plan </p>
            <h2 class="section-title">flexible plans to fit your goals</h2>
            <p class="section-para">Whether you're just started or ready to take your training to the next level, choose
                a membership that work for you. </p>
            <div class="pricing-container row d-flex align-items-center">
                <div class="col-md-4 g-4">
                    <div class="pricing-card">
                        <h3 class="pcard-heading text-center"> Basic plan </h3>
                        <p class="pcard-para text-center mb-5">Perfect for beginners starting their fitness journey.</p>
                        <ul>
                            <li> <i class="fas fa-check"></i> Gym Access </li>
                            <li> <i class="fas fa-check"></i> Cardio Equpment</li>
                            <li> <i class="fas fa-check"></i> Strength Training Area</li>
                            <li> <i class="fas fa-check"></i> Locker Facility</li>
                            <li> <i class="fas fa-check"></i> Basic Workout Guidance</li>
                        </ul>
                        <div class="price mt-5 text-center">&#8377; 999
                            <span class="price-month">/month</span>
                        </div>
                        <div class="text-center mt-4 ">
                            <div class="button button-secondary"> Join Now </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 g-4">
                    <div class="pricing-card">
                        <h3 class="pcard-heading text-center"> elite plan </h3>
                        <p class="pcard-para text-center mb-5">A complete fitness experience with personalized
                            attention.</p>
                        <ul>
                            <li> <i class="fas fa-check"></i> Unlimited Gym Access </li>
                            <li> <i class="fas fa-check"></i> Personal Trainert</li>
                            <li> <i class="fas fa-check"></i> Customized Workout Plan</li>
                            <li> <i class="fas fa-check"></i> Nutrition Guidance
                            <li>
                            <li> <i class="fas fa-check"></i> Progress Tracking</li>
                            <li> <i class="fas fa-check"></i> Priority Support</li>
                            <li> <i class="fas fa-check"></i> All Gym Facilities</li>
                        </ul>
                        <div class="price mt-5 text-center">&#8377; 3,499
                            <span class="price-month">/month</span>
                        </div>
                        <div class="text-center mt-4 ">
                            <div class="button button-secondary"> Go Elite </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 g-4">
                    <div class="pricing-card">
                        <h3 class="pcard-heading text-center"> Pro plan </h3>
                        <p class="pcard-para text-center mb-5">Perfect for beginners starting their fitness journey.</p>
                        <ul>
                            <li> <i class="fas fa-check"></i> Unlimited Gym Access </li>
                            <li> <i class="fas fa-check"></i> All Fitness Equpment</li>
                            <li> <i class="fas fa-check"></i> Personalized Workout Plan</li>
                            <li> <i class="fas fa-check"></i> Trainer Guidance</li>
                            <li> <i class="fas fa-check"></i> Locker Facility</li>
                            <li> <i class="fas fa-check"></i> Cardio and Strength Program</li>
                        </ul>
                        <div class="price mt-5 text-center">&#8377; 1,999
                            <span class="price-month">/month</span>
                        </div>
                        <div class="text-center mt-4 ">
                            <div class="button button-secondary"> Get Started </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->


    <!-- Compare Plans Section Start  -->
    <section class="compare-plan py-5">
        <div class="container">
            <p class="section-top-title">compare plans </p>
            <h2 class="section-title mb-4"> find the plan that fits you </h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Features</th>
                        <th scope="col">Basic</th>
                        <th scope="col">Pro</th>
                        <th scope="col">Elite</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Gym Access</th>
                        <td>&check;</td>
                        <td>&check;</td>
                        <td>&check;</td>
                    </tr>
                    <tr>
                        <th scope="row">Cardio Area</th>
                        <td>&check;</td>
                        <td>&check;</td>
                        <td>&check;</td>
                    </tr>
                    <tr>
                        <th scope="row">Strngth Trainig</th>
                        <td>&check;</td>
                        <td>&check;</td>
                        <td>&check;</td>
                    </tr>
                    <tr>
                        <th scope="row">Workout Plan</th>
                        <td>&minus;</td>
                        <td>&check;</td>
                        <td>&check;</td>
                    </tr>
                    <tr>
                        <th scope="row">Trainer Guidance</th>
                        <td>&minus;</td>
                        <td>&check;</td>
                        <td>&check;</td>
                    </tr>
                    <tr>
                        <th scope="row">Personal Trainer</th>
                        <td>&minus;</td>
                        <td>&minus;</td>
                        <td>&check;</td>
                    </tr>
                    <tr>
                        <th scope="row">Nutrition Guidance</th>
                        <td>&minus;</td>
                        <td>&minus;</td>
                        <td>&check;</td>
                    </tr>
                    <tr>
                        <th scope="row">Progress Tracking</th>
                        <td>&minus;</td>
                        <td>&check;</td>
                        <td>&check;</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- Compare Plans Section End -->


    <!-- FAQ Section Start  -->
    <section class="faq py-5">
        <div class="container">
            <h2 class="section-title mb-4"> frequently asked questions </h2>
            <div class="faq-section">

                <div class="accordion" id="faqAccordion">

                    <!-- FAQ 1 -->
                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button faq-question" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                                <span>Can I cancel my membership?</span>
                                <span class="faq-icon"></span>
                            </button>
                        </h2>
                        <div id="faqOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="faq-answer">
                                <div class="faq-answer-inner">
                                    Yes, membership cancellation depends on the terms of your selected plan.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button faq-question collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                                <span>Can beginners join the gym?</span>
                                <span class="faq-icon"></span>
                            </button>
                        </h2>
                        <div id="faqTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="faq-answer">
                                <div class="faq-answer-inner">
                                    Yes, beginners are welcome and our trainers can guide you.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button faq-question collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                                <span>Do you offer personal training?</span>
                                <span class="faq-icon"></span>
                            </button>
                        </h2>
                        <div id="faqThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="faq-answer">
                                <div class="faq-answer-inner">
                                    Yes, personal training sessions are available with our professional trainers.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button faq-question collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFour" aria-expanded="false" aria-controls="faqFour">
                                <span>Can I change my membership plan?</span>
                                <span class="faq-icon"></span>
                            </button>
                        </h2>
                        <div id="faqFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="faq-answer">
                                <div class="faq-answer-inner">
                                    Yes, you can change your membership plan according to the available options.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item faq-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button faq-question collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFive" aria-expanded="false" aria-controls="faqFive">
                                <span>Do you offer trial sessions?</span>
                                <span class="faq-icon"></span>
                            </button>
                        </h2>
                        <div id="faqFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="faq-answer">
                                <div class="faq-answer-inner">
                                    Yes, trial sessions are available for new members.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Section End  -->

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

        subHeroTitle[0].innerHTML = "<span> Choose</span> Your Fitness <span>Plan.</span>"
        subHeroPara[0].innerHTML = "Whether you're just started or ready to take your training to the next level, <br class='d-none d-lg-block'> choose a membership that work for you."
    </script>

</body>

</html>