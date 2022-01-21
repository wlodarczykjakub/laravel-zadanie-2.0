<?php

namespace App\Repositories;

use App\Models\UserEquipment;
use Illuminate\Support\Facades\Auth;

class UserEquipmentRepository
{
    public function get()
    {
        return UserEquipment::where('user_id', Auth::id())->with('equipmentable')->get();
    }

    public function buy($model_type, $model_id)
    {
        $class = 'App\Models\\'.$model_type;
        $equipment = $class::find($model_id);

        $userEquipment = new UserEquipment();
        $userEquipment->user_id = Auth::id();
        $userEquipment->equipmentable_type = $class;
        $userEquipment->equipmentable_id = $model_id;
        if ($model_type == 'Prize'){
            $equipment->status = '1';
            $equipment->save();
        }
        $userEquipment->save();
    }

}
