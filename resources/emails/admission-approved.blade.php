<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admission Approved</title>
</head>

<body style="
    margin:0;
    padding:0;
    background:#f4f7fb;
    font-family:Arial, sans-serif;
    color:#1f2937;
">

    <div style="
        max-width:620px;
        margin:40px auto;
        background:#ffffff;
        border-radius:16px;
        overflow:hidden;
        box-shadow:0 10px 35px rgba(15,31,51,0.08);
    ">

        <div style="
            background:#0f1f33;
            padding:28px;
            text-align:center;
            color:#ffffff;
        ">
            <h2 style="margin:0;font-size:26px;">
                Niazi Hostel
            </h2>

            <p style="
                margin:6px 0 0;
                font-size:12px;
                letter-spacing:2px;
                color:#cbd5e1;
            ">
                STAY • STUDY • GROW
            </p>
        </div>

        <div style="padding:32px;">

            <div style="
                width:58px;
                height:58px;
                margin:0 auto 18px;
                border-radius:50%;
                background:#dcfce7;
                color:#16a34a;
                display:flex;
                align-items:center;
                justify-content:center;
                font-size:28px;
                font-weight:bold;
            ">
                ✓
            </div>

            <h2 style="
                text-align:center;
                margin:0 0 12px;
                color:#0f1f33;
            ">
                Admission Approved
            </h2>

            <p style="
                text-align:center;
                color:#64748b;
                line-height:1.7;
                margin-bottom:28px;
            ">
                Congratulations {{ $admission->student_name }},
                your admission request has been approved successfully.
            </p>

            <div style="
                background:#f8fafc;
                border:1px solid #e2e8f0;
                border-radius:12px;
                padding:20px;
            ">

                <p>
                    <strong>Application ID:</strong>
                    {{ $admission->application_id }}
                </p>

                <p>
                    <strong>Student Name:</strong>
                    {{ $admission->student_name }}
                </p>

                <p>
                    <strong>Father Name:</strong>
                    {{ $admission->father_name }}
                </p>

                <p>
                    <strong>Room Number:</strong>
                    {{ $admission->room_number }}
                </p>

                <p style="margin-bottom:0;">
                    <strong>Joining Date:</strong>
                    {{ $admission->joining_date }}
                </p>

            </div>

            <p style="
                margin-top:26px;
                color:#64748b;
                line-height:1.7;
                text-align:center;
            ">
                Please contact hostel management if you need any further assistance.
            </p>

        </div>

        <div style="
            text-align:center;
            padding:18px;
            background:#f8fafc;
            color:#94a3b8;
            font-size:12px;
        ">
            © 2026 Niazi Hostel
        </div>

    </div>

</body>

</html><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admission Approved</title>
</head>

<body style="
    margin:0;
    padding:0;
    background:#f4f7fb;
    font-family:Arial, sans-serif;
    color:#1f2937;
">

    <div style="
        max-width:620px;
        margin:40px auto;
        background:#ffffff;
        border-radius:16px;
        overflow:hidden;
        box-shadow:0 10px 35px rgba(15,31,51,0.08);
    ">

        <div style="
            background:#0f1f33;
            padding:28px;
            text-align:center;
            color:#ffffff;
        ">
            <h2 style="margin:0;font-size:26px;">
                Niazi Hostel
            </h2>

            <p style="
                margin:6px 0 0;
                font-size:12px;
                letter-spacing:2px;
                color:#cbd5e1;
            ">
                STAY • STUDY • GROW
            </p>
        </div>

        <div style="padding:32px;">

            <div style="
                width:58px;
                height:58px;
                margin:0 auto 18px;
                border-radius:50%;
                background:#dcfce7;
                color:#16a34a;
                display:flex;
                align-items:center;
                justify-content:center;
                font-size:28px;
                font-weight:bold;
            ">
                ✓
            </div>

            <h2 style="
                text-align:center;
                margin:0 0 12px;
                color:#0f1f33;
            ">
                Admission Approved
            </h2>

            <p style="
                text-align:center;
                color:#64748b;
                line-height:1.7;
                margin-bottom:28px;
            ">
                Congratulations {{ $admission->student_name }},
                your admission request has been approved successfully.
            </p>

            <div style="
                background:#f8fafc;
                border:1px solid #e2e8f0;
                border-radius:12px;
                padding:20px;
            ">

                <p>
                    <strong>Application ID:</strong>
                    {{ $admission->application_id }}
                </p>

                <p>
                    <strong>Student Name:</strong>
                    {{ $admission->student_name }}
                </p>

                <p>
                    <strong>Father Name:</strong>
                    {{ $admission->father_name }}
                </p>

                <p>
                    <strong>Room Number:</strong>
                    {{ $admission->room_number }}
                </p>

                <p style="margin-bottom:0;">
                    <strong>Joining Date:</strong>
                    {{ $admission->joining_date }}
                </p>

            </div>

            <p style="
                margin-top:26px;
                color:#64748b;
                line-height:1.7;
                text-align:center;
            ">
                Please contact hostel management if you need any further assistance.
            </p>

        </div>

        <div style="
            text-align:center;
            padding:18px;
            background:#f8fafc;
            color:#94a3b8;
            font-size:12px;
        ">
            © 2026 Niazi Hostel
        </div>

    </div>

</body>

</html>