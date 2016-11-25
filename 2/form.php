<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 25.11.16
 * Time: 22:14
 */


if(!empty($_POST['text']))  {
    longWords($_POST['text']);

}



function longWords($a) {

    $arr[]='';

    $text = explode(" ",$a);
    $count = count($text);

    for ($i=0; $i<$count; $i++)     {
        $arr[strlen($text[$i])] = $text[$i];
    }
    krsort($arr);
$k=3;
    foreach ($arr as $key => $value) {
        if($k==0)break;
        echo $value."<br>";
        $k--;

    }

    return $arr;
}