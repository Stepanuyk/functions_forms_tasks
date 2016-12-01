<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 01.12.16
 * Time: 22:50
 */

print_r(listFiles("directory", "Hello"));


function listFiles($dir, $str) {
    $arr = scandir($dir);
    $files = [];

    foreach($arr as $key => $value ) {
        if(is_file($dir."/".$value)) {
            $text = file($dir."/".$value);
            $arr_text = explode(" ", $text[0]);
            
            foreach ($arr_text as $key1 => $value1){
                if ($value1 == $str)
                    array_push($files, $value);
            }
        }
    }
    return $files;
}