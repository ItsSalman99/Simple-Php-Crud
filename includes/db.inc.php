<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'cruddb';

$conn = mysqli_connect($server,$username,$password,$db);

if (!$conn) {
    die('Connection failed !'. mysqli_connect_error());
}

echo "Connect to the server has been successful! ";


?>