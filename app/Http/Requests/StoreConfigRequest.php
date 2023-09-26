<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConfigRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'image' => 'required|image|max:2048',
            'favicon' => 'required|image|max:2048',
            'color1' => 'required|string|regex:/^#[a-fA-F0-9]{6}$/',
            'color2' => 'required|string|regex:/^#[a-fA-F0-9]{6}$/',
            'color3' => 'required|string|regex:/^#[a-fA-F0-9]{6}$/',
        ];
    }
}
