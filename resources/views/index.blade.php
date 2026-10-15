<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Niazi Hostel | Home</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

@php
    $contentValue = function ($key, $default = '') use ($contentItems) {
        return $contentItems[$key]->value ?? $default;
    };

    $contentImage = function ($key, $default = '') use ($contentItems) {

        $value = $contentItems[$key]->value ?? $default;

        if (filter_var($value, FILTER_VALIDATE_URL)) {
            return $value;
        }

        if (str_starts_with($value, 'website-editor/')) {
            return asset('storage/' . $value);
        }

        return asset($value);
    };
@endphp


<div class="page-loader" id="pageLoader">

    <div class="loader-overlay"></div>

    <div class="loader-content">

        <div class="loader-circle">

            <div class="loader-ring"></div>

            <div class="loader-inner">

                <div class="loader-logo">
                    <i class="fa-solid fa-house"></i>
                </div>

                <h2>
                    Niazi <span>Hostel</span>
                </h2>

                <p class="loader-tagline">
                    STAY • STUDY • GROW
                </p>

                <div class="loader-percent" id="loaderPercent">
                    0%
                </div>

            </div>

        </div>

        <div class="loader-text">

            <span class="loader-line"></span>

            <h3>
                Loading<span class="loader-dots">...</span>
            </h3>

            <span class="loader-line"></span>

        </div>

        <div class="loader-glow"></div>

    </div>

</div>


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

            <a href="{{ url('/') }}" class="active">Home</a>

            <a href="{{ url('/about') }}">About</a>

            <a href="{{ url('/facilities') }}">Facilities</a>

            <a href="{{ url('/contact') }}">Contact</a>

        </nav>


        <a href="{{ url('/admission') }}" class="admission-btn">

            New Admission

            <i class="fa-solid fa-arrow-right"></i>

        </a>
<button
    type="button"
    class="menu-btn"
    id="menuBtn"
    aria-label="Open menu"
    aria-expanded="false"
>
    <span></span>
    <span></span>
    <span></span>
</button>

        <button class="menu-btn" id="menuBtn">

            <i class="fa-solid fa-bars"></i>

        </button>

    </div>

</header>


