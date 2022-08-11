<?php

namespace App\Http\Requests;

use App\Rules\Slug;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{

    public function rules(): array
    {

        return [
            'title' => 'required|unique:categories,title',
            'slug' => ['required', 'unique:categories,slug', new Slug()],
            'parent_id' => 'nullable|exists:categories,id'
        ];
    }
}