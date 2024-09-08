<?php
session_start();
include 'db_connect.php'; // Include your database connection file

// Set the timezone to Indian Standard Time (IST)
date_default_timezone_set('Asia/Kolkata');

// Common form data
$status = 1;
$createAt = date('Y-m-d H:i:s');
$uniqueId = $_SESSION['uniqueId'];

// Function to validate and sanitize input
function validate_input($data)
{
  return htmlspecialchars(trim($data));
}

// Validate form inputs
$applicantName = validate_input($_POST['applicantName']);
$organizationName = validate_input($_POST['organizationName']);
$contactNumber = validate_input($_POST['contactNumber']);
$email = validate_input($_POST['email']);
$city = validate_input($_POST['city']);
$state = validate_input($_POST['state']);
$postalAddress = validate_input($_POST['postalAddress']);
$category = validate_input($_POST['category']);
$applying = validate_input($_POST['applying']);
$industry = validate_input($_POST['industry']);
$otherindustry = isset($_POST['otherindustry']) ? validate_input($_POST['otherindustry']) : '';
$problemsStatement = validate_input($_POST['problemsStatement']);
$applicationVerticals = isset($_POST['applicationVerticals']) ? validate_input($_POST['applicationVerticals']) : '';
$website = isset($_POST['website']) ? validate_input($_POST['website']) : '';


$domain = isset($_POST['domain']) ? validate_input($_POST['domain']) : '';
$product = isset($_POST['product']) ? validate_input($_POST['product']) : '';
$technologyLevel = validate_input($_POST['technologyLevel']);
$describeProduct = isset($_POST['describeProduct']) ? validate_input($_POST['describeProduct']) : '';
$productPatent = validate_input($_POST['productPatent']);
$patentDetails = isset($_POST['patentDetails']) ? validate_input($_POST['patentDetails']) : '';
$similarProduct = validate_input($_POST['similarProduct']);

// File validation function
function validate_file($file, $allowed_types)
{
  $file_type = mime_content_type($file['tmp_name']);
  return in_array($file_type, $allowed_types);
}

$folderName = 'assets/users/' . $uniqueId;
if (!file_exists($folderName)) {
  $folderName = "assets/users";
}

// Handle file uploads
$allowed_doc_types = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
$allowed_image_types = ['image/jpeg', 'image/png', 'image/gif'];

$productFile = '';
if ($_FILES['productFile']['error'] === UPLOAD_ERR_OK && validate_file($_FILES['productFile'], $allowed_doc_types)) {
  $$productFile = $_FILES['productFile']['name'];
  $productFileExtension = pathinfo($productFile, PATHINFO_EXTENSION);
  $productFileName = 'productFile_' . date('YmdHis') . '.' . $productFileExtension;
  $productFilePath = $folderName . '/' . $productFileName;
  move_uploaded_file($_FILES['productFile']['tmp_name'], $productFilePath);
}

$proofPoC = '';
if ($_FILES['proofPoC']['error'] === UPLOAD_ERR_OK && validate_file($_FILES['proofPoC'], $allowed_image_types)) {
  $proofPoC = $_FILES['proofPoC']['name'];
  $proofPoCExtension = pathinfo($proofPoC, PATHINFO_EXTENSION);
  $proofPoCName = 'proofPoC_' . date('YmdHis') . '.' . $proofPoCExtension;
  $proofPoCPath = $folderName . '/' . $proofPoCName;
  move_uploaded_file($_FILES['proofPoC']['tmp_name'], $proofPoCPath);
}

$similarProductFile = '';
if ($_FILES['similarProductFile']['error'] === UPLOAD_ERR_OK && validate_file($_FILES['similarProductFile'], $allowed_doc_types)) {
  $similarProductFile = $_FILES['similarProductFile']['name'];
  $similarProductFileExtension = pathinfo($similarProductFile, PATHINFO_EXTENSION);
  $similarProductFileName = 'similarProductFile_' . date('YmdHis') . '.' . $similarProductFileExtension;
  $similarProductFilePath = $folderName . '/' . $similarProductFileName;
  move_uploaded_file($_FILES['similarProductFile']['tmp_name'], $similarProductFilePath);
}

$shareholding = '';
if ($_FILES['shareholding']['error'] === UPLOAD_ERR_OK && validate_file($_FILES['shareholding'], $allowed_doc_types)) {
  $shareholding = $_FILES['shareholding']['name'];
  $shareholdingExtension = pathinfo($shareholding, PATHINFO_EXTENSION);
  $shareholdingName = 'shareholding_' . date('YmdHis') . '.' . $shareholdingExtension;
  $shareholdingPath = $folderName . '/' . $shareholdingName;
  move_uploaded_file($_FILES['shareholding']['tmp_name'], $shareholdingPath);
}

