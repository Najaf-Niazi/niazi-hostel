<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Niazi Hostel | New Admission</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admission.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admission-receipt.css') }}">
    

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
            <a href="{{ url('/contact') }}">Contact</a>
        </nav>

        <a href="{{ url('/admission') }}" class="admission-btn active">
            New Admission
            <i class="fa-solid fa-arrow-right"></i>
        </a>

        <button class="menu-btn" id="menuBtn">
            <i class="fa-solid fa-bars"></i>
        </button>

    </div>
</header>


<main>

    <!-- HERO -->
    <section class="admission-hero">
        <div class="container admission-hero-content">

            <span class="section-tag">
                NEW ADMISSION
            </span>

            <h1>
                Start Your Stay at
                <span>Niazi Hostel</span>
            </h1>

            <p>
                Fill out the admission form below, select your preferred
                room and submit your details. Our team will review your
                application and contact you for confirmation.
            </p>

        </div>
    </section>


    <!-- FORM SECTION -->
    <section class="admission-section">

        <div class="container admission-layout">

            <!-- LEFT SIDE -->
            <div class="admission-info">

                <span class="section-tag">
                    ADMISSION PROCESS
                </span>

                <h2>
                    Simple Steps to
                    <span>Join Us</span>
                </h2>

                <p>
                    Submit your information, select your preferred room
                    and our management team will review your application.
                </p>


                <div class="admission-steps">

                    <div class="admission-step">
                        <div class="step-number">
                            01
                        </div>

                        <div>
                            <h3>Fill Application</h3>

                            <p>
                                Provide your personal and contact information.
                            </p>
                        </div>
                    </div>


                    <div class="admission-step">
                        <div class="step-number">
                            02
                        </div>

                        <div>
                            <h3>Select Your Room</h3>

                            <p>
                                Select your preferred room type and room number.
                            </p>
                        </div>
                    </div>


                    <div class="admission-step">
                        <div class="step-number">
                            03
                        </div>

                        <div>
                            <h3>Application Review</h3>

                            <p>
                                Hostel management will review your request.
                            </p>
                        </div>
                    </div>


                    <div class="admission-step">
                        <div class="step-number">
                            04
                        </div>

                        <div>
                            <h3>Admission Confirmed</h3>

                            <p>
                                After approval, your hostel admission
                                and selected room will be confirmed.
                            </p>
                        </div>
                    </div>

                </div>


                <div class="admission-help-card">

                    <div class="admission-help-icon">
                        <i class="fa-solid fa-headset"></i>
                    </div>

                    <div>
                        <span>Need Help?</span>

                        <a href="tel:+923261446249">
                            +92 3261446249
                        </a>
                    </div>

                </div>

            </div>


            <!-- RIGHT SIDE FORM -->
            <div class="admission-form-box">

                <div class="admission-form-heading">

                    <span>
                        APPLICATION FORM
                    </span>

                    <h2>
                        New Admission Form
                    </h2>

                    <p>
                        Please enter correct information in all required fields.
                    </p>

                </div>
@if($errors->any())

    <div class="validation-toast" id="validationToast">

        <div class="validation-toast-icon">
            <i class="fa-solid fa-circle-exclamation"></i>
        </div>

        <div class="validation-toast-content">

            <strong>
                Please check your information
            </strong>

            <span>
                {{ $errors->first() }}
            </span>

        </div>

        <button
            type="button"
            class="validation-toast-close"
            onclick="closeValidationToast()">
            &times;
        </button>

    </div>

