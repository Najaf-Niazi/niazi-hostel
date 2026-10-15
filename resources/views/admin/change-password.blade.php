<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Change Password | Niazi Hostel
    </title>

    <link
        rel="stylesheet"
        href="{{ asset('css/admin-change-password.css') }}"
    >

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

</head>

<body>


<div class="password-page">


    <div class="password-glow password-glow-one"></div>

    <div class="password-glow password-glow-two"></div>


    <div class="password-card">


        <a
            href="{{ route('admin.login.form') }}"
            class="back-login"
        >

            <i class="fa-solid fa-arrow-left"></i>

            Back to Login

        </a>


        <div class="password-brand">


            <div class="password-brand-icon">

                <i class="fa-solid fa-house"></i>

            </div>


            <div>

                <h2>
                    Niazi Hostel
                </h2>

                <span>
                    ADMIN SECURITY
                </span>

            </div>


        </div>


        <div class="password-heading">


            <span class="password-label">
                ACCOUNT SECURITY
            </span>


            <h1>
                Change Password
            </h1>


            <p>
                Enter your current password and create a new secure password
                for your admin account.
            </p>


        </div>


        @if ($errors->any())

            <div class="password-alert">

                <i class="fa-solid fa-circle-exclamation"></i>

                <span>
                    {{ $errors->first() }}
                </span>

            </div>

        @endif


        <form
            action="{{ route('admin.password.update') }}"
            method="POST"
            class="password-form"
        >

            @csrf


            <!-- CURRENT PASSWORD -->

            <div class="password-field">

                <label for="current_password">
                    Current Password
                </label>


                <div class="password-input-wrap">

                    <i class="fa-solid fa-lock"></i>


                    <input
                        type="password"
                        id="current_password"
                        name="current_password"
                        placeholder="Enter current password"
                        required
                    >


                    <button
                        type="button"
                        class="toggle-password"
                        data-target="current_password"
                    >

                        <i class="fa-regular fa-eye"></i>

                    </button>

                </div>

            </div>



            <!-- NEW PASSWORD -->

            <div class="password-field">

                <label for="new_password">
                    New Password
                </label>


                <div class="password-input-wrap">

                    <i class="fa-solid fa-key"></i>


                    <input
                        type="password"
                        id="new_password"
                        name="new_password"
                        placeholder="Enter new password"
                        required
                    >


                    <button
                        type="button"
                        class="toggle-password"
                        data-target="new_password"
                    >

                        <i class="fa-regular fa-eye"></i>

                    </button>

                </div>

            </div>



            <!-- CONFIRM PASSWORD -->

            <div class="password-field">

                <label for="new_password_confirmation">
                    Confirm Password
                </label>


                <div class="password-input-wrap">

                    <i class="fa-solid fa-shield-halved"></i>


                    <input
                        type="password"
                        id="new_password_confirmation"
                        name="new_password_confirmation"
                        placeholder="Confirm new password"
                        required
                    >


                    <button
                        type="button"
                        class="toggle-password"
                        data-target="new_password_confirmation"
                    >

                        <i class="fa-regular fa-eye"></i>

                    </button>

                </div>

            </div>



            <div class="password-note">

                <i class="fa-solid fa-circle-info"></i>

                <span>
                    Password must contain at least 8 characters.
                </span>

            </div>



            <button
                type="submit"
                class="update-password-btn"
            >

                <span>
                    Update Password
                </span>

                <i class="fa-solid fa-arrow-right"></i>

            </button>


        </form>


    </div>


</div>



<script>

    const toggleButtons =
        document.querySelectorAll('.toggle-password');


    toggleButtons.forEach(function (button) {

        button.addEventListener('click', function () {

            const targetId =
                button.getAttribute('data-target');

            const input =
                document.getElementById(targetId);

            const icon =
                button.querySelector('i');


            if (input.type === 'password') {

                input.type = 'text';

                icon.classList.remove('fa-eye');

                icon.classList.add('fa-eye-slash');

            } else {

                input.type = 'password';

                icon.classList.remove('fa-eye-slash');

                icon.classList.add('fa-eye');

            }

        });

    });

</script>


</body>

</html>