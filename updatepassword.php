<?php
// Include the database connection
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['uniqueId'])) {
    $uniqueId = $_POST['uniqueId'];
    $newPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Update the user's password in the database
    $sql = "UPDATE users SET password = ?, reset_token = NULL, reset_expiry = NULL WHERE uniqueId = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $newPassword, $uniqueId);

    if ($stmt->execute()) {
        echo "<script>alert('Your password has been reset successfully.');</script>";
    } else {
        echo "<script>alert('Failed to reset your password. Please try again later.');</script>";
    }
    echo "<script> window.location.href='home#authModal';</script>";

    $stmt->close();
    $conn->close();
}
