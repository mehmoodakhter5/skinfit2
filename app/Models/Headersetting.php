<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Headersetting extends Model
{
    use HasFactory;
    protected $table='header_setting';
    protected $primaryKey = 'header_setting_id';

}
