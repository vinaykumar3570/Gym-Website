// Hero Slider JS
(() => {
    "use strict";

    const slides = Array.from(document.querySelectorAll(".hero-slide"));
    const dots = Array.from(document.querySelectorAll(".pagination-dot"));
    const prevButton = document.getElementById("prevSlide");
    const nextButton = document.getElementById("nextSlide");
    const hero = document.getElementById("gymHero");
    const heroCopy = document.getElementById("heroCopy");

    let currentSlide = 0;
    let autoPlayTimer = null;
    const autoPlayDelay = 5000;

    // Show the selected slide.
    function showSlide(index) {
        currentSlide = (index + slides.length) % slides.length;

        slides.forEach((slide, i) => {
            slide.classList.toggle("active", i === currentSlide);
        });

        dots.forEach((dot, i) => {
            const isActive = i === currentSlide;

            dot.classList.toggle("active", isActive);
            dot.setAttribute("aria-current", isActive ? "true" : "false");
        });

        // Restart text animation on every slide change.
        heroCopy.classList.remove("is-visible");

        requestAnimationFrame(() => {
            requestAnimationFrame(() => {
                heroCopy.classList.add("is-visible");
            });
        });
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
        restartAutoPlay();
    }

    function previousSlide() {
        showSlide(currentSlide - 1);
        restartAutoPlay();
    }

    function startAutoPlay() {
        stopAutoPlay();

        // Don't force autoplay when the user prefers reduced motion.
        if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
            return;
        }

        autoPlayTimer = window.setInterval(() => {
            showSlide(currentSlide + 1);
        }, autoPlayDelay);
    }

    function stopAutoPlay() {
        if (autoPlayTimer !== null) {
            window.clearInterval(autoPlayTimer);
            autoPlayTimer = null;
        }
    }

    function restartAutoPlay() {
        startAutoPlay();
    }

    // Arrow controls.
    nextButton.addEventListener("click", nextSlide);
    prevButton.addEventListener("click", previousSlide);

    // Dot controls.
    dots.forEach((dot) => {
        dot.addEventListener("click", () => {
            showSlide(Number(dot.dataset.slide));
            restartAutoPlay();
        });
    });

    // Pause while the pointer is over the hero.
    hero.addEventListener("mouseenter", stopAutoPlay);
    hero.addEventListener("mouseleave", startAutoPlay);

    // Pause when the page/tab is hidden.
    document.addEventListener("visibilitychange", () => {
        if (document.hidden) {
            stopAutoPlay();
        } else {
            startAutoPlay();
        }
    });

    // Basic touch swipe support for mobile.
    let touchStartX = 0;
    let touchEndX = 0;

    hero.addEventListener(
        "touchstart",
        (event) => {
            touchStartX = event.changedTouches[0].screenX;
        }, {
            passive: true
        }
    );

    hero.addEventListener(
        "touchend",
        (event) => {
            touchEndX = event.changedTouches[0].screenX;

            const swipeDistance = touchEndX - touchStartX;

            if (Math.abs(swipeDistance) < 50) {
                return;
            }

            if (swipeDistance < 0) {
                nextSlide();
            } else {
                previousSlide();
            }
        }, {
            passive: true
        }
    );

    // Keyboard navigation when the hero is focused.
    document.addEventListener("keydown", (event) => {
        if (event.key === "ArrowRight") {
            nextSlide();
        }

        if (event.key === "ArrowLeft") {
            previousSlide();
        }
    });

    // Initial state.
    showSlide(0);
    startAutoPlay();
})();



// Quotes Slider JS
const logoSlide = document.querySelector(".quotes-slide");

let brands = [  "Train hard, stay strong, never quit.",
                "Every rep builds a better you.",
                "Strength begins with self-discipline.",
                "Progress starts with one workout.",
                "Be stronger than your excuses."];
let dynamicBrand = ""
brands.forEach(brand => {
    dynamicBrand +=
        `<span class="brand">
            ${brand}
         </span>
         `
})
logoSlide.innerHTML = dynamicBrand;

let copy = logoSlide.cloneNode(true)
document.querySelector(".quotes").appendChild(copy);