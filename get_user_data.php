<?php

include 'configure.php':

$user = $_GET['user'];

$sql = "SELECT * FROM userprofile WHERE name = '$user'"; $result = mysqli_query($conn, $sql);

$userData = array();

if (mysqli_num_rows($result) > 0) {

$userData = mysqli_fetch_assoc($result);