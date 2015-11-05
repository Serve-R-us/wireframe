<?php include('config/connection.php'); ?>
<?php include('templates/header.php'); ?>
<?php include('templates/nav.php');?>
    
  <div class="container">
      
    <!-- php if statement -->
    <?php if (!isset($_SESSION['username'])) { ?>
    <!-- Main component for a primary marketing message or call to action -->
    <div class="center">
      <a href="login.php"><button type="button" class="btn btn-primary btn-lg">Login</button></a>
      <div class="divider"/></div>
      <a href="signup.php"><button type="button" class="btn btn-primary btn-lg">Sign Up</button></a>
    </div>
    
    <!-- php else statement -->
    <?php } else {
            echo "<p>". $_SESSION['username'] . "/ <a href='account.php'>My Account</a> / <a href='logout.php'>Log out</a>" . "</p>";
          }
    ?>
        
        
    <!-- Jumbotron -->
    <div class="jumbotron">  
      <h1>Trick or Eat <?php echo 'test'; ?></h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce interdum porttitor nisl, sed luctus nibh ornare id. Suspendisse vel nibh aliquet augue condimentum egestas auctor at enim. Phasellus placerat justo nunc, nec finibus nunc porttitor id. Morbi arcu diam, aliquet ac neque sed, porta varius ipsum. Curabitur imperdiet vitae magna nec congue. Nam in consectetur nunc. Aenean quis leo at libero egestas pulvinar.</p>
      <p>Suspendisse eget ante id quam scelerisque vulputate vel eu massa. Sed elit dolor, ultricies in tellus ac, tempor tincidunt lacus. Nam est elit, rutrum sed tellus ac, hendrerit fringilla metus. Sed rhoncus erat vitae cursus pretium.</p>
      <p>
        <a class="btn btn-lg btn-primary" href="about.php" role="button">View more information &raquo;</a>
      </p>
    </div>
      
      
    <!-- Content section -->
    <div class="row marketing">
      <div class="col-lg-6">
        <h4>Subheading</h4>
        <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

        <h4>Subheading</h4>
        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

        <h4>Subheading</h4>
        <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      </div>

      <div class="col-lg-6">
        <h4>Subheading</h4>
        <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

        <h4>Subheading</h4>
        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

        <h4>Subheading</h4>
        <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
      </div>
    </div>
      
    <!-- footer image -->
    <div>
      <div class="center">
        <img src="images/logo.png""/>
      </div>
    </div>
      
  </div> <!-- /container -->

<?php include('templates/footer.php') ?>
