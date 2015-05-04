<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

if (!function_exists('Egn')) {

    function Egn($egn = null) {

        // check len, valid and real validation
        if (mb_strlen($egn) !== 10 || $egn === "1111111111") {
            return false;
        }
        
        $egnWeights = array(2, 4, 8, 5, 10, 9, 7, 3, 6);

        $year = substr($egn, 0, 2);
        $mon = substr($egn, 2, 2);
        $day = substr($egn, 4, 2);
        if ($mon > 40) {
            if (!checkdate($mon - 40, $day, $year + 2000)) {
                return false;
            }
        } elseif ($mon > 20) {
            if (!checkdate($mon - 20, $day, $year + 1800)) {
                return false;
            }
        } else {
            if (!checkdate($mon, $day, $year + 1900)) {
                return false;
            }
        }
        $checksum = substr($egn, 9, 1);
        $egnsum = 0;
        for ($i = 0; $i < 9; $i++) {
            $egnsum += substr($egn, $i, 1) * $egnWeights[$i];
        }
        $valid_checksum = $egnsum % 11;
        if ($valid_checksum == 10) {
            $valid_checksum = 0;
        }
        if ($checksum != $valid_checksum) {
            return false;
        }

        return true;
    }

}

