<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 06.12.16
 * Time: 21:43
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'functions.php';
?>

<form enctype="multipart/form-data" method="POST">
    <label for="file">Choose the file</label>
    <input type="file" id="file" name="file">
    <input type="submit" value="Upload">
</form>

<?php

$uploadfile = 'gallery/'. basename($_FILES['file']['name']);

(json_decode(file_get_contents('gallery.json'))) ? $arr = json_decode(file_get_contents('gallery.json'),true): $arr = [];

if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
    array_push($arr, $_FILES['file']);
    $json = json_encode($arr);
    file_put_contents('gallery.json', $json);
}
else echo "Please, choose the file!";

echo showTable($arr);


?>