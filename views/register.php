<div class="container">
  <?php      
    $username = $_POST['username'];
    $email = $_POST['email'];   
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    if ($_POST['role'] == 'team-captain') {
        $role = 1;
    }
    else {
        $role = 0;
    }
    
    echo "Username: {$username}
          Email: {$email} 
          Password: {$password}
          Confirm Password: {$confirm_password}
          Role: {$role} <br />";
    
    //$member_query = "SELECT * FROM users WHERE user = '$_POST[username]' AND password = SHA1('$_POST[password]')";
        
    $member_query = "INSERT INTO users (id, user, password, email, role) VALUES (NULL, '{$username}', SHA1('{$password}'), '{$email}', $role)";
    $member_result = mysqli_query($dbc, $member_query);
    $member_info = mysqli_fetch_assoc($member_result);
        
    if ($member_result) {
      echo "This ran?";
      $_SESSION['username'] = $username;
      $_SESSION['teamid'] = $member_info['teamid'];
      if ($role == 0) {
        header('Location: index.php');
      } else {
        header('Location: ?page=team_signup');
      }
    }
  ?>        
</div>
