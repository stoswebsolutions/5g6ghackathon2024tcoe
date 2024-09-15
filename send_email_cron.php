<?php
// Database connection
include 'db_connect.php';
// Query to get data for sending email (modify this query as needed)
$sql = "SELECT email, fullname FROM users ";
$result = $conn->query($sql);

// Prepare email sending logic
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        try {
            $participant_name = $row['fullname'];
            $hackathon_name = 'Hackathon 2024';
            $company_name = 'Hackathon Organization';
            $contact_email = '5g6ghack24@tcoe.in';
            $contact_number = '+91 84668-83949';
            $sender_name = 'Deepak Boorla';

            $subject = "Action Required: Complete Your Hackathon Application";

            $to = $row['email'];
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
    <title>Complete Your Hackathon Application</title>
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
        footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777777;
        }
    </style>
</head>
<body>
    <div class='email-container'>
        <h2>Dear $participant_name,</h2>
        <p>I hope this message finds you well.</p>
        <p>We noticed that your application for the upcoming <strong>$hackathon_name</strong> is not yet complete. To ensure your participation, please log in to your account and finish the application process as soon as possible.</p>

        <p>If you have any questions or need assistance, feel free to reach out to us at <a href='mailto:$contact_email'>$contact_email</a> or call us at $contact_number.</p>

        <p>Thank you for your prompt attention to this matter. We look forward to your participation!</p>

        <p>Best regards,</p>
        <p><strong>$sender_name</strong></p>
        <p><strong>Your Position</strong></p>
        <p><strong>$company_name</strong></p>

        <footer>
            <p>$company_name, Contact Information: <a href='mailto:$contact_email'>$contact_email</a></p>
        </footer>
    </div>
</body>
</html>
";

            // Send the email
            if (mail($to, $subject, $message, $headers)) {
                echo "Email sent to " . $row['email'] . "\n<br><br>";
            } else {
                echo "Failed to send email to " . $row['email'] . "\n<br><br>";
            }
        } catch (Exception $e) {
            error_log('Cron email error: ' . $e->getMessage());
        }
    }
} else {
    echo "No pending users found.\n";
}

$conn->close();
