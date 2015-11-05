<?php

  session_start();

  $dbc = mysqli_connect('localhost', 'root', 'PositiveFish', 'serverus') OR die('Could not connect because: ' . mysqli_connect_error());
  $q_string = "USE serverus;";
  mysqli_query($dbc, $q_string);
  
?>
