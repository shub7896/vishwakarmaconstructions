<?php
$host = 'sql12.freesqldatabase.com';
$user = 'sql12774258';
$pass = 'TrHXy4r1s6';
$db = 'sql12774258';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>