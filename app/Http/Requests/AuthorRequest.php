<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:2',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif',
            'type' => 'required|in:guest,reporter'
        ];
    }
}
