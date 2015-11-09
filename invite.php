<?php include('config/connection.php'); ?>
<?php include('templates/header.php'); ?>
<?php include('templates/nav.php');?>
    
  <div class="container">
      
    <!-- php if statement -->
    <?php if (isset($_SESSION['username'])) { ?> 
  
      <?php die("<script>location.href='account.php'</script>");
    
    } ?>
      
    <div class align="right">
      <a href="profile.php"><button type="button" class="btn btn-primary btn-sm">My Profile</button></a>
      <div class="divider"/></div>
      <a href="team.php"><button type="button" class="btn btn-primary btn-sm">My Team</button></a>
      <div class="divider"/></div>
      <a href="logout.php"><button type="button" class="btn btn-primary btn-sm">Sign Out</button></a>
    </div>

    <div class>
      <h1>Member Invite</h1>
      <hr>
    </div>

    <div class>
      <h4>Team Name: </h4>
      <h4>Current Members: </h4>
      <h4>Capacity: </h4>
    </div>
      
    <!-- Content section -->

    <div class="row">
      <div class="col-md-5">
        <h4>Invite Emails:</h4>
        <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
        </br>
        <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
      </div>

      <div class="col-md-5">
        <h4>Invite Usernames:</h4>
        <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
        </br>
        <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
        </br>
      </div>
    </div>

    <div class="left">
      <a href="processInvite.php"><button type="button" class="btn btn-primary">Send Invites</button></a>
    </div>

  </div> <!-- /container -->

<?php include('templates/footer.php') ?>
