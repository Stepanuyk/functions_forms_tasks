<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 27.11.16
 * Time: 15:58
 */

print_r(listDir("directory"));


function listDir($dir) {
    $arr = scandir($dir);

    $files = [];
    foreach($arr as $key => $value ) {
        if(is_file($dir."/".$value)) {
            array_push($files, $value);
        }
    }
    return $files;
}