<main>


    <!-- HERO -->

    <section class="hero">

        <div class="container hero-content">

            <div class="hero-text">


                <span
                    class="small-heading"
                    data-edit-key="home_hero_small_heading"
                    data-edit-type="text"
                    data-edit-value="{{ $contentValue('home_hero_small_heading', 'MORE THAN A HOSTEL') }}"
                >
                    {{ $contentValue('home_hero_small_heading', 'MORE THAN A HOSTEL') }}
                </span>


                <h1>

                    <span
                        data-edit-key="home_hero_heading_start"
                        data-edit-type="text"
                        data-edit-value="{{ $contentValue('home_hero_heading_start', 'A Comfortable') }}"
                        style="color: inherit;"
                    >
                        {{ $contentValue('home_hero_heading_start', 'A Comfortable') }}
                    </span>

                    <span
                        data-edit-key="home_hero_heading_highlight"
                        data-edit-type="text"
                        data-edit-value="{{ $contentValue('home_hero_heading_highlight', 'Home') }}"
                    >
                        {{ $contentValue('home_hero_heading_highlight', 'Home') }}
                    </span>

                    <span
                        data-edit-key="home_hero_heading_end"
                        data-edit-type="text"
                        data-edit-value="{{ $contentValue('home_hero_heading_end', 'for a Brighter Tomorrow') }}"
                        style="color: inherit;"
                    >
                        {{ $contentValue('home_hero_heading_end', 'for a Brighter Tomorrow') }}
                    </span>

                </h1>


                <p
                    data-edit-key="home_hero_description"
                    data-edit-type="text"
                    data-edit-value="{{ $contentValue(
                        'home_hero_description',
                        'A safe, clean and peaceful living environment for students and job holders. Focus on your goals while we take care of the rest.'
                    ) }}"
                >
                    {{ $contentValue(
                        'home_hero_description',
                        'A safe, clean and peaceful living environment for students and job holders. Focus on your goals while we take care of the rest.'
                    ) }}
                </p>


                <div class="hero-buttons">

                    <a href="{{ url('/admission') }}" class="primary-btn">

                        Apply for New Admission

                        <i class="fa-solid fa-arrow-right"></i>

                    </a>


                    <a href="{{ url('/facilities') }}" class="video-btn">

                        <span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </span>

                        Explore Facilities

                    </a>

                </div>


                <div class="hero-stats">


                    <div class="stat">

                        <i class="fa-solid fa-users"></i>

                        <div>
                            <strong>500+</strong>
                            <span>Happy Residents</span>
                        </div>

                    </div>


                    <div class="stat">

                        <i class="fa-solid fa-shield-halved"></i>

                        <div>
                            <strong>24/7</strong>
                            <span>Security & Support</span>
                        </div>

                    </div>


                    <div class="stat">

                        <i class="fa-solid fa-location-dot"></i>

                        <div>
                            <strong>Prime</strong>
                            <span>Location</span>
                        </div>

                    </div>


                    <div class="stat">

                        <i class="fa-solid fa-coins"></i>

                        <div>
                            <strong>Affordable</strong>
                            <span>Living Costs</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- HOME ABOUT -->

    <section class="home-about">

        <div class="container home-about-grid">


            <div class="home-about-images">


                <div class="about-main-image">

                    <img
                        src="{{ $contentImage(
                            'home_about_main_image',
                            'images/hostel building.png'
                        ) }}"
                        alt="Niazi Hostel Building"
                        data-edit-key="home_about_main_image"
                        data-edit-type="image"
                        data-edit-value="{{ $contentValue(
                            'home_about_main_image',
                            'images/hostel building.png'
                        ) }}"
                    >

                </div>


                <div class="about-room-image">

                    <img
                        src="{{ $contentImage(
                            'home_about_room_image',
                            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHGqFOLpGKpLIaqm0OV8bfyJAQfuhHGVVFDy692fbOA-TiESoVVFHlXUkK&s=10'
                        ) }}"
                        alt="Niazi Hostel Room"
                        data-edit-key="home_about_room_image"
                        data-edit-type="image"
                        data-edit-value="{{ $contentValue(
                            'home_about_room_image',
                            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHGqFOLpGKpLIaqm0OV8bfyJAQfuhHGVVFDy692fbOA-TiESoVVFHlXUkK&s=10'
                        ) }}"
                    >


                    <div class="room-label">

                        <i class="fa-solid fa-bed"></i>

                        <div>

                            <strong>Comfortable Rooms</strong>

                            <span>Clean & Peaceful Living</span>

                        </div>

                    </div>

                </div>

            </div>


            <div class="home-about-content">


                <span
                    class="section-tag"
                    data-edit-key="home_about_tag"
                    data-edit-type="text"
                    data-edit-value="{{ $contentValue(
                        'home_about_tag',
                        'ABOUT NIAZI HOSTEL'
                    ) }}"
                >
                    {{ $contentValue(
                        'home_about_tag',
                        'ABOUT NIAZI HOSTEL'
                    ) }}
                </span>


                <h2>

                    <span
                        data-edit-key="home_about_heading_start"
                        data-edit-type="text"
                        data-edit-value="{{ $contentValue(
                            'home_about_heading_start',
                            'A Better Place to'
                        ) }}"
                        style="color: inherit;"
                    >
                        {{ $contentValue(
                            'home_about_heading_start',
                            'A Better Place to'
                        ) }}
                    </span>

                    <span
                        data-edit-key="home_about_heading_highlight"
                        data-edit-type="text"
                        data-edit-value="{{ $contentValue(
                            'home_about_heading_highlight',
                            'Live & Grow'
                        ) }}"
                    >
                        {{ $contentValue(
                            'home_about_heading_highlight',
                            'Live & Grow'
                        ) }}
                    </span>

                </h2>


                <p
                    data-edit-key="home_about_description"
                    data-edit-type="text"
                    data-edit-value="{{ $contentValue(
                        'home_about_description',
                        'Niazi Hostel provides a safe, clean and comfortable living environment for students and job holders. Our goal is to provide peaceful accommodation where residents can focus on their studies, work and personal growth.'
                    ) }}"
                >
                    {{ $contentValue(
                        'home_about_description',
                        'Niazi Hostel provides a safe, clean and comfortable living environment for students and job holders. Our goal is to provide peaceful accommodation where residents can focus on their studies, work and personal growth.'
                    ) }}
                </p>


                <div class="about-highlights">


                    <div class="about-highlight">

                        <div class="highlight-icon">

                            <i class="fa-solid fa-shield-halved"></i>

                        </div>

                        <div>

                            <h3
                                data-edit-key="home_highlight_safe_title"
                                data-edit-type="text"
                                data-edit-value="{{ $contentValue(
                                    'home_highlight_safe_title',
                                    'Safe & Secure'
                                ) }}"
                            >
                                {{ $contentValue(
                                    'home_highlight_safe_title',
                                    'Safe & Secure'
                                ) }}
                            </h3>

                            <p
                                data-edit-key="home_highlight_safe_description"
                                data-edit-type="text"
                                data-edit-value="{{ $contentValue(
                                    'home_highlight_safe_description',
                                    'Peaceful environment with security support.'
                                ) }}"
                            >
                                {{ $contentValue(
                                    'home_highlight_safe_description',
                                    'Peaceful environment with security support.'
                                ) }}
                            </p>

                        </div>

                    </div>


                    <div class="about-highlight">

                        <div class="highlight-icon">

                            <i class="fa-solid fa-bed"></i>

                        </div>

                        <div>

                            <h3
                                data-edit-key="home_highlight_rooms_title"
                                data-edit-type="text"
                                data-edit-value="{{ $contentValue(
                                    'home_highlight_rooms_title',
                                    'Comfortable Rooms'
                                ) }}"
                            >
                                {{ $contentValue(
                                    'home_highlight_rooms_title',
                                    'Comfortable Rooms'
                                ) }}
                            </h3>

                            <p
                                data-edit-key="home_highlight_rooms_description"
                                data-edit-type="text"
                                data-edit-value="{{ $contentValue(
                                    'home_highlight_rooms_description',
                                    'Clean rooms designed for comfortable living.'
                                ) }}"
                            >
                                {{ $contentValue(
                                    'home_highlight_rooms_description',
                                    'Clean rooms designed for comfortable living.'
                                ) }}
                            </p>

                        </div>

                    </div>


                    <div class="about-highlight">

                        <div class="highlight-icon">

                            <i class="fa-solid fa-users"></i>

                        </div>

                        <div>

                            <h3
                                data-edit-key="home_highlight_community_title"
                                data-edit-type="text"
                                data-edit-value="{{ $contentValue(
                                    'home_highlight_community_title',
                                    'Friendly Community'
                                ) }}"
                            >
                                {{ $contentValue(
                                    'home_highlight_community_title',
                                    'Friendly Community'
                                ) }}
                            </h3>

                            <p
                                data-edit-key="home_highlight_community_description"
                                data-edit-type="text"
                                data-edit-value="{{ $contentValue(
                                    'home_highlight_community_description',
                                    'A positive environment for students and workers.'
                                ) }}"
                            >
                                {{ $contentValue(
                                    'home_highlight_community_description',
                                    'A positive environment for students and workers.'
                                ) }}
                            </p>

                        </div>

                    </div>

                </div>


                <a href="{{ url('/about') }}" class="about-btn">

                    Learn More About Us

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>

        </div>

    </section>

<!-- =========================================
     FACILITIES PREVIEW SECTION
========================================= -->

<section class="home-facilities">

    <div class="container">

        <!-- SECTION HEADING -->

        <div class="home-facilities-heading">

            <div class="home-facilities-heading-left">

                <span
    class="section-tag"
    data-edit-key="home_facilities_tag"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_facilities_tag',
        'OUR FACILITIES'
    ) }}"
>
    {{ $contentValue(
        'home_facilities_tag',
        'OUR FACILITIES'
    ) }}
</span>
                <h2>

    <span
        data-edit-key="home_facilities_heading_start"
        data-edit-type="text"
        data-edit-value="{{ $contentValue(
            'home_facilities_heading_start',
            'Everything You Need For'
        ) }}"
        style="color: inherit;"
    >
        {{ $contentValue(
            'home_facilities_heading_start',
            'Everything You Need For'
        ) }}
    </span>

    <span
        data-edit-key="home_facilities_heading_highlight"
        data-edit-type="text"
        data-edit-value="{{ $contentValue(
            'home_facilities_heading_highlight',
            'Comfortable Living'
        ) }}"
    >
        {{ $contentValue(
            'home_facilities_heading_highlight',
            'Comfortable Living'
        ) }}
    </span>

</h2>

            </div>

           <p
    data-edit-key="home_facilities_description"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_facilities_description',
        'From high-speed internet to round-the-clock security, Niazi Hostel provides essential facilities designed for a comfortable, safe and focused lifestyle.'
    ) }}"
>
    {{ $contentValue(
        'home_facilities_description',
        'From high-speed internet to round-the-clock security, Niazi Hostel provides essential facilities designed for a comfortable, safe and focused lifestyle.'
    ) }}
