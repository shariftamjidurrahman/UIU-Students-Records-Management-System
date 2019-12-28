<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "authentication";
// Create connection
$db = new mysqli($server, $user, $password, $database);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
?>