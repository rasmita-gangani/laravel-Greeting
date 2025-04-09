<?php

namespace MyVendor\Greeting;

class Greeting
{
    public function message()
    {
        $hour = date('H');

        if ($hour < 12) {
            return "Good morning!";
        } elseif ($hour < 18) {
            return "Good afternoon!";
        } else {
            return "Good evening!";
        }
    }
}
