<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['adminEmail'];
    $password = $_POST['adminPassword'];

    try {
        $stmt = $conn->prepare("SELECT * FROM admin WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            
            session_start();
            $_SESSION['email'] = $email;
            
           
            header("Location:adminhomepage.php");
            exit();
        } else {
            echo "Invalid email or password";
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
}
?>