
<?php include('config/connection.php'); ?>
<?php include('templates/header.php'); ?>
<?php include('templates/nav.php');?>
  <!-- Content -->
  <div class="container">
      
    <!-- php if statement -->
    <?php if (!isset($_SESSION['username'])) { ?>
    <div class="center">
        <p>Please login to view your account information</p>
    </div>
    <div class="center">
      <a href="login.php"><button type="button" class="btn btn-primary btn-lg">Login</button></a>
      <div class="divider"/></div>
      <a href="signup.php"><button type="button" class="btn btn-primary btn-lg">Sign Up</button></a>
    </div>
    
    <!-- php else statement -->
    <?php } else {
            include('views/get_account.php');
          }
    ?>
    
  </div> <!-- /container -->
    
<?php include('templates/footer.php') ?>