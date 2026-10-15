<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Rooms | Niazi Hostel Admin</title>

    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-rooms.css') }}">

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
                    ROOM MANAGEMENT
                </span>

                <h1>
                    Rooms
                </h1>

                <p>
                    View and manage hostel rooms.
                </p>

            </div>

        </div>


        <!-- SUCCESS MESSAGE -->
        @if(session('success'))

            <div class="admin-success-message">

                <i class="fa-solid fa-circle-check"></i>

                <span>
                    {{ session('success') }}
                </span>

            </div>

        @endif


        <!-- ERROR MESSAGE -->
        @if($errors->any())

            <div class="admin-error-message">

                <i class="fa-solid fa-circle-exclamation"></i>

                <div>

                    @foreach($errors->all() as $error)

                        <p>
                            {{ $error }}
                        </p>

                    @endforeach

                </div>

            </div>

        @endif


        <!-- ADD ROOM -->
        <section class="add-room-card">

            <div class="add-room-header">

                <div>

                    <span class="page-label">
                        ADD NEW ROOM
                    </span>

                    <h2>
                        Create Room
                    </h2>

                    <p>
                        Add a new hostel room with capacity and monthly fee.
                    </p>

                </div>

            </div>


            <form
                action="{{ route('admin.rooms.store') }}"
                method="POST"
                class="add-room-form">

                @csrf


                <div class="room-form-group">

                    <label for="room_number">
                        Room Number
                    </label>

                    <input
                        type="text"
                        id="room_number"
                        name="room_number"
                        value="{{ old('room_number') }}"
                        placeholder="e.g. 101"
                        required>

                </div>


                <div class="room-form-group">

                    <label for="room_type">
                        Room Type
                    </label>

                    <select
                        id="room_type"
                        name="room_type"
                        required>

                        <option value="">
                            Select Room Type
                        </option>

                        <option value="Single"
                            {{ old('room_type') == 'Single' ? 'selected' : '' }}>
                            Single
                        </option>

                        <option value="Double"
                            {{ old('room_type') == 'Double' ? 'selected' : '' }}>
                            Double
                        </option>

                        <option value="Triple"
                            {{ old('room_type') == 'Triple' ? 'selected' : '' }}>
                            Triple
                        </option>

                        <option value="Four Seater"
                            {{ old('room_type') == 'Four Seater' ? 'selected' : '' }}>
                            Four Seater
                        </option>

                    </select>

                </div>


                <div class="room-form-group">

                    <label for="total_seats">
                        Total Seats
                    </label>

                    <input
                        type="number"
                        id="total_seats"
                        name="total_seats"
                        value="{{ old('total_seats') }}"
                        min="1"
                        placeholder="e.g. 2"
                        required>

                </div>


                <div class="room-form-group">

                    <label for="monthly_fee">
                        Monthly Fee
                    </label>

                    <input
                        type="number"
                        id="monthly_fee"
                        name="monthly_fee"
                        value="{{ old('monthly_fee') }}"
                        min="0"
                        placeholder="e.g. 15000"
                        required>

                </div>


                <div class="room-form-action">

                    <button
                        type="submit"
                        class="add-room-btn">

                        <i class="fa-solid fa-plus"></i>

                        Add Room

                    </button>

                </div>

            </form>

        </section>


        <!-- SEARCH -->
        <form
            action="{{ route('admin.rooms.index') }}"
            method="GET"
            class="room-search-form">

            <input
                type="text"
                name="search"
                value="{{ $search }}"
                placeholder="Search room number, type or status">

            <button type="submit">
                Search
            </button>

            @if($search)

                <a
                    href="{{ route('admin.rooms.index') }}"
                    class="clear-search-btn">
                    Clear
                </a>

            @endif

        </form>


        <!-- ROOMS TABLE -->
        <div class="table-wrapper">

            <table class="admissions-table">

                <thead>

                    <tr>

                        <th>Room Number</th>
                        <th>Room Type</th>
                        <th>Total Seats</th>
                        <th>Occupied</th>
                        <th>Available</th>
                        <th>Monthly Fee</th>
                        <th>Status</th>
                        <th>Actions</th>

                    </tr>

                </thead>


                <tbody>

                @forelse($rooms as $room)

                    <tr>

                        <td>
                            {{ $room->room_number }}
                        </td>

                        <td>
                            {{ $room->room_type }}
                        </td>

                        <td>
                            {{ $room->total_seats }}
                        </td>

                        <td>
                            {{ $room->occupied_seats }}
                        </td>

                        <td>
                            {{ $room->total_seats - $room->occupied_seats }}
                        </td>

                        <td>
                            Rs. {{ number_format($room->monthly_fee) }}
                        </td>

                        <td>

                            <span class="room-status status-{{ strtolower($room->status) }}">

                                {{ ucfirst($room->status) }}

                            </span>

                        </td>


                        <!-- ACTIONS -->
                        <td>

                            <div class="room-actions">

                                <!-- EDIT -->
                                <button
                                    type="button"
                                    class="room-edit-btn"
                                    onclick="openEditRoomModal(
                                        '{{ $room->id }}',
                                        '{{ $room->room_number }}',
                                        '{{ $room->room_type }}',
                                        '{{ $room->total_seats }}',
                                        '{{ $room->monthly_fee }}'
                                    )">

                                    <i class="fa-solid fa-pen"></i>

                                    Edit

                                </button>


                                <!-- DELETE -->
                                <form
                                    action="{{ route('admin.rooms.destroy', $room->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this room?');">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="room-delete-btn">

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

                            <div class="empty-rooms">

                                <i class="fa-solid fa-bed"></i>

                                <h3>
                                    No Rooms Found
                                </h3>

                                <p>
                                    Add a room to start managing hostel capacity.
                                </p>

                            </div>

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>


        <!-- PAGINATION -->
        @if($rooms->hasPages())

            <div class="pagination-wrapper">

                {{ $rooms->links() }}

            </div>

        @endif


    </main>

