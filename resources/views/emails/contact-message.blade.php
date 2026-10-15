<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>New Contact Message</title>
</head>

<body style="margin:0; padding:30px; font-family:Arial, sans-serif; background:#f5f7fb;">

    <div style="
        max-width:650px;
        margin:auto;
        background:#ffffff;
        border-radius:16px;
        padding:30px;
        box-shadow:0 10px 30px rgba(0,0,0,0.08);
    ">

        <h2 style="
            margin-top:0;
            color:#0E1D3E;
        ">
            New Contact Message
        </h2>

        <p>
            <strong>Name:</strong>
            {{ $data['name'] }}
        </p>

        <p>
            <strong>Email:</strong>
            {{ $data['email'] }}
        </p>

        <p>
            <strong>Phone:</strong>
            {{ $data['phone'] ?? 'Not Provided' }}
        </p>

        <p>
            <strong>Subject:</strong>
            {{ $data['subject'] }}
        </p>

        <hr style="
            border:none;
            border-top:1px solid #e5e7eb;
            margin:22px 0;
        ">

        <p style="
            font-weight:700;
            color:#0E1D3E;
        ">
            Message
        </p>

        <p style="
            line-height:1.7;
            color:#475467;
        ">
            {{ $data['message'] }}
        </p>

    </div>

</body>

</html>