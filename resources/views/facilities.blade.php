<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Niazi Hostel | Facilities</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/facilities.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>
<style>
    /* =========================================
   NIAZI HOSTEL - WHITE GLASS NAVBAR
========================================= */

.header {
    position: sticky;
    top: 0;
    z-index: 999;

    padding: 22px 22px 0;
}


/* =========================================
   MAIN NAVBAR
========================================= */

.navbar {
    width: min(100%, 1400px);
    margin: 0 auto;

    display: flex;
    align-items: center;
    justify-content: space-between;

    gap: 26px;

    padding: 14px 22px;

    border-radius: 50px;

    background:
        linear-gradient(
            135deg,
            rgba(255, 255, 255, 0.88),
            rgba(255, 255, 255, 0.72)
        );

    border: 1px solid rgba(255, 255, 255, 0.95);

    backdrop-filter: blur(24px) saturate(170%);
    -webkit-backdrop-filter: blur(24px) saturate(170%);

    box-shadow:
        0 14px 38px rgba(14, 29, 62, 0.12),
        inset 0 1px 0 rgba(255, 255, 255, 1),
        inset 0 -1px 0 rgba(14, 29, 62, 0.03);

    transition:
        background 0.3s ease,
        box-shadow 0.3s ease,
        border-color 0.3s ease;
}


/* =========================================
   LOGO
========================================= */

.logo {
    display: flex;
    align-items: center;

    gap: 14px;

    text-decoration: none;

    flex-shrink: 0;
}


.logo-icon {
    width: 52px;
    height: 52px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background: #0E1D3E;

    color: #ffffff;

    font-size: 20px;

    border: 1px solid rgba(14, 29, 62, 0.08);

    box-shadow:
        0 8px 20px rgba(14, 29, 62, 0.20);

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease;
}


.logo:hover .logo-icon {
    transform: translateY(-2px);

    box-shadow:
        0 11px 24px rgba(14, 29, 62, 0.24);
}


/* Brand Name */

.logo h2 {
    margin: 0;

    color: #111827;

    font-size: 25px;
    font-weight: 700;

    line-height: 1.1;
}


/* Tagline */

.logo span {
    display: block;

    margin-top: 5px;

    color: #667085;

    font-size: 9px;
    font-weight: 600;

    letter-spacing: 3.2px;
}


/* =========================================
   NAV LINKS
========================================= */

.nav-links {
    display: flex;
    align-items: center;
    justify-content: center;

    gap: 18px;

    flex: 1;
}


.nav-links a {
    position: relative;

    min-width: 96px;

    display: flex;
    align-items: center;
    justify-content: center;

    padding: 13px 20px;

    border-radius: 30px;

    color: #111827;

    font-size: 15px;
    font-weight: 600;

    text-decoration: none;

    background: transparent;

    transition:
        color 0.3s ease,
        background 0.3s ease,
        transform 0.3s ease,
        box-shadow 0.3s ease;
}


/* Hover */

.nav-links a:hover {
    color: #000000;

    background: rgba(14, 29, 62, 0.06);

    transform: translateY(-1px);
}


/* =========================================
   ACTIVE PAGE
========================================= */

.nav-links a.active {
    color: #ffffff;

    background:
        linear-gradient(
            135deg,
            #111827,
            #0E1D3E
        );

    box-shadow:
        0 9px 22px rgba(14, 29, 62, 0.22),
        inset 0 1px 0 rgba(255, 255, 255, 0.10);
}


/* Active hover */

.nav-links a.active:hover {
    color: #ffffff;

    background:
        linear-gradient(
            135deg,
            #0d1628,
            #09172e
        );

    transform: translateY(-1px);
}


/* =========================================
   ADMISSION BUTTON
========================================= */

.admission-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    gap: 11px;

    padding: 14px 27px;

    border-radius: 32px;

    background:
        linear-gradient(
            135deg,
            #F97066,
            #ff6258
        );

    color: #ffffff;

    font-size: 15px;
    font-weight: 700;

    text-decoration: none;

    flex-shrink: 0;

    border: 1px solid rgba(249, 112, 102, 0.30);

    box-shadow:
        0 10px 26px rgba(249, 112, 102, 0.24),
        inset 0 1px 0 rgba(255, 255, 255, 0.26);

    transition:
        transform 0.3s ease,
        box-shadow 0.3s ease,
        background 0.3s ease;
}


.admission-btn i {
    font-size: 14px;

    transition: transform 0.3s ease;
}


