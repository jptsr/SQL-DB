<?php
    require_once '../models/db_connection.php';
    require '../models/display_html.php';

    $user_to_welcome = ( isset($_SESSION['login']) ) ? $_SESSION['login'] : "";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="index page">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Welcom <?= $user_to_welcome ?> !</title>

        <link rel="stylesheet" href="../assets/css/style.css">
    </head>

    <body>
        <h1>Your informations :</h1>

        <form action="../controllers/index.php" method="post">
            <?= $form = ($data == null) ? displayForm() : null; ?>
        </form>

        <ul>
            <li><?= $name ?></li>
            <li><?= $age ?></li>
            <li><?= $adress ?></li> 
            <li><?= $phone_nb ?></li>
            <li><?= $dpmt ?></li>
        </ul>

        <form action="../controllers/logout.php">
            <input type="submit" name="logout_submit" value="Logout">
        </form>
    </body>
</html>