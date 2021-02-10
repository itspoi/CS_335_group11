<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public function hotel()
    {
        return $this->belongsTo('App\Models\Hotel', 'hotel_id', 'id');
    }

    public function transport()
    {
        return $this->belongsTo('App\Models\Transport', 'transport_id', 'id');
    }

    public function place()
    {
        return $this->belongsTo('App\Models\Place', 'place_id', 'id');
    }

    public function bookings()
    {
        return $this->hasMany('App\Models\Booking')->orderBy('updated_at','DESC');
    }
}