$incorporation = '';
if ($_FILES['incorporation']['error'] === UPLOAD_ERR_OK && validate_file($_FILES['incorporation'], $allowed_doc_types)) {
  $incorporation = $_FILES['incorporation']['name'];
  $incorporationExtension = pathinfo($incorporation, PATHINFO_EXTENSION);
  $incorporationName = 'incorporation_' . date('YmdHis') . '.' . $incorporationExtension;
  $incorporationPath = $folderName . '/' . $incorporationName;
  move_uploaded_file($_FILES['incorporation']['tmp_name'], $incorporationPath);
}

$idProof = '';
if ($_FILES['idProof']['error'] === UPLOAD_ERR_OK && validate_file($_FILES['idProof'], $allowed_doc_types)) {
  $idProof = $_FILES['idProof']['name'];
  $idProofExtension = pathinfo($idProof, PATHINFO_EXTENSION);
  $idProofName = 'idProof_' . date('YmdHis') . '.' . $idProofExtension;
  $idProofPath = $folderName . '/' . $idProofName;
  move_uploaded_file($_FILES['idProof']['tmp_name'], $idProofPath);
}

// Server-side validation (example for required fields)
if (empty($applicantName) || empty($organizationName) || empty($contactNumber) || empty($email) || empty($city) || empty($state) || empty($postalAddress) || empty($category) || empty($applying) || empty($industry) || empty($problemsStatement) || empty($product)) {
  die('All required fields must be filled out.');
}

// Insert data into the database using prepared statements
try {
  $sql = "INSERT INTO applicant (applicantName, organizationName, contactNumber, email, city, state, postalAddress, category, applying, industry, otherindustry, problemsStatement, applicationVerticals, website, status, createAt, uniqueId)
        VALUES ('$applicantName', '$organizationName', '$contactNumber', '$email', '$city', '$state', '$postalAddress', '$category', '$applying', '$industry', '$otherindustry', '$problemsStatement', '$applicationVerticals', '$website', '$status', '$createAt', '$uniqueId')";
  if ($conn->query($sql) === TRUE) {
    $uniqueApplicant = $conn->insert_id;
    $sql1 = "INSERT INTO technical (domain, product, productFile, presentationVideo, technologyLevel, proofPoC, describeProduct, productPatent, patentDetails, similarProduct, similarProductFile, status, createAt, uniqueId, uniqueApplicant) VALUES ('$domain', '$product', '$productFilePath', '$presentationVideo', '$technologyLevel', '$proofPoCPath', '$describeProduct', '$productPatent', '$patentDetails', '$similarProduct', '$similarProductFilePath', '$status', '$createAt', '$uniqueId', '$uniqueApplicant')";
    $sql2 = "INSERT INTO documents (shareholding,incorporation, idProof, status, createAt, uniqueId, uniqueApplicant) VALUES ('$shareholding', '$incorporationPath', '$idProofPath', '$status', '$createAt', '$uniqueId', '$uniqueApplicant')";
    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {

      $applicant_name = $applicant_name;
      $hackathon_name = '5G Hackathon';
      $sender_name = 'Deepak Boorla';
      $sender_position = 'Organizer';
      $organization_name = 'TCOE India';
      $contact_email = '5g6ghack24@tcoe.in';
      $contact_number = '+91 84668-83949';

      $subject = "Your Hackathon Application Has Been Successfully Submitted!";

      $to = $email;
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= "From: 5g6ghack24@tcoe.in" . "\r\n";
      $headers .= "Reply-To: 5g6ghack24@tcoe.in" . "\r\n";
      $headers .= "X-Mailer: PHP/" . phpversion();

      // Email body
      $message = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Your Hackathon Application</title>
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
        h1, h2, h3 {
            color: #333333;
        }
        p {
            color: #555555;
            line-height: 1.6;
        }
        .btn {
            background-color: #28a745;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #218838;
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
        <h2>Hi $applicant_name,</h2>
        <p>
            Thank you for applying to the <strong>$hackathon_name</strong>! We are excited to inform you that your application has been successfully submitted.
        </p>
        <h3>Application Details:</h3>
        <p>What's Next?</p>
        <p>
            Our team will review your application and notify you of the next steps via email. Please keep an eye on your inbox for updates. Meanwhile, if you’re interested in any of the other problem statements, please feel free to apply for that challenge as well!
        </p>
        <p>
            If you have any questions or need further assistance, feel free to reach out to us at <a href='mailto:$contact_email'>$contact_email</a> or call us at $contact_number.
        </p>
        <p>We look forward to seeing your innovative ideas in action!</p>

        <p>Best regards,</p>
        <p><strong>$sender_name</strong><br>
        $sender_position<br>
        $organization_name</p>

        <footer>
            <p>$organization_name, Contact Information: <a href='mailto:$contact_email'>$contact_email</a></p>
        </footer>
    </div>
</body>
</html>
";


      if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Application submission email sent successfully to {$organizerName}.');</script>";
      } else {
        echo "<script>alert('Failed to send the application submission email.');</script>";
      }
    }
  }
  // echo "Application submitted successfully.";
} catch (Exception $e) {
  // Error handling
  // $a =  "Error: " . $e->getMessage();
  echo "<script>alert('" . $e->getMessage() . "');</script>";
}
echo "<script> window.location.href='applicantView';</script>";
