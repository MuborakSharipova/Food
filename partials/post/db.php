<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'store';

$conn = mysqli_connect($host,$username,$password,$dbname);

if(mysqli_connect_errno()) {
    echo "Not connected";
}
?>