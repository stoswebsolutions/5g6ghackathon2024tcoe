<?php
// Include database connection
include 'db_connect.php';

// Set the directory where the folders will be created
$baseDir = './assets/users/';  // Replace this with your base directory path

// Query to get uniqueId from the applicant table
$sql = "SELECT uniqueId FROM applicant";
$result = $conn->query($sql);

// Check if the query returns any rows
if ($result->num_rows > 0) {
    // Loop through each result row
    while ($row = $result->fetch_assoc()) {
        $uniqueId = $row['uniqueId'];
        
        // Folder path based on uniqueId
        $folderPath = $baseDir . $uniqueId;

        // Check if folder doesn't exist, then create it
        if (!file_exists($folderPath)) {
            if (mkdir($folderPath, 0777, true)) {
                echo "Folder created for uniqueId: $uniqueId<br>";
            } else {
                echo "Failed to create folder for uniqueId: $uniqueId<br>";
            }
        } else {
            echo "Folder already exists for uniqueId: $uniqueId<br>";
        }
    }
} else {
    echo "No records found in the applicant table.";
}

// Close the database connection
$conn->close();
?>
