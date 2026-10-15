<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Students | Niazi Hostel Admin</title>

    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-students.css') }}">

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
                <span>Admin Panel</span>
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


        <!-- HEADER -->
        <div class="admin-topbar">

            <div>

                <span class="page-label">
                    STUDENT MANAGEMENT
                </span>

                <h1>
                    Students
                </h1>

                <p>
                    View and manage approved hostel students.
                </p>

            </div>

        </div>


        <!-- SUCCESS MESSAGE -->
        @if(session('success'))

            <div class="student-success-alert">

                <i class="fa-solid fa-circle-check"></i>

                <span>
                    {{ session('success') }}
                </span>

            </div>

        @endif


        <!-- STUDENTS CARD -->
        <section class="students-card">


            <!-- SEARCH -->
            <form
                action="{{ route('admin.students.index') }}"
                method="GET"
                class="student-search-form">

                <div class="student-search-box">

                    <i class="fa-solid fa-magnifying-glass"></i>

                    <input
                        type="text"
                        name="search"
                        value="{{ $search }}"
                        placeholder="Search name, CNIC, phone or room">

                </div>


                <button type="submit">
                    Search
                </button>


                @if($search)

                    <a
                        href="{{ route('admin.students.index') }}"
                        class="clear-search-btn">

                        Clear

                    </a>

                @endif

            </form>


            <!-- TABLE -->
            <div class="table-wrapper">

                <table class="students-table">

                    <thead>

                        <tr>

                            <th>ID</th>
                            <th>Student</th>
                            <th>CNIC</th>
                            <th>Phone</th>
                            <th>Room</th>
                            <th>Status</th>
                            <th>Actions</th>

                        </tr>

                    </thead>


                    <tbody>

                    @forelse($students as $student)

                        <tr>


                            <!-- SERIAL ID -->
                            <td>
                                {{ $students->firstItem() + $loop->index }}
                            </td>


                            <!-- STUDENT -->
                            <td>

                                <div class="student-info">

                                    <div class="student-avatar">
                                        {{ strtoupper(substr($student->student_name, 0, 1)) }}
                                    </div>


                                    <div>

                                        <strong>
                                            {{ $student->student_name }}
                                        </strong>

                                        <span>
                                            {{ $student->occupation ?? 'Student' }}
                                        </span>

                                    </div>

                                </div>

                            </td>


                            <!-- CNIC -->
                            <td>
                                {{ $student->cnic }}
                            </td>


                            <!-- PHONE -->
                            <td>
                                {{ $student->phone }}
                            </td>


                            <!-- ROOM -->
                            <td>

                                <span class="room-badge">

                                    @if($student->room_number)

                                        Room {{ $student->room_number }}

                                    @else

                                        Not Assigned

                                    @endif

                                </span>

                            </td>


                            <!-- STATUS -->
                            <td>

                                <span
                                    class="student-status status-{{ strtolower($student->status) }}">

                                    {{ ucfirst(str_replace('_', ' ', $student->status)) }}

                                </span>

                            </td>


                            <!-- ACTIONS -->
                            <td>

                                <form
                                    id="deleteStudentForm-{{ $student->id }}"
                                    action="{{ route('admin.students.destroy', $student->id) }}"
                                    method="POST">

                                    @csrf
                                    @method('DELETE')


                                    <button
                                        type="button"
                                        class="student-delete-btn"
                                        data-student-id="{{ $student->id }}"
                                        data-student-name="{{ $student->student_name }}"
                                        data-room-number="{{ $student->room_number }}">

                                        <i class="fa-solid fa-trash"></i>

                                        Delete

                                    </button>

                                </form>

                            </td>


                        </tr>


                    @empty

                        <tr>

                            <td colspan="7">

                                <div class="empty-students">

                                    <i class="fa-solid fa-user-graduate"></i>

                                    <h3>
                                        No Students Found
                                    </h3>

                                    <p>
                                        Approved students will appear here.
                                    </p>

                                </div>

                            </td>

                        </tr>

                    @endforelse

                    </tbody>

                </table>

            </div>


            <!-- PAGINATION -->
            @if($students->hasPages())

                <div class="pagination-wrapper">

                    {{ $students->links() }}

                </div>

            @endif


        </section>


    </main>

</div>
<!-- DELETE STUDENT MODAL -->
<div id="studentDeleteModal" hidden>

    <div class="final-student-delete-card">

        <div class="final-delete-icon">
            <i class="fa-solid fa-trash"></i>
        </div>

        <span class="final-delete-label">
            DELETE STUDENT
        </span>

        <h2>Delete this student?</h2>

        <p id="studentDeleteText">
            Are you sure you want to permanently delete this student?
        </p>

        <div class="final-delete-note">

            <i class="fa-solid fa-circle-info"></i>

            <div>
                <strong>Room seat will be released</strong>

                <span>
                    The assigned room seat will automatically become available again.
                </span>
            </div>

        </div>

        <div class="final-delete-actions">

            <button
                type="button"
                id="cancelStudentDelete"
                class="final-cancel-btn">
                Cancel
            </button>

            <button
                type="button"
                id="confirmStudentDelete"
                class="final-delete-btn">

                <i class="fa-solid fa-trash"></i>
                Delete Student

            </button>

        </div>

    </div>

</div>


<style>

/* FINAL DELETE MODAL — isolated styles */

#studentDeleteModal {
    position: fixed !important;
    inset: 0 !important;

    width: 100% !important;
    height: 100% !important;

    z-index: 999999 !important;

    display: flex !important;
    align-items: center !important;
    justify-content: center !important;

    padding: 20px !important;

    background: rgba(10, 24, 43, 0.62) !important;
    backdrop-filter: blur(6px);

    box-sizing: border-box !important;
}

