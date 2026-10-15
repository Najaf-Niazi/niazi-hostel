<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard | Niazi Hostel</title>

    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<div class="admin-layout">

    <aside class="sidebar">

        <div class="sidebar-logo">
            <div class="logo-icon">
                <i class="fa-solid fa-house"></i>
            </div>

            <div>
                <h2>Niazi Hostel</h2>
                <span>ADMIN PANEL</span>
            </div>
        </div>

        <nav class="sidebar-menu">

            <a href="{{ route('admin.dashboard') }}" class="active">
                <i class="fa-solid fa-chart-line"></i>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.admissions.index') }}">
                <i class="fa-solid fa-file-circle-check"></i>
                <span>Admissions</span>
            </a>

            <a href="{{ route('admin.students.index') }}">
                <i class="fa-solid fa-user-graduate"></i>
                <span>Students</span>
            </a>

            <a href="{{ route('admin.rooms.index') }}"
   class="{{ request()->routeIs('admin.rooms.*') ? 'active' : '' }}">

    <i class="fa-solid fa-bed"></i>
    <span>Rooms</span>

</a>

         

            <a href="{{ route('admin.content.index') }}">
                <i class="fa-solid fa-pen-to-square"></i>
                <span>Website Content</span>
            </a>

           

            <a href="{{ route('admin.images.index') }}">
                <i class="fa-solid fa-image"></i>
                <span>Images</span>
            </a>

        </nav>

        <form action="{{ route('admin.logout') }}" method="POST" class="logout-form">
            @csrf

            <button type="submit" class="logout-btn">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </button>
        </form>

    </aside>


    <main class="main-content">

        <header class="topbar">

            <div>
                <h1>Dashboard</h1>
                <p>Welcome back, {{ auth()->user()->name ?? 'Admin' }}</p>
            </div>

            <div class="topbar-right">

                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>

                    <input
                        type="text"
                        placeholder="Search records...">
                </div>

                <div class="admin-profile">
                    <div class="admin-avatar">
                        A
                    </div>

                    <div>
                        <strong>Admin</strong>
                        <span>Administrator</span>
                    </div>
                </div>

            </div>

        </header>


        <section class="stats-grid">

            <div class="stat-card">

                <div class="stat-icon">
                    <i class="fa-solid fa-users"></i>
                </div>

                <div>
                    <span>Total Students</span>
                   <h3>{{ $totalStudents }}</h3>              
               </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon">
                    <i class="fa-solid fa-clock"></i>
                </div>

                <div>
                    <span>Pending Admissions</span>
                    <h3>{{ $pendingAdmissions }}</h3>
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon">
                    <i class="fa-solid fa-door-open"></i>
                </div>

                <div>
                    <span>Total Rooms</span>
                    <h3>0</h3>
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon">
                    <i class="fa-solid fa-chair"></i>
                </div>

                <div>
                    <span>Available Seats</span>
                    <h3>0</h3>
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon">
                    <i class="fa-solid fa-bed"></i>
                </div>

                <div>
                    <span>Occupied Seats</span>
                    <h3>0</h3>
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-icon">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>

                <div>
                    <span>Pending Fees</span>
                    <h3>0</h3>
                </div>

            </div>

        </section>


        <section class="dashboard-grid">

            <div class="dashboard-card">

                <div class="card-heading">
                    <div>
                        <h2>Recent Admissions</h2>
                        <p>Latest admission applications.</p>
                    </div>

                    <a href="{{ route('admin.admissions.index') }}">
                        View All
                    </a>
                </div>

                <div class="empty-state">

                    <i class="fa-solid fa-file-circle-plus"></i>

                    <h3>No admission requests yet</h3>

                    <p>
                        New admission applications will appear here.
                    </p>

                </div>

            </div>


            <div class="dashboard-card">

                <div class="card-heading">
                    <div>
                        <h2>Quick Actions</h2>
                        <p>Manage your hostel quickly.</p>
                    </div>
                </div>

                <div class="quick-actions">

                    <a href="{{ route('admin.rooms.index') }}">
                        <i class="fa-solid fa-plus"></i>
                        <span>Add Room</span>
                    </a>

                    <a href="{{ route('admin.admissions.index') }}">
                        <i class="fa-solid fa-file-lines"></i>
                        <span>View Admissions</span>
                    </a>

                    <a href="{{ route('admin.students.index') }}">
                        <i class="fa-solid fa-user-graduate"></i>
                        <span>Students</span>
                    </a>

                    <a href="#">
                        <i class="fa-solid fa-pen"></i>
                        <span>Edit Website</span>
                    </a>

                </div>

            </div>

        </section>

    </main>

</div>

</body>
</html>