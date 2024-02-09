<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healhub";

// Creating a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the search query from the URL parameters
$doctorName = $_GET['doctor_name'];

// Prepare the SQL statement to search for doctors by name and user_type
$query = "SELECT fname, lname, email, city FROM register_udb WHERE user_type = 'doctor' AND (fname LIKE '%".$doctorName."%' OR lname LIKE '%".$doctorName."%')";
$result = $conn->query($query);

// Display the search results
?>
<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
</head>
<body>
    <nav class="navbar" style="background-color: #ffffff;">
        <div class="container">
            <a class="navbar-brand" href="homepage.html">
                <img src="images/logo.png" alt="Healhub" width="200" height="65" href="homepage.html">
            </a>

            <ul class="nav nav-underline" class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" style="color: black;" data-bs-toggle="offcanvas" href="#offcanvasExample"
                        role="button" aria-controls="offcanvasExample">Doctors</a>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                        aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title display-6" id="offcanvasExampleLabel" style="font-size: 23px;">
                                Find doctor by
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
                            <h5 class="offcanvas-title display-6" id="offcanvasExampleLabel" style="font-size: 23px;">
                                Find doctor by
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
                                        class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">LASER
                                        eye
                                        surgery</a></p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: black;" href="appointments.html">Appointments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: black;" href="lab.html">Labs & Results</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: black;" href="helpsupport.html">Help & Support</a>
                </li>&nbsp;&nbsp;&nbsp;&nbsp;

                <a type="button" class="btn btn-light"
                    style="--bs-btn-padding-y: .65rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .78rem;"
                    href="login.html" role="button">Login</a>

                <a class="btn btn-outline-primary"
                    style="--bs-btn-padding-y: .65rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .78rem;"
                    href="register.html" role="button">Register</a>
            </ul>

        </div>
    </nav>
    <div style="background-image: url(images/bg.jpg);"><br><br>
    <div class="container">
        <form class="d-flex" role="search" method="GET" action="search.php">
          <input class="form-control me-2" type="search" name="doctor_name" placeholder="Search for doctors, specialties, services and labs" aria-label="Search">
          <button class="btn btn-outline-info" type="submit">Go</button>
        </form>
      </div>  

        <div class="container mt-4">
            <h2>Search Results</h2>
            <?php if ($result->num_rows > 0) { ?>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">Doctor Profile</h5>
                    <p class="card-text">Name: <?php echo $row['fname'] . ' ' . $row['lname']; ?></p>
                    <p class="card-text">Email: <a href="www.gmail.com"><?php echo $row['email']; ?></a></p>
                    <p class="card-text">City: <?php echo $row['city']; ?></p>
                </div>
            </div>
            <?php } ?>
            <?php } else { ?>
            <p>No doctors found.</p>
            <?php } ?>
        </div><br><br>
    </div>

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
                <li><a href="#"><span class="icon-facebook"><img src="images/fb.png" width="40px" height="40px"
                        alt="fb"></span></a></li>
                <li><a href="#"><span class="icon-instagram"><img src="images/ig.png" alt="ig" width="30px"
                        height="30px"></span></a></li>
                <li><a href="#"><span class="icon-twitter"><img src="images/twt.png" alt="twt" width="35px"
                        height="35px"></span></a></li>
                <li><a href="#"><span class="icon-whatsapp"><img src="images/wt.webp" alt="wt" width="34px"
                        height="34px"></span></a></li>
                <li><a href="#"><span class="icon-messenger"><img src="images/msg.png" alt="msg" width="30px"
                        height="30px"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>