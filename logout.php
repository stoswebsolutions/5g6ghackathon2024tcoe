<?php
session_start();
session_destroy(); // Destroy the session
header("Location: home"); // Redirect to login page
?>
