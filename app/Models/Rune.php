<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rune extends Equipment
{
    use HasFactory;

    protected $table = 'rune';
    protected $fillable = ['name', 'image', 'price', 'bonus'];
}