</p>

        </div>


        <!-- FACILITY CARDS -->

        <div class="home-facilities-grid">


            <!-- WIFI -->

            <div class="home-facility-card">

                <div class="home-facility-number">
                    01
                </div>

                <div class="home-facility-icon">
                    <i class="fa-solid fa-wifi"></i>
                </div>

                <h3
    data-edit-key="home_facility_wifi_title"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_facility_wifi_title',
        'High Speed WiFi'
    ) }}"
>
    {{ $contentValue(
        'home_facility_wifi_title',
        'High Speed WiFi'
    ) }}
</h3>

             <p
    data-edit-key="home_facility_wifi_description"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_facility_wifi_description',
        'Fast and reliable internet access for studying, work and everyday connectivity.'
    ) }}"
>
    {{ $contentValue(
        'home_facility_wifi_description',
        'Fast and reliable internet access for studying, work and everyday connectivity.'
    ) }}
</p>

                <div class="home-facility-line"></div>

            </div>


            <!-- SECURITY -->

            <div class="home-facility-card">

                <div class="home-facility-number">
                    02
                </div>

                <div class="home-facility-icon">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>

                <h3
    data-edit-key="home_facility_security_title"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_facility_security_title',
        '24/7 Security'
    ) }}"
>
    {{ $contentValue(
        'home_facility_security_title',
        '24/7 Security'
    ) }}
</h3>

                <p
    data-edit-key="home_facility_security_description"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_facility_security_description',
        'A secure hostel environment with continuous monitoring for your peace of mind.'
    ) }}"
>
    {{ $contentValue(
        'home_facility_security_description',
        'A secure hostel environment with continuous monitoring for your peace of mind.'
    ) }}
</p>

                <div class="home-facility-line"></div>

            </div>


            <!-- WASHROOM -->

            <div class="home-facility-card">

                <div class="home-facility-number">
                    03
                </div>

                <div class="home-facility-icon">
                    <i class="fa-solid fa-shower"></i>
                </div>
<h3
    data-edit-key="home_facility_washroom_title"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_facility_washroom_title',
        'Clean Washrooms'
    ) }}"
>
    {{ $contentValue(
        'home_facility_washroom_title',
        'Clean Washrooms'
    ) }}
</h3>
                <p
    data-edit-key="home_facility_washroom_description"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_facility_washroom_description',
        'Regularly maintained and hygienic washrooms designed for comfortable daily use.'
    ) }}"
>
    {{ $contentValue(
        'home_facility_washroom_description',
        'Regularly maintained and hygienic washrooms designed for comfortable daily use.'
    ) }}
</p>

                <div class="home-facility-line"></div>

            </div>


            <!-- POWER -->

            <div class="home-facility-card">

                <div class="home-facility-number">
                    04
                </div>

                <div class="home-facility-icon">
                    <i class="fa-solid fa-bolt"></i>
                </div>

               <h3
    data-edit-key="home_facility_power_title"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_facility_power_title',
        'Power Backup'
    ) }}"
>
    {{ $contentValue(
        'home_facility_power_title',
        'Power Backup'
    ) }}
</h3>
<p
    data-edit-key="home_facility_power_description"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_facility_power_description',
        'Reliable backup power to keep essential services running during electricity interruptions.'
    ) }}"
>
    {{ $contentValue(
        'home_facility_power_description',
        'Reliable backup power to keep essential services running during electricity interruptions.'
    ) }}
</p>

                <div class="home-facility-line"></div>

            </div>


            <!-- WATER -->

            <div class="home-facility-card">

                <div class="home-facility-number">
                    05
                </div>

                <div class="home-facility-icon">
                    <i class="fa-solid fa-glass-water"></i>
                </div>

                <h3
    data-edit-key="home_facility_water_title"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_facility_water_title',
        'Drinking Water'
    ) }}"
>
    {{ $contentValue(
        'home_facility_water_title',
        'Drinking Water'
    ) }}
</h3>

               <p
    data-edit-key="home_facility_water_description"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_facility_water_description',
        'Clean drinking water available for residents throughout the day.'
    ) }}"
>
    {{ $contentValue(
        'home_facility_water_description',
        'Clean drinking water available for residents throughout the day.'
    ) }}
</p>

                <div class="home-facility-line"></div>

            </div>


            <!-- LAUNDRY -->

            <div class="home-facility-card">

                <div class="home-facility-number">
                    06
                </div>

                <div class="home-facility-icon">
                    <i class="fa-solid fa-shirt"></i>
                </div>

              <h3
    data-edit-key="home_facility_laundry_title"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_facility_laundry_title',
        'Laundry Facility'
    ) }}"
>
    {{ $contentValue(
        'home_facility_laundry_title',
        'Laundry Facility'
    ) }}
</h3>

               <p
    data-edit-key="home_facility_laundry_description"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_facility_laundry_description',
        'Convenient laundry support to make everyday hostel living easier.'
    ) }}"
>
    {{ $contentValue(
        'home_facility_laundry_description',
        'Convenient laundry support to make everyday hostel living easier.'
    ) }}
</p>

                <div class="home-facility-line"></div>

            </div>


        </div>


        <!-- BUTTON -->

        <div class="home-facilities-action">

            <a
                href="{{ route('facilities') }}"
                class="home-facilities-btn"
            >
                Explore All Facilities

                <span>
                    <i class="fa-solid fa-arrow-right"></i>
                </span>

            </a>

        </div>

    </div>

