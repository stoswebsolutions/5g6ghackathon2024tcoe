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

$similarProductFile = '';
if ($_FILES['similarProductFile']['error'] === UPLOAD_ERR_OK && validate_file($_FILES['similarProductFile'], $allowed_doc_types)) {
  $similarProductFile = $_FILES['similarProductFile']['name'];
  $similarProductFileExtension = pathinfo($similarProductFile, PATHINFO_EXTENSION);
  $similarProductFileName = 'similarProductFile_' . date('YmdHis') . '.' . $similarProductFileExtension;
  $similarProductFilePath = $folderName . '/' . $similarProductFileName;
  move_uploaded_file($_FILES['similarProductFile']['tmp_name'], $similarProductFilePath);
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
if (empty($applicantName) || empty($organizationName) || empty($contactNumber) || empty($email) || empty($city) || empty($state) || empty($postalAddress) || empty($category) || empty($applying) || empty($industry) || empty($problemsStatement)) {
  die('All required fields must be filled out.');
}

// Insert data into the database using prepared statements
try {
  $sql = "INSERT INTO applicant (applicantName, organizationName, contactNumber, email, city, state, postalAddress, category, applying, industry, otherindustry, problemsStatement, applicationVerticals, website, status, createAt, uniqueId)
        VALUES ('$applicantName', '$organizationName', '$contactNumber', '$email', '$city', '$state', '$postalAddress', '$category', '$applying', '$industry', '$otherindustry', '$problemsStatement', '$applicationVerticals', '$website', '$status', '$createAt', '$uniqueId')";
  if ($conn->query($sql) === TRUE) {
    $uniqueApplicant = $conn->insert_id;
    $sql1 = "INSERT INTO technical (domain, product, productFile, technologyLevel, describeProduct, productPatent, patentDetails, similarProduct, similarProductFile, status, createAt, uniqueId, uniqueApplicant) VALUES ('$domain', '$product', '$productFilePath', '$technologyLevel', '$describeProduct', '$productPatent', '$patentDetails', '$similarProduct', '$similarProductFilePath', '$status', '$createAt', '$uniqueId', '$uniqueApplicant')";
    $sql2 = "INSERT INTO documents (incorporation, idProof, status, createAt, uniqueId, uniqueApplicant) VALUES ('$incorporationPath', '$idProofPath', '$status', '$createAt', '$uniqueId', '$uniqueApplicant')";
    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
      $to = $email;
      $subject = 'Application Submission for 5G/6G Hackathon';
      $organizerName = $organizationName;
      $teamName = $applicantName;
      $projectTitle = $problemsStatement;
      $teamEmail = $email;
      $teamPhone = $contactNumber;

      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= "From: 5g6ghack24@tcoe.in" . "\r\n";
      $headers .= "Reply-To: 5g6ghack24@tcoe.in" . "\r\n";
      $headers .= "X-Mailer: PHP/" . phpversion();

      // Email body
      $message = "
<html>
<head>
  <title>Application Submission for 5G/6G Hackathon</title>
</head>
<body>
  <p>Dear {$organizerName},</p>
  <p>We are excited to submit our application for the <strong>5G/6G Hackathon</strong>.</p>
  <p><strong>Team Details:</strong></p>
  <ul>
    <li><strong>Applicant Name:</strong> {$teamName}</li>
    <li><strong>Problem Statement:</strong> {$projectTitle}</li>
    <li><strong>Contact Information:</strong></li>
    <ul>
      <li><strong>Email:</strong> {$teamEmail}</li>
      <li><strong>Phone:</strong> {$teamPhone}</li>
    </ul>
  </ul>
  <p>We will let you know once your application gets shortlisted. Thank you for your patience.</p>
  <br>
  <p>Thank you,</p>
  <p>Team – TCoE</p>
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
