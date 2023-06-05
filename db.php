<?php

// Set up database connection
$host = 'localhost';
$username = 'root';
$password = '';


$connection = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error)
{
  die("conection failed:" .$conn->connect_error);

}
echo "connected sucessfully";
?>