</section>
    <!-- ROOMS -->

    <section class="rooms-preview">

        <div class="container">

            <div class="rooms-heading">

                <div>


                    <span
                        class="section-tag"
                        data-edit-key="home_rooms_tag"
                        data-edit-type="text"
                        data-edit-value="{{ $contentValue(
                            'home_rooms_tag',
                            'OUR ROOMS'
                        ) }}"
                    >
                        {{ $contentValue(
                            'home_rooms_tag',
                            'OUR ROOMS'
                        ) }}
                    </span>


                    <h2>

                        <span
                            data-edit-key="home_rooms_heading_start"
                            data-edit-type="text"
                            data-edit-value="{{ $contentValue(
                                'home_rooms_heading_start',
                                'Comfortable Rooms for'
                            ) }}"
                            style="color: inherit;"
                        >
                            {{ $contentValue(
                                'home_rooms_heading_start',
                                'Comfortable Rooms for'
                            ) }}
                        </span>

                        <span
                            data-edit-key="home_rooms_heading_highlight"
                            data-edit-type="text"
                            data-edit-value="{{ $contentValue(
                                'home_rooms_heading_highlight',
                                'Every Need'
                            ) }}"
                        >
                            {{ $contentValue(
                                'home_rooms_heading_highlight',
                                'Every Need'
                            ) }}
                        </span>

                    </h2>

                </div>


                <a href="{{ url('/facilities') }}" class="view-rooms-btn">

                    View All Rooms

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>


            <div class="rooms-grid">


                <!-- SINGLE ROOM -->

                <div class="room-card">

                    <div class="room-card-image">

                        <img
                            src="{{ $contentImage(
                                'home_single_room_image',
                                'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTznt6Uj4eoJfCJ_pk88vI1Yr51kuVdHDMJNmPJKZ4F8jhl3sCmlR06FPEh&s=10'
                            ) }}"
                            alt="Single Hostel Room"
                            data-edit-key="home_single_room_image"
                            data-edit-type="image"
                            data-edit-value="{{ $contentValue(
                                'home_single_room_image',
                                'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTznt6Uj4eoJfCJ_pk88vI1Yr51kuVdHDMJNmPJKZ4F8jhl3sCmlR06FPEh&s=10'
                            ) }}"
                        >

                        <span class="room-number">01</span>

                    </div>


                    <div class="room-card-content">

                        <h3
                            data-edit-key="home_single_room_title"
                            data-edit-type="text"
                            data-edit-value="{{ $contentValue(
                                'home_single_room_title',
                                'Single Room'
                            ) }}"
                        >
                            {{ $contentValue(
                                'home_single_room_title',
                                'Single Room'
                            ) }}
                        </h3>


                        <p
                            data-edit-key="home_single_room_description"
                            data-edit-type="text"
                            data-edit-value="{{ $contentValue(
                                'home_single_room_description',
                                'Perfect for focused study and peaceful living.'
                            ) }}"
                        >
                            {{ $contentValue(
                                'home_single_room_description',
                                'Perfect for focused study and peaceful living.'
                            ) }}
                        </p>


                        <div class="room-features">

                            <span>
                                <i class="fa-solid fa-bed"></i>
                                1 Bed
                            </span>

                            <span>
                                <i class="fa-solid fa-wifi"></i>
                                WiFi
                            </span>

                            <span>
                                <i class="fa-solid fa-table"></i>
                                Study Table
                            </span>

                            <span>
                                <i class="fa-solid fa-fan"></i>
                                Fan
                            </span>

                        </div>

                    </div>

                </div>


                <!-- DOUBLE ROOM -->

                <div class="room-card">

                    <div class="room-card-image">

                        <img
                            src="{{ $contentImage(
                                'home_double_room_image',
                                'images/hostel2.png'
                            ) }}"
                            alt="Double Sharing Hostel Room"
                            data-edit-key="home_double_room_image"
                            data-edit-type="image"
                            data-edit-value="{{ $contentValue(
                                'home_double_room_image',
                                'images/hostel2.png'
                            ) }}"
                        >

                        <span class="room-number">02</span>

                    </div>


                    <div class="room-card-content">

                        <h3
                            data-edit-key="home_double_room_title"
                            data-edit-type="text"
                            data-edit-value="{{ $contentValue(
                                'home_double_room_title',
                                'Double Sharing'
                            ) }}"
                        >
                            {{ $contentValue(
                                'home_double_room_title',
                                'Double Sharing'
                            ) }}
                        </h3>


                        <p
                            data-edit-key="home_double_room_description"
                            data-edit-type="text"
                            data-edit-value="{{ $contentValue(
                                'home_double_room_description',
                                'Comfortable and affordable for two residents.'
                            ) }}"
                        >
                            {{ $contentValue(
                                'home_double_room_description',
                                'Comfortable and affordable for two residents.'
                            ) }}
                        </p>


                        <div class="room-features">

                            <span>
                                <i class="fa-solid fa-bed"></i>
                                2 Beds
                            </span>

                            <span>
                                <i class="fa-solid fa-wifi"></i>
                                WiFi
                            </span>

                            <span>
                                <i class="fa-solid fa-table"></i>
                                Study Table
                            </span>

                            <span>
                                <i class="fa-solid fa-fan"></i>
                                Fan
                            </span>

                        </div>

                    </div>

                </div>


                <!-- TRIPLE ROOM -->

                <div class="room-card">

                    <div class="room-card-image">

                        <img
                            src="{{ $contentImage(
                                'home_triple_room_image',
                                'images/hostel3.png'
                            ) }}"
                            alt="Triple Sharing Hostel Room"
                            data-edit-key="home_triple_room_image"
                            data-edit-type="image"
                            data-edit-value="{{ $contentValue(
                                'home_triple_room_image',
                                'images/hostel3.png'
                            ) }}"
                        >

                        <span class="room-number">03</span>

                    </div>


                    <div class="room-card-content">

                        <h3
                            data-edit-key="home_triple_room_title"
                            data-edit-type="text"
                            data-edit-value="{{ $contentValue(
                                'home_triple_room_title',
                                'Triple Sharing'
                            ) }}"
                        >
                            {{ $contentValue(
                                'home_triple_room_title',
                                'Triple Sharing'
                            ) }}
                        </h3>


                        <p
                            data-edit-key="home_triple_room_description"
                            data-edit-type="text"
                            data-edit-value="{{ $contentValue(
                                'home_triple_room_description',
                                'Spacious shared room with a friendly atmosphere.'
                            ) }}"
                        >
                            {{ $contentValue(
                                'home_triple_room_description',
                                'Spacious shared room with a friendly atmosphere.'
                            ) }}
                        </p>


                        <div class="room-features">

                            <span>
                                <i class="fa-solid fa-bed"></i>
                                3 Beds
                            </span>

                            <span>
                                <i class="fa-solid fa-wifi"></i>
                                WiFi
                            </span>

                            <span>
                                <i class="fa-solid fa-table"></i>
                                Study Table
                            </span>

                            <span>
                                <i class="fa-solid fa-fan"></i>
                                Fan
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

<!-- =========================================
     OUR BENEFITS SECTION
========================================= -->

<section class="home-benefits">

    <div class="container">

        <span
    class="section-tag"
    data-edit-key="home_benefits_tag"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_benefits_tag',
        'OUR BENEFITS'
    ) }}"
>
    {{ $contentValue(
        'home_benefits_tag',
        'OUR BENEFITS'
    ) }}
</span>

          <h2>
    <span
        data-edit-key="home_benefits_heading_start"
        data-edit-type="text"
        data-edit-value="{{ $contentValue(
            'home_benefits_heading_start',
            'Why Choose'
        ) }}"
        style="color: inherit;"
    >
        {{ $contentValue(
            'home_benefits_heading_start',
            'Why Choose'
        ) }}
    </span>

    <span
        data-edit-key="home_benefits_heading_highlight"
        data-edit-type="text"
        data-edit-value="{{ $contentValue(
            'home_benefits_heading_highlight',
            'Niazi Hostel'
        ) }}"
    >
        {{ $contentValue(
            'home_benefits_heading_highlight',
            'Niazi Hostel'
        ) }}
    </span>
