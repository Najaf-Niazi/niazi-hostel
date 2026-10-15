<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admissions | Niazi Hostel Admin</title>

    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-admissions.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
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
                <span>ADMIN PANEL</span>
            </div>

        </div>


        <nav class="sidebar-menu">
<a href="{{ route('admin.dashboard') }}"
   class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
    <i class="fa-solid fa-chart-line"></i>
    <span>Dashboard</span>
</a>

          <a href="{{ route('admin.admissions.index') }}"
   class="{{ request()->routeIs('admin.admissions.*') ? 'active' : '' }}">

    <i class="fa-solid fa-file-lines"></i>
    <span>Admissions</span>
</a>

            <a href="{{ route('admin.students.index') }}"
   class="{{ request()->routeIs('admin.students.*') ? 'active' : '' }}">

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
                <i class="fa-solid fa-images"></i>
                <span>Images</span>
            </a>

        </nav>


        <form
            action="{{ route('admin.logout') }}"
            method="POST"
            class="logout-form">

            @csrf

            <button
                type="submit"
                class="logout-btn">

                <i class="fa-solid fa-right-from-bracket"></i>

                <span>Logout</span>

            </button>

        </form>

    </aside>


    <!-- MAIN CONTENT -->
    <main class="main-content">


        <!-- PAGE HEADER -->
        <div class="admin-topbar">

            <div>

                <span class="page-label">
                    MANAGEMENT
                </span>

                <h1>
                    Admission Requests
                </h1>

                <p>
                    View and manage hostel admission applications.
                </p>

            </div>

        </div>

<!-- SUCCESS MESSAGE -->
@if(session('success'))

    <div class="admin-alert admin-alert-success">

        <div class="admin-alert-icon">
            <i class="fa-solid fa-circle-check"></i>
        </div>

        <div class="admin-alert-content">
            <strong>Success</strong>

            <span>
                {{ session('success') }}
            </span>
        </div>

        <button
            type="button"
            class="admin-alert-close"
            onclick="this.parentElement.remove()"
        >
            <i class="fa-solid fa-xmark"></i>
        </button>

    </div>

@endif

        <!-- ADMISSIONS CARD -->
        <section class="admissions-card">


            <div class="admissions-card-header">

                <div>

                    <h2>
                        All Applications
                    </h2>

                    <p>
                        Total: {{ $admissions->total() }}
                    </p>

                </div>


                <!-- SEARCH -->
                <form
                    action="{{ route('admin.admissions.index') }}"
                    method="GET"
                    class="admission-search-form">

                    <div class="admission-search-box">

                        <i class="fa-solid fa-magnifying-glass"></i>

                        <input
                            type="text"
                            name="search"
                            value="{{ $search }}"
                            placeholder="Search ID, name, CNIC, phone or room">

                    </div>


                    <button type="submit">
                        Search
                    </button>


                    @if($search)

                        <a
                            href="{{ route('admin.admissions.index') }}"
                            class="clear-search-btn">

                            Clear

                        </a>

                    @endif

                </form>

            </div>


            <!-- TABLE -->
            <div class="table-wrapper">

                <table class="admissions-table">

                    <thead>

                        <tr>

                            <th>Application ID</th>
                            <th>Student</th>
                            <th>CNIC</th>
                            <th>Phone</th>
                            <th>Room</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Action</th>

                        </tr>

                    </thead>


                    <tbody>

                    @forelse($admissions as $admission)

                        <tr>


                            <!-- APPLICATION ID -->
                            <td>

                                <strong class="application-code">
                                    {{ $admission->application_id }}
                                </strong>

                            </td>


                            <!-- STUDENT -->
                            <td>

                                <div class="student-info">

                                    <div class="student-avatar">

                                        {{ strtoupper(substr($admission->student_name, 0, 1)) }}

                                    </div>


                                    <div>

                                        <strong>
                                            {{ $admission->student_name }}
                                        </strong>

                                        <span>
                                            {{ $admission->occupation }}
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <!-- CNIC -->
                            <td>
                                {{ $admission->cnic }}
                            </td>


                            <!-- PHONE -->
                            <td>
                                {{ $admission->phone }}
                            </td>


                            <!-- ROOM -->
                            <td>

                                <span class="room-badge">
                                    Room {{ $admission->room_number }}
                                </span>

                            </td>


                            <!-- STATUS -->
                            <td>

                                <span
                                    class="status-badge status-{{ strtolower($admission->status) }}">

                                    {{ ucfirst($admission->status) }}

                                </span>

                            </td>


                            <!-- DATE -->
                            <td>

                                {{ $admission->created_at->format('d M Y') }}

                            </td>


                            <!-- ACTIONS -->
                            <td>

                                <div class="action-buttons">


                                    <!-- VIEW BUTTON -->
                                    <a
                                        href="{{ route('admin.admissions.show', $admission->id) }}"
                                        class="view-admission-btn">

                                        <i class="fa-regular fa-eye"></i>

                                        View

                                    </a>


                                    <!-- DELETE FORM -->
                                    <form
                                        id="deleteForm-{{ $admission->id }}"
                                        action="{{ route('admin.admissions.destroy', $admission->id) }}"
                                        method="POST">

                                        @csrf
                                        @method('DELETE')


                                       <button
    type="button"
    class="delete-admission-btn"
    data-admission-id="{{ $admission->id }}"
    onclick="openDeleteModal(this.dataset.admissionId)">

    <i class="fa-solid fa-trash"></i>

    Delete

