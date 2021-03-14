<?php
    include('check_login.php');
?>

<link rel="stylesheet" href="../tela-login1/assets/style.css">

<div class="container">
    <div class="box">
        <h2>Your username is <?php echo $_SESSION['username'];?></h2>
        <h2><a href="logout.php">Exit</a></h2>
    </div>
</div>
