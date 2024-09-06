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
                <h2 class="">My Application</h2>
            </div>
            <div class="col-lg-3 col-md-3">
                <button type="button" id="psButton" class="btn btn-primary text-white">Apply More Problem Statements</button>
            </div>
            <div class="col-lg-6 col-md-6">
                <?php
                $sql = "SELECT a.*,t.*,d.* FROM applicant a JOIN technical t ON a.uniqueApplicant = t.uniqueApplicant JOIN documents d ON a.uniqueApplicant = d.uniqueApplicant WHERE a.uniqueId = '$uniqueId' ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <h5 class="text-center mt-5" style="color: #890989;">Application: <?= $row['problemsStatement'] ?></h5>
                        <div class="accordion" id="applicationAccordion">
                            <!-- Application Data -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne<?= $row['uniqueApplicant'] ?>">
                                    <button
                                        class="accordion-button"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne<?= $row['uniqueApplicant'] ?>"
                                        aria-expanded="true"
                                        aria-controls="collapseOne<?= $row['uniqueApplicant'] ?>">
                                        Application Data
                                    </button>
                                </h2>
                                <div
                                    id="collapseOne<?= $row['uniqueApplicant'] ?>"
                                    class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne<?= $row['uniqueApplicant'] ?>"
                                    data-bs-parent="#applicationAccordion">
                                    <div class="accordion-body">
                                        <div class="row mb-2">
                                            <div class="col-6">
                                                <div class="col-6"><label class="h5">Name</label></div>
                                                <div class="col-6">
                                                    <p><?= $row['applicantName'] ?></p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="col-6"><label class="h5">Email</label></div>
                                                <div class="col-6">
                                                    <p><?= $row['email'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-6">
                                                <div class="col-6"><label class="h5">Phone</label></div>
                                                <div class="col-6">
                                                    <p><?= $row['contactNumber'] ?></p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="col-6"><label class="h5">Organization</label></div>
                                                <div class="col-6">
                                                    <p><?= $row['organizationName'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-12">
                                                <div class="col-12"><label class="h5">Postal Address</label></div>
                                                <div class="col-12">
                                                    <p><?= $row['postalAddress'] ?><br>
                                                        <?= $row['city'] ?>-<?= $row['state'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-6">
                                                <div class="col-6"><label class="h5">Applying For</label></div>
                                                <div class="col-6">
                                                    <p><?= $row['applying'] ?></p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="col-6"><label class="h5">Industry</label></div>
                                                <div class="col-6">
                                                    <p><?= $row['industry'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-6">
                                                <div class="col-6"><label class="h5">Industry Vertical</label></div>
                                                <div class="col-6">
                                                    <p>Environment</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="col-6"><label class="h5">Website</label></div>
                                                <div class="col-6">
                                                    <p><?= $row['website'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Technical Data -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo<?= $row['uniqueApplicant'] ?>">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo<?= $row['uniqueApplicant'] ?>"
                                        aria-expanded="false"
                                        aria-controls="collapseTwo<?= $row['uniqueApplicant'] ?>">
                                        Technical Data
                                    </button>
                                </h2>
                                <div
                                    id="collapseTwo<?= $row['uniqueApplicant'] ?>"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo<?= $row['uniqueApplicant'] ?>"
                                    data-bs-parent="#applicationAccordion">
                                    <div class="accordion-body">
                                        <div class="row mb-2">
                                            <div class=""><label class="h5">Domain</label></div>
                                            <div class="">
                                                <p><?= $row['domain'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class=""><label class="h5">Brief about your product/solution</label></div>
                                            <div class="">
                                                <p><?= $row['product'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class=""><label class="h5">Technical Details or Product/Solution</label></div>
                                            <div class="">
                                                <p><a href="<?= $row['productFile'] ?>" target="_new" class="text-decoration-none"><?= $row['productFile'] ?></a></p>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class=""><label class="h5">Technology Readiness Level</label></div>
                                            <div class="">
                                                <p><?= $row['technologyLevel'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class=""><label class="h5">Proof of POC</label></div>
                                            <div class="">
                                                <p><?= $row['proofPoC'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class=""><label class="h5">Describe Solution</label></div>
                                            <div class="">
                                                <p><?= $row['describeProduct'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class=""><label class="h5">Patent Filed</label></div>
                                            <div class="">
                                                <p><?= $row['productPatent'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class=""><label class="h5">Patent Details</label></div>
                                            <div class="">
                                                <p><?= $row['patentDetails'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class=""><label class="h5">Similar Product</label></div>
                                            <div class="">
                                                <p><?= $row['similarProduct'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class=""><label class="h5">Similar Product Details</label></div>
                                            <div class="">
                                                <p><a href="<?= $row['similarProductFile'] ?>" target="_new" class="text-decoration-none"><?= $row['similarProductFile'] ?></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Document Data -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree<?= $row['uniqueApplicant'] ?>">
                                    <button
                                        class="accordion-button collapsed"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree<?= $row['uniqueApplicant'] ?>"
                                        aria-expanded="false"
                                        aria-controls="collapseThree<?= $row['uniqueApplicant'] ?>">
                                        Document Data
                                    </button>
                                </h2>
                                <div
                                    id="collapseThree<?= $row['uniqueApplicant'] ?>"
                                    class="accordion-collapse collapse"
                                    aria-labelledby="headingThree<?= $row['uniqueApplicant'] ?>"
                                    data-bs-parent="#applicationAccordion">
                                    <div class="accordion-body">
                                        <div class="row mb-2">
                                            <div class=""><label class="h5">Incorporation Certificate</label></div>
                                            <div class="">
                                                <p><a href="<?= $row['incorporation'] ?>" target="_new" class="text-decoration-none"><?= $row['incorporation'] ?></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <h4>No record found for ID</h4>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <script>
        var psButton = document.getElementById("psButton");
        psButton.addEventListener("click", function() {
            alert('You will be redirected to the problem statements section.');
            window.location.href = 'problemstatements';
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>