<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 11.12.16
 * Time: 23:50
 */


function showComments($arr)  {
    foreach ($arr as $value){
        echo '<p style="background-color: lightgray; border-bottom: 1px solid gray; margin: 0; padding: 25px 0;">'.$value.'</p>';
    }
}