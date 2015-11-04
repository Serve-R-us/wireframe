    <?php include('config/connection.php'); ?>
    <?php include('templates/header.php'); ?>
    <?php include('templates/nav.php');?>
    
    
    <!-- Content -->
    <div class="container">

      <form class="form-signin" action="register.php" method="post">
        <h2 class="form-signin-heading">Please register an account</h2>
        
        <!-- User name, emails, and passwords -->
        <label for="inputUsername" class="sr-only">User Name</label>
        <input type="text" class="form-control" name="username" id="inputUsername" placeholder="Username">
        
        <label for="inputEmail" class="sr-only">Email Address</label>
        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="email@email.com">
        
        <br>
        
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
        
        <label for="inputConfirmPassword" class="sr-only">Confirm Password</label>
        <input type="password" class="form-control" name="confirm-password" id="inputPassword4" placeholder="Confirm Password">
        
        <!-- Radio button for signing up as team captain/participant -->
        <hr>
        <div class="control-group">
          <label class="control-label">I'm signing up as a...</label>
          <div class="controls">
            <label class="radio">
              <input type="radio" name="role" id="user_role_managing_editor" value="team-captain" checked>
              Team Captain
            </label>
            <label class="radio">
              <input type="radio" name="role" id="user_role_area_editor" value="participant">
              Participant
            </label>
          </div>
        </div>
        
        
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register Now</button>
      </form>

    </div> <!-- /container -->
    
    

    <?php include('templates/footer.php') ?>