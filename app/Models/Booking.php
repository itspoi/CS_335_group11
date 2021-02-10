<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function package()
    {
        return $this->belongsTo('App\Models\Package', 'package_id', 'id');
    }

    public function payments()
    {
        return $this->hasMany('App\Models\Payment')->orderBy('updated_at','DESC');
    }
}
