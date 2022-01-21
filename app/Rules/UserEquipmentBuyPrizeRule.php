<?php

namespace App\Rules;

use App\Models\Prize;
use Illuminate\Contracts\Validation\Rule;

class UserEquipmentBuyPrizeRule implements Rule
{
    public $model_type;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($param)
    {
        $this->model_type = $param;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ($this->model_type == 'Prize'){
            $prize = Prize::find($value);

            if ($prize){
                if ($prize->status != '0'){
                    return false;
                }
            }
        }else {
            return true;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Prize is already win.';
    }
}
