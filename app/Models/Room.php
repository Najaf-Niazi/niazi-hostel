<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'room_number',
        'room_type',
        'total_seats',
        'occupied_seats',
        'monthly_fee',
        'status',
    ];


    /*
    |--------------------------------------------------------------------------
    | Sync Room Occupancy
    |--------------------------------------------------------------------------
    |
    | Students table mein jitne active students is room mein hain,
    | occupied seats automatically utni set hongi.
    |
    */
    public function syncOccupancy()
    {
        $occupied = Student::where('room_number', $this->room_number)
            ->where('status', 'active')
            ->count();

        $this->occupied_seats = $occupied;

        $this->status = $occupied >= $this->total_seats
            ? 'full'
            : 'available';

        $this->save();

        return $this;
    }


    /*
    |--------------------------------------------------------------------------
    | Available Seats
    |--------------------------------------------------------------------------
    |
    | Example:
    | Total = 3
    | Occupied = 2
    | Available = 1
    |
    */
    public function getAvailableSeatsAttribute()
    {
        return max(
            0,
            $this->total_seats - $this->occupied_seats
        );
    }
}