<?php
/**
 * using mysqli_connect for database connection
 */
$server = "localhost";
$user = "root";
$pass = "";
$database = "crud_db";
 
$mysqli = mysqli_connect($server, $user, $pass, $database);

// $databaseHost = 'localhost';
// $databaseUsername = 'root';
// $databasePassword = '';
// $databaseName = 'crud_db';
 
// $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

if (!$mysqli) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
?>