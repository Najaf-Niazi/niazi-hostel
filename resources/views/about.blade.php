<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Niazi Hostel | About</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<header class="header">

    <div class="container navbar">

        <a href="{{ url('/') }}" class="logo">

            <div class="logo-icon">
                <i class="fa-solid fa-house"></i>
            </div>

            <div>
                <h2>Niazi Hostel</h2>
                <span>STAY • STUDY • GROW</span>
            </div>

        </a>


        <nav class="nav-links" id="navLinks">

            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}" class="active">About</a>
            <a href="{{ url('/facilities') }}">Facilities</a>
            <a href="{{ url('/contact') }}">Contact</a>

        </nav>


        <a href="{{ url('/admission') }}" class="admission-btn">

            New Admission

            <i class="fa-solid fa-arrow-right"></i>

        </a>


        <button class="menu-btn" id="menuBtn">
            <i class="fa-solid fa-bars"></i>
        </button>

    </div>

</header>


<main>


    <!-- ABOUT HERO -->

    <section class="about-hero">

        <div class="container about-hero-content">

            <div class="about-hero-text">

                <span class="section-tag">
                    {{ $items['about_hero_tag']->value ?? 'ABOUT US' }}
                </span>

                <h1>
                    {{ $items['about_hero_heading_start']->value ?? 'More Than a' }}

                    <span>
                        {{ $items['about_hero_heading_highlight']->value ?? 'Place to Stay' }}
                    </span>
                </h1>

                <p>
                    {{ $items['about_hero_description']->value ?? 'At Niazi Hostel, we believe a great stay can shape a brighter future. We provide a safe, comfortable, and inspiring environment where students and professionals can live, learn, and grow.' }}
                </p>


                <div class="hero-buttons">

                    <a href="#ourJourney" class="primary-btn">

                        {{ $items['about_hero_story_button']->value ?? 'Our Story' }}

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>


                    <a href="#ourJourney" class="story-btn">

                        <span>
                            <i class="fa-solid fa-play"></i>
                        </span>

                        {{ $items['about_hero_watch_story']->value ?? 'Watch Our Story' }}

                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- OUR JOURNEY -->

    <section class="journey-section" id="ourJourney">

        <div class="container journey-grid">


            <!-- SINGLE IMAGE -->

            <div class="journey-images">

                <div class="single-image-card">

                    <img
                        src="{{ isset($items['about_journey_image']) && $items['about_journey_image']->value
                            ? (
                                str_starts_with($items['about_journey_image']->value, 'website-editor/')
                                ? asset('storage/' . $items['about_journey_image']->value)
                                : (
                                    filter_var($items['about_journey_image']->value, FILTER_VALIDATE_URL)
                                    ? $items['about_journey_image']->value
                                    : asset($items['about_journey_image']->value)
                                )
                            )
                            : asset('images/hostel building.png')
                        }}"
                        alt="Niazi Hostel Building">

                    <div class="image-overlay"></div>

                    <div class="floating-badge">

                        <div class="badge-icon">
                            <i class="fa-solid fa-bed"></i>
                        </div>

                        <div class="badge-text">

                            <strong>
                                {{ $items['about_badge_title']->value ?? 'Comfortable' }}
                            </strong>

                            <span>
                                {{ $items['about_badge_text']->value ?? 'Living Spaces' }}
                            </span>

                        </div>

                    </div>

                </div>

            </div>


            <!-- JOURNEY CONTENT -->

            <div class="journey-content">

                <span class="section-tag">
                    {{ $items['about_journey_tag']->value ?? 'OUR JOURNEY' }}
                </span>

                <h2>
                    {{ $items['about_journey_heading_start']->value ?? 'Building a Better' }}

                    <span>
                        {{ $items['about_journey_heading_highlight']->value ?? 'Living Experience' }}
                    </span>
                </h2>


                <p>
                    {{ $items['about_journey_paragraph_one']->value ?? 'Niazi Hostel was founded with a simple idea — to create a safe, clean and supportive living environment for students and job holders.' }}
                </p>


                <p>
                    {{ $items['about_journey_paragraph_two']->value ?? 'We understand that a good stay is not only about a room. It is about peace of mind, a positive environment and having the right place to focus on your studies, career and personal growth.' }}
                </p>


                <div class="values-grid">


                    <!-- MISSION -->

                    <div class="value-card">

                        <div class="value-icon">
                            <i class="fa-solid fa-bullseye"></i>
                        </div>

                        <div>

                            <h3>
                                {{ $items['about_mission_title']->value ?? 'Our Mission' }}
                            </h3>

                            <p>
                                {{ $items['about_mission_description']->value ?? 'To provide safe, comfortable and affordable living spaces for students and professionals.' }}
                            </p>

                        </div>

                    </div>


                    <!-- VISION -->

                    <div class="value-card">

                        <div class="value-icon">
                            <i class="fa-solid fa-eye"></i>
                        </div>

                        <div>

                            <h3>
                                {{ $items['about_vision_title']->value ?? 'Our Vision' }}
                            </h3>

                            <p>
                                {{ $items['about_vision_description']->value ?? 'To become a trusted hostel known for quality, community and comfortable living.' }}
                            </p>

                        </div>

                    </div>


                    <!-- VALUES -->

                    <div class="value-card">

                        <div class="value-icon">
                            <i class="fa-solid fa-heart"></i>
                        </div>

                        <div>

                            <h3>
                                {{ $items['about_values_title']->value ?? 'Our Values' }}
                            </h3>

                            <p>
                                {{ $items['about_values_description']->value ?? 'Safety, respect, cleanliness, community and continuous improvement.' }}
                            </p>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </section>


    <!-- =====================================
     ANIMATED STATS
