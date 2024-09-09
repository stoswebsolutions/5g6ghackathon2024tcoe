function validateForm() {
  let valid = true;
  document.querySelectorAll(".error").forEach((e) => (e.innerText = ""));

  // Validate Required Fields
  const requiredFields = [
    "firstname",
    "lastname",
    "email",
    "phone",
    "institution",
    "stream",
    "state",
    "city",
  ];

  requiredFields.forEach((field) => {
    const value = document.forms["wtsaforms"][field].value.trim();
    if (!value) {
      document.getElementById(field + "Error").innerText =
        "This field is required";
      valid = false;
    }
  });

  // Email Validation
  const email = document.forms["wtsaforms"]["email"].value.trim();
  const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  if (!emailPattern.test(email)) {
    document.getElementById("emailError").innerText =
      "Please enter a valid email address";
    valid = false;
  }

  // Phone Number Validation
  const phone = document.forms["wtsaforms"]["phone"].value.trim();
  const phonePattern = /^[6-9]\d{9}$/;
  if (!phonePattern.test(phone)) {
    document.getElementById("phoneError").innerText =
      "Please enter a valid 10-digit phone number";
    valid = false;
  }

  const declarationCheckbox = document.forms["wtsaforms"]["declaration"];
  const declarationError = document.getElementById("declarationError");
  if (!declarationCheckbox.checked) {
    declarationError.innerText = "You must agree to the declaration.";
    valid = false;
  } else {
    declarationError.innerText = "";
  }

  return valid;
}
