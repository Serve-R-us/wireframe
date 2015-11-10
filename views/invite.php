
  <div class="container"> 
      
    <!-- php if statement -->
    <?php if (isset($_SESSION['username'])) { ?> 
  
      <?php die("<script>location.href='account.php'</script>");
    
    } ?>
      
    <?php include('templates/account_buttons.php'); ?>

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
      <a href="?page=processInvite"><button type="button" class="btn btn-primary">Send Invites</button></a>
    </div>

  </div> <!-- /container -->
