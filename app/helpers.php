<?php

if (!function_exists('flash')) {
    function flash($message, $type)
    {
        session()->flash('notification.message', $message);
        session()->flash('notification.type', $type);
    }
}