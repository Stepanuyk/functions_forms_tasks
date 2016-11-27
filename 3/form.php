<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 27.11.16
 * Time: 13:25
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);


include_once "functions.php";

if(empty($_REQUEST['count'])){
    die("ERROR!");
}

$arr = fileToArray('file.txt');
$count = count($arr);

$arr_new = [];
for($i=0; $i<$count; $i++){
    if(strlen($arr[$i])<$_REQUEST['count'])
        array_push($arr_new, $arr[$i]);
    echo "str- ".$arr[$i]." lng- ".strlen($arr[$i])."<br>";
}

arrayToFile('file.txt', $arr_new);