====================================== -->

<section class="stats-section">

    <div class="container stats-box">


        <!-- HAPPY RESIDENTS -->

        <div class="about-stat">

            <div class="stat-icon">
                <i class="fa-solid fa-users"></i>
            </div>

            <div>

                <strong
                    class="about-counter-number"
                    data-counter-value="{{ $items['about_stat_residents_number']->value ?? '500+' }}"
                >
                    0
                </strong>

                <span>
                    {{ $items['about_stat_residents_text']->value ?? 'Happy Residents' }}
                </span>

            </div>

        </div>



        <!-- YEARS EXPERIENCE -->

        <div class="about-stat">

            <div class="stat-icon">
                <i class="fa-solid fa-building"></i>
            </div>

            <div>

                <strong
                    class="about-counter-number"
                    data-counter-value="{{ $items['about_stat_years_number']->value ?? '5+' }}"
                >
                    0
                </strong>

                <span>
                    {{ $items['about_stat_years_text']->value ?? 'Years of Experience' }}
                </span>

            </div>

        </div>



        <!-- RATING -->

        <div class="about-stat">

            <div class="stat-icon">
                <i class="fa-solid fa-star"></i>
            </div>

            <div>

                <strong
                    class="about-counter-number"
                    data-counter-value="{{ $items['about_stat_rating_number']->value ?? '4.8' }}"
                >
                    0
                </strong>

                <span>
                    {{ $items['about_stat_rating_text']->value ?? 'Average Rating' }}
                </span>

            </div>

        </div>



        <!-- STAFF -->

        <div class="about-stat">

            <div class="stat-icon">
                <i class="fa-solid fa-user-graduate"></i>
            </div>

            <div>

                <strong
                    class="about-counter-number"
                    data-counter-value="{{ $items['about_stat_staff_number']->value ?? '10+' }}"
                >
                    0
                </strong>

                <span>
                    {{ $items['about_stat_staff_text']->value ?? 'Dedicated Staff' }}
                </span>

            </div>

        </div>


    </div>

</section>

    <!-- FEATURES -->

    <section class="features-strip">

        <div class="container features-box">


            <div class="about-feature">

                <div class="feature-icon">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>

                <div>

                    <h3>
                        {{ $items['about_feature_safe_title']->value ?? 'Safe & Secure' }}
                    </h3>

                    <p>
                        {{ $items['about_feature_safe_description']->value ?? '24/7 security and surveillance.' }}
                    </p>

                </div>

            </div>


            <div class="about-feature">

                <div class="feature-icon">
                    <i class="fa-solid fa-users"></i>
                </div>

                <div>

                    <h3>
                        {{ $items['about_feature_community_title']->value ?? 'Friendly Community' }}
                    </h3>

                    <p>
                        {{ $items['about_feature_community_description']->value ?? 'Live and grow with like-minded people.' }}
                    </p>

                </div>

            </div>


            <div class="about-feature">

                <div class="feature-icon">
                    <i class="fa-solid fa-bed"></i>
                </div>

                <div>

                    <h3>
                        {{ $items['about_feature_rooms_title']->value ?? 'Comfortable Rooms' }}
                    </h3>

                    <p>
                        {{ $items['about_feature_rooms_description']->value ?? 'Clean and modern living spaces.' }}
                    </p>

                </div>

            </div>


            <div class="about-feature">

                <div class="feature-icon">
                    <i class="fa-solid fa-seedling"></i>
                </div>

                <div>

                    <h3>
                        {{ $items['about_feature_environment_title']->value ?? 'Supportive Environment' }}
                    </h3>

                    <p>
                        {{ $items['about_feature_environment_description']->value ?? 'A peaceful place to focus on your goals.' }}
                    </p>

                </div>

            </div>


        </div>

    </section>

</main>


<!-- FOOTER -->

