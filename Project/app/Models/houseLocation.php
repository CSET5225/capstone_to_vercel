<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class houseLocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'property_id',
        'city',
        'state',
        'zipcode',
    ];
}
