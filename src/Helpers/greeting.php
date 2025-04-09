<?php

if (!function_exists('greeting')) {
    function greeting()
    {
        return app('greeting')->message();
    }
}
