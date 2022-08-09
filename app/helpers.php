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
