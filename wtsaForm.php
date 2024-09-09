<?php
include 'db_connect.php'; // Include your database connection file

// Set the timezone to Indian Standard Time (IST)
date_default_timezone_set('Asia/Kolkata');

// Common form data
$status = 1;
$createAt = date('Y-m-d H:i:s');

function validate_input($data)
{
    return htmlspecialchars(trim($data));
}

$firstname = validate_input($_POST['firstname']);
$lastname = validate_input($_POST['lastname']);
$email = validate_input($_POST['email']);
$phone = validate_input($_POST['phone']);
$institution = validate_input($_POST['institution']);
$stream = validate_input($_POST['stream']);
$state = validate_input($_POST['state']);
$city = validate_input($_POST['city']);

// Server-side validation (example for required fields)
if (empty($firstname) || empty($lastname) || empty($email) || empty($phone) || empty($institution) || empty($stream) || empty($state) || empty($city)) {
    die('All required fields must be filled out.');
}

// Insert data into the database using prepared statements
try {
    $sql = "INSERT INTO `wtsaRegitrations` (`firstname`, `lastname`, `email`, `phone`, `institution`, `stream`, `state`, `city`, `status`, `createAt`) VALUES ('$firstname', '$lastname', '$email', '$phone', '$institution', '$stream', '$state', '$city', '$status', '$createAt')";
    if ($conn->query($sql) === TRUE) {
        $name = $firstname . ' ' . $lastname;
        $registration_date = date('Y-m-d');
        $agenda = ['WTSA - Agenda - Delhi', 'WTSA - Agenda - Hyderabad', 'WTSA - Agenda - Bangalore'];

        $subject = "Welcome to WTSA!";

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
    <title>Welcome to WTSA</title>
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
        ul {
            padding-left: 20px;
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
        <h2>Hi $name,</h2>
        <p>Welcome to <strong>WTSA</strong>! We are excited to inform you that your registration was successful.</p>
        
        <h3>Registration Details:</h3>
        <ul>
            <li><strong>Username:</strong> $name</li>
            <li><strong>Registration Date:</strong> $registration_date</li>
        </ul>

        <h3>WTSA Agendas:</h3>
        <a href='https://drive.google.com/file/d/11bdg3FIRMBuRqQPDO65PfPRH8nGCeaxS/view' class='btn'><strong>WTSA</strong> - Agenda - Delhi</a><br>
        <a href='https://drive.google.com/file/d/1CClO-I6TFviAoWtsvQ66F3qZEZnDjqs5/view' class='btn'><strong>WTSA</strong> - Agenda - Hyderabad​</a><br>
        <a href='https://drive.google.com/file/d/1rnE6na6ViWvuHT-ANAvTb1YACBzoK-_p/view' class='btn'><strong>WTSA</strong> - Agenda - Bangalore</a>

        <p>Best regards,</p>
        <p><strong>WTSA</strong></p>
        
    </div>
</body>
</html>
";

        if (mail($to, $subject, $message, $headers)) {
            echo "<script>alert('WTSA Reistration submission email sent successfully to {$firstname} {$lastname}.');</script>";
        } else {
            echo "<script>alert('Failed to send the application submission email.');</script>";
        }
    }
} catch (Exception $e) {
    // Error handling
    echo "<script>alert('" . $e->getMessage() . "');</script>";
}
echo "<script> window.location.href='home#wtsaforms';</script>";
