<?php
    require '../models/data.php';
    require '../assets/php/functions.php';

    for ($i = 0; $i < count($arr_client['name']); $i ++) {                   
        displayListClients($arr_client['id'][$i], $arr_client['name'][$i], $arr_client['firstname'][$i]);
    }
?>