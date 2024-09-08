<?php
date_default_timezone_set('Asia/Kolkata');
// Check connection
include 'db_connect.php';

// Get form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing the password for security
$categoryType = $_POST['categoryType'];
$categoryName = $_POST['categoryName'];
$status = 1;
$createAt = date("Y-m-d H:i:s");

$randomNumber = mt_rand(100000, 999999);

// Insert data into database
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $sql = "INSERT INTO users (fullname, email, mobile, password, categoryType, categoryName, status, createAt, access_code, reset_token, reset_expiry, role) 
        VALUES ('$fullname', '$email', '$mobile', '$password', '$categoryType', '$categoryName', '$status', '$createAt', '$randomNumber', Null, Null, 'participant')";

    if ($conn->query($sql) === TRUE) {
        $folderName = 'assets/users/' . $conn->insert_id;
        if (!file_exists($folderName)) {
            if (mkdir($folderName, 0777, true)) {
            } else {
                $folderName = "assets/users";
            }
        }

        $user_name = $fullname;
        $hackathon_name = 'Hackathon 2024';
        $username = $email;
        $registration_date = $createAt;
        $company_name = 'Hackathon Organization';
        $contact_email = '5g6ghack24@tcoe.in';
        $contact_number = '+91 84668-83949';
        $sender_name = 'Deepak Boorla';

        $subject = "Welcome to $hackathon_name!";

        $to = $email;
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
    <title>Welcome to $hackathon_name</title>
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
        <p>Welcome to <strong>$hackathon_name</strong>! We are excited to inform you that your registration was successful.</p>

        <h3>Registration Details:</h3>
        <p><strong>Username:</strong> $username</p>
        <p><strong>Registration Date:</strong> $registration_date</p>

        <p>You can now log in to the $hackathon_name portal and start exploring:</p>
        <ul>
            <li><strong>Apply for the event:</strong> Complete your application for at least one of the problem statements and participate in this exciting event.</li>
            <li><strong>Access Resources:</strong> Find all the necessary resources and guidelines for the hackathon.</li>
        </ul>

        <p>If you have any questions or need assistance, feel free to reach out to us at <a href='mailto:$contact_email'>$contact_email</a> or call us at $contact_number.</p>

        <p>Thank you for joining us. We look forward to seeing your innovative ideas and contributions!</p>

        <p>Best regards,</p>
        <p><strong>$sender_name</strong></p>
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
            echo "<script>alert('Welcome email sent successfully');</script>";
        } else {
            echo "<script>alert('Failed to send the welcome email.');</script>";
        }
    } else {
        echo "<script>alert('Error:" . $conn->error . "');</script>";
        // echo throw new Exception($conn->error, $conn->errno);
    }
} catch (Exception $e) {
    if ($e->getCode() == 1062) {
        echo "<script>alert('The email address " . $email . " already registered');</script>";
    } else {
        echo "<script>alert('Exception:" . $e . "');</script>";
    }
}
echo "<script> window.location.href='home#authModal';</script>";

$conn->close();
