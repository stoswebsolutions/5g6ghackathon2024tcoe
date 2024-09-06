<?php
// db_connect.php

$servername = "localhost";
$username = "g6ghackathon2024_hackathon";
$password = "q5brzU}~!7F2";
$dbname = "g6ghackathon2024_hackathon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
