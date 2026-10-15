<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admission Rejected</title>
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
                background:#fee2e2;
                color:#dc2626;
                display:flex;
                align-items:center;
                justify-content:center;
                font-size:28px;
                font-weight:bold;
            ">
                ×
            </div>

            <h2 style="
                text-align:center;
                margin:0 0 12px;
                color:#0f1f33;
            ">
                Admission Update
            </h2>

            <p style="
                text-align:center;
                color:#64748b;
                line-height:1.7;
                margin-bottom:28px;
            ">
                Dear {{ $admission->student_name }},
                your admission application could not be approved at this time.
            </p>

            <div style="
                background:#fff7f7;
                border:1px solid #fecaca;
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
                    <strong>CNIC:</strong>
                    {{ $admission->cnic }}
                </p>

                <p style="margin-bottom:0;">
                    <strong>Status:</strong>
                    Rejected
                </p>

            </div>

            <p style="
                margin-top:26px;
                color:#64748b;
                line-height:1.7;
                text-align:center;
            ">
                For further information, please contact Niazi Hostel management.
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