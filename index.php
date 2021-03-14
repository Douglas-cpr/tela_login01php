<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    
    <div class="container">
        <div class="box">
            <div class="header">
                <img src="../tela-login1/assets/images/undraw_male_avatar_323b.svg" alt="avatar icon">
                <h1>Login</h1>
                <small>Or register</small>
            </div>

            <?php
                if(isset($_SESSION['not_authenticated'])):
            ?>

            <div class="alert">
                <span>Invalid data, try again!</span>
            </div>

            <?php
                endif;
                unset($_SESSION['not_authenticated']);
            ?>

            <div class="login">
                <form action="login.php" method="POST">
                    <div class="control">
                        <label for="username" class="sr-only">User</label>
                        <input type="text" name="username" id="user" placeholder="Insert your user">
                    </div>

                    <div class="control">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password">
                    </div>

                    <button class="btn signin">Sign in</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>