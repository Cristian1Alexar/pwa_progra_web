<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class placeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }
}
