    <div class="container">
        
        <?php
            // determine what information is being processed
            if (isset($_GET['id'])) {
                $page = $_GET['id'];
                //echo $page;
            } else {
                echo "page was not set";
                $page = null;
            }
            
            // proccess a team sign up
            if (strcmp($page, 'team') == 0) {
                $teamname = $_POST['teamname'];
                
                // test if team created requires accessibility
                if (isset($_POST['accessibility'])) {
                    echo "is set!";
                    $accessibility = 1;
                } else {
                    $accessibility = 0;
                }
                
                // get id of team captain who is creating team
                $member_query = "SELECT id FROM users WHERE user = '$_SESSION[username]'";
                $id_result = mysqli_query($dbc, $member_query);
                $teamcaptainid = mysqli_fetch_assoc($id_result);
                
                // insert team into database
                $team_query = "INSERT INTO teams (id, teamname, teamcaptainid, accessibility) VALUES (NULL, '$teamname', $teamcaptainid[id], $accessibility)";
                $team_result = mysqli_query($dbc, $team_query);
                
                // set team id for current member
                $teamid_query = "SELECT id FROM teams WHERE teamcaptainid = '$teamcaptainid[id]'";
                $teamid_result = mysqli_query($dbc, $teamid_query);
                $teamid = mysqli_fetch_assoc($teamid_result);
                
                echo 'Team id: '.$teamid['id'];
                
                $update_teamid = "UPDATE users SET teamid = '$teamid[id]' WHERE users.user = '$_SESSION[username]'";
                $updateteamid_result = mysqli_query($dbc, $update_teamid);
                
                echo $team_query;
                
                if ($team_result) {
                  echo "This ran?";
                  header('Location: index.php?page=team');
                }
            
            // proccess a user login
            } else if (strcmp($page, 'login') == 0) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                
                echo "{$username} : {$password} <br />";
            
                $member_query = "SELECT * FROM serverus.users WHERE user = '$_POST[username]' AND password = SHA1('$_POST[password]')";
                $member_result = mysqli_query($dbc, $member_query);
                $member_info = mysqli_fetch_assoc($member_result);
                
                if ($member_result) {
                    $_SESSION['teamid'] = $member_info['teamid'];
                    echo 'team id being set: '.$_SESSION['teamid'];
                    $_SESSION['username'] = $username;
                    header('Location: index.php');
                }
            } else if (strcmp($page, 'invite') == 0) {
                
                if ((isset($_POST['email']) && (strcmp($_POST['email'], "") != 0))
                            || (isset($_POST['username']) && (strcmp($_POST['username'], "") != 0 )) ) {
                    //echo 'test email: '.$_POST['email'];
                    //echo 'test username: '.$_POST['username'];
                ?>
                    <script>
                          alert("succesfully sent invites");
                    </script>
                    <p>Redirecting to your team's page</p>
                    <meta http-equiv="refresh" content="2;url=index.php?page=team">
                <?php
                } else { ?>
                    <script>
                          alert("no emails or usernames sent!");
                    </script>
                    <p>Redirecting to your team's page</p>
                    <meta http-equiv="refresh" content="2;url=index.php?page=team">
                <?php }
                //header('Location: ?page=team');
            } else if (strcmp($page, 'map') == 0) {
                  $route_query = "UPDATE teams SET route = 1 WHERE id = $_SESSION[teamid]";
                  $route_result = mysqli_query($dbc, $route_query);
                  
                  echo 'query: '.$route_query;
                  
                  header('Location: index.php?page=team');
            }
                
        ?>
        
    </div>
        