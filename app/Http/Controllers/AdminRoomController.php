<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class AdminRoomController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $rooms = Room::query()
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('room_number', 'like', "%{$search}%")
                        ->orWhere('room_type', 'like', "%{$search}%")
                        ->orWhere('status', 'like', "%{$search}%");
                });
            })
            ->latest()
            ->paginate(10);

        return view(
            'admin.rooms.index',
            compact('rooms', 'search')
        );
    }


    public function store(Request $request)
    {
        $request->validate([
            'room_number' => 'required|string|max:50|unique:rooms,room_number',
            'room_type' => 'required|string|max:100',
            'total_seats' => 'required|integer|min:1',
            'monthly_fee' => 'required|numeric|min:0',
        ]);

        Room::create([
            'room_number' => $request->room_number,
            'room_type' => $request->room_type,
            'total_seats' => $request->total_seats,
            'occupied_seats' => 0,
            'monthly_fee' => $request->monthly_fee,
            'status' => 'available',
        ]);

        return redirect()
            ->route('admin.rooms.index')
            ->with(
                'success',
                'Room added successfully.'
            );
    }


    public function update(Request $request, Room $room)
    {
        $request->validate([
            'room_number' => 'required|string|max:50|unique:rooms,room_number,' . $room->id,
            'room_type' => 'required|string|max:100',
            'total_seats' => 'required|integer|min:1',
            'monthly_fee' => 'required|numeric|min:0',
        ]);


        // Total seats occupied seats se kam nahi ho sakti
        if ($request->total_seats < $room->occupied_seats) {

            return redirect()
                ->route('admin.rooms.index')
                ->withErrors([
                    'room' => 'Total seats occupied seats se kam nahi ho sakti.'
                ]);
        }


        $room->room_number = $request->room_number;
        $room->room_type = $request->room_type;
        $room->total_seats = $request->total_seats;
        $room->monthly_fee = $request->monthly_fee;


        // Status automatically update
        if ($room->occupied_seats >= $room->total_seats) {

            $room->status = 'full';

        } else {

            $room->status = 'available';
        }


        $room->save();


        return redirect()
            ->route('admin.rooms.index')
            ->with(
                'success',
                'Room updated successfully.'
            );
    }


    public function destroy(Room $room)
    {
        // Occupied room delete nahi hoga
        if ($room->occupied_seats > 0) {

            return redirect()
                ->route('admin.rooms.index')
                ->withErrors([
                    'room' => 'This room has active students. Remove students first before deleting the room.'
                ]);
        }


        $room->delete();


        return redirect()
            ->route('admin.rooms.index')
            ->with(
                'success',
                'Room deleted successfully.'
            );
    }
}