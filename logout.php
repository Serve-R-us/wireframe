
<?php
    include('config/connection.php');
?>

    <?php include('templates/header.php'); ?>
    <?php include('templates/nav.php'); ?>
    <div class="container">
        
        <p>You are now logged out</p>
        <p>Redirecting to home in 5 seconds</p>
        <meta http-equiv="refresh" content="2;url=http://google.com">
        <?php session_destroy() ?>
    </div>
        
<?php include('templates/footer.php'); ?>