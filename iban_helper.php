<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('IBAN')) {

    function IBAN($iban = null) {

        // check len
        if (mb_strlen($iban) !== 22) {
            return false;
        }
    }
	
}

