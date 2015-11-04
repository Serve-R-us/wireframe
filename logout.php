
<?php
    require_once('/config/connection.php');
?>

    <?php include('templates/header.php'); ?>
    <?php include('templates/nav.php'); ?>
    <div class="container">
        
        <p>You are now logged out</p>
        
        <?php session_destroy() ?>
    </div>
        
<?php include('templates/footer.php'); ?>