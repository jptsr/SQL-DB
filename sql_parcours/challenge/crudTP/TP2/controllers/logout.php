<?php
    session_start();
    session_unset();
    session_destroy();
    header('location: ../views/create_client_view.php');
?>