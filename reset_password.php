<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Forms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/application.css" />
</head>

<body>
    <div class="row g-0">
        <div class="col-sm-6 m-auto text-primary">
            <div class="container mt-5">
                <?php
                date_default_timezone_set('Asia/Kolkata');
                // Include the database connection
                include 'db_connect.php';

                if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['token'])) {
                    $token = $_GET['token'];

                    // Check if the token is valid and hasn't expired
                    $sql = "SELECT uniqueId, email FROM users WHERE reset_token = ? AND reset_expiry > NOW()";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("s", $token);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        // Token is valid, show the reset password form
                        $row = $result->fetch_assoc();
                        $uniqueId = $row['uniqueId'];
                ?>

                        <form method="post" action="updatepassword.php">
                            <input type="hidden" name="uniqueId" value="<?php echo $uniqueId; ?>">
                            <label for="password">Enter your new password:</label>
                            <input type="password" class="form-control" placeholder="New Password" name="password" id="password" required>
                            <input type="submit" class="btn btn-primary mt-3" value="Reset Password">
                        </form>

                <?php
                    } else {
                        echo "<script>alert('Invalid or expired token.');</script>";
                        echo "<script> window.location.href='home#authModal';</script>";
                    }

                    $stmt->close();
                    $conn->close();
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>

</html>