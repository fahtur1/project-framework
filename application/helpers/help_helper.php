<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('date_reverse')) {
    function date_reverse($date = '')
    {
        $hasil = explode('-', $date);
        return $hasil[2] . '-' . $hasil[1] . '-' . $hasil[0];
    }
}
