<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRegistration extends Model
{

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'event_name',
        'nic_number',
        'nic_attachment',
    ];
}
