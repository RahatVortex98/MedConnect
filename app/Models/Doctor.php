<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'pic',
        'speciality',
        'day_of_week',
        'start_time',
        'end_time',
        'room',
        'phone_number'

    ];
}
