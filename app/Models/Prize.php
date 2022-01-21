<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prize extends Equipment
{
    use HasFactory;

    protected $table = 'prize';
    protected $fillable = ['name', 'image', 'price', 'code', 'status'];
}
