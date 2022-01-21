<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class UserEquipmentBuyModelIDRule implements Rule
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
        if (!in_array($this->model_type, ['Chest','Rune','Prize'])){
            return false;
        }
        $class = 'App\Models\\'.$this->model_type;
        $exists = $class::where('id', $value)->exists();

        if (!$exists){
            return false;
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
        return 'The selected model id is invalid.';
    }
}
