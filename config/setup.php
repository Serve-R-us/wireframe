<?php include('config/connection.php'); ?>

<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    // Set page id equal to id in url
} else {
    $page = 'main';
    // Set page id to dashboard page
}

?>