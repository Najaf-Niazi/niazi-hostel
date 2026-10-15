<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>
        Niazi Hostel - Admission Application
    </title>
</head>

<body style="
    margin:0;
    padding:0;
    background:#f4f7fb;
    font-family:Arial, Helvetica, sans-serif;
    color:#24344d;
">

    <div style="
        width:100%;
        padding:30px 15px;
        box-sizing:border-box;
    ">

        <div style="
            max-width:700px;
            margin:0 auto;
            background:#ffffff;
            border-radius:16px;
            overflow:hidden;
            box-shadow:0 8px 30px rgba(15,31,51,0.08);
        ">

            <!-- HEADER -->
            <div style="
                background:#0f1f33;
                padding:28px;
                text-align:center;
            ">

                <h1 style="
                    margin:0;
                    color:#ffffff;
                    font-size:28px;
                ">
                    Niazi Hostel
                </h1>

                <p style="
                    margin:8px 0 0;
                    color:#f97066;
                    font-size:13px;
                    letter-spacing:2px;
                ">
                    STAY • STUDY • GROW
                </p>

            </div>


            <!-- CONTENT -->
            <div style="padding:30px;">

                <h2 style="
                    margin:0 0 12px;
                    color:#0f1f33;
                    font-size:24px;
                ">
                    Admission Application Received
                </h2>

                <p style="
                    margin:0 0 22px;
                    color:#657287;
                    line-height:1.7;
                    font-size:14px;
                ">
                    Hello {{ $admission->student_name }},
                    your admission application has been received successfully.
                    Please review your submitted information below.
                </p>


                <!-- APPLICATION ID -->
                <div style="
                    background:#fff3f1;
                    border:1px solid #ffd7d2;
                    border-radius:12px;
                    padding:16px;
                    margin-bottom:24px;
                ">

                    <span style="
                        display:block;
                        color:#7c8798;
                        font-size:12px;
                        margin-bottom:5px;
                    ">
                        Application ID
                    </span>

                    <strong style="
                        color:#f97066;
                        font-size:18px;
                    ">
                        {{ $admission->application_id }}
                    </strong>

                </div>


                <!-- PERSONAL INFORMATION -->
                <h3 style="
                    color:#0f1f33;
                    font-size:17px;
                    margin:25px 0 12px;
                ">
                    Personal Information
                </h3>

                <table style="
                    width:100%;
                    border-collapse:collapse;
                    font-size:14px;
                ">

                    <tr>
                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            <strong>Full Name</strong>
                        </td>

                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            {{ $admission->student_name }}
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            <strong>Father / Guardian</strong>
                        </td>

                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            {{ $admission->father_name }}
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            <strong>CNIC / B-Form</strong>
                        </td>

                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            {{ $admission->cnic }}
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            <strong>Date of Birth</strong>
                        </td>

                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            {{ $admission->dob }}
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            <strong>Gender</strong>
                        </td>

                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            {{ $admission->gender }}
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            <strong>Category</strong>
                        </td>

                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            {{ $admission->occupation }}
                        </td>
                    </tr>

                </table>


                <!-- CONTACT INFORMATION -->
                <h3 style="
                    color:#0f1f33;
                    font-size:17px;
                    margin:25px 0 12px;
                ">
                    Contact Information
                </h3>

                <table style="
                    width:100%;
                    border-collapse:collapse;
                    font-size:14px;
                ">

                    <tr>
                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            <strong>Phone</strong>
                        </td>

                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            {{ $admission->phone }}
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            <strong>Email</strong>
                        </td>

                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            {{ $admission->email ?: '-' }}
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            <strong>Guardian Phone</strong>
                        </td>

                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            {{ $admission->guardian_phone }}
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            <strong>Relationship</strong>
                        </td>

                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            {{ $admission->relation }}
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            <strong>Address</strong>
                        </td>

                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            {{ $admission->address }}
                        </td>
                    </tr>

                </table>


                <!-- ROOM INFORMATION -->
                <h3 style="
                    color:#0f1f33;
                    font-size:17px;
                    margin:25px 0 12px;
                ">
                    Room Details
                </h3>

                <table style="
                    width:100%;
                    border-collapse:collapse;
                    font-size:14px;
                ">

                    <tr>
                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            <strong>Room Type</strong>
                        </td>

                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            {{ $admission->room_type }}
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            <strong>Room Number</strong>
                        </td>

                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            {{ $admission->room_number }}
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            <strong>Expected Joining Date</strong>
                        </td>

                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            {{ $admission->joining_date }}
                        </td>
                    </tr>

                </table>


                <!-- STUDY / WORK -->
                <h3 style="
                    color:#0f1f33;
                    font-size:17px;
                    margin:25px 0 12px;
                ">
                    Study / Work Information
                </h3>

                <table style="
                    width:100%;
                    border-collapse:collapse;
                    font-size:14px;
                ">

                    <tr>
                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            <strong>Institute / Company</strong>
                        </td>

                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            {{ $admission->institute }}
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            <strong>Course / Designation</strong>
                        </td>

                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            {{ $admission->designation ?: '-' }}
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            <strong>Status</strong>
                        </td>

                        <td style="padding:10px;border-bottom:1px solid #edf0f4;">
                            Pending Review
                        </td>
                    </tr>

                </table>


                @if($admission->notes)

                    <h3 style="
                        color:#0f1f33;
                        font-size:17px;
                        margin:25px 0 12px;
                    ">
                        Additional Notes
                    </h3>

                    <div style="
                        background:#f7f9fc;
                        padding:14px;
                        border-radius:10px;
                        color:#56657a;
                        font-size:14px;
                        line-height:1.6;
                    ">
                        {{ $admission->notes }}
                    </div>

                @endif


                <div style="
                    margin-top:30px;
                    padding:18px;
                    background:#f7f9fc;
                    border-radius:12px;
                    color:#667387;
                    font-size:13px;
                    line-height:1.7;
                ">

                    Your application is currently under review.
                    Hostel management will contact you after reviewing your application.

                </div>

            </div>


            <!-- FOOTER -->
            <div style="
                padding:20px;
                background:#0f1f33;
                text-align:center;
                color:#ffffff;
            ">

                <strong>
                    Niazi Hostel
                </strong>

                <p style="
                    margin:6px 0 0;
                    font-size:12px;
                    color:#cbd3dd;
                ">
                    Lahore, Pakistan
                </p>

            </div>

        </div>

    </div>

</body>

</html>