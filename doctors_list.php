<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctors List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
<nav class="navbar" style="background-color: #ffffff;">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="images/logo.png" alt="Healhub" width="200" height="65" href="index.html">
      </a>

      <ul class="nav nav-underline" class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" style="color: black;" href="index.html">Doctors</a>
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
  <div class="container"><br>
    <h1>List of available doctors</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>City</th>
          <th>Specialty</th>
        </tr>
      </thead>
      <tbody>
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

        // Retrieve the doctor's information from the "register_udb" table
        $query = "SELECT fname, lname, email, city FROM register_udb WHERE user_type = 'doctor'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['fname'] . "</td>";
            echo "<td>" . $row['lname'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['city'] . "</td>";
            echo "<td></td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='5'>No doctors found.</td></tr>";
        }

        // Close the database connection
        $conn->close();
        ?>
      </tbody>
    </table>
  </div><br>
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
</body>

</html>
