<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Client;
use App\Room;

class ReservationsController extends Controller
{
    public function bookRoom($client_id, $room_id, $from, $to)
    {

        $reservation = new Reservation();
        $client = new Client();
        $room = new Room();

        $client = $client->findOrFail($client_id);
        $room = $room->findOrFail($room_id);

        $reservation->date_in = $from;
        $reservation->date_out = $to;

        $reservation->room()->associate($room);
        $reservation->client()->associate($client);

        if($room->isRoomBooked($room_id, $from, $to)){
            $errorMsg = "This room was already Booked";
            return redirect('/clients');
        }
        $reservation->save();

        return view('reservations.bookRoom', compact('reservation', 'client', 'room'));
    }
}
