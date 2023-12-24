<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'bus_name', 'seat', 'destination', 'date', 'time', 'price'];
}
