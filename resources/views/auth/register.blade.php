<!doctype html>
<html lang="en">

<!-- Head -->

<head>
  <!-- Page Meta Tags-->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="backend/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="backend/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="backend/images/favicon/favicon-16x16.png">
  <link rel="mask-icon" href="backend/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@200;300;400;600&display=swap" rel="stylesheet">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="backend/css/libs.bundle.css" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="backend/css/theme.bundle.css" />

  <!-- Fix for custom scrollbar if JS is disabled-->
  <noscript>
    <style>
      /**
          * Reinstate scrolling for non-JS clients
          */
      .simplebar-content-wrapper {
        overflow: auto;
      }
    </style>
  </noscript>

  <!-- Page Title -->
  <title>Kavlan | Bootstrap 5 HTML Admin Dashboard</title>

</head>

<body class="">

  <!-- Main Section-->
  <section class="d-flex justify-content-center align-items-start vh-100 py-5 px-3 px-md-0">

    <!-- Login Form-->
    <div class="d-flex flex-column w-100 align-items-center">

      <!-- Logo-->
      <a href="./index.html" class="d-table mt-5 mb-4 mx-auto">
        <div class="d-flex align-items-center justify-content-center">
          <svg class="f-w-6 me-2 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 398.39 353.81">
            <polygon
              points="228.38 33.94 0 262.32 0 0 119.61 0 119.61 43.01 101.9 60.73 86.02 76.61 86.02 33.6 33.6 33.6 33.6 181.2 214.46 0.34 390.66 0.34 242.09 148.91 218.73 124.76 309.55 33.94 228.38 33.94"
              fill="currentColor" />
            <polygon
              points="398.39 353.81 217.51 353.81 131.04 261.75 45.09 353.81 0 353.81 0 353.49 131.26 212.91 232.05 320.21 317.27 320.21 170.28 173.21 194.19 149.29 194.19 149.55 254.9 210.51 254.97 210.39 398.39 353.81"
              fill="currentColor" />
          </svg>
          <span class="fw-bold fs-3 text-white">Kavlan</span>
        </div>
      </a>
      <!-- Logo-->

      <div class="shadow-lg rounded p-4 p-sm-5 bg-white form mb-4">
        <h5 class="fw-bold mb-3 text-muted">Register</h5>
        <a href="#" class="btn btn-facebook d-block mb-2"><i class="ri-facebook-circle-fill align-bottom"></i> Login
          with Facebook</a>
        <a href="#" class="btn btn-twitter d-block mb-2"><i class="ri-twitter-fill align-bottom"></i> Login with
          Twitter</a>
        <span class="text-muted text-center d-block fw-bolder my-4">OR</span>

        <!-- Register Form-->
        <form class="mt-4">
          <div class="form-group">
            <label class="form-label form-label-light" for="register-fname">First name</label>
            <input type="text" class="form-control form-control-light" id="register-fname" placeholder="Enter your first name">
          </div>
          <div class="form-group">
            <label class="form-label form-label-light" for="register-lname">Last name</label>
            <input type="text" class="form-control form-control-light" id="register-lname" placeholder="Enter your last name">
          </div>
          <div class="form-group">
            <label class="form-label form-label-light" for="register-email">Email address</label>
            <input type="email" class="form-control form-control-light" id="register-email" placeholder="name@email.com">
          </div>
          <div class="form-group">
            <label class="form-label form-label-light" for="register-password">Password</label>
            <input type="password" class="form-control form-control-light" id="register-password" placeholder="Enter your password">
          </div>
          <button type="submit" class="btn btn-primary d-block w-100 my-4">Sign Up</button>
        </form>
        <!-- / Register Form-->

        <p class="d-block text-center text-muted small">Already registered? <a class="text-muted text-decoration-underline" href="./login.html">Login here.</a></p>
      </div>
    </div>
    <!-- / Login Form-->

  </section>
  <!-- / Main Section-->

  <!-- Theme JS -->
  <!-- Vendor JS -->
  <script src="backend/js/vendor.bundle.js"></script>

  <!-- Theme JS -->
  <script src="backend/js/theme.bundle.js"></script>
</body>

</html>
