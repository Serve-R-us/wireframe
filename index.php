<?php include('config/setup.php'); ?>
<?php include('templates/header.php'); ?>
<?php include('templates/nav.php');?>


<?php
    error_reporting(0);
    if(include('views/'.$page.'.php'))
    {
        
    } else {
        
        include('views/404.php');
    }
?>

<?php include('templates/footer.php') ?>
