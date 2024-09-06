<?php
session_start();
include 'db_connect.php';
if (!isset($_SESSION['uniqueId'])) {
    header("Location: home");
    exit();
}
$uniqueId = $_SESSION['uniqueId'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/profile.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <a class="navbar-brand p-0" href="participant">
            <img
                src="./assets/images/Tcoe_logo.jpg"
                class="logo ms-5 p-0"
                alt="" />
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="profileDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-person-circle" style="font-size: 2rem"></i>
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item" href="participant">Home</a></li>
                        <li><a class="dropdown-item" href="profile">Profile</a></li>
                        <li><a class="dropdown-item" href="applicantView">My Application</a></li>
                        <li><a class="dropdown-item" href="logout">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Offcanvas Menu for Mobile -->
    <div
        class="offcanvas offcanvas-end w-50"
        tabindex="-1"
        id="offcanvasMenu">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="participant">Home</a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="applicantView">My Application</a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="applicantView">Logout</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="row g-0">
        <div class="col-sm-6 m-auto mt-5">
            <div class="profile-card">
                <?php
                $fullname = '';
                $email = '';
                $categoryType = '';
                $categoryName = '';
                $sql = "SELECT * FROM users WHERE uniqueId = '$uniqueId' ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $fullname = $row['fullname'];
                    $email = $row['email'];
                    $categoryType = $row['categoryType'];
                    $categoryName = $row['categoryName'];
                } else {
                    echo "<script>alert('No record found for ID');</script>";
                }
                ?>
                <h3 class=" p-4">My Profile</h3>
                <div class="bg">
                    <h5 class="p-2">Personal Data</h5>
                </div>
                <div class="profile-section">
                    <p><strong>Name</strong><br><?= $fullname ?></p>
                    <p><strong>Email</strong><br><?= $email ?></p>
                    <p><strong>Specialization</strong><br><?= $categoryType ?></p>
                    <p><strong>Organization Name</strong><br><?= $categoryName ?></p>
                </div>
                <div class="accordion" id="resetPasswordAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Reset Password
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#resetPasswordAccordion">
                            <div class="accordion-body">
                                <form method="post" action="changepassword.php">
                                    <input type="hidden" name="uniqueId" value="<?php echo $uniqueId; ?>">
                                    <div class="mb-3">
                                        <label for="password1" class="form-label">Enter Old Password</label>
                                        <input type="password" class="form-control" name="password1" id="password1"
                                            placeholder="**********">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Enter New Password</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="**********">
                                    </div>
                                    <button type="submit" class="btnc  btn w-100 text-white">Change Password</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>

</html>