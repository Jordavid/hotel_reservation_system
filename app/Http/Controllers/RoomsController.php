<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Client;

class RoomsController extends Controller
{
    public function checkAvailableRooms($client_id, Request $request)
    {
        $from = $request->dateFrom;
        $to = $request->dateTo;

        $client = new Client();
        $room = new Room();

        $rooms = $room->getAvailableRooms($from, $to);
        $client = $client->findOrFail($client_id);
        return view('rooms.checkAvailableRooms', compact('client', 'rooms', 'from', 'to'));
    }

}
