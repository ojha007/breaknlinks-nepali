<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Str;

class Slug implements Rule
{
    public function passes($attribute, $value): bool
    {
        $validSlug = (string)Str::of($value)->slug('-');

        return $value === $validSlug;
    }

    public function message(): string
    {
        return 'The :attribute must be slug formatted.';
    }
}