<footer class="footer">

    <div class="container footer-grid">


        <div class="footer-about">

            <div class="footer-logo">

                <i class="fa-solid fa-house"></i>

                <div>

                    <h2>
                        Niazi Hostel
                    </h2>

                    <span>
                        STAY • STUDY • GROW
                    </span>

                </div>

            </div>


            <p>
                Safe, clean and comfortable hostel accommodation
                for students and job holders.
            </p>

        </div>


        <div class="footer-links">

            <h3>
                Quick Links
            </h3>

            <a href="{{ url('/') }}">
                Home
            </a>

            <a href="{{ url('/about') }}">
                About
            </a>

            <a href="{{ url('/facilities') }}">
                Facilities
            </a>

            <a href="{{ url('/contact') }}">
                Contact
            </a>

            <a href="{{ url('/admission') }}">
                New Admission
            </a>

        </div>
<div class="footer-facilities">

            <h3>Our Facilities</h3>

            <a href="{{ url('/facilities') }}">
                High Speed WiFi
            </a>

            <a href="{{ url('/facilities') }}">
                24/7 Security
            </a>

            <a href="{{ url('/facilities') }}">
                Clean Washrooms
            </a>

            <a href="{{ url('/facilities') }}">
                Power Backup
            </a>

            <a href="{{ url('/facilities') }}">
                Drinking Water
            </a>

            <a href="{{ url('/facilities') }}">
                Laundry Service
            </a>

        </div>

        <div class="footer-contact">

            <h3>
                Contact Info
            </h3>


            <p>
                <i class="fa-solid fa-phone"></i>
                +92 3261446249
            </p>


            <p>
                <i class="fa-solid fa-envelope"></i>
                niazihostel234@gmail.com
            </p>


            <p>
                <i class="fa-solid fa-location-dot"></i>
                Mianwali, Pakistan
            </p>

        </div>


    </div>


    <div class="container copyright">

        <p>
            © 2026 Niazi Hostel. All Rights Reserved.
        </p>
 <div class="footer-bottom-tagline">
            <span></span>

            STAY • STUDY • GROW

            <span></span>
        </div>
    </div>

</footer>


<script src="{{ asset('js/script.js') }}"></script>
<script>

document.addEventListener('DOMContentLoaded', function () {

    const counters =
        document.querySelectorAll('.about-counter-number');

    const statsSection =
        document.querySelector('.stats-section');

    const statCards =
        document.querySelectorAll('.about-stat');

    let counterStarted = false;


    /*
    |--------------------------------------------------------------------------
    | START COUNTER ANIMATION
    |--------------------------------------------------------------------------
    */

    function startCounters() {

        if (counterStarted) {
            return;
        }

        counterStarted = true;


        counters.forEach(function (counter) {

            const originalValue =
                (counter.dataset.counterValue || '').trim();


            const match =
                originalValue.match(/[\d.]+/);


            if (!match) {

                counter.textContent = originalValue;

                return;
            }


            const target =
                parseFloat(match[0]);


            const prefix =
                originalValue.substring(
                    0,
                    match.index
                );


            const suffix =
                originalValue.substring(
                    match.index + match[0].length
                );


            const hasDecimal =
                match[0].includes('.');


            const duration = 1600;

            const startTime =
                performance.now();


            function animateCounter(currentTime) {

                const elapsed =
                    currentTime - startTime;


                const progress =
                    Math.min(
                        elapsed / duration,
                        1
                    );


                const easedProgress =
                    1 - Math.pow(
                        1 - progress,
                        3
                    );


                const currentValue =
                    target * easedProgress;


                if (hasDecimal) {

                    counter.textContent =
                        prefix +
                        currentValue.toFixed(1) +
                        suffix;

                } else {

                    counter.textContent =
                        prefix +
                        Math.floor(currentValue) +
                        suffix;

                }


                if (progress < 1) {

                    requestAnimationFrame(
                        animateCounter
                    );

                } else {

                    counter.textContent =
                        originalValue;

                }

            }


            requestAnimationFrame(
                animateCounter
            );

        });

    }



    /*
    |--------------------------------------------------------------------------
    | START CARD ANIMATION
    |--------------------------------------------------------------------------
    */

    function startCardAnimations() {

        statCards.forEach(function (card, index) {

            setTimeout(function () {

                card.classList.add('stat-animate');

            }, index * 120);

        });

    }



    /*
    |--------------------------------------------------------------------------
    | OBSERVER
    |--------------------------------------------------------------------------
    */

    if (
        'IntersectionObserver'
        in window &&
        statsSection
    ) {

        const observer =
            new IntersectionObserver(

                function (entries) {

                    entries.forEach(function (entry) {

                        if (entry.isIntersecting) {

                            startCardAnimations();

                            startCounters();

                            observer.unobserve(
                                statsSection
                            );

                        }

                    });

                },

                {
                    threshold: 0.25
                }

            );


        observer.observe(
            statsSection
        );

    } else {

        /*
        |--------------------------------------------------------------------------
        | FALLBACK
        |--------------------------------------------------------------------------
        */

        startCardAnimations();

        startCounters();

    }

});
</script>
</body>

</html>