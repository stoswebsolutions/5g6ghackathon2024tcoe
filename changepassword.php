<?php
// Include the database connection file
include 'db_connect.php';

// Get form data
$uniqueId = $_POST['uniqueId'];
$password = $_POST['password1'];

// Prepare SQL statement to prevent SQL injection
$sql = $conn->prepare("SELECT uniqueId, password FROM users WHERE uniqueId = ?");
$sql->bind_param("s", $uniqueId);
$sql->execute();
$sql->store_result();

if ($sql->num_rows > 0) {
    $sql->bind_result($uniqueId, $hashed_password);
    $sql->fetch();

    // Verify password
    if (password_verify($password, $hashed_password)) {
        $newPassword = password_hash($_POST['password'], PASSWORD_BCRYPT);

        // Update the user's password in the database
        $sql1 = "UPDATE users SET password = ? WHERE uniqueId = ?";
        $stmt = $conn->prepare($sql1);
        $stmt->bind_param("si", $newPassword, $uniqueId);

        if ($stmt->execute()) {
            echo "<script>alert('Password update successful!...');</script>";
        }
    } else {
        echo "<script>alert('Old password Incorrect!');</script>";
    }
} else {
    echo "<script>alert('Old password Incorrect!');</script>";
}
echo "<script> window.location.href='profile';</script>";
$sql->close();
$conn->close();
