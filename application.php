<?php
session_start();
if (!isset($_SESSION['uniqueId'])) {
  header("Location: home");
  exit();
}
$problemStatementValue = "5G & 6G HACKATHON-2024 Idea Submission";
if (isset($_POST['problemStatementValue']) && !empty(trim($_POST['problemStatementValue']))) {
  $problemStatementValue = $_POST['problemStatementValue'];
} else {
?>
  <script>
    alert('Choose at least one problem statements.');
    window.location.href = 'participant#problem-statements';
  </script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Application Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/application.css" />
</head>

<body class="container-fluid">
  <header class="navbar navbar-expand-lg navbar-light p-0 sticky-top">
    <div class="container-fluid" id="home">
      <a class="navbar-brand" href="participant">
        <img src="assets/images/Tcoe_logo.jpg" alt="Logo" class="w-25" />
      </a>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="bi bi-person-circle" style="font-size: 2rem"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
            <li><a class="dropdown-item" href="participant">Home</a></li>
            <li><a class="dropdown-item" href="profile">Profile</a></li>
            <li><a class="dropdown-item" href="applicantView">My Application</a></li>
            <li><a class="dropdown-item" href="logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </header>
  <div class="row">
    <h4 class="text-center">Application:<span class="mx-2"><?= $problemStatementValue ?></span></h4>
    <div class="col-sm-6 offset-sm-3">
      <form name="applicationForm" action="applicant" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <div class="stepper-wrapper">
          <div class="stepper-item">
            <div class="step-counter">1</div>
            <div class="step-name">
              <a href="#applicant" class="nav-link active">Applicant Data</a>
            </div>
          </div>
          <div class="stepper-item">
            <div class="step-counter">2</div>
            <div class="step-name">
              <a href="#techincal" class="nav-link">Techinical Data</a>
            </div>
          </div>
          <div class="stepper-item">
            <div class="step-counter">3</div>
            <div class="step-name">
              <a href="#document" class="nav-link">Document Data</a>
            </div>
          </div>
        </div>
        <div class="mt-3">
          <div id="applicant">
            <div class="head">
              <h5 class="text-white text-center p-2">Applicant Details</h5>
            </div>
            <div class="container">
              <div class="form-group mb-3">
                <label for="applicantName"><span style="color: red">*</span>Name:</label>
                <input type="text" id="applicantName" name="applicantName" class="form-control">
                <div id="applicantNameError" class="error"></div>
              </div>
              <div class="form-group mb-3">
                <label for="organizationName"><span style="color: red">*</span>Organization Name:</label>
                <input type="text" id="organizationName" name="organizationName" class="form-control">
                <div id="organizationNameError" class="error"></div>
              </div>
              <div class="form-group mb-3">
                <label for="contactNumber"><span style="color: red">*</span>Contact Number:</label>
                <input type="text" id="contactNumber" name="contactNumber" class="form-control" pattern="\d{10}">
                <div id="contactNumberError" class="error"></div>
              </div>
              <div class="form-group mb-3">
                <label for="email"><span style="color: red">*</span>Email:</label>
                <input type="email" id="email" name="email" class="form-control">
                <div id="emailError" class="error"></div>
              </div>
              <div class="form-group mb-3">
                <label for="city"><span style="color: red">*</span>City:</label>
                <input type="text" id="city" name="city" class="form-control">
                <div id="cityError" class="error"></div>
              </div>
              <div class="form-group mb-3">
                <label for="state"><span style="color: red">*</span>State:</label>
                <select id="state" name="state" class="form-select">
                  <option value="" disabled selected>Select</option>
                  <option value="Andhra Pradesh">Andhra Pradesh</option>
                  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                  <option value="Assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                  <option value="Goa">Goa</option>
                  <option value="Gujarat">Gujarat</option>
                  <option value="Haryana">Haryana</option>
                  <option value="Himachal Pradesh">Himachal Pradesh</option>
                  <option value="Jharkhand">Jharkhand</option>
                  <option value="Karnataka">Karnataka</option>
                  <option value="Kerala">Kerala</option>
                  <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                  <option value="Manipur">Manipur</option>
                  <option value="Meghalaya">Meghalaya</option>
                  <option value="Mizoram">Mizoram</option>
                  <option value="Nagaland">Nagaland</option>
                  <option value="Odisha">Odisha</option>
                  <option value="Punjab">Punjab</option>
                  <option value="Rajasthan">Rajasthan</option>
                  <option value="Sikkim">Sikkim</option>
                  <option value="Tamil Nadu">Tamil Nadu</option>
                  <option value="Telangana">Telangana</option>
                  <option value="Tripura">Tripura</option>
                  <option value="Uttar Pradesh">Uttar Pradesh</option>
                  <option value="Uttarakhand">Uttarakhand</option>
                  <option value="West Bengal">West Bengal</option>
                  <option disabled>-------------------</option>
                  <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                  <option value="Chandigarh">Chandigarh</option>
                  <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                  <option value="Lakshadweep">Lakshadweep</option>
                  <option value="Delhi">Delhi (National Capital Territory)</option>
                  <option value="Puducherry">Puducherry</option>
                  <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                  <option value="Ladakh">Ladakh</option>
                </select>
                <div id="stateError" class="error"></div>
              </div>
              <div class="form-group mb-3">
                <label for="postalAddress"><span style="color: red">*</span>Postal Address:</label>
                <input type="text" id="postalAddress" name="postalAddress" class="form-control">
                <div id="postalAddressError" class="error"></div>
              </div>
              <div class="form-group mb-3">
                <label for="category"><span style="color: red">*</span>Please select your category:</label>
                <select id="category" name="category" class="form-select">
                  <option value="" disabled selected>Select</option>
                  <option value="Student">Student</option>
                  <option value="Startup">Startup</option>
                  <option value="Corporate professional">Corporate professional</option>
                  <option value="Academia (Professor/research scholars)">
                    Academia (Professor/research scholars)
                  </option>
                </select>
                <div id="categoryError" class="error"></div>
              </div>
              <div class="form-group mb-3">
                <label for="applying"><span style="color: red">*</span>Applying as:</label>
                <select id="applying" name="applying" class="form-select">
                  <option value="" disabled selected>Select</option>
                  <option value="Individual">Individual</option>
                  <option value="Team">Team</option>
                </select>
                <div id="applyingError" class="error"></div>
              </div>
              <div class="form-group mb-3">
                <label for="industry"><span style="color: red">*</span>Industry Vertical:</label>
                <select id="industry" name="industry" class="form-select">
                  <option value="" disabled selected>Select</option>
                  <option value="AgriTech & Livestock">AgriTech & Livestock</option>
                  <option value="Healthcare, Education & Governance">
                    Healthcare, Education & Governance
                  </option>
                  <option value="Environment, Public Safety & Disaster Management">
                    Environment, Public Safety & Disaster Management
                  </option>
                  <option value="Enterprise transformation, Industry 4.0">
                    Enterprise transformation, Industry 4.0
                  </option>
                  <option value="Smart Cities & Infrastructure">
                    Smart Cities & Infrastructure
                  </option>
                  <option value="Cyber Security">Cyber Security</option>
                  <option value="Banking, Finance & Insurance">Banking, Finance & Insurance</option>
                  <option value="Logistics & Transportation">Logistics & Transportation</option>
                  <option value="Multimedia & Broadcast">Multimedia & Broadcast</option>
                  <option value="Satellite">Satellite</option>
                  <option value="Others">Others</option>
                </select>
                <div id="industryError" class="error"></div>
              </div>
              <div class="form-group mb-3" id="otherindustryId" style="display: none;">
                <label for="otherindustry">Other Industry Vertical (if any):</label>
                <input type="text" id="otherindustry" name="otherindustry" class="form-control">
                <div id="otherindustryError" class="error"></div>
              </div>
              <div class="form-group mb-3" id="problemsStatement1" style="display: none;">
                <label for="problemsStatement"><span style="color: red">*</span>Problem Statement:</label>
                <input type="text" id="problemsStatement" name="problemsStatement" value="<?= $problemStatementValue ?>" class="form-control">
                <div id="problemsStatementError" class="error"></div>
              </div>
              <?php
              if ($problemStatementValue === "Suo Moto") {
              ?>
                <div class="form-group mb-3">
                  <label for="applicationVerticals">Please select your Application Verticals:</label>
                  <select id="applicationVerticals" name="applicationVerticals" class="form-select">
                    <option value="" disabled selected>Select</option>
                    <option value="Automobile/ Transport/Logistics">Automobile/ Transport/Logistics</option>
                    <option value="Industry 4.0">Industry 4.0</option>
                    <option value="Tourism">Tourism</option>
                    <option value="Enterprise & Emergency Communication">Enterprise & Emergency Communication</option>
                    <option value="Smart Cities">Smart Cities</option>
                    <option value="Railways">Railways</option>
                    <option value="Mining/ Ports/ Airports">Mining/ Ports/ Airports</option>
                    <option value="Power">Power</option>
                    <option value="Rural & Remote Communication">Rural & Remote Communication</option>
                    <option value="FinTech">FinTech</option>
                    <option value="Water Management">Water Management</option>
                    <option value="Sports">Sports</option>
                    <option value="Cyber Security, Quantum communications and security">Cyber Security, Quantum communications and security</option>
                    <option value="Environment, Public Safety & Disaster Management">Environment, Public Safety & Disaster Management</option>
                  </select>
                  <div id="applicationVerticalsError" class="error"></div>
                </div>
              <?php
              }
              ?>
              <div class="form-group mb-3">
                <label for="website">Website/LinkedIn:</label>
                <input type="text" id="website" name="website" class="form-control">
                <div id="websiteError" class="error"></div>
              </div>
            </div>
          </div>
          <div id="techincal">
            <div class="head">
              <h5 class="text-white text-center p-2">Techinical Datails</h5>
            </div>
            <div class="container">
              <div class="form-group mb-3">
                <label for="domain">Domain/Thrust Area:</label>
                <input type="text" id="domain" name="domain" class="form-control">
                <div id="domainError" class="error"></div>
              </div>
              <div class="form-group mb-3">
                <label for="product">Brief About Your Product/Solution:</label>
                <textarea id="product" name="product" class="form-control"></textarea>
                <div id="productError" class="error"></div>
              </div>
              <div class="form-group mb-3">
                <label for="productFile">Upload the note on Technical Details or Product/Solution:</label>
                <input type="file" id="productFile" name="productFile" accept=".pdf,.doc,.docx" class="form-control">
                <div id="productFileError" class="error"></div>
              </div>
              <div class="form-group mb-3">
                <label for="technologyLevel">Stage Of Product based on minimum Technology Readiness Level:</label>
                <select id="technologyLevel" name="technologyLevel" class="form-select">
                  <option value="" disabled selected>Select</option>
                  <option value="TRL9 Operations">TRL9 Operations</option>
                  <option value="TRL8 Active Commissioning">TRL8 Active Commissioning</option>
                  <option value="TRL7 Inactive Commissioning">TRL7 Inactive Commissioning</option>
                  <option value="RL6 Large Scale">
                    TRL6 Large Scale
                  </option>
                  <option value="TRL5 Pilot Scale">
                    TRL5 Pilot Scale
                  </option>
                  <option value="TRL4 Bench Scale Research">TRL4 Bench Scale Research</option>
                  <option value="TRL3 Proof of Concept">TRL3 Proof of Concept</option>
                </select>
                <div id="technologyLevelError" class="error"></div>
              </div>
              <div class="form-group mb-3">
                <label for="describeProduct">Describe how your solution or products classifies as a 5G and Beyond usecase. What are the challenges faced from connectivity solutions over 3G/4G:</label>
                <textarea id="describeProduct" name="describeProduct" class="form-control"></textarea>
                <div id="describeProductError" class="error"></div>
              </div>
              <div class="form-group mb-3">
                <label for="productPatent">Have you filed a patent for your product/solution:</label>
                <input type="radio" id="productPatentYes" name="productPatent" value="Yes" checked> Yes
                <input type="radio" id="productPatentNo" name="productPatent" value="No"> No
                <div id="productPatentError" class="error"></div>
              </div>
              <div class="form-group mb-3" id="patentDetailsId" style="display: block;">
                <label for="patentDetails">If yes, please provide details:</label>
                <textarea id="patentDetails" name="patentDetails" class="form-control"></textarea>
                <div id="patentDetailsError" class="error"></div>
              </div>
              <div class="form-group mb-3">
                <label for="similarProduct">Is there any similar product/ solution available in the market w.r.t your solution?:</label><br>
                <input type="radio" id="similarProductYes" name="similarProduct" value="Yes" checked> Yes
                <input type="radio" id="similarProductNo" name="similarProduct" value="No"> No
                <div id="similarProductError" class="error"></div>
              </div>
              <div class="form-group mb-3" id="similarProductFileId" style="display: block;">
                <label for="similarProductFile">If yes, does your proposed product have advantage over other existing solutions:</label>
                <input type="file" id="similarProductFile" name="similarProductFile" class="form-control" accept=".pdf,.ppt,.pptx">
                <div id="similarProductFileError" class="error"></div>
              </div>
            </div>
          </div>
          <div id="document">
            <div class="head">
              <h5 class="text-white text-center p-2">Document Details</h5>
            </div>
            <div class="container">
              <div class="form-group mb-3">
                <label for="incorporation">Incorporation Certificate (in case of Startups):</label>
                <input type="file" id="incorporation" name="incorporation" class="form-control" accept=".pdf">
                <div id="incorporationError" class="error"></div>
              </div>
              <div class="form-group mb-3">
                <label for="idProof">ID Proof/ Passport of Applicant:</label>
                <input type="file" id="idProof" name="idProof" class="form-control" accept=".pdf">
                <div id="idProofError" class="error"></div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <label for="declaration" class="mb-5">
            <input type="checkbox" id="declaration" name="declaration" /> I declare that all the information given by me in this
            application and documents attached hereto are true to the
            best of my knowledge and that I have not willfully
            suppressed any material fact. I accept that if any of the
            information given by me in this application is in any way
            false or incorrect, my application may be rejected, any
            offer of the grant may be withdrawn or my candidature may be
            rejected at any time. I agree to adhere and comply to terms
            and condition given above<br><br>
            <span id="declarationError" class="error"></span>
          </label>
        </div>
        <div class="button-section">
          <button type="reset" class="save-btn btn m-2">Reset</button>
          <button type="submit" class="submit-btn btn m-2">Submit</button>
        </div>
      </form>
    </div>
  </div>
  <script src="assets/js/application.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>

</html>