<?php
session_start();
// Include the database connection
include 'db_connect.php';

date_default_timezone_set('Asia/Kolkata');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Check if the email exists in the database
    $sql = "SELECT uniqueId, fullname FROM users WHERE email = '$email' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Generate a unique token
        $row = $result->fetch_assoc();
        $fullname = $row['fullname'];
        $token = bin2hex(random_bytes(50));

        // Store the token in the database with an expiration time
        $expiry = date("Y-m-d H:i:s", strtotime('+1 hour')); // Token valid for 1 hour
        $sql1 = "UPDATE users SET reset_token = '$token', reset_expiry = '$expiry' WHERE email = '$email' ";
        if ($conn->query($sql1) === TRUE) {
            // Send the reset email
            $user_name = $fullname;
            $service_name = 'TCOE India';
            $reset_link = "https://5g6g-hackathon2024.tcoe.in/reset_password.php?token=" . $token;
            $company_name = 'TCOE India';
            $contact_email = '5g6ghack24@tcoe.in';
            $contact_number = '+91 84668-83949';
            $sender_name = 'Deepak Boorla';

            $subject = "Password Reset Request";

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: 5g6ghack24@tcoe.in" . "\r\n";
            $headers .= "Reply-To: 5g6ghack24@tcoe.in" . "\r\n";
            $headers .= "X-Mailer: PHP/" . phpversion();

            $message = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Password Reset Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2, p {
            color: #333333;
        }
        p {
            line-height: 1.6;
            font-size: 16px;
        }
        .btn {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 10px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777777;
        }
    </style>
</head>
<body>
    <div class='email-container'>
        <h2>Hi $user_name,</h2>
        <p>
            We received a request to reset your password for your <strong>$service_name</strong> account. Click the link below to reset your password:
        </p>
        <a href='$reset_link' class='btn'>Reset Password</a>
        <p>
            This link will expire in 24 hours. If you did not request a password reset, please ignore this email or contact our support team at <a href='mailto:$contact_email'>$contact_email</a> or call us at $contact_number.
        </p>
        <p>Thank you,</p>
        <p><strong>$company_name</strong></p>

        <footer>
            <p>$company_name, Contact Information: <a href='mailto:$contact_email'>$contact_email</a></p>
        </footer>
    </div>
</body>
</html>
";

            if (mail($email, $subject, $message, $headers)) {
                echo "<script>alert('A password reset link has been sent to your email address.');</script>";
            } else {
                echo "<script>alert('Failed to send the reset email. Please try again later.');</script>";
            }
        }
    } else {
        echo "<script>alert('No account found with that email address.');</script>";
    }
    echo "<script> window.location.href='home#authModal';</script>";
    $conn->close();
}