.admission-btn:hover {
    background:
        linear-gradient(
            135deg,
            #ff7d73,
            #F97066
        );

    transform: translateY(-2px);

    box-shadow:
        0 13px 30px rgba(249, 112, 102, 0.30);
}


.admission-btn:hover i {
    transform: translateX(4px);
}


/* =========================================
   MENU BUTTON
========================================= */

.menu-btn {
    display: none;

    width: 46px;
    height: 46px;

    align-items: center;
    justify-content: center;

    border-radius: 50%;

    border: 1px solid rgba(14, 29, 62, 0.08);

    background: rgba(255, 255, 255, 0.78);

    color: #111827;

    font-size: 19px;

    cursor: pointer;

    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);

    box-shadow:
        0 7px 18px rgba(14, 29, 62, 0.10);

    transition:
        background 0.3s ease,
        color 0.3s ease,
        transform 0.3s ease;
}


.menu-btn:hover {
    background: #111827;

    color: #ffffff;

    transform: translateY(-1px);
}


/* =========================================
   SCROLL EFFECT
========================================= */

.header.scrolled .navbar {
    background:
        linear-gradient(
            135deg,
            rgba(255, 255, 255, 0.94),
            rgba(255, 255, 255, 0.82)
        );

    border-color: rgba(255, 255, 255, 0.98);

    box-shadow:
        0 16px 42px rgba(14, 29, 62, 0.14),
        inset 0 1px 0 rgba(255, 255, 255, 1);
}


/* =========================================
   TABLET
========================================= */

@media (max-width: 1050px) {

    .navbar {
        padding: 12px 18px;
    }

    .nav-links {
        gap: 7px;
    }

    .nav-links a {
        min-width: auto;

        padding: 12px 15px;

        font-size: 14px;
    }

    .admission-btn {
        padding: 13px 20px;
    }

}


/* =========================================
   MOBILE
========================================= */

@media (max-width: 820px) {

    .header {
        padding: 14px 14px 0;
    }


    .navbar {
        position: relative;

        border-radius: 30px;

        padding: 11px 14px;

        background: rgba(255, 255, 255, 0.90);

        backdrop-filter: blur(22px) saturate(160%);
        -webkit-backdrop-filter: blur(22px) saturate(160%);
    }


    .logo-icon {
        width: 45px;
        height: 45px;

        font-size: 18px;
    }


    .logo h2 {
        font-size: 20px;
    }


    .logo span {
        font-size: 7px;

        letter-spacing: 2.2px;
    }


    .admission-btn {
        display: none;
    }


    .menu-btn {
        display: flex;
    }


    .nav-links {
        position: absolute;

        top: calc(100% + 12px);

        left: 0;
        right: 0;

        display: none;

        flex-direction: column;

        align-items: stretch;

        gap: 7px;

        padding: 14px;

        border-radius: 24px;

        background: rgba(255, 255, 255, 0.95);

        border: 1px solid rgba(255, 255, 255, 1);

        backdrop-filter: blur(22px);
        -webkit-backdrop-filter: blur(22px);

        box-shadow:
            0 18px 40px rgba(14, 29, 62, 0.14);
    }


    .nav-links.show-menu {
        display: flex;
    }


    .nav-links a {
        width: 100%;

        justify-content: flex-start;

        padding: 13px 16px;

        color: #111827;
    }


    .nav-links a.active {
        color: #ffffff;
    }

}


/* =========================================
   SMALL MOBILE
========================================= */

@media (max-width: 480px) {

    .logo h2 {
        font-size: 18px;
    }


    .logo span {
        letter-spacing: 1.7px;
    }


    .logo-icon {
        width: 42px;
        height: 42px;
    }

}
</style>
<body>

@php

    $items = $items ?? collect();

    $text = function ($key, $fallback = '') use ($items) {

        if (
            isset($items[$key]) &&
            $items[$key]->value !== null &&
            $items[$key]->value !== ''
        ) {
            return $items[$key]->value;
        }

        return $fallback;
    };


    $image = function ($key, $fallback) use ($items) {

        if (
            !isset($items[$key]) ||
            !$items[$key]->value
        ) {
            return asset($fallback);
        }

        $value = $items[$key]->value;

        if (str_starts_with($value, 'website-editor/')) {
            return asset('storage/' . $value);
        }

        if (filter_var($value, FILTER_VALIDATE_URL)) {
            return $value;
        }

        return asset($value);
    };

