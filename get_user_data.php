<?php

include 'configure.php':

$user = $_GET['user'];

$sql = "SELECT * FROM userprofile WHERE name = '$user'"; $result = mysqli_query($conn, $sql);

$userData = array();
