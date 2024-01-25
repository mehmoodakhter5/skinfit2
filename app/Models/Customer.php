<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\user as Authenticatable;   


class Customer extends Authenticatable
{
    use HasFactory;
    protected $table='customer';
    protected $fillable = [
        'customer_first_name',
        'customer_last_name',
        'customer_phone_number',
        'customer_email',
        'customer_password',
        'customer_address',


    ];
    protected $hidden = [
        'customer_password',
        'customer_password_token',
    ];
}
