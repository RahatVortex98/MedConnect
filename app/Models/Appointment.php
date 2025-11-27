<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'full_name',
        'email_address',
        'date',
        'speciality',
        'number',
        'message',
        'status'
    ];
}
