<header class="position-relative">
    <!-- Hero Slider -->
    <section class="gym-hero hero" id="gymHero" aria-label="Fitness hero slider">
        <!-- Background slides -->
        <div class="hero-slides" aria-hidden="true">
            <div class="hero-slide active"></div>
            <div class="hero-slide"></div>
            <div class="hero-slide"></div>
        </div>

        <!-- Dark overlay -->
        <div class="hero-overlay" aria-hidden="true"></div>

        <!-- Hero content -->
        <div class="container-fluid hero-content">
            <div class="hero-copy ms-lg-3" id="heroCopy">
                <p class="hero-kicker">
                <h1><span class="accent">FITNESS </span>START WITH <span class="accent">ONE STEP</span></h1>
                </p>

                <p class="hero-description">
                    Whether you're a beginner or a professional athlete,
                    we provide everything you need to become stronger
                    and healthier.
                </p>

                <div class="hero-actions">
                    <a href="#trial" class="button button-primary">
                        Claim 3 Day Trial
                    </a>

                    <a href="#join" class="button button-secondary">
                        Join Us
                    </a>
                </div>
            </div>
        </div>

        <!-- Pagination Start-->
        <div class="hero-pagination" id="heroPagination" aria-label="Slide navigation">
            <button class="pagination-dot active" type="button" data-slide="0" aria-label="Go to slide 1" aria-current="true"></button>
            <button class="pagination-dot" type="button" data-slide="1" aria-label="Go to slide 2" aria-current="false"></button>
            <button class="pagination-dot" type="button" data-slide="2" aria-label="Go to slide 3" aria-current="false"></button>
        </div>
        <!-- Pagination End-->

        <!-- Previous / next controls -->
        <div class="hero-arrows" aria-label="Previous and next slides">
            <button class="hero-arrow" id="prevSlide" type="button" aria-label="Previous slide">
                <i class="fas fa-chevron-left" aria-hidden="true"></i>
            </button>

            <button class="hero-arrow" id="nextSlide" type="button" aria-label="Next slide">
                <i class="fas fa-chevron-right" aria-hidden="true"></i>
            </button>
        </div>
        <!-- Previous / next controls End-->
    </section>

    <!-- Navbar Starts -->
    <?php include "navbar.php" ?>
    <!-- Navbar End -->
</header>