#studentDeleteModal[hidden] {
    display: none !important;
}

#studentDeleteModal .final-student-delete-card {
    width: 100% !important;
    max-width: 430px !important;

    margin: 0 auto !important;
    padding: 30px !important;

    box-sizing: border-box !important;

    background: #ffffff !important;

    border: 1px solid #e7ebf0 !important;
    border-radius: 22px !important;

    text-align: center !important;

    box-shadow: 0 30px 80px rgba(8, 25, 45, 0.30) !important;
}

#studentDeleteModal .final-delete-icon {
    width: 64px !important;
    height: 64px !important;

    margin: 0 auto 16px !important;

    display: flex !important;
    align-items: center !important;
    justify-content: center !important;

    background: #fff0f1 !important;
    color: #d83d48 !important;

    border-radius: 18px !important;

    font-size: 23px !important;
}

#studentDeleteModal .final-delete-label {
    display: inline-block !important;

    margin-bottom: 8px !important;

    color: #d83d48 !important;

    font-size: 10px !important;
    font-weight: 800 !important;

    letter-spacing: 1.6px !important;
}

#studentDeleteModal h2 {
    margin: 0 0 10px !important;

    color: #10233d !important;

    font-size: 24px !important;
    font-weight: 800 !important;
}

#studentDeleteModal > .final-student-delete-card > p {
    margin: 0 !important;

    color: #6f7b8c !important;

    font-size: 14px !important;
    line-height: 1.6 !important;
}

#studentDeleteModal .final-delete-note {
    margin-top: 20px !important;

    display: flex !important;
    align-items: flex-start !important;

    gap: 10px !important;

    padding: 14px !important;

    box-sizing: border-box !important;

    background: #fff8ed !important;

    border: 1px solid #f5ddb4 !important;
    border-radius: 13px !important;

    color: #94611a !important;

    text-align: left !important;
}

#studentDeleteModal .final-delete-note > i {
    margin-top: 3px !important;
}

#studentDeleteModal .final-delete-note div {
    display: flex !important;
    flex-direction: column !important;

    gap: 3px !important;
}

#studentDeleteModal .final-delete-note strong {
    font-size: 13px !important;
    font-weight: 800 !important;
}

#studentDeleteModal .final-delete-note span {
    font-size: 12px !important;
    line-height: 1.5 !important;
}

#studentDeleteModal .final-delete-actions {
    margin-top: 24px !important;

    display: flex !important;
    justify-content: flex-end !important;

    gap: 10px !important;
}

#studentDeleteModal .final-cancel-btn,
#studentDeleteModal .final-delete-btn {
    min-height: 44px !important;

    padding: 10px 18px !important;

    border: none !important;
    border-radius: 11px !important;

    font-size: 13px !important;
    font-weight: 700 !important;

    cursor: pointer !important;
}

#studentDeleteModal .final-cancel-btn {
    background: #eef2f6 !important;
    color: #40536a !important;
}

#studentDeleteModal .final-delete-btn {
    display: inline-flex !important;
    align-items: center !important;
    justify-content: center !important;

    gap: 7px !important;

    background: #dc414c !important;
    color: #ffffff !important;
}

@media (max-width: 520px) {

    #studentDeleteModal .final-student-delete-card {
        padding: 24px 20px !important;
    }

    #studentDeleteModal .final-delete-actions {
        flex-direction: column-reverse !important;
    }

    #studentDeleteModal .final-cancel-btn,
    #studentDeleteModal .final-delete-btn {
        width: 100% !important;
    }
}

</style>

<script>
document.addEventListener('DOMContentLoaded', function () {

    let selectedStudentId = null;

    const modal = document.getElementById('studentDeleteModal');
    const message = document.getElementById('studentDeleteText');

    const cancelButton = document.getElementById('cancelStudentDelete');
    const confirmButton = document.getElementById('confirmStudentDelete');

    const deleteButtons = document.querySelectorAll('.student-delete-btn');


    /* DELETE BUTTON CLICK */
    deleteButtons.forEach(function (button) {

        button.addEventListener('click', function () {

            selectedStudentId = button.dataset.studentId;

            const studentName =
                button.dataset.studentName || 'this student';

            const roomNumber =
                button.dataset.roomNumber || '';

            let text =
                'Are you sure you want to delete ' +
                studentName +
                '?';

            if (roomNumber) {
                text +=
                    ' Room ' +
                    roomNumber +
                    ' ki seat dobara available ho jayegi.';
            }

            message.textContent = text;

            /* MODAL OPEN */
            modal.hidden = false;

            document.body.style.overflow = 'hidden';

        });

    });


    /* MODAL CLOSE FUNCTION */
    function closeDeleteModal() {

        modal.hidden = true;

        document.body.style.overflow = '';

        selectedStudentId = null;

    }


    /* CANCEL */
    if (cancelButton) {

        cancelButton.addEventListener('click', function () {

            closeDeleteModal();

        });

    }


    /* CONFIRM DELETE */
    if (confirmButton) {

        confirmButton.addEventListener('click', function () {

            if (!selectedStudentId) {
                return;
            }

            const form = document.getElementById(
                'deleteStudentForm-' + selectedStudentId
            );

            if (form) {

                form.submit();

            }

        });

    }


    /* BACKGROUND CLICK */
    if (modal) {

        modal.addEventListener('click', function (event) {

            if (event.target === modal) {

                closeDeleteModal();

            }

        });

    }


    /* ESC KEY */
    document.addEventListener('keydown', function (event) {

        if (
            event.key === 'Escape' &&
            modal &&
            !modal.hidden
        ) {

            closeDeleteModal();

        }

    });

});
</script>

</body>

</html>