@endif
<form
    class="admission-form"
    id="admissionForm"
    action="{{ route('admission.store') }}"
    method="POST"
    enctype="multipart/form-data">

    @csrf


    <div class="form-group">

 

                    <!-- PERSONAL INFORMATION -->
                    <div class="form-section-title">

                        <div class="form-section-icon">
                            <i class="fa-regular fa-user"></i>
                        </div>

                        <div>
                            <h3>Personal Information</h3>
                            <p>Enter your basic personal details.</p>
                        </div>

                    </div>


                    <div class="form-row">

                        <div class="form-group">

                            <label for="studentName">
                                Full Name *
                            </label>

                            <div class="input-box">

                                <i class="fa-regular fa-user"></i>

                                <input
                                    type="text"
                                    id="studentName"
                                        name="studentName"
                                    placeholder="Enter full name"
                                    value="{{ old('studentName') }}"
                                    required>

                            </div>

                        </div>


                        <div class="form-group">

                            <label for="fatherName">
                                Father / Guardian Name *
                            </label>

                            <div class="input-box">

                                <i class="fa-solid fa-user-group"></i>

                                <input
                                    type="text"
                                    id="fatherName"
                                    name="fatherName"
                                    placeholder="Enter guardian name"
                                    value="{{ old('fatherName') }}"
                                    required>

                            </div>

                        </div>

                    </div>


                    <div class="form-row">

                        <div class="form-group">

                            <label for="cnic">
                                CNIC / B-Form *
                            </label>

                            <div class="input-box">

                                <i class="fa-regular fa-id-card"></i>

                                <input
                                    type="text"
                                    id="cnic"
                                    name="cnic"
                                    placeholder="XXXXX-XXXXXXX-X"
                                    value="{{ old('cnic') }}"
                                    required>

                            </div>

                        </div>


                        <div class="form-group">

                            <label for="dob">
                                Date of Birth *
                            </label>

                            <div class="input-box">

                                <i class="fa-regular fa-calendar"></i>

                                <input
                                    type="date"
                                    id="dob"
                                    name="dob"
                                    value="{{ old('dob') }}"
                                    required>

                            </div>

                        </div>

                    </div>


                    <div class="form-row">

                        <div class="form-group">

                            <label for="gender">
                                Gender *
                            </label>

                            <div class="select-box">

                                <i class="fa-solid fa-venus-mars"></i>

                                <select
                                    id="gender"
                                    name="gender"
                                    required>

                                    <option value="">
                                        Select gender
                                    </option>

                                    <option value="Male"
                                        {{ old('gender') == 'Male' ? 'selected' : '' }}>
                                        Male
                                    </option>

                                    <option value="Female"
                                        {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                        Female
                                    </option>

                                </select>

                            </div>

                        </div>


                        <div class="form-group">

                            <label for="occupation">
                                Student / Job Holder *
                            </label>

                            <div class="select-box">

                                <i class="fa-solid fa-briefcase"></i>

                                <select
                                    id="occupation"
                                    name="occupation"
                                    required>

                                    <option value="">
                                        Select category
                                    </option>

                                    <option value="Student"
                                        {{ old('occupation') == 'Student' ? 'selected' : '' }}>
                                        Student
                                    </option>

                                    <option value="Job Holder"
                                        {{ old('occupation') == 'Job Holder' ? 'selected' : '' }}>
                                        Job Holder
                                    </option>

                                </select>

                            </div>

                        </div>

                    </div>


                    <!-- CONTACT INFORMATION -->
                    <div class="form-section-title">

                        <div class="form-section-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>

                        <div>
                            <h3>Contact Information</h3>
                            <p>How can we contact you?</p>
                        </div>

                    </div>


                    <div class="form-row">

                        <div class="form-group">

                            <label for="phone">
                                Phone Number *
                            </label>

                            <div class="input-box">

                                <i class="fa-solid fa-phone"></i>

                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    placeholder="+92 3XX XXXXXXX"
                                    value="{{ old('phone') }}"
                                    required>

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
                                    placeholder="Enter email address"
                                    value="{{ old('email') }}">

                            </div>

                        </div>

                    </div>


                    <div class="form-group">

                        <label for="address">
                            Permanent Address *
                        </label>

                        <div class="textarea-box">

                            <i class="fa-solid fa-location-dot"></i>

                            <textarea
                                id="address"
                                name="address"
                                rows="4"
                                placeholder="Enter complete permanent address"
                                required>{{ old('address') }}</textarea>

                        </div>

                    </div>


                    <!-- EMERGENCY CONTACT -->
                    <div class="form-section-title">

                        <div class="form-section-icon">
                            <i class="fa-solid fa-user-shield"></i>
                        </div>

                        <div>
                            <h3>Emergency Contact</h3>
                            <p>Guardian or emergency contact information.</p>
                        </div>

                    </div>


                    <div class="form-row">

                        <div class="form-group">

                            <label for="guardianPhone">
                                Guardian Phone *
                            </label>

                            <div class="input-box">

                                <i class="fa-solid fa-phone"></i>

                                <input
                                    type="tel"
                                    id="guardianPhone"
                                    name="guardianPhone"
                                    placeholder="+92 3XX XXXXXXX"
                                    value="{{ old('guardianPhone') }}"
                                    required>

                            </div>

                        </div>


                        <div class="form-group">

                            <label for="relation">
                                Relationship *
                            </label>

                            <div class="input-box">

                                <i class="fa-solid fa-users"></i>

                                <input
                                    type="text"
                                    id="relation"
                                    name="relation"
                                    placeholder="Father, Brother, Guardian..."
                                    value="{{ old('relation') }}"
                                    required>

                            </div>

                        </div>

                    </div>


                  <!-- ROOM SELECTION -->

<div class="form-section-title">

    <div class="form-section-icon">
        <i class="fa-solid fa-bed"></i>
    </div>

    <div>

        <h3>Room Selection</h3>

        <p>
            Select an available hostel room.
            Room type will be selected automatically.
        </p>

    </div>

</div>


<div class="form-row">


    <!-- ROOM NUMBER - FIRST -->

    <div class="form-group">

        <label for="roomNumber">
            Room Number *
        </label>

        <div class="select-box">

            <i class="fa-solid fa-door-open"></i>

            <select
                id="roomNumber"
                name="roomNumber"
                required>

                <option value="">
                    Select available room
                </option>


                @forelse($rooms as $room)

                    @php
                        $availableSeats =
                            $room->total_seats - $room->occupied_seats;
                    @endphp


                    @if($availableSeats > 0)

                        <option
                            value="{{ $room->room_number }}"
                            data-room-type="{{ $room->room_type }}"
                            {{ old('roomNumber') == $room->room_number ? 'selected' : '' }}>

                            Room {{ $room->room_number }}
                            - {{ $room->room_type }}
                            - {{ $availableSeats }} Seat(s) Available

                        </option>

                    @endif


                @empty

                    <option value="" disabled>
                        No rooms currently available
                    </option>

                @endforelse

            </select>

        </div>

    </div>



    <!-- ROOM TYPE - SECOND / AUTO FILLED -->

    <div class="form-group">

        <label for="roomType">
            Room Type *
        </label>

        <div class="input-box">

            <i class="fa-solid fa-bed"></i>

            <input
                type="text"
                id="roomType"
                name="roomType"
                value="{{ old('roomType') }}"
                placeholder="Select room number first"
                readonly
                required>

        </div>

    </div>


</div>
                    <!-- JOINING DATE -->
                    <div class="form-group">

                        <label for="joiningDate">
                            Expected Joining Date *
                        </label>

                        <div class="input-box">

                            <i class="fa-regular fa-calendar-check"></i>

                            <input
                                type="date"
                                id="joiningDate"
                                name="joiningDate"
                                value="{{ old('joiningDate') }}"
                                required>

                        </div>

                    </div>


                    <!-- STUDY / WORK -->
                    <div class="form-section-title">

                        <div class="form-section-icon">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>

                        <div>
                            <h3>Study / Work Information</h3>

                            <p>
                                Tell us where you study or work.
                            </p>
                        </div>

                    </div>


                    <div class="form-row">

                        <div class="form-group">

                            <label for="institute">
                                Institute / Company *
                            </label>

                            <div class="input-box">

                                <i class="fa-solid fa-building"></i>

                                <input
                                    type="text"
                                    id="institute"
                                    name="institute"
                                    placeholder="University, college or company"
                                    value="{{ old('institute') }}"
                                    required>

                            </div>

                        </div>


                        <div class="form-group">

                            <label for="designation">
                                Course / Designation
                            </label>

                            <div class="input-box">

                                <i class="fa-solid fa-book"></i>

                                <input
                                    type="text"
                                    id="designation"
                                    name="designation"
                                    placeholder="Course or job designation"
                                    value="{{ old('designation') }}">

                            </div>

                        </div>

                    </div>


                   
               <!-- =====================================
     CNIC / B-FORM IMAGE
====================================== -->

<div class="form-section-title">

    <div class="form-section-icon">
        <i class="fa-solid fa-id-card"></i>
    </div>

    <div>
        <h3>Identification</h3>

        <p>
            Upload your CNIC / B-Form image.
        </p>
    </div>

</div>


<div class="form-group">

    <label for="cnic_image">
        CNIC / B-Form Image
    </label>

    <div class="file-upload">

        <i class="fa-solid fa-cloud-arrow-up"></i>

        <div>

            <strong>
                Upload CNIC / B-Form
            </strong>

            <span>
                JPG, JPEG, PNG or WEBP
            </span>

        </div>

        <input
            type="file"
            id="cnic_image"
            name="cnic_image"
            accept=".jpg,.jpeg,.png,.webp"
        >

    </div>

</div>

                    <!-- NOTES -->
                    <div class="form-group">

                        <label for="notes">
                            Additional Notes
                        </label>

                        <div class="textarea-box">

                            <i class="fa-regular fa-comment-dots"></i>

                            <textarea
                                id="notes"
                                name="notes"
                                rows="4"
                                placeholder="Any additional information...">{{ old('notes') }}</textarea>

                        </div>

                    </div>


                    <!-- AGREEMENT -->
                    <div class="form-agreement">

                        <input
                            type="checkbox"
                            id="agreement"
                            name="agreement"
                            value="1"
                            required>

                        <label for="agreement">

                            I confirm that the information provided
                            in this application is correct and the
                            selected room is my preferred room.

                        </label>

                    </div>
                       <!-- SUBMIT BUTTON -->
                    <button
                        type="submit"
                        class="admission-submit-btn">

                        Submit Admission Application

                        <i class="fa-solid fa-arrow-right"></i>

                    </button>

                </form>

            </div>

        </div>

    </section>



    <!-- SUCCESS SECTION -->
    @if(session('success'))

        @php
            $applicationData = session('application_data', []);
        @endphp

        <section
            class="application-success-section"
            id="applicationSuccess">

            <div class="container">


                <!-- SUCCESS CARD -->
                <div class="application-success-box">

                    <div class="success-icon">
                        <i class="fa-solid fa-check"></i>
                    </div>

                    <span class="success-label">
                        APPLICATION SUBMITTED
                    </span>

                    <h2>
                        Your Admission Request Has Been Received Successfully
                    </h2>

                    <p class="success-message">
                        {{ session('success') }}
                    </p>


                    <div class="application-id">

                        <span>
                            Application ID
                        </span>

                        <strong id="applicationId">
                            {{ session('application_id') }}
                        </strong>

                    </div>


                    <div class="application-actions">

                        <button
                            type="button"
                            class="print-application-btn"
                            onclick="window.print()">

                            <i class="fa-solid fa-print"></i>

                            Print / Save PDF

                        </button>

                    </div>

                </div>



                <!-- PROFESSIONAL APPLICATION RECEIPT -->
                <div
                    class="application-receipt"
                    id="applicationReceipt">


                    <!-- RECEIPT HEADER -->
                    <div class="receipt-header">

                        <div>

                            <span class="receipt-brand">
                                NIAZI HOSTEL
                            </span>

                            <h2>
                                Admission Application Receipt
                            </h2>

                            <p>
                                STAY • STUDY • GROW
                            </p>

                        </div>


                        <div class="receipt-status">

                            <span>
                                Status
                            </span>

                            <strong>
                                Pending Review
                            </strong>

                        </div>

                    </div>


                    <!-- APPLICATION ID -->
                    <div class="receipt-id-row">

                        <span>
                            Application ID
                        </span>

                        <strong>
                            {{ session('application_id') }}
                        </strong>

                    </div>



                    <!-- PERSONAL INFORMATION -->
                    <div class="receipt-section">

                        <h3>
                            Personal Information
                        </h3>


                        <div class="receipt-grid">

                            <div class="receipt-item">
                                <span>Full Name</span>

                                <strong>
                                    {{ $applicationData['student_name'] ?? '-' }}
                                </strong>
                            </div>


                            <div class="receipt-item">
                                <span>Father / Guardian</span>

                                <strong>
                                    {{ $applicationData['father_name'] ?? '-' }}
                                </strong>
                            </div>


                            <div class="receipt-item">
                                <span>CNIC / B-Form</span>

                                <strong>
                                    {{ $applicationData['cnic'] ?? '-' }}
                                </strong>
                            </div>


                            <div class="receipt-item">
                                <span>Date of Birth</span>

                                <strong>
                                    {{ $applicationData['dob'] ?? '-' }}
                                </strong>
                            </div>


                            <div class="receipt-item">
                                <span>Gender</span>

                                <strong>
                                    {{ $applicationData['gender'] ?? '-' }}
                                </strong>
                            </div>


                            <div class="receipt-item">
                                <span>Category</span>

                                <strong>
                                    {{ $applicationData['occupation'] ?? '-' }}
                                </strong>
                            </div>

                        </div>

                    </div>



                    <!-- CONTACT INFORMATION -->
                    <div class="receipt-section">

                        <h3>
                            Contact Information
                        </h3>


                        <div class="receipt-grid">

                            <div class="receipt-item">

                                <span>
                                    Phone
                                </span>

                                <strong>
                                    {{ $applicationData['phone'] ?? '-' }}
                                </strong>

                            </div>


                            <div class="receipt-item">

                                <span>
                                    Email
                                </span>

                                <strong>
                                    {{ $applicationData['email'] ?? '-' }}
                                </strong>

                            </div>


                            <div class="receipt-item">

                                <span>
                                    Guardian Phone
                                </span>

                                <strong>
                                    {{ $applicationData['guardian_phone'] ?? '-' }}
                                </strong>

                            </div>


                            <div class="receipt-item">

                                <span>
                                    Relationship
                                </span>

                                <strong>
                                    {{ $applicationData['relation'] ?? '-' }}
                                </strong>

                            </div>


                            <div class="receipt-item receipt-item-full">

                                <span>
                                    Permanent Address
                                </span>

                                <strong>
                                    {{ $applicationData['address'] ?? '-' }}
                                </strong>

                            </div>

                        </div>

                    </div>



                    <!-- ROOM DETAILS -->
                    <div class="receipt-section">

                        <h3>
                            Room & Joining Details
                        </h3>


                        <div class="receipt-grid">

                            <div class="receipt-item">

                                <span>
                                    Room Type
                                </span>

                                <strong>
                                    {{ $applicationData['room_type'] ?? '-' }}
                                </strong>

                            </div>


                            <div class="receipt-item">

                                <span>
                                    Room Number
                                </span>

                                <strong>
                                    {{ $applicationData['room_number'] ?? '-' }}
                                </strong>

                            </div>


                            <div class="receipt-item">

                                <span>
                                    Expected Joining Date
                                </span>

                                <strong>
                                    {{ $applicationData['joining_date'] ?? '-' }}
                                </strong>

                            </div>


                            <div class="receipt-item">

                                <span>
                                    Institute / Company
                                </span>

                                <strong>
                                    {{ $applicationData['institute'] ?? '-' }}
                                </strong>

                            </div>


                            <div class="receipt-item receipt-item-full">

                                <span>
                                    Course / Designation
                                </span>

                                <strong>
                                    {{ $applicationData['designation'] ?? '-' }}
                                </strong>

                            </div>

                        </div>

                    </div>



                    <!-- RECEIPT FOOTER -->
                    <div class="receipt-footer">

                        <p>
                            This receipt confirms that your admission
                            application has been received. Final admission
                            and room allocation will be confirmed after
                            management review.
                        </p>


                        <div>

                            <strong>
                                Niazi Hostel
                            </strong>

                            <span>
                                Lahore, Pakistan
                            </span>

                        </div>

                    </div>


                </div>

            </div>

        </section>

    @endif

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

@if(session('success'))
<script>
    window.addEventListener("load", function () {
        const successSection = document.getElementById("applicationSuccess");

        if (successSection) {
            successSection.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        }
    });
    
</script>
@endif

</body>
</html>