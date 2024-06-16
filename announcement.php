<?php
include 'configure.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $details = "";

   
    $title = trim($_POST["title"]);
    $details = trim($_POST["details"]);

   
    $sql = "INSERT INTO announcements (title, details) VALUES (:title, :details)";