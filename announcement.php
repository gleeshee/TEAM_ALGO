<?php
include 'configure.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $details = "";

   
    $title = trim($_POST["title"]);
    $details = trim($_POST["details"]);

   
    $sql = "INSERT INTO announcements (title, details) VALUES (:title, :details)";

// Using prepared statements to prevent SQL injection
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':details', $details);
