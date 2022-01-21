<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEquipment extends Model
{
    use HasFactory;

    protected $table = 'user_equipment';
    protected $fillable = ['user_id', 'equipmentable_type', 'equipmentable_id'];

    public function equipmentable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
