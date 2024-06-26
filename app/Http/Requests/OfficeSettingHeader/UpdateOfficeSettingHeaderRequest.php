<?php

namespace App\Http\Requests\OfficeSettingHeader;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateOfficeSettingHeaderRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'english' => ['required', 'string'],
            'nepali' => ['required', 'string'],
            'font_color' => ['required'],
            'font' => ['required'],
            'font_size' => ['required'],
            'font_family' => ['required'],
            'position' => ['nullable', 'integer']
        ];
    }
}
