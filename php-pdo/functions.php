<?php
    require 'db_connection.php';

    function displayTable ($ville, $haut, $bas) {
        echo <<<HTML
        <tr>
            <td>
                <input type="checkbox" name="check[]" value="${ville}">
            </td>
            <td>$ville</td>
            <td>$haut</td>
            <td>$bas</td>
        </tr>
        HTML;
    }
?>

