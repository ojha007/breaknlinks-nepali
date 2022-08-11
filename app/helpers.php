<?php

if (!function_exists('ísActive')) {
    function isActive(...$route): string
    {

        return request()->routeIs(...$route) ? 'active' : '';
    }
}

if (!function_exists('isMenuOpen')) {
    function isMenuOpen(...$route): string
    {
        return request()->routeIs(...$route) ? 'menu-open' : '';
    }
}


if (!function_exists('formControl')) {
    function formControl($case, $errors): string
    {
        if ($errors && $case)
            if ($errors->has($case))
                return 'form-control is-invalid';
        return 'form-control';
    }
}