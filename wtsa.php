<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Join the 30-hour 5G/6G Hackathon 2024 in Delhi, Hyderabad, and Bengaluru. Apply now for a chance to innovate and participate in WTSA sessions.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="google-site-verification" content="XfxyEGoltUc0DEqGfhk87Ow9Rar_QdMTirFcS3K5j_0" />
    <title>5G/6G Hackathon 2024 | 30-Hour Challenge in Delhi, Hyderabad & Bengaluru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/index.css" />
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
            <a class="navbar-brand p-0" href="home">
                <img
                    src="assets/images/Tcoe_logo.jpg"
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
                    <li class="nav-item">
                        <a class="nav-link" href="wtsa">WTSA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home">Home</a>
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
                        <a class="nav-link" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="wtsa">WTSA</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form name="wtsaforms" action="wtsaForm" method="post" onsubmit="return validateForm()">
                    <div class="modal-body">
                        <h5 class="modal-title mb-2" id="wtsaModalLabel">WTSA Outreach by DoT, MoC, GoI & TCoE</h5>
                        <div class="form-group mb-2">
                            <label for="firstname">First Name <span style="color: red">*</span></label>
                            <input type="text" id="firstname" name="firstname" class="form-control">
                            <div id="firstnameError" class="error"></div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="lastname">Last Name <span style="color: red">*</span></label>
                            <input type="text" id="lastname" name="lastname" class="form-control">
                            <div id="lastnameError" class="error"></div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="email">Email <span style="color: red">*</span></label>
                            <input type="email" id="email" name="email" class="form-control">
                            <div id="emailError" class="error"></div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="phone">Phone <span style="color: red">*</span></label>
                            <input type="text" id="phone" name="phone" class="form-control" pattern="\d{10}">
                            <div id="phoneError" class="error"></div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="institution">Institution Name <span style="color: red">*</span></label>
                            <input type="text" id="institution" name="institution" class="form-control">
                            <div id="institutionError" class="error"></div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="stream">Stream <span style="color: red">*</span></label>
                            <select id="stream" name="stream" class="form-select">
                                <option value="" disabled selected></option>
                                <option value="Engineering OR Technical Education">Engineering OR Technical Education</option>
                                <option value="General Degree">General Degree</option>
                                <option value="ITI Student">ITI Student</option>
                                <option value="Polytechnical">Polytechnical</option>
                                <option value="Masters">Masters</option>
                                <option value="P.hd">P.hd</option>
                                <option value="Faculty">Faculty</option>
                                <option value="Other">Other</option>
                            </select>
                            <div id="streamError" class="error"></div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="state">State <span style="color: red">*</span></label>
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
                        <div class="form-group mb-2">
                            <label for="city">City (I want to attend at)<span style="color: red">*</span></label>
                            <select id="city" name="city" class="form-select">
                                <option value="" disabled selected></option>
                                <option value="New Delhi">New Delhi</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Bangalore">Bangalore</option>
                            </select>
                            <div id="cityError" class="error"></div>
                        </div>

                        <div>
                            <label for="declaration" class="mb-2"><span style="color: red">*</span>
                                <input type="checkbox" id="declaration" name="declaration" /> I Declare that, I confirm my presence at WTSA conference.
                                <span id="declarationError" class="error"></span>
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-violet">
                            Submit
                        </button>
                    </div>
                </form>
                <div id="responseMessage" class="mt-3"></div>
            </div>
        </div>
    </div>
    <script src="assets/js/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script>
        $(document).ready(function() {
            if (window.location.hash === '#wtsaforms') {
                $('#wtsaforms').modal('show');
                document.getElementById('responseMessage').innerHTML = '<div class="alert alert-success">WTSA Reistration submission email sent successfully</div>';
            }
        });
    </script> -->
</body>

</html>