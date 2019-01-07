<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;
use App\Room;
class Reservation extends Model
{
    //
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