</h2>

           <p
    data-edit-key="home_benefit_4_description"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_benefit_4_description',
        'A welcoming hostel community where students can live, connect and grow together.'
    ) }}"
>
    {{ $contentValue(
        'home_benefit_4_description',
        'A welcoming hostel community where students can live, connect and grow together.'
    ) }}
</p>

        </div>


        <div class="home-benefits-grid">
            


            <!-- BENEFIT 01 -->

            <div class="home-benefit-card">

                <div class="home-benefit-icon">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>

                <span class="home-benefit-number">
                    01
                </span>

                <h3>
                    Safe & Secure
                </h3>

                <p>
                    A peaceful hostel environment with security
                    support for a safer and more relaxed stay.
                </p>

            </div>


            <!-- BENEFIT 02 -->

            <div class="home-benefit-card">

                <div class="home-benefit-icon">
                    <i class="fa-solid fa-bed"></i>
                </div>

                <span class="home-benefit-number">
                    02
                </span>

                <h3>
                    Comfortable Living
                </h3>

                <p>
                    Clean and well-managed living spaces designed
                    for comfort, rest and everyday convenience.
                </p>

            </div>


            <!-- BENEFIT 03 -->

            <div class="home-benefit-card">

                <div class="home-benefit-icon">
                    <i class="fa-solid fa-wifi"></i>
                </div>

                <span class="home-benefit-number">
                    03
                </span>

                <h3>
                    High-Speed WiFi
                </h3>

                <p>
                    Reliable internet connectivity for studies,
                    work, communication and daily online needs.
                </p>

            </div>


            <!-- BENEFIT 04 -->

            <div class="home-benefit-card">

                <div class="home-benefit-icon">
                    <i class="fa-solid fa-book-open-reader"></i>
                </div>

                <span class="home-benefit-number">
                    04
                </span>

                <h3>
                    Study-Friendly Environment
                </h3>

                <p>
                    A calm and supportive atmosphere where students
                    can focus on studies, career and personal growth.
                </p>

            </div>


        </div>

    </div>

</section>
<!-- =========================================
     WHAT PEOPLE SAY / REVIEWS
========================================= -->

<section class="home-reviews">

    <div class="container">

        <!-- SECTION HEADING -->

        <div class="home-reviews-heading">

         <span
    class="section-tag"
    data-edit-key="home_reviews_tag"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_reviews_tag',
        'WHAT PEOPLE SAY'
    ) }}"
>
    {{ $contentValue(
        'home_reviews_tag',
        'WHAT PEOPLE SAY'
    ) }}
</span>

<h2>
    <span
        data-edit-key="home_reviews_heading_start"
        data-edit-type="text"
        data-edit-value="{{ $contentValue(
            'home_reviews_heading_start',
            'Loved By Our'
        ) }}"
        style="color: inherit;"
    >
        {{ $contentValue(
            'home_reviews_heading_start',
            'Loved By Our'
        ) }}
    </span>

    <span
        data-edit-key="home_reviews_heading_highlight"
        data-edit-type="text"
        data-edit-value="{{ $contentValue(
            'home_reviews_heading_highlight',
            'Residents'
        ) }}"
    >
        {{ $contentValue(
            'home_reviews_heading_highlight',
            'Residents'
        ) }}
    </span>
</h2>

<p
    data-edit-key="home_reviews_description"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_reviews_description',
        'Real experiences from students who call Niazi Hostel their home.'
    ) }}"
>
    {{ $contentValue(
        'home_reviews_description',
        'Real experiences from students who call Niazi Hostel their home.'
    ) }}
</p>

        </div>


        <!-- MAIN REVIEW AREA -->

        <div class="premium-review-wrapper">


            <!-- LEFT PANEL -->

            <div class="premium-review-left">

                <span class="premium-review-small">
                    STUDENT
                </span>

                <h3>
                    STUDENT
                    <span>REVIEWS</span>
                </h3>

                <div class="premium-review-divider"></div>


                <div class="premium-review-features">

                    <div class="premium-review-feature">

                        <div class="premium-review-feature-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>

                        <span>
                            Safe Environment
                        </span>

                    </div>


                    <div class="premium-review-feature">

                        <div class="premium-review-feature-icon">
                            <i class="fa-solid fa-book-open"></i>
                        </div>

                        <span>
                            Study Friendly
                        </span>

                    </div>


                    <div class="premium-review-feature">

                        <div class="premium-review-feature-icon">
                            <i class="fa-solid fa-users"></i>
                        </div>

                        <span>
                            Supportive Community
                        </span>

                    </div>


                    <div class="premium-review-feature">

                        <div class="premium-review-feature-icon">
                            <i class="fa-solid fa-heart"></i>
                        </div>

                        <span>
                            Comfortable Stay
                        </span>

                    </div>

                </div>

            </div>



            <!-- RIGHT SLIDER -->

            <div class="premium-review-slider">

                <button
                    type="button"
                    class="review-nav review-prev"
                    id="reviewPrev"
                    aria-label="Previous review"
                >
                    <i class="fa-solid fa-arrow-left"></i>
                </button>


                <div class="reviews-viewport">

                    <div
                        class="reviews-track"
                        id="reviewsTrack"
                    >


                        <!-- REVIEW 01 -->

                        <article class="review-card">

                            <div class="review-stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>

                            <div class="review-quote-mark">
                                “
                            </div>

              <p
    class="review-text"
    data-edit-key="home_review_1_text"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_review_1_text',
        'Niazi Hostel provides a comfortable and secure environment. The facilities are well maintained and the overall experience has been very positive.'
    ) }}"
>
    {{ $contentValue(
        'home_review_1_text',
        'Niazi Hostel provides a comfortable and secure environment. The facilities are well maintained and the overall experience has been very positive.'
    ) }}
</p>
                            <div class="review-person">

                                <div class="review-initial">
                                    R
                                </div>

                                <div class="review-person-info">

                                    <h3
    data-edit-key="home_review_1_name"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_review_1_name',
        'Rabia Draz'
    ) }}"
>
    {{ $contentValue(
        'home_review_1_name',
        'Rabia Draz'
    ) }}
</h3>

                                   <span
    data-edit-key="home_review_1_university"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_review_1_university',
        'Superior University Lahore'
    ) }}"
>
    {{ $contentValue(
        'home_review_1_university',
        'Superior University Lahore'
    ) }}
</span>
                                </div>

                                </div>


                        </article>



                        <!-- REVIEW 02 -->

                        <article class="review-card">

                            <div class="review-stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>

                            <div class="review-quote-mark">
                                “
                            </div>

                           <p
    class="review-text"
    data-edit-key="home_review_2_text"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_review_2_text',
        'A peaceful place for students with a good study environment, reliable facilities and helpful management.'
    ) }}"
