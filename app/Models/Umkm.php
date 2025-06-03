<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    protected $fillable = [
        'name', 'owner', 'description', 'address', 'rating', 'photos', 'social'
    ];

}
