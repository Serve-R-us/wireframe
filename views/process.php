    <div class="container">
        
        <?php
            // determine what information is being processed
            if (isset($_GET['id'])) {
                $page = $_GET['id'];
                echo $page;
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
                
                echo $team_query;
                
                if ($team_result) {
                  echo "This ran?";
                  header('Location: index.php');
                }
            
            // proccess a user sign up
            } else if (strcmp($page, 'login') == 0) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                
                echo "{$username} : {$password} <br />";
            
                $member_query = "SELECT * FROM serverus.users WHERE user = '$_POST[username]' AND password = SHA1('$_POST[password]')";
                $member_result = mysqli_query($dbc, $member_query);
                
                if ($member_result) {
                    $_SESSION['username'] = $username;
                    header('Location: index.php');
                }
            }
        ?>
        
    </div>
        