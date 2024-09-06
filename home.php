<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TCOE</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/index.css" />
  <link rel="stylesheet" href="assets/css/carousels.css" />
</head>

<body>
  <div class="">
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
            <a class="nav-link" href="#about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#problemstatements">Problem Statements</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#eligibility">Eligibility</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#timelines">Timelines</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#meetourmentors">Mentors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#prize">Prize Money</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="#faqs">FAQs</a></li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact Us</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              data-bs-toggle="modal"
              data-bs-target="#authModal"
              href="#login">Login</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              data-bs-toggle="modal"
              data-bs-target="#authModal"
              href="#register">Register</a>
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
              data-bs-toggle="modal"
              data-bs-target="#authModal"
              href="#login">Login</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              data-bs-toggle="modal"
              data-bs-target="#authModal"
              href="#register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#problemstatements">Problem Statements</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Hero Section -->
    <header class="hero bg-white text-center">
      <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <!-- First Slide -->
          <div class="carousel-item active">
            <img
              src="assets/images/imc2.png"
              alt="Main Banner 1"
              class="d-block w-100 img-fluid rounded shadow-sm" />
          </div>
          <!-- Second Slide -->
          ]<div class="carousel-item gap-3">
            <img
              src="assets/images/Main Banner.png"
              alt="Main Banner 2"
              class="d-block w-100 img-fluid rounded shadow-sm" />
          </div>
        </div>
        <!-- Carousel Controls -->
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#heroCarousel"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#heroCarousel"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </header>
    <!-- About Us Section -->
    <section id="about" class="about-section">
      <div class="container-fluid">
        <div class="text-center">
          <h2 class="section-heading">About Us</h2>
        </div>
        <div class="text-center">
          <img
            src="assets/images/About Us.png"
            alt="About Us"
            class="img-fluid rounded shadow-sm" />
        </div>
      </div>
    </section>
    <!-- Problem Statements Section -->
    <div class="container-fluid text-center my-3" id="problemstatements">
      <div class="text-center mb-5">
        <h2 class="section-heading">Problem Statements</h2>
      </div>
      <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel1" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <!-- Carousel items for Section 1 -->
            <div class="carousel-item gap-3 active">
              <div class="col-md-3">
                <div class="card">
                  <img src="assets/images/suo_moto.png" class="card-img-top" alt="Suo Moto" />
                  <div class="card-body">
                    <h5 class="card-title h6">
                      Suo Moto
                      <span class="text-white">Suo Moto</span>
                    </h5>
                    <div class="">
                      <button class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#applyModal">
                        Apply Now
                      </button>
                      <a href="#" class="btn btn-link" data-bs-toggle="modal"
                        data-bs-target="#viewMoreModal1">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item gap-3">
              <div class="col-md-3">
                <div class="card">
                  <img src="assets/images/ai_driven.png" class="card-img-top"
                    alt="AI-Driven Network Maintenance" />
                  <div class="card-body">
                    <h5 class="card-title h6">
                      AI-Driven Network Maintenance
                    </h5>
                    <div class="d-flex justify-content-between mt-auto">
                      <button class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#applyModal">
                        Apply Now
                      </button>
                      <a href="#" class="btn btn-link" data-bs-toggle="modal"
                        data-bs-target="#viewMoreModal2">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item gap-3">
              <div class="col-md-3">
                <div class="card">
                  <img src="assets/images/multi_model.png" class="card-img-top"
                    alt="Multi-Modal Interactive System" />
                  <div class="card-body">
                    <h5 class="card-title h6">
                      Multi-Modal Interactive System
                    </h5>
                    <div class="d-flex justify-content-between mt-auto">
                      <button class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#applyModal">
                        Apply Now
                      </button>
                      <a href="#" class="btn btn-link" data-bs-toggle="modal"
                        data-bs-target="#viewMoreModal3">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item gap-3">
              <div class="col-md-3">
                <div class="card">
                  <img src="assets/images/5g_kiosk.jpg" class="card-img-top" alt="5G Kiosk" />
                  <div class="card-body">
                    <h5 class="card-title h6">5G Kiosk</h5>
                    <div class="d-flex justify-content-between mt-auto">
                      <button class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#applyModal">
                        Apply Now
                      </button>
                      <a href="#" class="btn btn-link" data-bs-toggle="modal"
                        data-bs-target="#viewMoreModal4">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item gap-3">
              <div class="col-md-3">
                <div class="card">
                  <img src="assets/images/5g_enabled.png" class="card-img-top"
                    alt="5G Enabled Consoles/Devices" />
                  <div class="card-body">
                    <h5 class="card-title h6">
                      5G Enabled Consoles/Devices For Students
                    </h5>
                    <div class="d-flex justify-content-between mt-auto">
                      <button class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#applyModal">
                        Apply Now
                      </button>
                      <a href="#" class="btn btn-link" data-bs-toggle="modal"
                        data-bs-target="#viewMoreModal5">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item gap-3">
              <div class="col-md-3">
                <div class="card">
                  <img src="assets/images/realtime_control.png" class="card-img-top"
                    alt="Real Time Control Of Advanced Drones" />
                  <div class="card-body">
                    <h5 class="card-title h6">
                      Real Time Control Of Advanced Drones
                    </h5>
                    <div class="d-flex justify-content-between mt-auto">
                      <button class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#applyModal">
                        Apply Now
                      </button>
                      <a href="#" class="btn btn-link" data-bs-toggle="modal"
                        data-bs-target="#viewMoreModal6">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item gap-3">
              <div class="col-md-3">
                <div class="card">
                  <img src="assets/images/digital_twin.png" class="card-img-top"
                    alt="Digital Twin Technology" />
                  <div class="card-body">
                    <h5 class="card-title h6">Digital Twin Technology</h5>
                    <div class="d-flex justify-content-between mt-auto">
                      <button class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#applyModal">
                        Apply Now
                      </button>
                      <a href="#" class="btn btn-link" data-bs-toggle="modal"
                        data-bs-target="#viewMoreModal7">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item gap-3">
              <div class="col-md-3">
                <div class="card">
                  <img src="assets/images/ntn.png" class="card-img-top" alt="NTN Communications" />
                  <div class="card-body">
                    <h5 class="card-title h6">
                      Non-Terrestrial Network (NTN) Communications
                    </h5>
                    <div class="d-flex justify-content-between mt-auto">
                      <button class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#applyModal">
                        Apply Now
                      </button>
                      <a href="#" class="btn btn-link" data-bs-toggle="modal"
                        data-bs-target="#viewMoreModal8">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item gap-3">
              <div class="col-md-3">
                <div class="card">
                  <img src="assets/images/5g_broadcast.png" class="card-img-top"
                    alt="5G Broadcasting" />
                  <div class="card-body">
                    <h5 class="card-title h6">5G Broadcasting</h5>
                    <div class="d-flex justify-content-between mt-auto">
                      <button class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#applyModal">
                        Apply Now
                      </button>
                      <a href="#" class="btn btn-link" data-bs-toggle="modal"
                        data-bs-target="#viewMoreModal9">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item gap-3">
              <div class="col-md-3">
                <div class="card">
                  <img src="assets/problem_statements/5g broadcast 10.jpeg" class="card-img-top"
                    alt="Emergency Communication Systems" />
                  <div class="card-body">
                    <h5 class="card-title h6">5G BROADCASTS</h5>
                    <div class="d-flex justify-content-between mt-auto">
                      <button class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#applyModal">
                        Apply Now
                      </button>
                      <a href="#" class="btn btn-link" data-bs-toggle="modal"
                        data-bs-target="#viewMoreModal10">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item gap-3">
              <div class="col-md-3">
                <div class="card">
                  <img src="assets/problem_statements/5g oran.png" class="card-img-top"
                    alt="Virtual Networking and SDN" />
                  <div class="card-body">
                    <h5 class="card-title h6">5G O-RAN</h5>
                    <div class="d-flex justify-content-between mt-auto">
                      <button class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#applyModal">
                        Apply Now
                      </button>
                      <a href="#" class="btn btn-link" data-bs-toggle="modal"
                        data-bs-target="#viewMoreModal11">View More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Add more slides as needed for Section 1 -->
          </div>
          <!-- Controls for Section 1 -->
          <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel1" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </a>
          <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel1" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>
        </div>
      </div>
    </div>
    <!-- Modal 1 -->
    <div
      class="modal fade"
      id="viewMoreModal1"
      tabindex="-1"
      aria-labelledby="viewMoreModalLabel1"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewMoreModalLabel1">OVERVIEW</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h3 class="text-center">Problem Statement</h3>
            <p class="text-center">Suo Moto</p>
            <br />
            <h3 class="text-center">Possible Approach / Simplified Statement</h3>
            <p class="text-center">
              Solution using 5G, 6G and Emerging Technologies for the
              following Application verticals:
            </p>
            <ul>
              <li>Automobile/ Transport/Logistics</li>
              <li>Industry 4.0</li>
              <li>Tourism</li>
              <li>Enterprise & Emergency Communication</li>
              <li>Smart Cities</li>
              <li>Railways</li>
              <li>Mining/ Ports/ Airports</li>
              <li>Power</li>
              <li>Rural & Remote Communication</li>
              <li>FinTech</li>
              <li>Water Management</li>
              <li>Sports</li>
              <li>Cyber Security, Quantum communications and
                security</li>
              <li>Environment, Public Safety & Disaster
                Management</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 2 -->
    <div
      class="modal fade"
      id="viewMoreModal2"
      tabindex="-1"
      aria-labelledby="viewMoreModalLabel2"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewMoreModalLabel2">OVERVIEW</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <h3>Problem Statement</h3>
            <h6>AI-Driven Network Maintenance</h6>
            <br />
            <h3>Possible Approach / Simplified Statement</h3>
            <p>
              Develop an AI-powered system that predicts network failures,
              optimizes maintenance schedules, and reduces downtime.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 3 -->
    <div
      class="modal fade"
      id="viewMoreModal3"
      tabindex="-1"
      aria-labelledby="viewMoreModalLabel3"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewMoreModalLabel3">OVERVIEW</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <h3>Problem Statement</h3>
            <h6>Design of Multi-Modal Interactive system</h6>
            <br />
            <h3>Possible Approach / Simplified Statement</h3>
            <p>
              Multi-modal interaction system that combines visual, auditory,
              and haptic feedback for a fully immersive experience. This could
              include realistic gestures, voice commands, and tactile
              responses, all synchronized
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 4 -->
    <div
      class="modal fade"
      id="viewMoreModal4"
      tabindex="-1"
      aria-labelledby="viewMoreModalLabel4"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewMoreModalLabel4">OVERVIEW</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <h3>Problem Statement</h3>
            <h6>
              With a very poor doctor to patient ratio in the country, access
              to medical practitioners and health care workers remains a big
              challenge for even the first level diagnosis at the primary
              health care centers across rural India.
            </h6>
            <br />
            <h3>Possible Approach / Simplified Statement</h3>
            <p>
              To enable a 5G kiosk, for application such as tele consultation,
              AI enabled suggestions, detections, live vitals monitoring of
              patients, centralized information systems.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 5 -->
    <div
      class="modal fade"
      id="viewMoreModal5"
      tabindex="-1"
      aria-labelledby="viewMoreModalLabel5"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewMoreModalLabel5">OVERVIEW</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <h3>Problem Statement</h3>
            <h6>
              Rural schools and colleges lack laboratory infrastructure for
              hands-on experience to augment theoretical learning
            </h6>
            <br />
            <h3>Possible Approach / Simplified Statement</h3>
            <p>
              5G enabled consoles/devices for students in remote villages to
              access, control and read results from various connected lab
              equipment for conducting experiments.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 6 -->
    <div
      class="modal fade"
      id="viewMoreModal6"
      tabindex="-1"
      aria-labelledby="viewMoreModalLabel6"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewMoreModalLabel6">OVERVIEW</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <h3>Problem Statement</h3>
            <h6>
              Real time control of advanced drones with intelligent computing
              features such as Computer Vision (CV), AI/ML, Autonomous
              functionality.
            </h6>
            <br />
            <h3>Possible Approach / Simplified Statement</h3>
            <p>
              5G connected drone with CV/AI/ML for agriculture(crop health,
              disease diagnosis, fertilizers/pesticide application), logistics
              (medicine delivery, sample collections)
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 7 -->
    <div
      class="modal fade"
      id="viewMoreModal7"
      tabindex="-1"
      aria-labelledby="viewMoreModalLabel7"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewMoreModalLabel7">OVERVIEW</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <h3>Problem Statement</h3>
            <h6>
              Design a digital twin application that solve a real life problem
              in India
            </h6>
            <br />
            <h3>Possible Approach / Simplified Statement</h3>
            <p>
              Design a platform that seamlessly integrates physical and
              digital environments, allowing users to transition between
              real-world and virtual settings without noticeable disruption.
              This could involve spatial mapping, environment-aware holograms,
              or mixed-reality interfaces.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 8 -->
    <div
      class="modal fade"
      id="viewMoreModal8"
      tabindex="-1"
      aria-labelledby="viewMoreModalLabel8"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewMoreModalLabel8">OVERVIEW</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <h3>Problem Statement</h3>
            <h6>
              IoTs applications in remote areas are resource constrained in
              terms of power, data management , and network scalability.
              Design a NTN-Enabled IoT solution to address the above-mentioned
              challenges.
            </h6>
            <br />
            <h3>Possible Approach / Simplified Statement</h3>
            <p>
              Design a solution that enables large-scale IoT deployments via
              NTNs, focusing on applications such as environmental monitoring,
              smart agriculture, or maritime connectivity. Solution should
              address challenges related to power efficiency, data management,
              and network scalability.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal 9 -->
    <div
      class="modal fade"
      id="viewMoreModal9"
      tabindex="-1"
      aria-labelledby="viewMoreModalLabel9"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewMoreModalLabel9">OVERVIEW</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <h3>Problem Statement</h3>
            <h6>
              Lack of visual information on natural calamity prone areas such
              as landslide areas of motorable sections of the highways/roads,
              water levels at bridges in flood prone regions, areas affected
              by cyclones leads to loss of life and property
            </h6>
            <br />
            <h3>Possible Approach / Simplified Statement</h3>
            <p>
              Access to live video broadcast from the impacted areas along
              with alerts based on sensors and other historical data, directly
              accessible to users on their 5G devices (such as cellphones,
              vehicle telematics, standalone devices, etc) using 5G Broadcast
              technology.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- modal 10 -->
    <div
      class="modal fade"
      id="viewMoreModal10"
      tabindex="-1"
      aria-labelledby="viewMoreModalLabel10"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewMoreModalLabel10">OVERVIEW</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <h3>Problem Statement</h3>
            <h6>
              Human-animal encounters across country is a common problem for
              all the roads in remote forest areas
            </h6>
            <br />
            <h3>Possible Approach / Simplified Statement</h3>
            <p>
              Live Video broadcast and Alerts for the area based on animal
              proximity, directly accessible on the Cell phone or vehicle
              telematics using 5G Broadcast
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- modal 11 -->
    <div
      class="modal fade"
      id="viewMoreModal11"
      tabindex="-1"
      aria-labelledby="viewMoreModalLabel9"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewMoreModalLabel11">OVERVIEW</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body text-center">
            <h3>Problem Statement</h3>
            <h6>Develop industry automation use case(s) using 5G O-RAN</h6>
            <br />
            <h3>Possible Approach / Simplified Statement</h3>
            <p>
              5G O-RAN supports digital transformation of multiple industries
              - Industry 4.0, viz. Agriculture, Robotics, Smart Cities, etc.
              Develop innovative applications in various fields using 5G and
              beyond technologies such as network slicing, private networks,
              ultra-reliable networks.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- apply now model -->
    <div
      class="modal fade"
      id="applyModal"
      tabindex="-1"
      aria-labelledby="applyModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="termsModalLabel">
              Terms and Conditions
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body" style="max-height: 70vh; overflow-y: auto">
            <p>
              <strong>TERMS AND CONDITIONS OF 5G-6G HACKATHON 2024</strong>
            </p>
            <p>
              These Terms and Conditions elucidate the directives of use and
              participation in the 5G & 6G Hackathon 2024. Your acceptance of
              the same implies your acceptance of these directives mentioned
              herein under.
            </p>
            <p>
              The Department of Telecommunications (DoT) is at liberty to
              alter or modify these terms and conditions without prior notice.
              You are expected to be up to date with the modifications
              forthwith.
            </p>
            <p><strong>Receipt of Entries and Eligibility</strong></p>
            <ol>
              <li>
                Entries shall be invited through an online entry form as
                available on the
                <a href="https://5g6g-hackathon2024.tcoe.in/" target="_blank">https://5g6g-hackathon2024.tcoe.in/</a>
                website.
              </li>
              <li>
                This 5G & 6G Hackathon is organized to identify & promote
                applications relevant to India, in the 5G & 6G realm that can
                be converted into workable products and services.
              </li>
              <li>
                The Contest is open to all students, startups, academic
                institutions in India. However, employees of the DoT, IMC,
                DCIS beneficiaries or startups connected with them as
                promoters/partners are not eligible.
              </li>
              <li>
                Entries will be accepted in English language only and the
                submissions should be made in the template provided on the
                <a href="https://5g6g-hackathon2024.tcoe.in/" target="_blank">https://5g6g-hackathon2024.tcoe.in/</a>
                Website.
              </li>
              <li>
                Any incomplete/inaccurate entries or entry after the close of
                Entry Period shall be invalid and any such entry may be
                permitted only at the sole discretion of the DoT.
              </li>
              <li>
                The right to permit or restrict participation is at the sole
                discretion of the DoT.
              </li>
              <li>
                Awards and Recognition shall be given as per the criteria laid
                down by the DoT and as specified underneath of the Hackathon.
              </li>
              <li>
                You are expected to come up with new and innovative ideas for
                5G & 6G use cases applicable in the Indian context and any
                idea that appears to have been copied from somewhere shall be
                disqualified.
              </li>
              <li>
                Your ideas must be developed entirely during the Hackathon
                duration by participants. You may use open source libraries
                and other freely available systems / services such as Google
                Maps, Facebook Connect, Twitter feeds etc.
              </li>
            </ol>
            <p><strong>Submission of Participant Information</strong></p>
            <ol>
              <li>
                DoT has the right to substantiate/verify the participants'
                details/information as provided in the entry form and may also
                seek any further document, as may be required to verify the
                participants' details/ information.
              </li>
              <li>
                The participant must provide all supporting details requested
                by the DoT to substantiate/verify the information provided in
                the entry form. If such a request is made and the participant
                either fails or does not agree to provide the same, then the
                DoT reserves the right to disqualify such participant from
                participating in the Hackathon.
              </li>
              <li>
                Ideas given by Startups which have already been selected in
                the earlier 5G Hackathon organized by any ministries shall not
                be eligible.
              </li>
              <li>
                Ideas shall be connected to either 5G or 6G. Ideas without
                basic connection to these technologies shall not be eligible.
              </li>
              <li>
                Determination of whether information is correct or not, rests
                solely with the DoT.
              </li>
              <li>
                If at any stage or time, the information provided by any
                participant is found to be incorrect in any manner, then the
                participant will be disqualified from participating in the
                Hackathon.
              </li>
              <li>
                If, after the conclusion of the Hackathon, any information
                provided by any participant is found to be incorrect in any
                manner, the participant will be liable to return the
                prize/award/recognition (if any) or any other
                monetary/non-monetary incentives provided as part of the
                Hackathon.
              </li>
            </ol>
            <p>
              <strong>Determination of Qualifying Team and Decision as to the
                ‘Winner’</strong>
            </p>
            <ol>
              <li>
                The DoT shall identify all qualifying participants and their
                decision shall be final and binding on all participants.
              </li>
              <li>
                The DoT shall score and/or rank each team based on pre-defined
                evaluation criteria and the final scores will be collated and
                tabulated to determine the Winners based on the parameters
                determined by DoT.
              </li>
            </ol>
            <p><strong>Award and Recognition</strong></p>
            <ol>
              <li>
                The top 5 winners from each location will be awarded;
                <ul>
                  <li>1st winner-2 lakhs</li>
                  <li>2nd winner-1.5 lakhs</li>
                  <li>3rd winner-1 lakh</li>
                  <li>4th winner-75k</li>
                  <li>5th winner-50k</li>
                </ul>
              </li>
              <li>
                All winners will be provided a unique opportunity by being
                allotted a Free Pod space in “Aspire Startups Zone”, during
                IMC 2024 to showcase their solutions and to explore
                collaboration to make them market-ready with the support of
                DoT, MeitY and a number of leading industries, academia,
                Telcos/OEMs.
              </li>
              <li>
                The Prize shall not be transferable. No request shall be
                entertained by the DoT on this account.
              </li>
              <li>
                Any statutory taxes, duties or levies as may be applicable
                from time to time, arising out/ in respect of such prize,
                shall be payable by the Winner of the respective Prize.
              </li>
              <li>
                DoT shall not be liable for any loss, damage, theft, or any
                other mishap caused to the Prize after handing over the same
                to the Winners of the Contest.
              </li>
            </ol>
            <p><strong>General</strong></p>
            <ol>
              <li>
                Entries protected under intellectual property rights are
                acceptable as submissions to the Hackathon. However, the DoT
                shall not be liable for the protection of any proprietary or
                confidential information contained in any entry form.
              </li>
              <li>
                The ideas submitted by the participants shall solely remain
                their intellectual property in the Hackathon.
              </li>
              <li>
                The participant warrants and represents that it owns all
                rights, or has all necessary licenses, to use any and all
                idea/s (and all constituent parts) they will be submitting
                under this Hackathon for evaluation, including without
                limitation all content, images, text, or other copyright
                material, trademarks, service marks, logos or any other
                intellectual property contained within its Idea, and can, upon
                request, shall provide written confirmation of such ownership
                or license to the DoT. The participant further warrants and
                represents that all the ideas submitted are original and have
                been legally obtained and created, and do not infringe the
                intellectual property rights or any other legal or moral
                rights of any third party.
              </li>
              <li>
                The participant additionally grants to DoT and its affiliates,
                the right and permission to reproduce, encode, store, copy,
                transmit, publish, broadcast, display, publicly perform,
                exhibit and/or otherwise use or reuse (without limitation as
                to when or to the number of times used), the participant's
                name, address, image, voice, statements and idea/s (in each
                case, as submitted or as edited by DoT, in DoT's sole
                discretion), as well as any additional photographic images,
                video images, portraits, interviews or other materials
                relating to the participant and arising out of his/her
                participation in this Hackathon (with or without using the
                participant's name) (collectively, the "additional materials")
                in any media throughout the world for advertising and
                publicity purposes without additional review, compensation, or
                approval.
              </li>
              <li>
                The participant waives any rights of publicity, rights of
                privacy, intellectual property rights, and any other legal or
                moral rights that might preclude the DoT's use of the Idea/s
                or the additional materials or require the participant's
                permission for DoT to use them for promotional purposes, and
                hereby waives any claim against the DoT relating to the DoT
                promotional use of those materials.
              </li>
              <li>
                The participant agrees to indemnify and hold the DoT and their
                respective affiliates, directors, employees, agents and
                partners (“DoT’s Associates”) harmless from any and all direct
                and indirect claims, damages, expenses, costs (including
                reasonable attorneys' fees) and liabilities (including
                settlements), brought or asserted by any third party against
                any of the DoT Associates due to or arising out of the use of
                the idea/s or additional materials and/or in connection with
                participation in or winning the Hackathon.
              </li>
              <li>
                DoT will not be liable for:
                <ul>
                  <li>
                    Any incorrect or inaccurate information, whether caused by
                    the participant, printing errors or by any of the
                    equipment or programming associated with or utilized in
                    the Hackathon.
                  </li>
                  <li>
                    Technical failures of any kind, including, but not limited
                    to malfunctions, interruptions, or disconnections in phone
                    lines or network hardware or software.
                  </li>
                  <li>
                    Unauthorized human intervention in any part of the entry
                    process or the Hackathon.
                  </li>
                  <li>
                    Technical or human error which may occur in the
                    administration of the Hackathon or the processing of
                    Ideas.
                  </li>
                  <li>
                    Any injury or damage to persons or property which may be
                    caused, directly or indirectly, in whole or in part, from
                    the participant's participation in the Hackathon or
                    receipt or use or misuse of any prize.
                  </li>
                  <li>
                    Any and all expenses, costs or other charges associated
                    with the Winner's acceptance and/or use of the prize shall
                    be the responsibility of the Winner.
                  </li>
                </ul>
              </li>
              <li>
                DoT reserves the right to cancel, suspend and/or modify the
                Hackathon, or any part of it, if any fraud, technical failures
                or any other factor beyond DoT's reasonable control impairs
                the integrity or proper functioning of the Hackathon, as
                determined by DoT in its sole discretion. DoT, in its sole
                discretion, reserves the right to disqualify any individual it
                finds to be tampering with the entry process or the operation
                of the Hackathon or to be acting in violation of these Terms &
                Conditions.
              </li>
              <li>
                DoT's decision shall be final and binding in all matters
                related to the Hackathon. DoT reserves the right to disqualify
                any participant who is found to be undermining the legitimate
                operation of the Hackathon or other participants, or to be
                acting in a disruptive manner, or with the intent to annoy,
                abuse, threaten or harass any other person.
              </li>
            </ol>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-violet mt-3"
                data-bs-toggle="modal"
                data-bs-target="#authModal">
                I Agree
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- login and register -->
    <div
      class="modal fade"
      id="authModal"
      tabindex="-1"
      aria-labelledby="authModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content no-border">
          <div class="modal-header">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <ul class="nav nav-tabs" id="authTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link active"
                  id="login-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#login"
                  type="button"
                  role="tab">
                  Existing User
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="register-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#register"
                  type="button"
                  role="tab">
                  New User
                </button>
              </li>
            </ul>
            <div class="tab-content mt-3" id="authTabContent">
              <!-- Login Form -->
              <div
                class="tab-pane fade show active card p-2"
                id="login"
                role="tabpanel">
                <div class="text-center p-1">
                  <h4>Log in to your Account</h4>
                  <p>Welcome back! Please enter your details</p>
                </div>
                <form action="login.php" method="post">
                  <div class="mb-3">
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Email"
                      id="email"
                      name="email"
                      required />
                  </div>
                  <div class="mb-3">
                    <input
                      type="password"
                      class="form-control"
                      placeholder="Password"
                      id="password"
                      name="password"
                      required />
                  </div>
                  <div
                    class="d-flex justify-content-between align-items-center mb-3">
                    <a
                      type="button"
                      class="btn btn-link p-0"
                      data-bs-toggle="modal"
                      data-bs-target="#forgotModal">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-violet">
                      Login
                    </button>
                  </div>
                </form>
              </div>
              <!-- Register Form -->
              <div
                class="tab-pane fade card p-2"
                id="register"
                role="tabpanel">
                <div class="text-center p-1">
                  <h4>Create an account</h4>
                  <p>Start your journey!</p>
                </div>
                <form action="registration.php" method="post">
                  <div class="mb-3">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Name"
                      id="fullname"
                      name="fullname"
                      required />
                  </div>
                  <div class="mb-3">
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Email"
                      id="email"
                      name="email"
                      required />
                  </div>
                  <div class="mb-3">
                    <input
                      type="password"
                      class="form-control"
                      placeholder="Password"
                      id="password"
                      name="password"
                      required />
                  </div>
                  <div class="mb-3">
                    <select
                      class="form-select"
                      id="categoryType"
                      name="categoryType"
                      required>
                      <option value="" disabled selected>I am</option>
                      <option value="Student">Student</option>
                      <option value="Startup Professional">
                        Startup Professional
                      </option>
                      <option value="Academic Professional">
                        Academic Professional
                      </option>
                      <option value="Corporate Professional">
                        Corporate Professional
                      </option>
                    </select>
                  </div>
                  <div class="mb-3" id="category" style="display: none;">
                    <input
                      type="text"
                      class="form-control"
                      id="categoryName"
                      name="categoryName"
                      required />
                  </div>
                  <div class="text-end">
                    <button type="submit" class="btn btn-violet">
                      Get Started
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Forgot Password Modal -->
    <div
      class="modal fade"
      id="forgotModal"
      tabindex="-1"
      aria-labelledby="forgotModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="forgotModalLabel">Forgot Password</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
          </div>
          <form action="forgotpassword" method="post">
            <div class="modal-body">
              <div class="mb-3">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Registered Email"
                  id="email"
                  name="email"
                  required />
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-violet">
                Request Password
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Eligibility Section -->
    <section id="eligibility">
      <div class="container-fluid">
        <div class="text-center">
          <h2 class="section-heading">Eligibility Criteria</h2>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card eligible-card">
              <div class="card-body">
                <h3 class="card-title h6">Students</h3>
                <p class="card-text">
                  Students from academic institutions in India.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card eligible-card">
              <div class="card-body">
                <h3 class="card-title h6">Startups</h3>
                <p class="card-text">
                  Owned and controlled by Resident Indian Citizens.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card eligible-card">
              <div class="card-body">
                <h3 class="card-title h6">R&D Institutions</h3>
                <p class="card-text">Private R&D Centers from India.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card not-eligible-card">
              <div class="card-body">
                <h3 class="card-title h6">Academia</h3>
                <p class="card-text">
                  Academic institutions registered in India.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card not-eligible-card">
              <div class="card-body">
                <h3 class="card-title h6">Employees of DoT, IMC, DCIS</h3>
                <p class="card-text text-danger">NOT ELIGIBLE</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card not-eligible-card">
              <div class="card-body">
                <h3 class="card-title h6">Selected in Previous 5G Hackathon</h3>
                <p class="card-text text-danger">NOT ELIGIBLE</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Timelines Section -->
    <section id="timelines" class="bg-white">
      <div class="container-fluid text-center">
        <div class="timeline-image-wrapper">
          <img
            src="assets/images/Timeline2.png"
            alt="Timelines Banner"
            class="timeline-image" />
        </div>
      </div>
    </section>
    <!-- Mentors Section -->
    <div class="container-fluid text-center my-3" id="meetourmentors">
      <div class="text-center">
        <h2 class="section-heading">Meet Our Mentors</h2>
      </div>
      <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel2" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <!-- Carousel items for Section 2 -->
            <div class="carousel-item gap-3 active">
              <div class="col-md-3">
                <div class="card h-100 text-center">
                  <img src="assets/mentors/medium_Neil.png" class="card-img-top mentor-img"
                    alt="Neil Shah" />
                  <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title h6">Neil Shah</h5>
                    <p class="card-text">Counter Point Research</p>
                  </div>
                </div>
              </div>
            </div>
            ]<div class="carousel-item gap-3">
              <div class="col-md-3">
                <div class="card h-100 text-center">
                  <img src="assets/mentors/medium_Ravi_Sina.png" class="card-img-top mentor-img"
                    alt="Ravi Sinha" />
                  <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title h6">Ravi Sinha</h5>
                    <p class="card-text">O-Ran Alliance</p>
                  </div>
                </div>
              </div>
            </div>
            ]<div class="carousel-item gap-3">
              <div class="col-md-3">
                <div class="card h-100 text-center">
                  <img src="assets/mentors/medium_Aayush.png" class="card-img-top mentor-img"
                    alt="Aayush Bhatnagar" />
                  <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title h6">Aayush Bhatnagar</h5>
                    <p class="card-text">Jio</p>
                  </div>
                </div>
              </div>
            </div>
            ]<div class="carousel-item gap-3">
              <div class="col-md-3">
                <div class="card h-100 text-center">
                  <img src="assets/mentors/medium_mentor.png" class="card-img-top mentor-img"
                    alt="Sanjay Kumar" />
                  <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title h6">Sanjay Kumar</h5>
                    <p class="card-text">TelcoLearn</p>
                  </div>
                </div>
              </div>
            </div>
            ]<div class="carousel-item gap-3">
              <div class="col-md-3">
                <div class="card h-100 text-center">
                  <img src="assets/mentors/medium_gopi.png" class="card-img-top mentor-img"
                    alt="Gopi Krishna Lakkepuram" />
                  <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title h6">Gopi Krishna Lakkepuram</h5>
                    <p class="card-text">Hyperleap AI</p>
                  </div>
                </div>
              </div>
            </div>
            ]<div class="carousel-item gap-3">
              <div class="col-md-3">
                <div class="card h-100 text-center">
                  <img src="assets/mentors/medium_kiran.png" class="card-img-top mentor-img"
                    alt="Kiran Babu" />
                  <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title h6">Kiran Babu</h5>
                    <p class="card-text">Rava AI</p>
                  </div>
                </div>
              </div>
            </div>
            ]<div class="carousel-item gap-3">
              <div class="col-md-3">
                <div class="card h-100 text-center">
                  <img src="assets/mentors/medium_rajan.png" class="card-img-top mentor-img"
                    alt="Ranjan Relan" />
                  <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title h6">Ranjan Relan</h5>
                    <p class="card-text">AgentAnalytics.AI</p>
                  </div>
                </div>
              </div>
            </div>
            ]<div class="carousel-item gap-3">
              <div class="col-md-3">
                <div class="card h-100 text-center">
                  <img src="assets/mentors/medium_pushkar.png" class="card-img-top mentor-img"
                    alt="Pushkar Apte" />
                  <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title h6">Pushkar Apte</h5>
                    <p class="card-text">Qualcomm India Pvt. Ltd.</p>
                  </div>
                </div>
              </div>
            </div>
            ]<div class="carousel-item gap-3">
              <div class="col-md-3">
                <div class="card h-100 text-center">
                  <img src="assets/mentors/medium_rajesh.png" class="card-img-top mentor-img"
                    alt="Rajesh Kumar Pathak" />
                  <div class="card-body d-flex flex-column align-items-center">
                    <h5 class="card-title h6">Rajesh Kumar Pathak</h5>
                    <p class="card-text">Bharat 6G Alliance</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Add more slides as needed for Section 2 -->
          </div>
          <!-- Controls for Section 2 -->
          <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel2" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </a>
          <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel2" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>
        </div>
      </div>
    </div>
    <!-- Prize Money Section -->
    <section id="prize" class="price-section">
      <div class="container-fluid">
        <div class="text-center">
          <h2 class="section-heading">Prize Money</h2>
        </div>
        <div class="text-center">
          <img
            src="assets/images/Prizes (1).png"
            alt="About Us"
            class="img-fluid rounded shadow-sm" />
        </div>
      </div>
    </section>
    <!-- FAQs Section -->
    <section id="faqs">
      <div class="container-fluid">
        <div class="text-center">
          <h2 class="section-heading mb-4">FAQs</h2>
        </div>
        <img
          src="assets/images/FAQs.png"
          alt=""
          class="p-4"
          width="100%"
          height="auto" />
        <div class="accordion" id="faqAccordion">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne">
                <i class="fas fa-chevron-down accordion-icon"></i>
                <span>Q. How do we submit our application?</span>
              </button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse"
              aria-labelledby="headingOne"
              data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                <span>
                  A. Through the online portal -
                  https://5g6g-hackathon2024.tcoe.in/
                </span>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo">
                <i class="fas fa-chevron-down accordion-icon"></i>
                <span>Q. What are the prizes to be won?</span>
              </button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                <ol>
                  <li>Winners will be awarded as below</li>
                  <li>First Prize: INR. 2 Lakhs</li>
                  <li>Second Prize: INR. 1.5 Lakhs</li>
                  <li>Third Prize: INR. 1 Lakhs</li>
                  <li>Consolation Prize: INR. 75,000</li>
                  <li>Best Idea Award: INR. 50,000</li>
                </ol>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree">
                <i class="fas fa-chevron-down accordion-icon"></i>
                <span>Q. How do we submit our application?</span>
              </button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="headingThree"
              data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                <span>A. Only Online</span>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFour"
                aria-expanded="false"
                aria-controls="collapseFour">
                <i class="fas fa-chevron-down accordion-icon"></i>
                <span>Q. General information regarding Grand Finale</span>
              </button>
            </h2>
            <div
              id="collapseFour"
              class="accordion-collapse collapse"
              aria-labelledby="headingFour"
              data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                <span>
                  A. The event is tentatively scheduled for OCT 15, 2024, and
                  the venue will be updated to the winners
                </span>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFive"
                aria-expanded="false"
                aria-controls="collapseFive">
                <i class="fas fa-chevron-down accordion-icon"></i>
                <span>Q. Is TRL Level 3/ POC and above stage of the product
                  necessary to Apply?</span>
              </button>
            </h2>
            <div
              id="collapseFive"
              class="accordion-collapse collapse"
              aria-labelledby="headingFive"
              data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                <span>A. Yes</span>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingSix">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseSix"
                aria-expanded="false"
                aria-controls="collapseSix">
                <i class="fas fa-chevron-down accordion-icon"></i>
                <span>Q. What type of document should Academic institutions
                  (Professors students and any combination / team of theirs)
                  upload in the (Applying as) section of the Application
                  form?</span>
              </button>
            </h2>
            <div
              id="collapseSix"
              class="accordion-collapse collapse"
              aria-labelledby="headingSix"
              data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                <span>
                  A. They are required to upload a letter regarding their
                  solution that has been forwarded with the approval /
                  consent of HoD / Director of that institution.
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Us Section -->
    <section id="contact" class="py-5">
      <div class="container-fluid text-center">
        <h2 class="section-heading mb-4">Contact Us</h2>
        <p class="lead mb-5">
          Have a question? We would love to hear from you. Please reach out
          to:
        </p>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="contact-card p-4">
              <h3 class="contact-location">Hyderabad</h3>
              <p><strong>Srinath Reddy</strong></p>
              <p>5g6ghack24@tcoe.in</p>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="contact-card p-4">
              <h3 class="contact-location">Delhi</h3>
              <p><strong>Deepak Gupta</strong></p>
              <p>5g6ghack24@tcoe.in</p>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="contact-card p-4">
              <h3 class="contact-location">Bangalore</h3>
              <p><strong>Srinath Reddy</strong></p>
              <p>5g6ghack24@tcoe.in</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="py-4">
      <div class="container-fluid">
        <div class="row text-center">
          <div class="col-md-2">
            <a class="navbar-brand p-0" href="#">
              <img
                src="assets/images/theaischoollogo.jpg"
                class="w-25" alt="" />
            </a>
          </div>
          <div class="col-md-5">
            <p class="mb-0">
              &copy; 2024 Powered by <a href="https://theaischool.co.in/" target="new">TheAISCHOOL</a> All Rights Reserved
            </p>
          </div>
          <div class="col-md-2">
            <div class="social-media-icons mb-2 mb-md-0">
              <a href="#" class="me-3"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
              <a href="https://www.linkedin.com/company/theaischool/" target="new" class=""><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="footer-links">
              <a href="#" class="mx-2">Terms and Conditions</a> |
              <a href="#" class="mx-2">Privacy Policy</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<script src="assets/js/carosels.js"></script>
<script>
  $(document).ready(function() {
    if (window.location.hash === '#authModal') {
      $('#authModal').modal('show');
    }
  });
</script>
<script>
  var categoryType = document.getElementById('categoryType');
  var categoryName = document.getElementById('categoryName');
  var category = document.getElementById('category');
  categoryType.addEventListener('change', function() {
    category.style.display = 'block';
    if (categoryType.value === "Student") {
      categoryName.placeholder = 'University/College Name';
    }
    if (categoryType.value === "Startup Professional") {
      categoryName.placeholder = 'Company Name';
    }
    if (categoryType.value === "Academic Professional") {
      categoryName.placeholder = 'Company Name';
    }
    if (categoryType.value === "Corporate Professional") {
      categoryName.placeholder = 'Company Name';
    }
  });
</script>