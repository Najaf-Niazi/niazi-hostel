<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Student Images | Niazi Hostel Admin
    </title>
<link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
>
    

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f6f8fb;
            color: #162033;
            padding: 30px;
        }

        .page-header {
            margin-bottom: 24px;
        }

        .page-header h1 {
            font-size: 28px;
            margin-bottom: 6px;
        }

        .page-header p {
            color: #6b7280;
            font-size: 14px;
        }

        .search-box {
            margin-bottom: 22px;
        }

        .search-box form {
            display: flex;
            gap: 10px;
            max-width: 500px;
        }

        .search-box input {
            flex: 1;
            height: 44px;
            border: 1px solid #d7e0ea;
            border-radius: 10px;
            padding: 0 14px;
            outline: none;
        }

        .search-box button {
            height: 44px;
            border: none;
            border-radius: 10px;
            padding: 0 18px;
            background: #0878eb;
            color: #ffffff;
            font-weight: 600;
            cursor: pointer;
        }

        .image-grid {
            display: grid;
            grid-template-columns:
                repeat(
                    auto-fit,
                    minmax(260px, 1fr)
                );
            gap: 20px;
        }

        .student-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            overflow: hidden;
            box-shadow:
                0 8px 24px rgba(15, 31, 51, 0.06);
        }

        .student-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
            background: #eef2f7;
        }

        .student-info {
            padding: 16px;
        }

        .student-info h3 {
            font-size: 17px;
            margin-bottom: 8px;
        }

        .student-info p {
            font-size: 13px;
            color: #64748b;
            margin-bottom: 5px;
        }

        .student-info strong {
            color: #334155;
        }

        .empty-state {
            background: #ffffff;
            border: 1px dashed #cbd5e1;
            border-radius: 14px;
            padding: 40px;
            text-align: center;
            color: #64748b;
        }
    </style>
</head>

<body>
<div class="admin-layout">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="sidebar-logo">

            <div class="logo-icon">
                <i class="fa-solid fa-house"></i>
            </div>

            <div>
                <h2>Niazi Hostel</h2>
                <span>Admin Panel</span>
            </div>

        </div>


        <nav class="sidebar-menu">

            <a
                href="{{ route('admin.dashboard') }}"
                class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
            >
                <i class="fa-solid fa-chart-line"></i>
                <span>Dashboard</span>
            </a>


            <a
                href="{{ route('admin.admissions.index') }}"
                class="{{ request()->routeIs('admin.admissions.*') ? 'active' : '' }}"
            >
                <i class="fa-solid fa-file-lines"></i>
                <span>Admissions</span>
            </a>


            <a
                href="{{ route('admin.students.index') }}"
                class="{{ request()->routeIs('admin.students.*') ? 'active' : '' }}"
            >
                <i class="fa-solid fa-user-graduate"></i>
                <span>Students</span>
            </a>


            <a
                href="{{ route('admin.rooms.index') }}"
                class="{{ request()->routeIs('admin.rooms.*') ? 'active' : '' }}"
            >
                <i class="fa-solid fa-bed"></i>
                <span>Rooms</span>
            </a>


            <a
                href="{{ route('admin.content.index') }}"
                class="{{ request()->routeIs('admin.content.*') ? 'active' : '' }}"
            >
                <i class="fa-solid fa-pen-to-square"></i>
                <span>Website Content</span>
            </a>


            <a
                href="{{ route('admin.images.index') }}"
                class="{{ request()->routeIs('admin.images.*') ? 'active' : '' }}"
            >
                <i class="fa-solid fa-images"></i>
                <span>Images</span>
            </a>

        </nav>


        <form
            action="{{ route('admin.logout') }}"
            method="POST"
            class="logout-form"
        >
            @csrf

            <button
                type="submit"
                class="logout-btn"
            >
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </button>

        </form>

    </aside>


    <!-- MAIN CONTENT -->
    <main class="main-content">

        {{-- Images page content yahan ayega --}}
    <div class="page-header">

        <h1>
            Student Images
        </h1>

        <p>
            Approved students ke uploaded CNIC images.
        </p>

    </div>


    <div class="search-box">

        <form
            method="GET"
            action="{{ route('admin.images.index') }}"
        >

            <input
                type="text"
                name="search"
                value="{{ $search ?? '' }}"
                placeholder="Search by name, father name or CNIC"
            >

            <button type="submit">
                <i class="fa-solid fa-magnifying-glass"></i>
                Search
            </button>

        </form>

    </div>


    @if($students->count())

        <div class="image-grid">

            @foreach($students as $student)

                <div class="student-card">

                    <img
                        src="{{ asset('storage/' . $student->cnic_image) }}"
                        alt="{{ $student->student_name }} CNIC"
                        class="student-image"
                    >

                    <div class="student-info">

                        <h3>
                            {{ $student->student_name }}
                        </h3>

                        <p>
                            <strong>
                                Father Name:
                            </strong>

                            {{ $student->father_name }}
                        </p>

                        <p>
                            <strong>
                                CNIC:
                            </strong>

                            {{ $student->cnic }}
                        </p>

                    </div>

                </div>

            @endforeach

        </div>


        <div style="margin-top: 25px;">
            {{ $students->links() }}
        </div>

    @else

        <div class="empty-state">

            <i
                class="fa-regular fa-image"
                style="
                    font-size: 30px;
                    margin-bottom: 12px;
                "
            ></i>

            <p>
                Abhi kisi approved student ki CNIC image available nahi hai.
            </p>

        </div>

    @endif

</body>

</html>