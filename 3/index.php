<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 27.11.16
 * Time: 13:00
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once "functions.php";

$html = "
<form action='form.php' method='POST'>
    <input type='number' name='count'>
    <input type='submit'>
</form>
";

echo $html;


