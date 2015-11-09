<?php include('config/connection.php'); ?>
<?php include('templates/header.php'); ?>
<?php include('templates/nav.php'); ?>

    <div class="container">
        
        <?php
            if (isset($_GET['page'])) {
                $page = $_GET['id'];
                echo $page;
            } else {
                $page = null;
            }
            
            if (strcmp($page, 'team')) {
                $teamname = $_POST['teamname'];
                
                // Test if team created requires accessibility
                if (isset($_POST['accessibility'])) {
                    echo "is set!";
                    $accessibility = 1;
                } else {
                    echo 'not set!';
                    $accessibility = 0;
                }
                
                echo "{$teamname} : {$accessibility} <br />";
                
                $member_query = "SELECT id FROM users WHERE user = '$_SESSION[username]'";
                $id_result = mysqli_query($dbc, $member_query);
            
                $teamcaptainid = mysqli_fetch_assoc($id_result);
            
                echo $teamcaptainid['id'];
                
                $team_query = "INSERT INTO teams (id, teamname, teamcaptainid, accessibility) VALUES (NULL, '$_SESSION[username]', $teamcaptainid[id], $accessibility)";
                $team_result = mysqli_query($dbc, $team_query);
                
                echo $team_query;
                    
                if ($team_result) {
                  echo "This ran?";
                    header('Location: index.php');
                  }
                
            } else {
                $username = $_POST['username'];
                $password = $_POST['password'];
                
                echo "{$username} : {$password} <br />";
            
                $member_query = "SELECT * FROM serverus.users WHERE user = '$_POST[username]' AND password = SHA1('$_POST[password]')";
                $member_result = mysqli_query($dbc, $member_query);
                
                if ($member_result) {
                    echo "This ran?";
                    $_SESSION['username'] = $username;
                    //header('Location: index.php');
                }
            }
        ?>
        
    </div>
        
    <?php include('templates/footer.php'); ?>