>
    {{ $contentValue(
        'home_review_2_text',
        'A peaceful place for students with a good study environment, reliable facilities and helpful management.'
    ) }}
</p>

                            <div class="review-person">

                                <div class="review-initial">
                                    N
                                </div>

                                <div class="review-person-info">

                                    <h3
    data-edit-key="home_review_2_name"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_review_2_name',
        'Najaf Ali'
    ) }}"
>
    {{ $contentValue(
        'home_review_2_name',
        'Najaf Ali'
    ) }}
</h3>

                                  <span
    data-edit-key="home_review_2_university"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_review_2_university',
        'Superior University Lahore'
    ) }}"
>
    {{ $contentValue(
        'home_review_2_university',
        'Superior University Lahore'
    ) }}
</span>
                                </div>

                            </div>

                        </article>



                        <!-- REVIEW 03 -->

                        <article class="review-card">

                            <div class="review-stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>

                            <div class="review-quote-mark">
                                “
                            </div>

                            <p
    class="review-text"
    data-edit-key="home_review_3_text"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_review_3_text',
        'The hostel is clean, comfortable and student-friendly. It gives you a good balance between study and everyday hostel life.'
    ) }}"
>
    {{ $contentValue(
        'home_review_3_text',
        'The hostel is clean, comfortable and student-friendly. It gives you a good balance between study and everyday hostel life.'
    ) }}
</p>

                            <div class="review-person">

                                <div class="review-initial">
                                    A
                                </div>

                                <div class="review-person-info">

                                  <h3
    data-edit-key="home_review_3_name"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_review_3_name',
        'Asfand Niazi'
    ) }}"
>
    {{ $contentValue(
        'home_review_3_name',
        'Asfand Niazi'
    ) }}
</h3>
<span
    data-edit-key="home_review_3_university"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_review_3_university',
        'UCP'
    ) }}"
>
    {{ $contentValue(
        'home_review_3_university',
        'UCP'
    ) }}
</span>

                                </div>

                            </div>

                        </article>



                        <!-- REVIEW 04 -->

                        <article class="review-card">

                            <div class="review-stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>

                            <div class="review-quote-mark">
                                “
                            </div>
<p
    class="review-text"
    data-edit-key="home_review_4_text"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_review_4_text',
        'The environment is calm and secure, and the facilities make daily life much easier for students living away from home.'
    ) }}"
>
    {{ $contentValue(
        'home_review_4_text',
        'The environment is calm and secure, and the facilities make daily life much easier for students living away from home.'
    ) }}
</p>
                            <div class="review-person">

                                <div class="review-initial">
                                    Q
                                </div>

                                <div class="review-person-info">

                                    <h3
    data-edit-key="home_review_4_name"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_review_4_name',
        'Qudret Ullah'
    ) }}"
>
    {{ $contentValue(
        'home_review_4_name',
        'Qudret Ullah'
    ) }}
</h3>
                                <span
    data-edit-key="home_review_4_university"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_review_4_university',
        'UOL'
    ) }}"
>
    {{ $contentValue(
        'home_review_4_university',
        'UOL'
    ) }}
</span>

                                </div>

                            </div>

                        </article>



                        <!-- REVIEW 05 -->

                        <article class="review-card">

                            <div class="review-stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>

                            <div class="review-quote-mark">
                                “
                            </div>

<p
    class="review-text"
    data-edit-key="home_review_5_text"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_review_5_text',
        'A well-managed hostel with good facilities, a supportive community and a comfortable environment for students.'
    ) }}"
>
    {{ $contentValue(
        'home_review_5_text',
        'A well-managed hostel with good facilities, a supportive community and a comfortable environment for students.'
    ) }}
</p>

                            <div class="review-person">

                                <div class="review-initial">
                                    F
                                </div>

                                <div class="review-person-info">

                                   <h3
    data-edit-key="home_review_5_name"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_review_5_name',
        'Furqan Faisal'
    ) }}"
>
    {{ $contentValue(
        'home_review_5_name',
        'Furqan Faisal'
    ) }}
</h3>

                                    <span
    data-edit-key="home_review_5_university"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_review_5_university',
        'UMT'
    ) }}"
>
    {{ $contentValue(
        'home_review_5_university',
        'UMT'
    ) }}
</span>

                                </div>

                            </div>

                        </article>



                        <!-- REVIEW 06 -->

                        <article class="review-card">

                            <div class="review-stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>

                            <div class="review-quote-mark">
                                “
                            </div>

<p
    class="review-text"
    data-edit-key="home_review_6_text"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_review_6_text',
        'Niazi Hostel offers a welcoming and comfortable atmosphere with the facilities students need for a smooth daily routine.'
    ) }}"
>
    {{ $contentValue(
        'home_review_6_text',
        'Niazi Hostel offers a welcoming and comfortable atmosphere with the facilities students need for a smooth daily routine.'
    ) }}
</p>

                            <div class="review-person">

                                <div class="review-initial">
                                    M
                                </div>

                                <div class="review-person-info">

                                    <h3
    data-edit-key="home_review_6_name"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_review_6_name',
        'Mahnoor Furqan'
    ) }}"
>
    {{ $contentValue(
        'home_review_6_name',
        'Mahnoor Furqan'
    ) }}
</h3>

                                 <span
    data-edit-key="home_review_6_university"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_review_6_university',
        'UMT'
    ) }}"
>
    {{ $contentValue(
        'home_review_6_university',
        'UMT'
    ) }}
</span>

                                </div>

                            </div>

                        </article>


                    </div>

                </div>

<!-- RIGHT SIDE VISUAL -->
<div class="review-side-image">

    <img
        src="{{ asset('images/review flower.png') }}"
        alt="Niazi Hostel Review"
    >


                            </div>
                <button
                    type="button"
                    class="review-nav review-next"
                    id="reviewNext"
                    aria-label="Next review"
                >
                    <i class="fa-solid fa-arrow-right"></i>
                </button>


                <div
                    class="review-dots"
                    id="reviewDots"
                ></div>

            </div>

        </div>


        <!-- BOTTOM STATS -->

        <div class="review-stats">

            <div class="review-stat-item">

                <i class="fa-solid fa-users"></i>

                <div>
                    <strong>06+</strong>
                    <span>Genuine Reviews</span>
                </div>

            </div>


            <div class="review-stat-item">

                <i class="fa-regular fa-star"></i>

                <div>
                    <strong>4.9</strong>
                    <span>Average Rating</span>
                </div>

            </div>


            <div class="review-stat-item">

                <i class="fa-regular fa-heart"></i>

                <div>
                    <strong>100%</strong>
                    <span>Student Satisfaction</span>
                </div>

            </div>


            <div class="review-stat-item">

                <i class="fa-regular fa-message"></i>

                <div>
                    <strong>Real Stories</strong>
                    <span>From Our Residents</span>
                </div>

            </div>

        </div>

    </div>

