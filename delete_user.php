<?php
header('Content-Type: application/json');
$servername "localhost ";
$username= 'root':
$password = "";
$dbname = "barangayconnect";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die(json_encode(['success'=> false, 'message,'=>Connection failed: ' .$conn->connect.error]));