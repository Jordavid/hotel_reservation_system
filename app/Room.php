<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Room extends Model
{
    //
    public function getAvailableRooms($startDate, $endDate)
    {
        $availRooms = DB::table('rooms as r')
            ->select('r.id', 'r.name')
            ->whereRaw("
                r.id NOT IN( SELECT b.room_id FROM reservations b
                WHERE NOT (
                    b.date_out < '{$startDate}' OR
                    b.date_in > '{$endDate}'
                )
                
                )
            ")->orderBy('r.id')->get();

        return $availRooms;
    }

    public function isRoomBooked($room_id, $from, $to)
    {
        $availRooms = DB::table('reservations')
            ->whereRaw("
                NOT (
                    date_out < '{$from}' OR
                    date_in > '{$to}'
                )
            ")
            ->where('room_id', $room_id)
            ->count();

        return $availRooms;
    }
}
