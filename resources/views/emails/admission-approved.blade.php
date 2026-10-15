<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Niazi Hostel - Admission Approved</title>
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
        border-radius:18px;
        overflow:hidden;
        box-shadow:0 8px 30px rgba(15,31,51,0.08);
    ">

        <!-- HEADER -->
        <div style="
            background:#0f1f33;
            padding:32px 24px;
            text-align:center;
        ">

            <div style="
                width:70px;
                height:70px;
                margin:0 auto 16px;
                border-radius:50%;
                background:#eaf8ef;
                display:flex;
                align-items:center;
                justify-content:center;
                font-size:34px;
            ">
                ✓
            </div>

            <h1 style="
                margin:0;
                color:#ffffff;
                font-size:28px;
            ">
                Admission Approved
            </h1>

            <p style="
                margin:8px 0 0;
                color:#f97066;
                font-size:13px;
                letter-spacing:2px;
            ">
                NIAZI HOSTEL
            </p>

        </div>


        <!-- CONTENT -->
        <div style="padding:32px;">

            <h2 style="
                margin:0 0 14px;
                color:#0f1f33;
                font-size:23px;
            ">
                Congratulations, {{ $admission->student_name }}!
            </h2>


            <p style="
                margin:0 0 16px;
                color:#5e6b7d;
                font-size:15px;
                line-height:1.8;
            ">
                We are happy to inform you that your admission application
                for Niazi Hostel has been successfully approved.
            </p>


            <p style="
                margin:0 0 24px;
                color:#5e6b7d;
                font-size:15px;
                line-height:1.8;
            ">
                Welcome to the Niazi Hostel family. We look forward to providing
                you with a safe, comfortable and supportive environment where
                you can focus on your studies, work and personal growth.
            </p>


            <!-- APPROVED MESSAGE -->
            <div style="
                background:#eaf8ef;
                border:1px solid #ccebd8;
                border-radius:14px;
                padding:18px;
                margin-bottom:26px;
            ">

                <strong style="
                    display:block;
                    color:#168a4b;
                    font-size:16px;
                    margin-bottom:6px;
                ">
                    Your Admission Has Been Approved
                </strong>

                <span style="
                    color:#4f6d5a;
                    font-size:13px;
                    line-height:1.6;
                ">
                    Your room allocation has been confirmed.
                    Please keep the details below for your record.
                </span>

            </div>


            <!-- DETAILS -->
            <h3 style="
                color:#0f1f33;
                font-size:17px;
                margin:0 0 14px;
            ">
                Admission Details
            </h3>


            <table style="
                width:100%;
                border-collapse:collapse;
                font-size:14px;
            ">

                <tr>
                    <td style="padding:11px;border-bottom:1px solid #edf0f4;">
                        <strong>Student Name</strong>
                    </td>

                    <td style="padding:11px;border-bottom:1px solid #edf0f4;">
                        {{ $admission->student_name }}
                    </td>
                </tr>


                <tr>
                    <td style="padding:11px;border-bottom:1px solid #edf0f4;">
                        <strong>Application ID</strong>
                    </td>

                    <td style="padding:11px;border-bottom:1px solid #edf0f4;">
                        {{ $admission->application_id }}
                    </td>
                </tr>


                <tr>
                    <td style="padding:11px;border-bottom:1px solid #edf0f4;">
                        <strong>Room Number</strong>
                    </td>

                    <td style="padding:11px;border-bottom:1px solid #edf0f4;">
                        {{ $admission->room_number }}
                    </td>
                </tr>


                <tr>
                    <td style="padding:11px;border-bottom:1px solid #edf0f4;">
                        <strong>Room Type</strong>
                    </td>

                    <td style="padding:11px;border-bottom:1px solid #edf0f4;">
                        {{ $admission->room_type }}
                    </td>
                </tr>


                <tr>
                    <td style="padding:11px;border-bottom:1px solid #edf0f4;">
                        <strong>Joining Date</strong>
                    </td>

                    <td style="padding:11px;border-bottom:1px solid #edf0f4;">
                        {{ $admission->joining_date }}
                    </td>
                </tr>


                <tr>
                    <td style="padding:11px;border-bottom:1px solid #edf0f4;">
                        <strong>Status</strong>
                    </td>

                    <td style="
                        padding:11px;
                        border-bottom:1px solid #edf0f4;
                        color:#168a4b;
                        font-weight:bold;
                    ">
                        Approved
                    </td>
                </tr>

            </table>


            <!-- FINAL MESSAGE -->
            <div style="
                margin-top:28px;
                background:#fff7f5;
                border-left:4px solid #f97066;
                padding:18px;
                border-radius:10px;
            ">

                <p style="
                    margin:0;
                    color:#5f6978;
                    font-size:14px;
                    line-height:1.8;
                ">
                    We are excited to welcome you to Niazi Hostel.
                    Please arrive on your expected joining date and contact
                    hostel management if you need any assistance before arrival.
                </p>

            </div>


            <p style="
                margin:28px 0 0;
                color:#5e6b7d;
                font-size:14px;
                line-height:1.7;
            ">
                Best regards,<br>
                <strong style="color:#0f1f33;">
                    Niazi Hostel Management
                </strong>
            </p>

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
                STAY • STUDY • GROW
            </p>

        </div>

    </div>

</div>

</body>

</html>