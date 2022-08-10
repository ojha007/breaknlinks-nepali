<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required',
            'sub_title' => 'nullable|string|max:255',
            'date_line' => 'nullable|string',
            'reporter_id' => 'nullable|exists:authors,id,type,reporter',
            'guest_id' => 'nullable|exists:authors,id,type,guest',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'short_description' => 'required|string',
            'publish_date' => 'required|date|date_format:Y-m-d\TH:i',
            'is_anchor' => 'required|boolean',
            'is_special' => 'required|boolean',
            'image' => 'nullable',
            'image_description' => 'nullable|string|max:255',
            'external_url' => 'nullable',
            'video_url' => 'nullable',
        ];
    }
}
