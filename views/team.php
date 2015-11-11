
  <!-- Content -->
  <div class="container">
      
    <!-- php if statement -->
    <?php if (!isset($_SESSION['username'])) { ?>
    <div class="center">
        <p>Please login to view your account information</p>
    </div>
    <div class="center">
      <a href="?page=login"><button type="button" class="btn btn-primary btn-lg">Login</button></a>
      <div class="divider"/></div>
      <a href="?page=signup"><button type="button" class="btn btn-primary btn-lg">Sign Up</button></a>
    </div>
    
    <!-- php else statement -->
    <?php } else {?>
            
            <div>
                
                <!-- My account area -->
                <h2>My Team</h2>
                <hr>
                
                <div class="row">
                    
                  <!-- SQL calls and such -->
                  <?php
                    $team_query = "SELECT * FROM teams WHERE id = '$_SESSION[teamid]'";
                    $team_result = mysqli_query($dbc, $team_query);
                    $team_info = mysqli_fetch_assoc($team_result);
                    
                    $team_members_query = "SELECT * FROM users JOIN teams ON users.teamid = teams.id WHERE teams.id = '$_SESSION[teamid]'";
                    $team_members_result = mysqli_query($dbc, $team_members_query);
                    
                  ?>
                  <div class="col-xs-12 col-md-4">
                    
                        <div class="team-heading">
                            <h4>Name: </h4> <?php echo $team_info['teamname']; ?>
                            <h4>Team Captain: </h4> <?php echo $_SESSION['username']; ?>
                            <h4>Members: </h4>
                            <?php while( $team_members = mysqli_fetch_assoc($team_members_result)) {
                                echo $team_members['user'];
                                echo '<br>';
                            }?>
                            <br>
                            <a href="?page=invite"><button type="button" class="btn btn-primary btn-lg">Invite Members</button></a> 

                        </div>
                    </div>
                    
                    
                    <div class="col-xs-6 col-md-8">
                        
                        <div class="col-xs-12 col-md-12">
                            <div class="team-heading">
                                <h4>Team's Current Route</h4>
                                
                                <?php
                                    if ($team_info['route'] == 1) { ?>
                                        
                                            <img src="images/busmap_thumb.jpg" /><br><br>
                                        
                                    <?php } else {
                                        echo '<p>No current route selected</p></br>';
                                    }
                                ?>
                                
                                <a href="maps.php"><button type="button" class="btn btn-primary btn-lg">Team Route</button></a> 
                                <br>
                                <br>        
                            
                            </div>
                          </div>
                        
                    </div>

                </div>
                <hr>
                <div class="row">
                    <div class="team-heading">
                        <div class="col-xs-12 col-md-12">
                            <h4>Total Money Raised:</h4>
                            <a href="?page=donate.php"><button type="button" class="btn btn-primary btn-lg">Donate to Team</button></a> 
                            <a href="index.php?page=delete"><button type="button" class="btn btn-primary btn-lg">Delete Team</button></a> 

                        </div>
                    </div>
                </div>
            </div>
            
          <?php }
    ?>
    
  </div> <!-- /container -->
    
