<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'cruddb';
$conn = mysqli_connect($server,$username,$password,$db);

if (!$conn) {
    die('Connection failed !'. mysqli_connect_error());
}

$msg = 'Connection successfull!';

echo '<script type="text/javascript">' .
          'console.log(' . "'$msg'" . ');</script>';

?>