</div>


<!-- EDIT ROOM MODAL -->
<div class="room-modal" id="editRoomModal">

    <div class="room-modal-card">

        <div class="room-modal-header">

            <div>

                <span class="page-label">
                    EDIT ROOM
                </span>

                <h2>
                    Update Room
                </h2>

            </div>


            <button
                type="button"
                class="room-modal-close"
                onclick="closeEditRoomModal()">

                <i class="fa-solid fa-xmark"></i>

            </button>

        </div>


        <form
            id="editRoomForm"
            method="POST">

            @csrf
            @method('PUT')


            <div class="room-modal-grid">

                <div class="room-form-group">

                    <label for="edit_room_number">
                        Room Number
                    </label>

                    <input
                        type="text"
                        id="edit_room_number"
                        name="room_number"
                        required>

                </div>


                <div class="room-form-group">

                    <label for="edit_room_type">
                        Room Type
                    </label>

                    <select
                        id="edit_room_type"
                        name="room_type"
                        required>

                        <option value="Single">
                            Single
                        </option>

                        <option value="Double">
                            Double
                        </option>

                        <option value="Triple">
                            Triple
                        </option>

                        <option value="Four Seater">
                            Four Seater
                        </option>

                    </select>

                </div>


                <div class="room-form-group">

                    <label for="edit_total_seats">
                        Total Seats
                    </label>

                    <input
                        type="number"
                        id="edit_total_seats"
                        name="total_seats"
                        min="1"
                        required>

                </div>


                <div class="room-form-group">

                    <label for="edit_monthly_fee">
                        Monthly Fee
                    </label>

                    <input
                        type="number"
                        id="edit_monthly_fee"
                        name="monthly_fee"
                        min="0"
                        required>

                </div>

            </div>


            <div class="room-modal-actions">

                <button
                    type="button"
                    class="room-cancel-btn"
                    onclick="closeEditRoomModal()">

                    Cancel

                </button>


                <button
                    type="submit"
                    class="room-update-btn">

                    <i class="fa-solid fa-floppy-disk"></i>

                    Update Room

                </button>

            </div>

        </form>

    </div>

</div>


<script>

function openEditRoomModal(
    id,
    roomNumber,
    roomType,
    totalSeats,
    monthlyFee
) {

    const modal = document.getElementById('editRoomModal');
    const form = document.getElementById('editRoomForm');

    document.getElementById('edit_room_number').value = roomNumber;
    document.getElementById('edit_room_type').value = roomType;
    document.getElementById('edit_total_seats').value = totalSeats;
    document.getElementById('edit_monthly_fee').value = monthlyFee;

    form.action = '/admin/rooms/' + id;

    modal.classList.add('show');

}


function closeEditRoomModal() {

    const modal = document.getElementById('editRoomModal');

    modal.classList.remove('show');

}


document.addEventListener('click', function (event) {

    const modal = document.getElementById('editRoomModal');

    if (event.target === modal) {
        closeEditRoomModal();
    }

});

</script>

</body>

</html>