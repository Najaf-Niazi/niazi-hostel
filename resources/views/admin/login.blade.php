<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Admin Login | Niazi Hostel
    </title>


    <link
        rel="stylesheet"
        href="{{ asset('css/admin-login.css') }}"
    >


    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

</head>


<body>


<div class="admin-login-page">


    <!-- =====================================
         LEFT VISUAL SIDE
    ====================================== -->

    <section class="login-visual-side">


        <div class="login-overlay"></div>


        <div class="login-visual-content">


            <!-- =====================================
                 BRAND
            ====================================== -->

            <div class="login-brand">


                <div class="login-brand-icon">

                    <i class="fa-solid fa-house"></i>

                </div>


                <div>

                    <h2>
                        Niazi Hostel
                    </h2>

                    <span>
                        ADMIN PANEL
                    </span>

                </div>


            </div>



            <!-- =====================================
                 HERO CONTENT
            ====================================== -->

            <div class="login-hero-content">


                <span class="login-small-title">
                    STAY • STUDY • GROW
                </span>


                <h1>

                    A Better Place

                    <span>
                        For A Brighter Tomorrow
                    </span>

                </h1>


                <p>

                    Manage admissions, rooms, students and hostel
                    operations from one secure and powerful admin panel.

                </p>



                <!-- FEATURES -->

                <div class="login-features">


                    <!-- STUDENTS -->

                    <div class="login-feature">


                        <div class="login-feature-icon blue">

                            <i class="fa-solid fa-user-graduate"></i>

                        </div>


                        <div>

                            <strong>
                                Students Management
                            </strong>

                            <span>
                                Manage approved hostel students.
                            </span>

                        </div>


                    </div>



                    <!-- ROOMS -->

                    <div class="login-feature">


                        <div class="login-feature-icon green">

                            <i class="fa-solid fa-bed"></i>

                        </div>


                        <div>

                            <strong>
                                Room Management
                            </strong>

                            <span>
                                Track occupancy and room availability.
                            </span>

                        </div>


                    </div>



                    <!-- ADMISSIONS -->

                    <div class="login-feature">


                        <div class="login-feature-icon gold">

                            <i class="fa-solid fa-file-circle-check"></i>

                        </div>


                        <div>

                            <strong>
                                Admissions & Approvals
                            </strong>

                            <span>
                                Review and manage admission requests.
                            </span>

                        </div>


                    </div>


                </div>


            </div>



            <!-- =====================================
                 LEFT FOOTER
            ====================================== -->

            <div class="login-visual-footer">


                <span>
                    Safe • Study • Grow
                </span>


                <p>
                    A better hostel experience, managed with care.
                </p>


            </div>


        </div>


    </section>



    <!-- =====================================
         RIGHT LOGIN SIDE
    ====================================== -->

    <section class="login-form-side">


        <!-- BACKGROUND GLOWS -->

        <div class="login-glow login-glow-one"></div>

        <div class="login-glow login-glow-two"></div>



        <!-- =====================================
             LOGIN CARD
        ====================================== -->

        <div class="login-card">


            <!-- CARD BRAND -->

            <div class="login-card-brand">


                <div class="card-brand-icon">

                    <i class="fa-solid fa-house"></i>

                </div>


                <h2>
                    Niazi Hostel
                </h2>


                <span>
                    ADMIN PANEL
                </span>


            </div>



            <!-- =====================================
                 HEADING
            ====================================== -->

            <div class="login-heading">


                <h1>
                    Welcome Back
                </h1>


                <p>
                    Login to your admin panel to manage hostel operations.
                </p>


            </div>



            <!-- =====================================
                 ERROR MESSAGE
            ====================================== -->

            @if ($errors->any())

                <div class="login-error">


                    <i class="fa-solid fa-circle-exclamation"></i>


                    <span>
                        {{ $errors->first() }}
                    </span>


                </div>

            @endif



            <!-- =====================================
                 LOGIN FORM
            ====================================== -->

            <form
                action="{{ route('admin.login') }}"
                method="POST"
                class="admin-login-form"
                autocomplete="off"
            >

                @csrf



                <!-- =====================================
                     USERNAME
                ====================================== -->

                <div class="login-field">


                    <label for="username">
                        Username
                    </label>


                    <div class="login-input-wrap">


                        <i class="fa-regular fa-user"></i>


                        <input
                            type="text"
                            id="username"
                            name="username"
                            value=""
                            placeholder="Enter username"
                            autocomplete="off"
                            autocapitalize="none"
                            spellcheck="false"
                            required
                        >


                    </div>


                </div>



                <!-- =====================================
                     PASSWORD
                ====================================== -->

                <div class="login-field">


                    <label for="password">
                        Password
                    </label>


                    <div class="login-input-wrap">


                        <i class="fa-solid fa-lock"></i>


                        <input
                            type="password"
                            id="password"
                            name="password"
                            value=""
                            placeholder="Enter password"
                            autocomplete="new-password"
                            required
                        >



                        <button
                            type="button"
                            class="password-toggle"
                            id="passwordToggle"
                            aria-label="Show or hide password"
                        >

                            <i
                                class="fa-regular fa-eye"
                                id="passwordToggleIcon"
                            ></i>

                        </button>


                    </div>


                </div>



                <!-- =====================================
                     LOGIN OPTIONS
                ====================================== -->

                <div class="login-options">


                    <label class="remember-login">


                        <input
                            type="checkbox"
                            name="remember"
                            value="1"
                        >


                        <span>
                            Remember Me
                        </span>


                    </label>



                    <a
                        href="{{ route('admin.password.form') }}"
                        class="forgot-password-link"
                    >
                        Forgot Password?
                    </a>


                </div>



                <!-- =====================================
                     LOGIN BUTTON
                ====================================== -->

                <button
                    type="submit"
                    class="login-btn"
                >


                    <span>
                        Login
                    </span>


                    <i class="fa-solid fa-arrow-right"></i>


                </button>


            </form>



            <!-- =====================================
                 DIVIDER
            ====================================== -->

            <div class="login-divider">


                <span></span>


                <p>
                    OR
                </p>


                <span></span>


            </div>



            <!-- =====================================
                 BACK TO WEBSITE
            ====================================== -->

            <a
                href="{{ url('/') }}"
                class="back-website-btn"
            >


                <i class="fa-solid fa-house"></i>


                <span>
                    Back to Website
                </span>


            </a>


        </div>


    </section>


</div>



<!-- =====================================
     PASSWORD SHOW / HIDE
====================================== -->

<script>

    const passwordInput =
        document.getElementById('password');


    const passwordToggle =
        document.getElementById('passwordToggle');


    const passwordToggleIcon =
        document.getElementById('passwordToggleIcon');


    if (
        passwordInput &&
        passwordToggle &&
        passwordToggleIcon
    ) {

        passwordToggle.addEventListener(
            'click',
            function () {

                const isPassword =
                    passwordInput.type === 'password';


                passwordInput.type =
                    isPassword
                        ? 'text'
                        : 'password';


                passwordToggleIcon.classList.toggle(
                    'fa-eye',
                    !isPassword
                );


                passwordToggleIcon.classList.toggle(
                    'fa-eye-slash',
                    isPassword
                );

            }
        );

    }

</script>


</body>

</html>