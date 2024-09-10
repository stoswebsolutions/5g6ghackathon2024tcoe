// productPatent1
var productPatentYes = document.getElementById("productPatentYes");
var productPatentNo = document.getElementById("productPatentNo");
var patentDetailsId = document.getElementById("patentDetailsId");
productPatentYes.addEventListener("change", function () {
  if (productPatentYes.checked) {
    patentDetailsId.style.display = "block";
    document.getElementById("patentDetails").required = true;
    document.getElementById("patentDetailsError").innerText =
      "Please enter a valid Patent Details";
  }
});
productPatentNo.addEventListener("change", function () {
  if (productPatentNo.checked) {
    patentDetailsId.style.display = "none";
    document.getElementById("patentDetails").required = false;
    document.getElementById("patentDetailsError").innerText = "";
  }
});

// similarProduct1
var similarProductYes = document.getElementById("similarProductYes");
var similarProductNo = document.getElementById("similarProductNo");
var similarProductFileId = document.getElementById("similarProductFileId");
similarProductYes.addEventListener("change", function () {
  if (similarProductYes.checked) {
    similarProductFileId.style.display = "block";
    document.getElementById("similarProductFile").required = true;
    document.getElementById("similarProductFileError").innerText =
      "Please enter a valid Patent Details";
  }
});
similarProductNo.addEventListener("change", function () {
  if (similarProductNo.checked) {
    similarProductFileId.style.display = "none";
    document.getElementById("similarProductFile").required = false;
    document.getElementById("similarProductFileError").innerText = "";
  }
});

// industry
var industry = document.getElementById("industry");
var otherindustryId = document.getElementById("otherindustryId");
industry.addEventListener("change", function () {
  if (industry.value === "Others") {
    otherindustryId.style.display = "block";
  } else {
    otherindustryId.style.display = "none";
  }
});

// Form Submit validation
function validateForm() {
  let valid = true;
  document.querySelectorAll(".error").forEach((e) => (e.innerText = ""));

  // Validate Required Fields
  const requiredFields = [
    "applicantName",
    "organizationName",
    "contactNumber",
    "email",
    "city",
    "state",
    "postalAddress",
    "category",
    "applying",
    "industry",
    "problemsStatement",
    "product",
    "productFile",
  ];

  requiredFields.forEach((field) => {
    const value = document.forms["applicationForm"][field].value.trim();
    if (!value) {
      document.getElementById(field + "Error").innerText =
        "This field is required";
      valid = false;
    }
  });

  // Email Validation
  const email = document.forms["applicationForm"]["email"].value.trim();
  const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  if (!emailPattern.test(email)) {
    document.getElementById("emailError").innerText =
      "Please enter a valid email address";
    valid = false;
  }

  // Phone Number Validation
  const contactNumber =
    document.forms["applicationForm"]["contactNumber"].value.trim();
  const phonePattern = /^[6-9]\d{9}$/;
  if (!phonePattern.test(contactNumber)) {
    document.getElementById("contactNumberError").innerText =
      "Please enter a valid 10-digit phone number";
    valid = false;
  }

  const urlPattern = /^(https:\/\/|www\.)[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  const website = document.forms["applicationForm"]["website"].value.trim();
  if (website && !urlPattern.test(website)) {
    document.getElementById("websiteError").innerText =
      "Please enter a valid URL starting with www or https";
    valid = false;
  }

  // File Type Validation
  const fileInputs = {
    productFile: ["pdf", "doc", "docx"],
    similarProductFile: ["pdf", "ppt", "pptx"],
    presentationVideo: ["ppt", "pptx"],
    proofPoC: ["jpg", "jpeg", "png"],
    shareholding: ["pdf"],
    incorporation: ["pdf"],
    idProof: ["pdf"],
  };
  const maxSizeMB = 3;

  for (let key in fileInputs) {
    const fileInput = document.forms["applicationForm"][key];
    if (fileInput && fileInput.files.length > 0) {
      const file = fileInput.files[0];
      const fileExtension = file.name.split(".").pop().toLowerCase();
      const fileSizeMB = file.size / 1024 / 1024; // Convert file size to MB

      // Check file type
      if (!fileInputs[key].includes(fileExtension)) {
        document.getElementById(key + "Error").innerText =
          "Invalid file type. Allowed types: " + fileInputs[key].join(", ");
        valid = false;
      }

      // Check file size
      if (fileSizeMB > maxSizeMB) {
        document.getElementById(key + "Error").innerText =
          "File size exceeds 3MB. Please upload a smaller file.";
        valid = false;
      }
    }
  }

  const declarationCheckbox = document.forms["applicationForm"]["declaration"];
  const declarationError = document.getElementById("declarationError");
  if (!declarationCheckbox.checked) {
    declarationError.innerText = "You must agree to the declaration.";
    valid = false;
  } else {
    declarationError.innerText = "";
  }

  return valid;
}

function handleSubmit(event) {
  event.preventDefault(); // Prevent default form submission behavior

  if (!validateForm()) {
      return false; // Don't submit if the form is invalid
  }

  // Disable the submit button and show the progress bar
  const submitBtn = document.getElementById('submitBtn');
  submitBtn.disabled = true;

  const progressBar = document.querySelector('.progress');
  progressBar.style.display = 'block';

  const progress = document.getElementById('progressBar');
  progress.style.width = '0%'; // Reset progress bar

  let uploadProgress = 0;
  const interval = setInterval(function () {
      uploadProgress += 10;
      progress.style.width = uploadProgress + '%';

      if (uploadProgress >= 100) {
          clearInterval(interval);
          submitForm(); // Actually submit the form after the progress completes
      }
  }, 500); // Simulated progress interval
}

function submitForm() {
  const form = document.getElementById("applicationForm");

  // Simulate a server request using a timeout
  setTimeout(function () {
      // Assume the form was successfully submitted
      form.submit(); // Now submit the form to the server
  }, 1000); // Delay to simulate server processing time

  // Show a success message after form submission (after actual submission)
  document.getElementById("successMessage").style.display = 'block';
}
