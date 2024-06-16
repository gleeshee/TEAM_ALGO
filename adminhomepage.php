<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "barangayconnect";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BarangayConnect - Connecting communities to build a stronger neighborhood.">
    <title>BarangayConnect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
href="style.css">

    <style >
        .modal-body-profile {
    margin-top: 200px;
    position: absolute;
    flex: 1 1 auto;
    padding: var(--bs-modal-padding);
}
      
    ::-webkit-scrollbar {
        width: 10px; 
    }
    ::-webkit-scrollbar-track {
        background-color: cornsilk;
    }
    ::-webkit-scrollbar-thumb {
        background-color: white; 
        border-radius: 10px; 
    }