<?php

$server = 'localhost';
$user = 'root';
$password = 'admin';
$db = 'crud_db';

$mysqli = new mysqli($server, $user, $password, $db);
if ($mysqli->connect_error) {
    die('Koneksi Database gagal :' . $mysqli->connect_error);
}
?>