</section>
  <!-- =========================================
     PREMIUM ADMISSION CTA
========================================= -->

<section class="admission-cta">

    <div class="container">

        <div class="admission-showcase">


            <!-- =====================================
                 LEFT CONTENT
            ====================================== -->
            <div class="admission-showcase-content">

                <div class="admission-showcase-top">

                    <span
    class="admission-showcase-badge"
    data-edit-key="home_cta_tag"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_cta_tag',
        'ADMISSIONS OPEN'
    ) }}"
>
    <i class="fa-solid fa-graduation-cap"></i>

    {{ $contentValue(
        'home_cta_tag',
        'ADMISSIONS OPEN'
    ) }}
</span>

                    <span class="admission-showcase-divider"></span>


                    

                </div>


              <h2>
    <span
        data-edit-key="home_cta_heading_start"
        data-edit-type="text"
        data-edit-value="{{ $contentValue(
            'home_cta_heading_start',
            'Start Your'
        ) }}"
        style="color: inherit;"
    >
        {{ $contentValue(
            'home_cta_heading_start',
            'Start Your'
        ) }}
    </span>

    <span
        data-edit-key="home_cta_heading_highlight"
        data-edit-type="text"
        data-edit-value="{{ $contentValue(
            'home_cta_heading_highlight',
            'New Journey'
        ) }}"
    >
        {{ $contentValue(
            'home_cta_heading_highlight',
            'New Journey'
        ) }}
    </span>

    <br>

    <span
        data-edit-key="home_cta_heading_end"
        data-edit-type="text"
        data-edit-value="{{ $contentValue(
            'home_cta_heading_end',
            'at Niazi Hostel'
        ) }}"
        style="color: inherit;"
    >
        {{ $contentValue(
            'home_cta_heading_end',
            'at Niazi Hostel'
        ) }}
    </span>
</h2>


               <p
    data-edit-key="home_cta_description"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_cta_description',
        'Fill out the admission form and become a part of a safe, comfortable and study-friendly environment. Limited seats available for new admissions.'
    ) }}"
>
    {{ $contentValue(
        'home_cta_description',
        'Fill out the admission form and become a part of a safe, comfortable and study-friendly environment. Limited seats available for new admissions.'
    ) }}
</p>

                <!-- BENEFITS -->
                <div class="admission-showcase-benefits">


                    <div class="admission-showcase-benefit">

                        <div class="admission-showcase-benefit-icon coral">

                            <i class="fa-solid fa-shield-halved"></i>

                        </div>

                       <div>
    <strong
        data-edit-key="home_cta_benefit_1_title"
        data-edit-type="text"
        data-edit-value="{{ $contentValue(
            'home_cta_benefit_1_title',
            'Safe & Secure'
        ) }}"
    >
        {{ $contentValue(
            'home_cta_benefit_1_title',
            'Safe & Secure'
        ) }}
    </strong>

    <span
        data-edit-key="home_cta_benefit_1_text"
        data-edit-type="text"
        data-edit-value="{{ $contentValue(
            'home_cta_benefit_1_text',
            'Environment'
        ) }}"
    >
        {{ $contentValue(
            'home_cta_benefit_1_text',
            'Environment'
        ) }}
    </span>
</div>

                        

                    </div>


                    <span class="benefit-separator"></span>


                    <div class="admission-showcase-benefit">

                        <div class="admission-showcase-benefit-icon blue">

                            <i class="fa-solid fa-users"></i>

                        </div>

                        <div>
    <strong
        data-edit-key="home_cta_benefit_2_title"
        data-edit-type="text"
        data-edit-value="{{ $contentValue(
            'home_cta_benefit_2_title',
            'Supportive'
        ) }}"
    >
        {{ $contentValue(
            'home_cta_benefit_2_title',
            'Supportive'
        ) }}
    </strong>

    <span
        data-edit-key="home_cta_benefit_2_text"
        data-edit-type="text"
        data-edit-value="{{ $contentValue(
            'home_cta_benefit_2_text',
            'Community'
        ) }}"
    >
        {{ $contentValue(
            'home_cta_benefit_2_text',
            'Community'
        ) }}
    </span>
</div>

                    </div>


                    <span class="benefit-separator"></span>


                    <div class="admission-showcase-benefit">

                        <div class="admission-showcase-benefit-icon coral">

                            <i class="fa-solid fa-book-open"></i>

                        </div>

                        <div>
    <strong
        data-edit-key="home_cta_benefit_3_title"
        data-edit-type="text"
        data-edit-value="{{ $contentValue(
            'home_cta_benefit_3_title',
            'Study'
        ) }}"
    >
        {{ $contentValue(
            'home_cta_benefit_3_title',
            'Study'
        ) }}
    </strong>

    <span
        data-edit-key="home_cta_benefit_3_text"
        data-edit-type="text"
        data-edit-value="{{ $contentValue(
            'home_cta_benefit_3_text',
            'Friendly'
        ) }}"
    >
        {{ $contentValue(
            'home_cta_benefit_3_text',
            'Friendly'
        ) }}
    </span>
</div>

                    </div>


                    <span class="benefit-separator"></span>


                    <div class="admission-showcase-benefit">

                        <div class="admission-showcase-benefit-icon blue">

                            <i class="fa-solid fa-bed"></i>

                        </div>

                        <div>
    <strong
        data-edit-key="home_cta_benefit_4_title"
        data-edit-type="text"
        data-edit-value="{{ $contentValue(
            'home_cta_benefit_4_title',
            'Comfortable'
        ) }}"
    >
        {{ $contentValue(
            'home_cta_benefit_4_title',
            'Comfortable'
        ) }}
    </strong>

    <span
        data-edit-key="home_cta_benefit_4_text"
        data-edit-type="text"
        data-edit-value="{{ $contentValue(
            'home_cta_benefit_4_text',
            'Stay'
        ) }}"
    >
        {{ $contentValue(
            'home_cta_benefit_4_text',
            'Stay'
        ) }}
    </span>
</div>

                    </div>


                </div>

            </div>


            <!-- =====================================
                 CENTER HOSTEL IMAGE
            ====================================== -->
            <div class="admission-showcase-image">

                <img
                    src="{{ asset('images/hostel building.png') }}"
                    alt="Niazi Hostel"
                >


                <div class="admission-showcase-happy">

                    <div class="admission-showcase-happy-icon">

                        <i class="fa-solid fa-users"></i>

                    </div>


                    <div>

                      <strong
    data-edit-key="home_cta_happy_number"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_cta_happy_number',
        '1000+'
    ) }}"
