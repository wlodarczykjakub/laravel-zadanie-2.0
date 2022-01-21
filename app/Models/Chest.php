<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chest extends Equipment
{
    use HasFactory;

    protected $table = 'chest';
    protected $fillable = ['name', 'image', 'price'];
}
