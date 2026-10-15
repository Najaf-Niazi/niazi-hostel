<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Admission Details | Niazi Hostel Admin
    </title>

    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">

    <link rel="stylesheet" href="{{ asset('css/admin-admission-view.css') }}">

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>


<body>

<div class="admin-layout">


    <!-- =========================
         SIDEBAR
    ========================== -->

    <aside class="sidebar">

        <div class="sidebar-logo">

            <div class="logo-icon">
                <i class="fa-solid fa-house"></i>
            </div>

            <div>

                <h2>
                    Niazi Hostel
                </h2>

                <span>
                    Admin Panel
                </span>

            </div>

        </div>


        <nav class="sidebar-menu">

            <a href="{{ route('admin.dashboard') }}">

                <i class="fa-solid fa-chart-line"></i>

                <span>
                    Dashboard
                </span>

            </a>


            <a
                href="{{ route('admin.admissions.index') }}"
                class="active">

                <i class="fa-solid fa-file-lines"></i>

                <span>
                    Admissions
                </span>

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

                <span>
                    Website Content
                </span>

            </a>


           


            <a href="{{ route('admin.images.index') }}">

                <i class="fa-solid fa-images"></i>

                <span>
                    Images
                </span>

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

                <span>
                    Logout
                </span>

            </button>

        </form>

    </aside>



    <!-- =========================
         MAIN CONTENT
    ========================== -->

    <main class="main-content">


        <!-- PAGE HEADER -->

        <div class="admission-view-topbar">

            <div>

                <span class="page-label">
                    APPLICATION DETAILS
                </span>

                <h1>
                    {{ $admission->student_name }}
                </h1>

                <p>
                    Application ID:

                    <strong>
                        {{ $admission->application_id }}
                    </strong>
                </p>

            </div>


            <a
                href="{{ route('admin.admissions.index') }}"
                class="back-btn">

                <i class="fa-solid fa-arrow-left"></i>

                Back to Admissions

            </a>

        </div>



        <!-- SUCCESS MESSAGE -->
@if(session('success'))

    <div class="admin-success-toast" id="adminSuccessToast">

        <div class="admin-success-toast-icon">
            <i class="fa-solid fa-circle-check"></i>
        </div>

        <div class="admin-success-toast-content">

            <strong>
                Success
            </strong>

            <span>
                {{ session('success') }}
            </span>

        </div>

        <button
            type="button"
            class="admin-success-toast-close"
            onclick="closeAdminSuccessToast()">

            &times;

        </button>

    </div>

@endif


        <!-- =========================
             STATUS CARD
        ========================== -->

        <div class="status-summary-card">


            <div class="status-summary-left">

                <div class="student-large-avatar">

                    {{ strtoupper(substr($admission->student_name, 0, 1)) }}

                </div>


                <div>

                    <h2>
                        {{ $admission->student_name }}
                    </h2>

                    <p>
                        {{ $admission->occupation }}
                    </p>

                </div>

            </div>


            <div>

                <span
                    class="detail-status status-{{ strtolower($admission->status) }}">

                    {{ ucfirst($admission->status) }}

                </span>

            </div>


        </div>



        <!-- =========================
             DETAILS GRID
        ========================== -->

        <div class="admission-details-grid">


            <!-- PERSONAL INFORMATION -->

            <section class="detail-card">

                <div class="detail-card-title">

                    <i class="fa-solid fa-user"></i>

                    <h3>
                        Personal Information
                    </h3>

                </div>


                <div class="detail-list">


                    <div class="detail-item">

                        <span>
                            Full Name
                        </span>

                        <strong>
                            {{ $admission->student_name }}
                        </strong>

                    </div>


                    <div class="detail-item">

                        <span>
                            Father / Guardian
                        </span>

                        <strong>
                            {{ $admission->father_name }}
                        </strong>

                    </div>


                    <div class="detail-item">

                        <span>
                            CNIC
                        </span>

                        <strong>
                            {{ $admission->cnic }}
                        </strong>

                    </div>


                    <div class="detail-item">

                        <span>
                            Date of Birth
                        </span>

                        <strong>
                            {{ $admission->dob }}
                        </strong>

                    </div>


                    <div class="detail-item">

                        <span>
                            Gender
                        </span>

                        <strong>
                            {{ ucfirst($admission->gender) }}
                        </strong>

                    </div>


                    <div class="detail-item">

                        <span>
                            Occupation
                        </span>

                        <strong>
                            {{ $admission->occupation }}
                        </strong>

                    </div>


                </div>

            </section>



            <!-- CONTACT INFORMATION -->

            <section class="detail-card">

                <div class="detail-card-title">

                    <i class="fa-solid fa-phone"></i>

                    <h3>
                        Contact Information
                    </h3>

                </div>


                <div class="detail-list">


                    <div class="detail-item">

                        <span>
                            Phone
                        </span>

                        <strong>
                            {{ $admission->phone }}
                        </strong>

                    </div>


                    <div class="detail-item">

                        <span>
                            Email
                        </span>

                        <strong>
                            {{ $admission->email ?? 'Not Provided' }}
                        </strong>

                    </div>


                    <div class="detail-item detail-item-full">

                        <span>
                            Address
                        </span>

                        <strong>
                            {{ $admission->address }}
                        </strong>

                    </div>


                    <div class="detail-item">

                        <span>
                            Guardian Phone
                        </span>

                        <strong>
                            {{ $admission->guardian_phone }}
                        </strong>

                    </div>


                    <div class="detail-item">

                        <span>
                            Relation
                        </span>

                        <strong>
                            {{ $admission->relation }}
                        </strong>

                    </div>


                </div>

            </section>



            <!-- ROOM INFORMATION -->

            <section class="detail-card">

                <div class="detail-card-title">

                    <i class="fa-solid fa-bed"></i>

                    <h3>
                        Room Information
                    </h3>

                </div>


                <div class="detail-list">


                    <div class="detail-item">

                        <span>
                            Room Type
                        </span>

                        <strong>
                            {{ $admission->room_type }}
                        </strong>

                    </div>


                    <div class="detail-item">

                        <span>
                            Room Number
                        </span>

                        <strong>
                            {{ $admission->room_number }}
                        </strong>

                    </div>


                    <div class="detail-item">

                        <span>
                            Joining Date
                        </span>

                        <strong>
                            {{ $admission->joining_date }}
                        </strong>

                    </div>


                </div>

            </section>



            <!-- STUDY / WORK INFORMATION -->

            <section class="detail-card">

                <div class="detail-card-title">

                    <i class="fa-solid fa-building-columns"></i>

                    <h3>
                        Study / Work Information
                    </h3>

                </div>


                <div class="detail-list">


                    <div class="detail-item">

                        <span>
                            Institute / Company
                        </span>

                        <strong>
                            {{ $admission->institute }}
                        </strong>

                    </div>


                    <div class="detail-item">

                        <span>
                            Designation
                        </span>

                        <strong>
                            {{ $admission->designation ?? 'Not Provided' }}
                        </strong>

                    </div>


                </div>

            </section>



            <!-- ADDITIONAL NOTES -->

            <section class="detail-card full-width-card">

                <div class="detail-card-title">

                    <i class="fa-solid fa-note-sticky"></i>

                    <h3>
                        Additional Notes
                    </h3>

                </div>


                <div class="notes-box">

                    {{ $admission->notes ?? 'No additional notes were provided.' }}

                </div>

            </section>



            <!-- DOCUMENT -->

            <section class="detail-card full-width-card">

                <div class="detail-card-title">

                    <i class="fa-solid fa-file"></i>

                    <h3>
                        Uploaded Document
                    </h3>

                </div>


                @if($admission->document)

                    <a
                        href="{{ asset('storage/' . $admission->document) }}"
                        target="_blank"
                        class="document-btn">

                        <i class="fa-solid fa-file-arrow-down"></i>

                        View Uploaded Document

                    </a>

                @else

                    <p class="no-document">
                        No document uploaded.
                    </p>

                @endif

            </section>


        </div>



        <!-- =========================
     ACTION BUTTONS