@endphp


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
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/facilities') }}" class="active">Facilities</a>
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


    <!-- FACILITIES HERO -->

    <section class="facilities-hero">

        <div class="container facilities-hero-grid">


            <div class="facilities-hero-content">

                <span class="section-tag">
                    {{ $text('facilities_hero_tag', 'OUR FACILITIES') }}
                </span>


                <h1>

                    {{ $text('facilities_hero_heading_start', 'Designed for a') }}

                    <span>
                        {{ $text('facilities_hero_heading_highlight', 'Better Living Experience') }}
                    </span>

                </h1>


                <p>
                    {{ $text(
                        'facilities_hero_description',
                        'We provide modern facilities to ensure a safe, comfortable and productive stay for students and job holders.'
                    ) }}
                </p>


                <div class="facilities-mini-features">


                    <div class="mini-feature">

                        <div class="mini-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>

                        <span>
                            {{ $text('facilities_mini_safe', 'Safe Environment') }}
                        </span>

                    </div>


                    <div class="mini-feature">

                        <div class="mini-icon">
                            <i class="fa-solid fa-users"></i>
                        </div>

                        <span>
                            {{ $text('facilities_mini_amenities', 'Modern Amenities') }}
                        </span>

                    </div>


                    <div class="mini-feature">

                        <div class="mini-icon">
                            <i class="fa-solid fa-house"></i>
                        </div>

                        <span>
                            {{ $text('facilities_mini_student', 'Student Friendly') }}
                        </span>

                    </div>


                </div>

            </div>



            <div class="facilities-hero-images">


                <div class="facility-building-image">

                    <img
                        src="{{ $image(
                            'facilities_hero_building_image',
                            'images/hostel building.png'
                        ) }}"
                        alt="Niazi Hostel Building">

                </div>


                <div class="facility-room-image">

                    <img
                        src="{{ $image(
                            'facilities_hero_room_image',
                            'images/hostel3.png'
                        ) }}"
                        alt="Comfortable Hostel Room">

                </div>


                <div class="facility-floating-card">

                    <div class="facility-floating-icon">
                        <i class="fa-solid fa-bed"></i>
                    </div>

                    <div>

                        <strong>
                            {{ $text(
                                'facilities_floating_title',
                                'Comfortable Rooms'
                            ) }}
                        </strong>

                        <span>
                            {{ $text(
                                'facilities_floating_description',
                                'Clean, spacious and fully furnished rooms.'
                            ) }}
                        </span>

                    </div>

                    <a href="#facilitiesGrid">
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>


            </div>


        </div>

    </section>



    <!-- FACILITIES INTRO -->

    <section class="facilities-intro">

        <div class="container facilities-intro-grid">


            <div>

                <span class="section-tag">
                    {{ $text('facilities_intro_tag', 'FACILITIES') }}
                </span>

                <h2>

                    {{ $text(
                        'facilities_intro_heading_start',
                        'Everything You Need,'
                    ) }}

                    <span>
                        {{ $text(
                            'facilities_intro_heading_highlight',
                            'All in One Place'
                        ) }}
                    </span>

                </h2>

            </div>


            <p>
                {{ $text(
                    'facilities_intro_description',
                    'From comfortable rooms to high-speed internet, we provide all the essential facilities to make your stay safe, comfortable and stress-free.'
                ) }}
            </p>


        </div>

    </section>



    <!-- FACILITIES GRID -->

    <section class="facilities-grid-section" id="facilitiesGrid">

        <div class="container facilities-grid">


            <!-- Comfortable Rooms -->

            <div class="facility-card">

                <div class="facility-card-image">

                    <img
                        src="{{ $image(
                            'facilities_room_image',
                            'images/hostel3.png'
                        ) }}"
                        alt="Comfortable Rooms">

                </div>


                <div class="facility-card-content">

                    <div class="facility-card-icon">
                        <i class="fa-solid fa-bed"></i>
                    </div>

                    <div>

                        <h3>
                            {{ $text(
                                'facilities_room_title',
                                'Comfortable Rooms'
                            ) }}
                        </h3>

                        <p>
                            {{ $text(
                                'facilities_room_description',
                                'Fully furnished, clean and spacious rooms.'
                            ) }}
                        </p>

                    </div>

                </div>

            </div>



            <!-- WiFi -->

            <div class="facility-card">

                <div class="facility-card-image">

                    <img
                        src="{{ $image(
                            'facilities_wifi_image',
                            'images/image.png'
                        ) }}"
                        alt="High Speed WiFi">

                </div>


                <div class="facility-card-content">

                    <div class="facility-card-icon">
                        <i class="fa-solid fa-wifi"></i>
                    </div>

                    <div>

                        <h3>
                            {{ $text(
                                'facilities_wifi_title',
                                'High Speed WiFi'
                            ) }}
                        </h3>

                        <p>
                            {{ $text(
                                'facilities_wifi_description',
                                'Stay connected for your studies and work.'
                            ) }}
                        </p>

                    </div>

                </div>

            </div>



            <!-- Study Area -->

            <div class="facility-card">

                <div class="facility-card-image">

                    <img
                        src="{{ $image(
                            'facilities_study_image',
                            'images/study area.png'
                        ) }}"
                        alt="Study Area">

                </div>


                <div class="facility-card-content">

                    <div class="facility-card-icon">
                        <i class="fa-solid fa-book-open"></i>
                    </div>

                    <div>

                        <h3>
                            {{ $text(
                                'facilities_study_title',
                                'Study Area'
                            ) }}
                        </h3>

                        <p>
                            {{ $text(
                                'facilities_study_description',
                                'Quiet and focused environment for studying.'
                            ) }}
                        </p>

                    </div>

                </div>

            </div>



            <!-- Security -->

            <div class="facility-card">

                <div class="facility-card-image">

                    <img
                        src="{{ $image(
                            'facilities_security_image',
                            'images/camera.png'
                        ) }}"
                        alt="24/7 Security">

                </div>


                <div class="facility-card-content">

                    <div class="facility-card-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>

                    <div>

                        <h3>
                            {{ $text(
                                'facilities_security_title',
                                '24/7 Security'
                            ) }}
                        </h3>

                        <p>
                            {{ $text(
                                'facilities_security_description',
                                'Your safety and peace of mind are our priority.'
                            ) }}
                        </p>

                    </div>

                </div>

            </div>



            <!-- Laundry -->

            <div class="facility-card">

                <div class="facility-card-image">

                    <img
                        src="{{ $image(
                            'facilities_laundry_image',
                            'images/washing.png'
                        ) }}"
                        alt="Laundry Facilities">

                </div>


                <div class="facility-card-content">

                    <div class="facility-card-icon">
                        <i class="fa-solid fa-shirt"></i>
                    </div>

                    <div>

                        <h3>
                            {{ $text(
                                'facilities_laundry_title',
                                'Laundry Facilities'
                            ) }}
                        </h3>

                        <p>
                            {{ $text(
                                'facilities_laundry_description',
                                'Convenient laundry facilities for residents.'
                            ) }}
                        </p>

                    </div>

                </div>

            </div>



            <!-- Washrooms -->

            <div class="facility-card">

                <div class="facility-card-image">

                    <img
                        src="{{ $image(
                            'facilities_washroom_image',
                            'images/washrooom.png'
                        ) }}"
                        alt="Clean Washrooms">

                </div>


                <div class="facility-card-content">

                    <div class="facility-card-icon">
                        <i class="fa-solid fa-sink"></i>
                    </div>

                    <div>

                        <h3>
                            {{ $text(
                                'facilities_washroom_title',
                                'Clean Washrooms'
                            ) }}
                        </h3>

                        <p>
                            {{ $text(
                                'facilities_washroom_description',
                                'Hygienic and regularly maintained washrooms.'
                            ) }}
                        </p>

                    </div>

                </div>

            </div>



            <!-- Power Backup -->

            <div class="facility-card">

                <div class="facility-card-image">

                    <img
                        src="{{ $image(
                            'facilities_power_image',
                            'images/power backup.png'
                        ) }}"
                        alt="Power Backup">

                </div>


                <div class="facility-card-content">

                    <div class="facility-card-icon">
                        <i class="fa-solid fa-bolt"></i>
                    </div>

                    <div>

                        <h3>
                            {{ $text(
                                'facilities_power_title',
                                'Power Backup'
                            ) }}
                        </h3>

                        <p>
                            {{ $text(
                                'facilities_power_description',
                                'Reliable backup power when needed.'
                            ) }}
                        </p>

                    </div>

                </div>

            </div>



            <!-- Drinking Water -->

            <div class="facility-card">

                <div class="facility-card-image">

                    <img
                        src="{{ $image(
                            'facilities_water_image',
                            'images/water.png'
                        ) }}"
                        alt="Drinking Water">

                </div>


                <div class="facility-card-content">

                    <div class="facility-card-icon">
                        <i class="fa-solid fa-droplet"></i>
                    </div>

                    <div>

                        <h3>
                            {{ $text(
                                'facilities_water_title',
                                'Drinking Water'
                            ) }}
                        </h3>

                        <p>
                            {{ $text(
                                'facilities_water_description',
                                'Clean and safe drinking water for residents.'
                            ) }}
                        </p>

                    </div>

                </div>

            </div>



            <!-- Common Area -->

            <div class="facility-card">

                <div class="facility-card-image">

                    <img
                        src="{{ $image(
                            'facilities_common_image',
                            'images/common area.png'
                        ) }}"
                        alt="Common Area">

                </div>


                <div class="facility-card-content">

                    <div class="facility-card-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>

                    <div>

                        <h3>
                            {{ $text(
                                'facilities_common_title',
                                'Common Area'
                            ) }}
                        </h3>

                        <p>
                            {{ $text(
                                'facilities_common_description',
                                'Relax, interact and spend time with friends.'
                            ) }}
                        </p>

                    </div>

                </div>

            </div>



            <!-- Gallery -->

            <div class="facility-card">

                <div class="facility-card-image">

                    <img
                        src="{{ $image(
                            'facilities_gallery_image',
                            'images/galllery.png'
                        ) }}"
                        alt="Facilities Gallery">

                </div>


                <div class="facility-card-content">

                    <div class="facility-card-icon">
                        <i class="fa-solid fa-image"></i>
                    </div>

                    <div>

                        <h3>
                            {{ $text(
                                'facilities_gallery_title',
                                'Facilities Gallery'
                            ) }}
                        </h3>

                        <p>
                            {{ $text(
                                'facilities_gallery_description',
                                'Explore our hostel and available facilities.'
                            ) }}
                        </p>

                    </div>

                </div>

            </div>


        </div>

    </section>



    <!-- FACILITY STATS -->

    <section class="facility-stats-section">

        <div class="container facility-stats-box">


            <div class="facility-stat-intro">

                <div class="facility-stat-main-icon">
                    <i class="fa-solid fa-building"></i>
                </div>

                <div>

                    <strong>
                        {{ $text(
                            'facilities_stats_title',
                            'Modern Facilities'
                        ) }}
                    </strong>

                    <span>
                        {{ $text(
                            'facilities_stats_subtitle',
                            'for a Productive Stay'
                        ) }}
                    </span>

                </div>

            </div>



            <div class="facility-stat">

                <strong>
                    {{ $text(
                        'facilities_stat_rooms_number',
                        '50+'
                    ) }}
                </strong>

                <span>
                    {{ $text(
                        'facilities_stat_rooms_text',
                        'Rooms'
                    ) }}
                </span>

            </div>



            <div class="facility-stat">

                <strong>
                    {{ $text(
                        'facilities_stat_facilities_number',
                        '10+'
                    ) }}
                </strong>

                <span>
                    {{ $text(
                        'facilities_stat_facilities_text',
                        'Facilities'
                    ) }}
                </span>

            </div>



            <div class="facility-stat">

                <strong>
                    {{ $text(
                        'facilities_stat_comfort_number',
                        '100%'
                    ) }}
                </strong>

                <span>
                    {{ $text(
                        'facilities_stat_comfort_text',
                        'Comfort'
                    ) }}
                </span>

            </div>


        </div>

    </section>



    <!-- ADMISSION CTA -->

    <section class="facility-admission-cta">

        <div class="container facility-cta-box">


            <div>

                <span class="section-tag">
                    {{ $text(
                        'facilities_cta_tag',
                        'READY TO JOIN?'
                    ) }}
                </span>

                <h2>
                    {{ $text(
                        'facilities_cta_heading',
                        'Experience Comfortable Hostel Living'
                    ) }}
                </h2>

                <p>
                    {{ $text(
                        'facilities_cta_description',
                        'Submit your admission application today and become part of Niazi Hostel.'
                    ) }}
                </p>

            </div>


            <a href="{{ url('/admission') }}" class="primary-btn">

                {{ $text(
                    'facilities_cta_button',
                    'Apply for Admission'
                ) }}

                <i class="fa-solid fa-arrow-right"></i>

            </a>


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
                    <h2>Niazi Hostel</h2>
                    <span>STAY • STUDY • GROW</span>
                </div>

            </div>


            <p>
                Safe, clean and comfortable hostel accommodation
                for students and job holders.
            </p>

        </div>



        <div class="footer-links">

            <h3>Quick Links</h3>

            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/facilities') }}">Facilities</a>
            <a href="{{ url('/contact') }}">Contact</a>
            <a href="{{ url('/admission') }}">New Admission</a>

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
                niazihostel234@.com
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

</body>

</html>