</button>
                                    </form>


                                </div>

                            </td>


                        </tr>


                    @empty

                        <tr>

                            <td colspan="8">

                                <div class="empty-admissions">

                                    <i class="fa-regular fa-folder-open"></i>

                                    <h3>
                                        No Admissions Found
                                    </h3>

                                    <p>
                                        Submitted admission applications
                                        will appear here.
                                    </p>

                                </div>

                            </td>

                        </tr>

                    @endforelse

                    </tbody>

                </table>

            </div>


            <!-- PAGINATION -->
            @if($admissions->hasPages())

                <div class="pagination-wrapper">

                    {{ $admissions->links() }}

                </div>

            @endif


        </section>

    </main>

</div>



<!-- =========================================
     DELETE CONFIRMATION MODAL
========================================= -->

<div
    class="delete-modal"
    id="deleteModal">

    <div class="delete-modal-box">


        <div class="delete-modal-icon">

            <i class="fa-solid fa-triangle-exclamation"></i>

        </div>


        <h3>
            Delete Admission?
        </h3>


        <p>
            Are you sure you want to delete this admission?
            This action cannot be undone.
        </p>


        <div class="delete-modal-actions">


            <button
                type="button"
                class="cancel-delete-btn"
                onclick="closeDeleteModal()">

                Cancel

            </button>


            <button
                type="button"
                class="confirm-delete-btn"
                onclick="confirmDelete()">

                <i class="fa-solid fa-trash"></i>

                Yes, Delete

            </button>


        </div>

    </div>

</div>



<!-- =========================================
     DELETE MODAL JAVASCRIPT
========================================= -->

<script>

    let deleteFormId = null;


    function openDeleteModal(id) {

        deleteFormId = id;

        document
            .getElementById('deleteModal')
            .classList.add('show');

    }


    function closeDeleteModal() {

        document
            .getElementById('deleteModal')
            .classList.remove('show');

        deleteFormId = null;

    }


    function confirmDelete() {

        if (deleteFormId !== null) {

            document
                .getElementById('deleteForm-' + deleteFormId)
                .submit();

        }

    }


    /* Close modal by clicking outside box */

    document
        .getElementById('deleteModal')
        .addEventListener('click', function(event) {

            if (event.target === this) {

                closeDeleteModal();

            }

        });


    /* Close modal with ESC key */

    document.addEventListener('keydown', function(event) {

        if (event.key === 'Escape') {

            closeDeleteModal();

        }

    });

</script>


</body>

</html>