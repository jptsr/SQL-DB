<?php
    try {
        // connection à la db
        $db = new PDO('mysql:host=localhost;dbname=becode;charset=utf8', 'root', '');
        // $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch ( Exception $e ) {
        die('Erreur: ' . $e -> getMessage());
    }
?>