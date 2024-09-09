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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Application</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/applicantView.css" />
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
    <div class="container mt-0">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-9">
            </div>
            <div class="col-lg-3 col-md-3">
                <button type="button" id="psButton" class="btn btn-primary text-white">Apply More Problem Statements</button>
            </div>
            <div class="col-lg-6 col-md-6">
                <?php
                // SQL query to join all three tables based on 'uniqueApplicant'
                $sql = "SELECT a.*, t.*, d.* FROM applicant a  JOIN technical t ON a.uniqueApplicant = t.uniqueApplicant  JOIN documents d ON a.uniqueApplicant = d.uniqueApplicant WHERE a.uniqueId = '$uniqueId'";
                // Execute the query
                $result = $conn->query($sql);
                // Check if any records are found
                if ($result->num_rows > 0) {
                    // Loop through each row (applicant)
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <!-- Display Problem Statement as header -->
                        <h5 class="text-center mt-5" style="color: #890989;">Application: <?= htmlspecialchars($row['problemsStatement']) ?></h5>
                        <!-- Accordion structure starts -->
                        <div class="accordion" id="applicationAccordion">
                            <!-- Application Data Accordion -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne<?= $row['uniqueApplicant'] ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne<?= $row['uniqueApplicant'] ?>"
                                        aria-expanded="true" aria-controls="collapseOne<?= $row['uniqueApplicant'] ?>">
                                        Application Data
                                    </button>
                                </h2>
                                <div id="collapseOne<?= $row['uniqueApplicant'] ?>"
                                    class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne<?= $row['uniqueApplicant'] ?>"
                                    data-bs-parent="#applicationAccordion">
                                    <div class="accordion-body">
                                        <!-- Application Data with validation -->
                                        <?php if (!empty($row['applicantName'])): ?>
                                            <div class="row mb-2">
                                                <div class="col-6"><label class="h5">Name</label></div>
                                                <div class="col-6">
                                                    <p><?= htmlspecialchars($row['applicantName']) ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['email'])): ?>
                                            <div class="row mb-2">
                                                <div class="col-6"><label class="h5">Email</label></div>
                                                <div class="col-6">
                                                    <p><?= htmlspecialchars($row['email']) ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['contactNumber'])): ?>
                                            <div class="row mb-2">
                                                <div class="col-6"><label class="h5">Phone</label></div>
                                                <div class="col-6">
                                                    <p><?= htmlspecialchars($row['contactNumber']) ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['organizationName'])): ?>
                                            <div class="row mb-2">
                                                <div class="col-6"><label class="h5">Organization</label></div>
                                                <div class="col-6">
                                                    <p><?= htmlspecialchars($row['organizationName']) ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['postalAddress']) || !empty($row['city']) || !empty($row['state'])): ?>
                                            <div class="row mb-2">
                                                <div class="col-12"><label class="h5">Postal Address</label></div>
                                                <div class="col-12">
                                                    <p><?= htmlspecialchars($row['postalAddress']) ?>,
                                                        <?= htmlspecialchars($row['city']) ?> - <?= htmlspecialchars($row['state']) ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['category'])): ?>
                                            <div class="row mb-2">
                                                <div class="col-6"><label class="h5">Category</label></div>
                                                <div class="col-6">
                                                    <p><?= htmlspecialchars($row['category']) ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['applying'])): ?>
                                            <div class="row mb-2">
                                                <div class="col-6"><label class="h5">Applying For</label></div>
                                                <div class="col-6">
                                                    <p><?= htmlspecialchars($row['applying']) ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['industry'])): ?>
                                            <div class="row mb-2">
                                                <div class="col-6"><label class="h5">Industry</label></div>
                                                <div class="col-6">
                                                    <p><?= htmlspecialchars($row['industry']) ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['otherindustry'])): ?>
                                            <div class="row mb-2">
                                                <div class="col-6"><label class="h5">Other Industry</label></div>
                                                <div class="col-6">
                                                    <p><?= htmlspecialchars($row['otherindustry']) ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['applicationVerticals'])): ?>
                                            <div class="row mb-2">
                                                <div class="col-6"><label class="h5">Other Industry Vertical</label></div>
                                                <div class="col-6">
                                                    <p><?= htmlspecialchars($row['applicationVerticals']) ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['website'])): ?>
                                            <div class="row mb-2">
                                                <div class="col-6"><label class="h5">Website</label></div>
                                                <div class="col-6">
                                                    <p><?= htmlspecialchars($row['website']) ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Technical Data Accordion -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo<?= $row['uniqueApplicant'] ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo<?= $row['uniqueApplicant'] ?>"
                                        aria-expanded="false" aria-controls="collapseTwo<?= $row['uniqueApplicant'] ?>">
                                        Technical Data
                                    </button>
                                </h2>
                                <div id="collapseTwo<?= $row['uniqueApplicant'] ?>"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo<?= $row['uniqueApplicant'] ?>"
                                    data-bs-parent="#applicationAccordion">
                                    <div class="accordion-body">
                                        <!-- Technical Data with validation -->
                                        <?php if (!empty($row['domain'])): ?>
                                            <div class="row mb-2">
                                                <div class=""><label class="h5">Domain</label></div>
                                                <div class="">
                                                    <p><?= htmlspecialchars($row['domain']) ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['product'])): ?>
                                            <div class="row mb-2">
                                                <div class=""><label class="h5">Product/Solution</label></div>
                                                <div class="">
                                                    <p><?= htmlspecialchars($row['product']) ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['productFile'])): ?>
                                            <div class="row mb-2">
                                                <div class=""><label class="h5">Product File</label></div>
                                                <div class="">
                                                    <p><a href="https://5g6g-hackathon2024.tcoe.in/<?= htmlspecialchars($row['productFile']) ?>" target="_blank">Click Here</a></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['presentationVideo'])): ?>
                                            <div class="row mb-2">
                                                <div class=""><label class="h5">Power Point Presentation /two-minute Product Video</label></div>
                                                <div class="">
                                                    <p><a href="https://5g6g-hackathon2024.tcoe.in/<?= htmlspecialchars($row['presentationVideo']) ?>" target="_blank">Click Here</a></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['presentationURL'])): ?>
                                            <div class="row mb-2">
                                                <div class=""><label class="h5">YouTube URL / LinkedIn URL</label></div>
                                                <div class="">
                                                    <p><a href="https://5g6g-hackathon2024.tcoe.in/<?= htmlspecialchars($row['presentationURL']) ?>" target="_blank">Click Here</a></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['technologyLevel'])): ?>
                                            <div class="row mb-2">
                                                <div class=""><label class="h5">Technology Level</label></div>
                                                <div class="">
                                                    <p><?= htmlspecialchars($row['technologyLevel']) ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['proofPoC'])): ?>
                                            <div class="row mb-2">
                                                <div class=""><label class="h5">Proof of Concept</label></div>
                                                <div class="">
                                                    <p><a href="https://5g6g-hackathon2024.tcoe.in/<?= htmlspecialchars($row['proofPoC']) ?>" target="_blank">Click Here</a></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['describeProduct'])): ?>
                                            <div class="row mb-2">
                                                <div class=""><label class="h5">Describe Product</label></div>
                                                <div class="">
                                                    <p><?= htmlspecialchars($row['describeProduct']) ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['productPatent'])): ?>
                                            <div class="row mb-2">
                                                <div class=""><label class="h5">Patent Filed</label></div>
                                                <div class="">
                                                    <p><?= htmlspecialchars($row['productPatent']) ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['patentDetails'])): ?>
                                            <div class="row mb-2">
                                                <div class=""><label class="h5">Patent Details</label></div>
                                                <div class="">
                                                    <p><?= htmlspecialchars($row['patentDetails']) ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['similarProduct'])): ?>
                                            <div class="row mb-2">
                                                <div class=""><label class="h5">Similar Product</label></div>
                                                <div class="">
                                                    <p><?= htmlspecialchars($row['similarProduct']) ?></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['similarProductFile'])): ?>
                                            <div class="row mb-2">
                                                <div class=""><label class="h5">Similar Product File</label></div>
                                                <div class="">
                                                    <p><a href="https://5g6g-hackathon2024.tcoe.in/<?= htmlspecialchars($row['similarProductFile']) ?>" target="_blank">Click Here</a></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Document Data Accordion -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree<?= $row['uniqueApplicant'] ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree<?= $row['uniqueApplicant'] ?>"
                                        aria-expanded="false" aria-controls="collapseThree<?= $row['uniqueApplicant'] ?>">
                                        Document Data
                                    </button>
                                </h2>
                                <div id="collapseThree<?= $row['uniqueApplicant'] ?>"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingThree<?= $row['uniqueApplicant'] ?>"
                                    data-bs-parent="#applicationAccordion">
                                    <div class="accordion-body">
                                        <!-- Document Data with validation -->
                                        <?php if (!empty($row['shareholding'])): ?>
                                            <div class="row mb-2">
                                                <div class=""><label class="h5">Shareholding Document</label></div>
                                                <div class="">
                                                    <p><a href="https://5g6g-hackathon2024.tcoe.in/<?= htmlspecialchars($row['shareholding']) ?>" target="_blank">Click Here</a></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['incorporation'])): ?>
                                            <div class="row mb-2">
                                                <div class=""><label class="h5">Incorporation Certificate</label></div>
                                                <div class="">
                                                    <p><a href="https://5g6g-hackathon2024.tcoe.in/<?= htmlspecialchars($row['incorporation']) ?>" target="_blank">Click Here</a></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($row['idProof'])): ?>
                                            <div class="row mb-2">
                                                <div class=""><label class="h5">ID Proof</label></div>
                                                <div class="">
                                                    <p><a href="https://5g6g-hackathon2024.tcoe.in/<?= htmlspecialchars($row['idProof']) ?>" target="_blank">Click Here</a></p>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion structure ends -->
                <?php
                    }
                } else {
                    echo "<p>No application data available.</p>";
                }
                ?>
            </div>
        </div>
    </div>
    <script>
        var psButton = document.getElementById("psButton");
        psButton.addEventListener("click", function() {
            alert('You will be redirected to the problem statements section.');
            window.location.href = 'problem-statements';
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>