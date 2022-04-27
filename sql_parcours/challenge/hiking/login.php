<?php
    require_once 'connection_db.php';

    // use password_hash(var_with_pwd, PASSWORD_DEFAULT) to hash the password and put in db (signin)
    // use password_verify(entered_pwd, pwd_hash_in_db) to verify if pwd entered is the same as in db (login)

    $login_ok = null;
    $pwd_ok = null;

    if ( isset($_POST['login']) and isset($_POST['pwd']) ) {
        $login_name = $_POST['login'];
        $pwd = $_POST['pwd'];

        $res = $db -> query("SELECT * FROM user_login WHERE name = '$login_name'");
        $data = $res -> fetch(PDO::FETCH_ASSOC);

        if ( ($login_name == $data['name']) and ($pwd == $data['password']) ) {
            session_start();
            // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd)
            $_SESSION['login'] = $login_name;
            $_SESSION['pwd'] = $pwd;
            // redirection vers une page du site
            header('location: create.php');
        } else {
            echo 'Membre inconnu';
            header('location: login.php');
        }
    } else {
        echo 'Le formulaire est incomplet.';
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="login">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="login.php" method="post">
            <label for="">
                Login :
                <input type="text" name="login">
            </label>

            <label for="">
                Password :
                <input type="password" name="pwd">
            </label>

            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>