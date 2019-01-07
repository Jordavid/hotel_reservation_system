<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Reservation;

class Client extends Model
{
    protected $fillable = ['title','name', 'last_name', 'address', 'zip_code', 'city', 'state', 'email'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

}
