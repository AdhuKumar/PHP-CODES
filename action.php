<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$host = 'localhost';
$username = 'root';
$password = '12345';
$database = 'form-db';

$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO table1 (name, email, message) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
$result = mysqli_stmt_execute($stmt);

if ($result) {
    header('Location: db2.php');
        exit;
    
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