========================== -->

<div class="admission-detail-actions">

    <!-- APPROVE -->

    @if($admission->status === 'approved')

        <button
            type="button"
            class="action-btn approve-btn action-btn-disabled"
            disabled>

            <span class="action-btn-icon">
                <i class="fa-solid fa-circle-check"></i>
            </span>

            <span class="action-btn-text">
                <strong>Approved</strong>
                <small>Admission confirmed</small>
            </span>

        </button>

    @else

        <form
            action="{{ route('admin.admissions.approve', $admission->id) }}"
            method="POST">

            @csrf
            @method('PATCH')

            <button
                type="submit"
                class="action-btn approve-btn">

                <span class="action-btn-icon">
                    <i class="fa-solid fa-check"></i>
                </span>

                <span class="action-btn-text">
                    <strong>Approve</strong>
                    <small>Accept admission</small>
                </span>

            </button>

        </form>

    @endif



    <!-- REJECT -->

    @if($admission->status === 'rejected')

        <button
            type="button"
            class="action-btn reject-btn action-btn-disabled"
            disabled>

            <span class="action-btn-icon">
                <i class="fa-solid fa-circle-xmark"></i>
            </span>

            <span class="action-btn-text">
                <strong>Rejected</strong>
                <small>Application declined</small>
            </span>

        </button>

    @else

        <form
            action="{{ route('admin.admissions.reject', $admission->id) }}"
            method="POST">

            @csrf
            @method('PATCH')

            <button
                type="submit"
                class="action-btn reject-btn">

                <span class="action-btn-icon">
                    <i class="fa-solid fa-xmark"></i>
                </span>

                <span class="action-btn-text">
                    <strong>Reject</strong>
                    <small>Decline admission</small>
                </span>

            </button>

        </form>

    @endif



    <!-- DELETE -->

    <form
        id="deleteAdmissionForm"
        action="{{ route('admin.admissions.destroy', $admission->id) }}"
        method="POST">

        @csrf
        @method('DELETE')

        <button
            type="button"
            class="action-btn detail-delete-btn"
            onclick="openDeleteModal()">

            <span class="action-btn-icon">
                <i class="fa-solid fa-trash"></i>
            </span>

            <span class="action-btn-text">
                <strong>Delete</strong>
                <small>Remove permanently</small>
            </span>

        </button>

    </form>

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
            Are you sure you want to permanently delete
            this admission? This action cannot be undone.
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

    function openDeleteModal() {

        document
            .getElementById('deleteModal')
            .classList.add('show');

    }


    function closeDeleteModal() {

        document
            .getElementById('deleteModal')
            .classList.remove('show');

    }


    function confirmDelete() {

        document
            .getElementById('deleteAdmissionForm')
            .submit();

    }


    /*
        Modal ke bahar click karne par close
    */

    document
        .getElementById('deleteModal')
        .addEventListener('click', function(event) {

            if (event.target === this) {

                closeDeleteModal();

            }

        });


    /*
        ESC key se modal close
    */

    document.addEventListener('keydown', function(event) {

        if (event.key === 'Escape') {

            closeDeleteModal();

        }

    });

</script>


</body>

</html>