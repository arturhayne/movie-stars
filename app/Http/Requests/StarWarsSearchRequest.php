<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StarWarsSearchRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'search' => 'string|max:255',
        ];
    }
}
