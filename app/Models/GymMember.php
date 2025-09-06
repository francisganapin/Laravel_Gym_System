<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GymMember extends Model
{
    protected $fillable = [
        'id_card',
        'expiry',
        'membership',
        'first_name',
        'last_name',
        'phone_number',
        'address',
        'profile_image'
    ];
}
