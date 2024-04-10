<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
           'title' => ['required', 'string'],
            'title_en' => ['required', 'string'],
            'description' => ['required', 'string'],
            'description_en' => ['required', 'string'],
            'icon' => ['required', 'image', 'mimes:png,jpg,jpeg']
        ];
    }
}
