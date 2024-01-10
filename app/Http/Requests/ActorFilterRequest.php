<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActorFilterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'string|max:255',
        ];
    }
}
