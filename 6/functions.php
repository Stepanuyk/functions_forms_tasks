<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 06.12.16
 * Time: 22:17
 */

function showTable($arr)
{
    $html = "
        <table border='1'>
        <thead>
            <tr>
                <td> Image </td> 
                <td> Size  </td>
                <td> Type</td>
            </tr>
        </thead>
        <tbody>
    ";
    foreach ($arr as $key => $value)
        if (!empty($value['name'])) {
         $html .= showRow($value['name'],$value['size'], $value['type']);
        }

    $html .= "</tbody></table>";
    return $html;
}

function showRow($name, $size, $source)
{
    $html = '
     <tr>
        <td>' . $name .   '</td>
        <td>' . $size .   '</td>
        <td>' . $source . '</td>
    </tr>';
    return $html;
}
