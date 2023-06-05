<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$host = "localhost";
$username = "root";
$password = "12345";
$database = "my_database";

$conn = mysqli_connect($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert data into the table
$sql = "INSERT INTO my_table (name, email, message) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
$result = mysqli_stmt_execute($stmt);

if ($result) {
    echo"connection sucess";
    
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
