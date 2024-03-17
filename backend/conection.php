<?php
header("Access-Control-Allow-Origin: *");

header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

header("Content-Type: application/json");
$servername = "localhost";
$username = "username";
$db_pass = null;
$dbname = "newsdb";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}