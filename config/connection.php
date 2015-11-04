<?php

session_start();

$dbc = mysqli_connect('localhost', 'dev', 'thepassword', 'wireframe') OR die('Could not connect because: ' . mysqli_connect_error());


?>