<?php
/**
 * Created by PhpStorm.
 * User: mogu
 * Date: 2016/4/27
 * Time: 10:52
 */

namespace App\Utils;


class StringUtil {
    public static function isNotEmpty($str) {
        if ($str == null) {
            return false;
        }else if ($str == '') {
            return false;
        }else if ($str == 'null') {
            return false;
        }else {
            return true;
        }
    }
}