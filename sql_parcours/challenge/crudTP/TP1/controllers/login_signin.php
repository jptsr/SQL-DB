<?php
    require '../models/db_connection.php';

    // sign in
    if ( isset($_POST['sign_username']) and isset($_POST['sign_pwd']) and isset($_POST['confirm_pwd']) ) {
        if ( $_POST['sign_pwd'] == $_POST['confirm_pwd'] ) {
            $username = $_POST['sign_username']; 
            $pwd = password_hash($_POST['confirm_pwd'], PASSWORD_DEFAULT);

            $res = $db -> query("SELECT * FROM tp1_user_login WHERE username = '$username'");
            $data = $res -> fetch(PDO::FETCH_ASSOC);

            // check if username is already used, if not, enter the date in db
            if ($username == $data['username']) {
                // echo 'Username already used';
                header('location: ../views/login_sigin_view.php');

            } else {
                $sql = "INSERT INTO tp1_user_login VALUES (0, '$username', '$pwd')";
                $stmt = $db -> prepare($sql);
                $stmt -> execute();
                $stmt -> closeCursor();
    
                session_start();
                $_SESSION['login'] = $username;
                $_SESSION['pwd'] = $pwd;
                $_SESSION['id'] = $data['id'];
    
                header('location: ../views/login_sigin_view.php');
                echo 'Your informations are saved, please login now.';
            }
        } else {
            header('location: ../views/login_sigin_view.php');
            // echo 'Password doesn\'t match, please retry';
        }
    }

    // login
    if ( isset($_POST['log_username']) and isset($_POST['log_pwd']) ) {
        $username = $_POST['log_username'];
        $pwd = $_POST['log_pwd'];

        $res = $db -> query("SELECT * FROM tp1_user_login WHERE username = '$username'");
        $data = $res -> fetch(PDO::FETCH_ASSOC);

        if( password_verify($pwd, $data['password'])) {
            session_start();
            $_SESSION['login'] = $username;
            $_SESSION['pwd'] = password_hash($pwd, PASSWORD_DEFAULT);
            $_SESSION['id'] = $data['id'];
            header('location: ../views/index_view.php');
        } else {
            header('location: ../views/login_sigin_view.php');
            echo 'The username and/or password is incorrect';
        }
    }
?>