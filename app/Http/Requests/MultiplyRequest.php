<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MultiplyRequest extends FormRequest
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
            'numbers' => ['sometimes', 'required', 'array'],
            'numbers.*' => ['sometimes', 'required', 'numeric'],
            'number_1' => ['exclude_unless:numbers,null', 'required', 'numeric'],
            'number_2' => ['exclude_unless:numbers,null', 'required', 'numeric'],
        ];
    }
}
