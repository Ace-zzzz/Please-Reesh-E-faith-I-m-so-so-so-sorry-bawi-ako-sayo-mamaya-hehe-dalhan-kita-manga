<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GLC extends Model
{
    /** @use HasFactory<\Database\Factories\GLCFactory> */
    use HasFactory;

    protected $table = 'GLC';
}
