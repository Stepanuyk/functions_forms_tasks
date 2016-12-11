<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'functions.php';

    if (isset($_POST['text'])) {
        $json = file_get_contents('comments.json');
        json_decode($json) ? $arr = json_decode($json) : $arr = [];
        array_push($arr, $_POST['text']);
        $json = json_encode($arr);
        file_put_contents('comments.json',$json);
    }

    $file = file_get_contents('comments.json');
    $arr = json_decode($file, true);
    showComments($arr);

?>

<form method="POST">
    <textarea name="text" id="text" rows="7" style="width: 100%; margin-top: 25px;"></textarea>
    <br>
    <input type="submit" value="Add comment">
</form>
