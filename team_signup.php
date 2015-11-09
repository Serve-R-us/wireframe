<?php include('config/connection.php'); ?>
<?php include('templates/header.php'); ?>
<?php include('templates/nav.php');?>



<!-- Content -->
<div class="container">
  <form class="form-signin" id="signupForm" method="post" action="register.php" autocomplete="off">
      <h2 class="form-signin-heading">Please create your team</h2>
      
      <!-- User name -->
      <label for="inputUsername" class="sr-only">Team Name</label>
      <input type="text" class="form-control" name="username" id="username" placeholder="Team Name">
      
      <!-- Accessibility needs -->
      <div class="checkbox">
        <label>
          <input type="checkbox"> A team member on my team has accessibility needs
        </label>
      </div>

      
      <h2 class="form-signin-heading">Invite Team Members</h2>
      <hr>
      <h4 class="form-signin-heading">Email of participant 1:</h2>
      <!-- email -->
      <label for="inputEmail" class="sr-only">Email Address</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="email@email.com">
      
      <h4 class="form-signin-heading">Email of participant 2:</h2>
      <!-- email -->
      <label for="inputEmail" class="sr-only">Email Address</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="email@email.com">
      
      <h4 class="form-signin-heading">Email of participant 3:</h2>
      <!-- email -->
      <label for="inputEmail" class="sr-only">Email Address</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="email@email.com">
      
      <h4 class="form-signin-heading">Email of participant 4:</h2>
      <!-- email -->
      <label for="inputEmail" class="sr-only">Email Address</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="email@email.com">
      
      <br>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Register Now</button>
  </form>
</div> <!-- /container -->


<?php include('templates/footer.php') ?>