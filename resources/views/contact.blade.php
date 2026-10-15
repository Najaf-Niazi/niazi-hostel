<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Niazi Hostel | Contact</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">

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
.contact-success-message,
.contact-error-message {
    display: flex;
    align-items: flex-start;
    gap: 12px;

    margin-bottom: 20px;
    padding: 15px 18px;

    border-radius: 14px;

    font-size: 14px;
    font-weight: 600;
}

.contact-success-message {
    background: rgba(34, 197, 94, 0.10);
    border: 1px solid rgba(34, 197, 94, 0.20);
    color: #15803d;
}

.contact-error-message {
    background: rgba(249, 112, 102, 0.10);
    border: 1px solid rgba(249, 112, 102, 0.22);
    color: #b42318;
}

.contact-success-message i,
.contact-error-message i {
    margin-top: 2px;
    font-size: 18px;
}

.contact-error-message p {
    margin: 0 0 5px;
}

.contact-error-message p:last-child {
    margin-bottom: 0;
}
</style>
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
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/facilities') }}">Facilities</a>
            <a href="{{ url('/contact') }}" class="active">Contact</a>

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


    <!-- CONTACT HERO -->

    <section class="contact-hero">

        <div class="container contact-hero-content">

            <span class="section-tag">
                CONTACT US
            </span>

            <h1>
                We’re Here to
                <span>Help You</span>
            </h1>

            <p>
                Have questions about rooms, facilities or admission?
                Contact Niazi Hostel and our team will be happy to assist you.
            </p>

        </div>

    </section>


    <!-- CONTACT MAIN SECTION -->

    <section class="contact-section">

        <div class="container contact-grid">


            <!-- LEFT SIDE -->

            <div class="contact-info">

                <span class="section-tag">
                    GET IN TOUCH
                </span>

                <h2>
                    Let’s Talk About Your
                    <span>Stay</span>
                </h2>

                <p>
                    Whether you want to ask about room availability,
                    monthly charges or the admission process, feel free
                    to contact us.
                </p>


                <div class="contact-info-list">


                    <!-- PHONE -->

                    <div class="contact-info-card">

                        <div class="contact-info-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>

                        <div>

                            <span>Call Us</span>

                            <a href="tel:+923261446249">
                                +92 3261446249
                            </a>

                        </div>

                    </div>


                    <!-- EMAIL -->

                    <div class="contact-info-card">

                        <div class="contact-info-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div>

                            <span>Email Us</span>

                            <a href="mailto:niazihostel234@.com">
                                niazihostel234@.com
                            </a>

                        </div>

                    </div>


                    <!-- LOCATION -->

                    <div class="contact-info-card">

                        <div class="contact-info-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>

                        <div>

                            <span>Our Location</span>

                            <p>
                                Lahore, Pakistan
                            </p>

                        </div>

                    </div>


                    <!-- TIME -->

                    <div class="contact-info-card">

                        <div class="contact-info-icon">
                            <i class="fa-solid fa-clock"></i>
                        </div>

                        <div>

                            <span>Available</span>

                            <p>
                                24 Hours, 7 Days a Week
                            </p>

                        </div>

                    </div>

                </div>


                <!-- SOCIAL -->

                <div class="contact-social">

                    <span>
                        Follow Us
                    </span>

                    <div class="social-links">

                        <a href="#" aria-label="Facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>

                        <a href="#" aria-label="Instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </a>

                        <a href="#" aria-label="WhatsApp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>

                    </div>

                </div>

            </div>


            <!-- RIGHT SIDE FORM -->

            <div class="contact-form-box">

                <div class="contact-form-heading">

                    <span>
                        SEND A MESSAGE
                    </span>

                    <h3>
                        How Can We Help?
                    </h3>

                    <p>
                        Fill out the form and we’ll get back to you.
                    </p>

                </div>

@if(session('success'))
    <div class="contact-success-message">
        <i class="fa-solid fa-circle-check"></i>
        <span>{{ session('success') }}</span>
    </div>
@endif

@if($errors->any())
    <div class="contact-error-message">
        <i class="fa-solid fa-circle-exclamation"></i>

        <div>
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    </div>
@endif
              <form action="{{ route('contact.send') }}" method="POST">
    @csrf

                    <div class="form-row">

                        <div class="form-group">

                            <label for="name">
                                Full Name
                            </label>

                            <div class="input-box">

                                <i class="fa-regular fa-user"></i>

                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    placeholder="Enter your name"
                                    required>

                            </div>

                        </div>


                        <div class="form-group">

                            <label for="phone">
                                Phone Number
                            </label>

                            <div class="input-box">

                                <i class="fa-solid fa-phone"></i>

                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    placeholder="+92 3XX XXXXXXX"
                                    required>

                            </div>

                        </div>

                    </div>


                    <div class="form-group">

                        <label for="email">
                            Email Address
                        </label>

                        <div class="input-box">

                            <i class="fa-regular fa-envelope"></i>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Enter your email">

                        </div>

                    </div>


                    <div class="form-group">

                        <label for="subject">
                            Subject
                        </label>

                        <div class="input-box">

                            <i class="fa-regular fa-message"></i>

                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                placeholder="What would you like to ask?"
                                required>

                        </div>

                    </div>


                    <div class="form-group">

                        <label for="message">
                            Message
                        </label>

                        <div class="textarea-box">

                            <i class="fa-regular fa-comment-dots"></i>

                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                placeholder="Write your message here..."
                                required></textarea>

                        </div>

                    </div>


                    <button type="submit" class="contact-submit-btn">

                        Send Message

                        <i class="fa-solid fa-arrow-right"></i>

                    </button>

                </form>

            </div>

        </div>

    </section>


    <!-- GOOGLE MAP LOCATION -->

    <section class="contact-location">

        <div class="container">

            <div class="location-heading">

                <span class="section-tag">
                    OUR LOCATION
                </span>

                <h2>
                    Find Niazi Hostel
                </h2>

                <p>
                    Visit us in Lahore or contact us before your visit
                    for room availability and admission information.
                </p>

            </div>


            <div class="map-box">

             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53789.988102131305!2d71.51413557995156!3d32.582877378497095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39271820c5ae398d%3A0x93a7da7672fc2613!2sMianwali%2C%20Pakistan!5e0!3m2!1sen!2s!4v1791291818075!5m2!1sen!2s" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>

            </div>

        </div>

    </section>


    <!-- ADMISSION CTA -->

    <section class="contact-admission-cta">

        <div class="container contact-cta-box">

            <div>

                <span>
                    READY TO JOIN?
                </span>

                <h2>
                    Make Niazi Hostel Your New Home
                </h2>

                <p>
                    Apply today and start your comfortable hostel stay.
                </p>

            </div>


            <a href="{{ url('/admission') }}" class="primary-btn">

                Apply for Admission

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