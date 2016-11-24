<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 24.11.16
 * Time: 23:45
 */





if(!empty($_POST['text1']))  {

 print_r(getCommonWords($_POST['text1'],$_POST['text2']));

}



function getCommonWords($a, $b) {

    $arr[]='';

    $text1 = explode(" ",$a);
    $text2 = explode(" ",$b);

    $count1 = count($text1);
    $count2 = count($text2);

    for($i=0; $i <= $count1; $i++){
        for($j=0; $j <= $count2; $j++){
            if (($text1[$i]!="")&&($text2[$j]!="")&&($text1[$i]==$text2[$j])){
                array_push($arr, $text2[$j]);
            }
        }
    }

    return $arr;
}