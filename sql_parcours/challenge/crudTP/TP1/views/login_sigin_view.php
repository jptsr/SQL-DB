<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="signin page and login page">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Sign in / Login</title>

        <link rel="stylesheet" href="../assets/css/style.css">
    </head>

    <body>
        <h3>Login</h3>
        <form action="../controllers/login_signin.php" method="post">
            <label for="log_username">
                Username :
                <input type="text" name="log_username" maxlength="50">
            </label>

            <label for="log_pwd">
                Password :
                <input type="password" name="log_pwd" maxlength="25">
            </label>

            <input type="submit" name="log_submit" value="Login">
        </form>

        <h3>Sign in</h3>
        <form action="../controllers/login_signin.php" method="post">
            <label for="sign_username">
                Choose a username :
                <input type="text" name="sign_username" maxlength="50">
            </label>

            <label for="sign_pwd">
                Choose a password :
                <input type="password" name="sign_pwd" maxlength="25">
            </label>

            <label for="confirm_pwd">
                Confirm password :
                <input type="password" name="confirm_pwd" maxlength="25">
            </label>

            <input type="submit" name="sign_submit" value="Signin">
        </form>
    </body>
</html>