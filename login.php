<?php

include 'config.php':

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$email = $_POST['email'];
$password = $_POST['password']:

try {

$stmt= $conn->prepare("SELECT FROM users WHERE email= :email"); $stmt->bindParam(':email, $email);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);