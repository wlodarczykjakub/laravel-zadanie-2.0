<?php

namespace App\Http\Requests;

use App\Rules\UserEquipmentBuyModelIDRule;
use App\Rules\UserEquipmentBuyPrizeRule;
use Illuminate\Foundation\Http\FormRequest;

class UserEquipmentBuyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'model_type' => 'required|string|in:Chest,Rune,Prize',
            'model_id' => ['required','integer', new UserEquipmentBuyModelIDRule($this->model_type), new UserEquipmentBuyPrizeRule($this->model_type)],
        ];
    }
}
