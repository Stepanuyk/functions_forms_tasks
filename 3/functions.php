<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 27.11.16
 * Time: 13:01
 */

function fileToArray($filename) {
    $string = file_get_contents($filename);
    $arr = explode(" ", $string);
    return $arr;
}

function arrayToFile($filename,$arr_new) {
    $string = implode(" ", $arr_new);
   file_put_contents($filename, $string);
}


