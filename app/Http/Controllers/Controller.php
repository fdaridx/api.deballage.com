<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public static function validate($data, $type, $specialType = null, $size = 0) {
        switch ($type) {
            case 'integer':
                return is_integer($data) ? ($size < 1 ?: (strlen($data) < $size ? false : true)) : false;
            break;

            case 'string':
                if (is_string($data) && !empty($data) && $specialType == 'email') {
                    $n = substr_count($data, '@');
                    $o = substr_count($data, '.com');

                    return $n == 1 && $o == 1 ? true: false;
                } 
                else if (is_string($data) && !empty($data) && !$specialType) {
                    return $size < 1 ?: (strlen($data) < $size ? false : true);
                }
            break;

            case 'array':
                return is_array($data);
            break;

            case null:
                return $size < 1 ?: (strlen($data) < $size ? false : true);
            break;

            default:
            break;
        }
    }
}
