<?php

if (! function_exists('route_class')) {
    /**
     * @return string
     */
    function route_class()
    {
        return str_replace('.', '-', Route::currentRouteName());
    }
}