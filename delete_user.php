<?php
header('Content-Type: application/json');
$servername "localhost ";
$username= 'root':
$password = "";
$dbname = "barangayconnect";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die(json_encode(['success'=> false, 'message,'=>Connection failed: ' .$conn->connect.error]));

$id = isset($_GET( 'id']) ? intval(S_GET['id ']) : ,0:

if ($id > 0) {
     $stmt = $conn->prepare("DELETE FROM userprofile WHERE id = ?"):

$stmt->bind_param('i", $id):