<?php include('config/connection.php'); ?>
<?php include('templates/header.php'); ?>
<?php include('templates/nav.php'); ?>

    <div class="container">
        <?php
            
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            echo "{$username} : {$password} <br />";
            
                $member_query = "SELECT * FROM serverus.users WHERE user = '$_POST[username]' AND password = SHA1('$_POST[password]')";
                $member_result = mysqli_query($dbc, $member_query);
                
                if ($member_result) {
                    echo "This ran?";
                    $_SESSION['username'] = $username;
                    header('Location: index.php');
                }
        ?>
        
    </div>
    <?php include('templates/footer.php'); ?>
