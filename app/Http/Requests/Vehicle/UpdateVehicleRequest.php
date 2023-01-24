<?php

namespace App\Http\Requests\Vehicle;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVehicleRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'brand'=>['required', 'max:80'],
            'model'=>['required', 'max:100'],
            'year'=>['required','numeric' ,'digits_between:1,4'],
            'price'=>['required','numeric' ,'digits_between:1,11'],
            'user_id'=>['required']
        ];
    }
}
