<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class Equipment extends Model
{
    public function equipmentable()
    {
        return $this->morphMany('App\UserEquipment', 'equipmentable');
    }
}
