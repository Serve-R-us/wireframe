<?php include('/config/connection.php'); ?>
<?php include('templates/header.php'); ?>
<?php include('templates/nav.php');?>

<!-- Content -->
<div class="container">

  <form class="form-signin" action="process.php" method="post">
    <h2 class="form-signin-heading">Please sign in</h2>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="text" class="form-control" name="username" id="inputUsername3" placeholder="Username">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
    <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  </form>

</div> <!-- /container -->

<?php include('templates/footer.php') ?>
