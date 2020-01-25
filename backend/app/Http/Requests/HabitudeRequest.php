<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HabitudeRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'id' => ['integer'],
            'title' => ['required', 'max:255', 'string'],
        ];
    }
}
