<?php
session_start();

// Check if user is logged in, otherwise redirect to login page
if (!isset($_COOKIE['healhub_session']) || !isset($_SESSION['email'])) 
{
  header("refresh:5;url=login.html"); // Redirect to login page after 5 seconds
  echo "Session does not exist. You will be redirected to the login page in 5 seconds.";
  exit();
}

$email = $_SESSION['email'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
$city = $_SESSION['city'];
$user_type = $_SESSION['user_type'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>User Profile Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="button(s).css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
    .profile-card {
        max-width: 400px;
        margin: 0 auto;
    }

    .profile-card .profile-image {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        overflow: hidden;
        margin: 20px auto;
    }

    .profile-card .profile-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .profile-card .profile-details {
        text-align: center;
    }
    </style>
    <script>
    function returnToLogin() {
        // Redirect to login.html
        window.location.href = "login.html";
    }
    </script>
</head>

<body>
<nav class="navbar" style="background-color: #ffffff;">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="images/logo.png" alt="Healhub" width="200" height="65" href="index.html">
      </a>

      <ul class="nav nav-underline" class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" style="color: black;" data-bs-toggle="offcanvas" href="index.html" role="button"
            aria-controls="offcanvasExample">Doctors</a>
          <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title display-6" id="offcanvasExampleLabel" style="font-size: 23px;">Find doctor by
                Speciality</h5>
            </div>
            <div class="offcanvas-body display-6" style="font-size: 16px;">
              <div>
                <p><a href="#"
                    class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Gynecologist</a>
                </p>
                <p><a href="#"
                    class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Dermatologist</a>
                </p>
                <p><a href="#"
                    class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Neurologist</a>
                </p>
                <p><a href="#"
                    class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Psychiatrist</a>
                </p>
                <p><a href="#"
                    class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">General
                    Physician</a></p>
              </div>
            </div>
            <div class="offcanvas-header">
              <h5 class="offcanvas-title display-6" id="offcanvasExampleLabel" style="font-size: 23px;">Find doctor by
                Treatment</h5>
            </div>
            <div class="offcanvas-body display-6" style="font-size: 15px;">
              <div>
                <p><a href="#"
                    class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">MRI</a>
                </p>
                <p><a href="#"
                    class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Normal
                    Devliery</a></p>
                <p><a href="#"
                    class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">CT
                    Scan</a></p>
                <p><a href="#"
                    class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Coronavirus</a>
                </p>
                <p><a href="#"
                    class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">LASER eye
                    surgery</a></p>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: black;" href="appointments.php">Appointments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: black;" href="lab.html">Labs & Results</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: black;" href="helpsupport.html">Help & Support</a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;

        <a type="button" class="btn btn-light"
          style="--bs-btn-padding-y: .65rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .78rem;" href="login.html"
          role="button">Login</a>

        <a class="btn btn-outline-primary"
          style="--bs-btn-padding-y: .65rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .78rem;"
          href="register.html" role="button">Register</a>
      </ul>

    </div>
  </nav>

    <div style="background-image: url(images/bg.jpg);">
        <br><br><br>
        <center>
            <div class="container-custom">
                <div class="card-custom col sm-6">
                    <div class="slide slide1">
                        <div class="content-custom">
                            <div class="icon">
                                <i class="fa fa-user-circle" aria-hidden="true">
                                    <h3>
                                        Welcome back, <?php echo $fname . ' ' . $lname; ?>
                                    </h3>
                                </i>
                            </div>
                        </div>
                    </div>
                    <div class="slide slide2">
                        <div class="content-custom">
                            <h5>This is your profile dashboard...</h5>
                            <p><strong>Email:</strong> <?php echo $email; ?></p>
                            <p><strong>Location:</strong> <?php echo $city; ?></p>
                            <p><strong>Designation:</strong> <?php echo $user_type; ?></p>
                            <a href="index.html" class="button-custom">
                                <div class="button__line"></div>
                                <div class="button__line"></div>
                                <span class="button__text">Return to the homepage</span>
                                <div class="button__drow1"></div>
                                <div class="button__drow2"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </center><br><br><br>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="scheduled_appointments.php">My Appointments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lab_test_data.php">Lab Results</a>
            </li>
        </ul><br>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <footer class="footer-20192">
        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <a href="#" class="footer-logo">HealHub</a>
                        <p class="copyright">
                            <small>&copy; 2023</small>
                        </p>
                    </div>
                    <div class="col-sm">
                        <h3>More</h3>
                        <ul class="list-unstyled links">
                            <li><a href="#">Health Blog</a></li>
                            <li><a href="#">Pharmacy</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Patient Portals</a></li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <h3>Company</h3>
                        <ul class="list-unstyled links">
                            <li><a href="aboutus.html">About Us</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Our Team</a></li>
                        </ul>
                    </div>
                    <div class="col-sm">
                        <h3>Further Information</h3>
                        <ul class="list-unstyled links">
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Partnerships</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h3>Follow us</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-facebook"><img src="images/fb.png" width="40px"
                                            height="40px" alt="fb"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"><img src="images/ig.png" alt="ig" width="30px"
                                            height="30px"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"><img src="images/twt.png" alt="twt" width="35px"
                                            height="35px"></span></a></li>
                            <li><a href="#"><span class="icon-whatsapp"><img src="images/wt.webp" alt="wt" width="34px"
                                            height="34px"></span></a></li>
                            <li><a href="#"><span class="icon-messenger"><img src="images/msg.png" alt="msg"
                                            width="30px" height="30px"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>