>
    {{ $contentValue(
        'home_cta_happy_number',
        '1000+'
    ) }}
</strong>

                       <span
    data-edit-key="home_cta_happy_text"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_cta_happy_text',
        'Happy Students'
    ) }}"
>
    {{ $contentValue(
        'home_cta_happy_text',
        'Happy Students'
    ) }}
</span>
                    </div>

                </div>

            </div>


            <!-- =====================================
                 RIGHT CTA PANEL
            ====================================== -->
            <div class="admission-showcase-panel">


                <div class="admission-showcase-limited">

                    <span></span>

                    <i class="fa-regular fa-star"></i>

                    <strong
    data-edit-key="home_cta_limited_text"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_cta_limited_text',
        'LIMITED SEATS'
    ) }}"
>
    {{ $contentValue(
        'home_cta_limited_text',
        'LIMITED SEATS'
    ) }}
</strong>

                    <span></span>

                </div>


                <a
                    href="{{ url('/admission') }}"
                    class="admission-showcase-apply"
                >

                   <span
    data-edit-key="home_cta_apply_text"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_cta_apply_text',
        'Apply Now'
    ) }}"
>
    {{ $contentValue(
        'home_cta_apply_text',
        'Apply Now'
    ) }}
</span>

                    <span class="admission-showcase-arrow">

                        <i class="fa-solid fa-arrow-right"></i>

                    </span>

                </a>


                <div class="admission-showcase-list">


                    <div>

                        <span class="admission-showcase-check">

                            <i class="fa-solid fa-check"></i>

                        </span>

                        <span
    data-edit-key="home_cta_process_1"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_cta_process_1',
        'Simple Online Form'
    ) }}"
>
    {{ $contentValue(
        'home_cta_process_1',
        'Simple Online Form'
    ) }}
</span>

                    </div>


                    <div>

                        <span class="admission-showcase-check">

                            <i class="fa-solid fa-check"></i>

                        </span>

                    <span
    data-edit-key="home_cta_process_2"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_cta_process_2',
        'Quick Processing'
    ) }}"
>
    {{ $contentValue(
        'home_cta_process_2',
        'Quick Processing'
    ) }}
</span>

                    </div>


                    <div>

                        <span class="admission-showcase-check">

                            <i class="fa-solid fa-check"></i>

                        </span>

<span
    data-edit-key="home_cta_process_3"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_cta_process_3',
        'Secure & Confidential'
    ) }}"
>
    {{ $contentValue(
        'home_cta_process_3',
        'Secure & Confidential'
    ) }}
</span>

                    </div>


                    <div>

                        <span class="admission-showcase-check">

                            <i class="fa-solid fa-check"></i>

                        </span>

                        <span
    data-edit-key="home_cta_process_4"
    data-edit-type="text"
    data-edit-value="{{ $contentValue(
        'home_cta_process_4',
        'Hassle Free Admission'
    ) }}"
>
    {{ $contentValue(
        'home_cta_process_4',
        'Hassle Free Admission'
    ) }}
</span>
                    </div>


                </div>


                <div class="admission-showcase-dots">

                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>

                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>

                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>

                </div>


            </div>


        </div>

    </div>

</section>

</main>


<footer class="footer">

    <div class="container footer-grid">


        <!-- ABOUT -->
        <div class="footer-about">

            <div class="footer-logo">

                <i class="fa-solid fa-house"></i>

                <div>

                    <h2>Niazi Hostel</h2>

                    <span>STAY • STUDY • GROW</span>

                </div>

            </div>


            <p
                data-edit-key="footer_description"
                data-edit-type="text"
                data-edit-value="{{ $contentValue(
                    'footer_description',
                    'Safe, clean and comfortable hostel accommodation for students and job holders.'
                ) }}"
            >
                {{ $contentValue(
                    'footer_description',
                    'Safe, clean and comfortable hostel accommodation for students and job holders.'
                ) }}
            </p>

        </div>


        <!-- QUICK LINKS -->
        <div class="footer-links">

            <h3>Quick Links</h3>

            <a href="{{ url('/') }}">Home</a>

            <a href="{{ url('/about') }}">About</a>

            <a href="{{ url('/facilities') }}">Facilities</a>

            <a href="{{ url('/contact') }}">Contact</a>

            <a href="{{ url('/admission') }}">New Admission</a>

        </div>


        <!-- OUR FACILITIES -->
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


        <!-- CONTACT INFO -->
        <div class="footer-contact">

            <h3>Contact Info</h3>


            <p>

                <i class="fa-solid fa-phone"></i>

                <span
                    data-edit-key="footer_phone"
                    data-edit-type="text"
                    data-edit-value="{{ $contentValue(
                        'footer_phone',
                        '+92 3261446249'
                    ) }}"
                >
                    {{ $contentValue(
                        'footer_phone',
                        '+92 3261446249'
                    ) }}
                </span>

            </p>


            <p>

                <i class="fa-solid fa-envelope"></i>

                <span
                    data-edit-key="footer_email"
                    data-edit-type="text"
                    data-edit-value="{{ $contentValue(
                        'footer_email',
                        'niazihostel234@.com'
                    ) }}"
                >
                    {{ $contentValue(
                        'footer_email',
                        'niazihostel234@.com'
                    ) }}
                </span>

            </p>


            <p>

                <i class="fa-solid fa-location-dot"></i>

                <span
                    data-edit-key="footer_address"
                    data-edit-type="text"
                    data-edit-value="{{ $contentValue(
                        'footer_address',
                        'Mianwali, Pakistan'
                    ) }}"
                >
                    {{ $contentValue(
                        'footer_address',
                        'Mianwali, Pakistan'
                    ) }}
                </span>

            </p>

        </div>

    </div>


    <!-- BOTTOM BAR -->
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


@if(request()->get('editor') === '1')

<script>

document.addEventListener('DOMContentLoaded', function () {

    const editableItems = document.querySelectorAll('[data-edit-key]');

    editableItems.forEach(function (item) {

        item.style.cursor = 'pointer';

        item.addEventListener('click', function (event) {

            event.preventDefault();

            event.stopPropagation();

            let value = this.dataset.editValue || '';

            if (
                (this.dataset.editType || 'text') === 'text'
                &&
                value === ''
            ) {
                value = this.innerText.trim();
            }

            window.parent.postMessage(
                {
                    type: 'niazi-content-edit',

                    key: this.dataset.editKey,

                    contentType: this.dataset.editType || 'text',

                    value: value
                },
                window.location.origin
            );

        });

    });

});

</script>

@endif


</body>

</html>