<?php
// Database connection
include 'db_connect.php';
// Query to get data for sending email (modify this query as needed)
$sql = "SELECT email, fullname FROM users";
$result = $conn->query($sql);

// Prepare email sending logic
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $to = $row['email'];
        $subject = "Reminder Email";
        $message = "Hello " . $row['fullname'] . ",\n\nThis is a reminder email.";

        $headers = "From: 5g6ghack24@tcoe.in";

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo "Email sent to " . $row['email'] . "\n";
        } else {
            echo "Failed to send email to " . $row['email'] . "\n";
        }
    }
} else {
    echo "No pending users found.\n";
}

$conn->close();
