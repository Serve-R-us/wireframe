<?php include('/config/connection.php'); ?>
<?php include('templates/header.php'); ?>
<?php include('templates/nav.php'); ?>

<div class="container">
    <?php
      $username = $_POST['username'];
      $email = $_POST['email'];   
      $password = $_POST['password'];
      $confirm_password = $_POST['confirm-password'];
      $role = $_POST['role'];
      
      echo "Username: {$username}
            Email: {$email} 
            Password: {$password}
            Confirm Password: {$confirm_password}
            Role: {$role} <br />";
  
      //$member_query = "SELECT * FROM users WHERE user = '$_POST[username]' AND password = SHA1('$_POST[password]')";
      
      $member_query = "INSERT INTO users (id, user, password, email, role) VALUES (NULL, '{$username}', '{$password}', '{$email}', 2)";
      $member_result = mysqli_query($dbc, $member_query);
      
      if ($member_result) {
        echo "This ran?";
        $_SESSION['username'] = $username;
        //header('Location: index.php');
      }
    ?>
</div>

<?php include('templates/footer.php'); ?>
