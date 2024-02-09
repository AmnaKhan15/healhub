<!doctype html>
<html lang="en">
<head>
  <!-- ... Your head content ... -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Help & Support</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
<nav class="navbar" style="background-color: #ffffff;">
    <div class="container">
      <a class="navbar-brand" href="homepage.html">
        <img src="images/logo.png" alt="Healhub" width="200" height="65" href="homepage.html">
      </a>

      <ul class="nav nav-underline" class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link" style="color: black;" href="homepage.html">Doctors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: black;" href="appointments.php">Appointments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: black;" href="lab_test_data.php">Scheduled Lab Tests</a>
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
    </div>
  </nav>
  <div style="background-image: url(images/bg.jpg);">
  <hr>
      <div class="container">
        <h2>My Appointments</h2>
        <table class="table">
          <thead>
            <tr>
            <th>ID</th>
              <th>Specialty</th>
              <th>Doctor Name</th>
              <th>Date</th>
              <th>Time</th>
              <th>Reason</th>
            </tr>
          </thead>
          <tbody>
            
            <?php
            // Connect to the MySQL database
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "healhub";
      
            $conn = new mysqli($host, $username, $password, $database);
      
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
      
            // Retrieve appointments from the database
            $sql = "SELECT * FROM appointments";
            $result = $conn->query($sql);

      
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                   echo "<td>" . $row["id"] . "</td>"; // Add the ID column
                    echo "<td>" . $row["category"] . "</td>";
                    echo "<td>" . $row["doctor_name"] . "</td>";
                    echo "<td>" . $row["date"] . "</td>";
                    echo "<td>" . $row["time"] . "</td>";
                    echo "<td>" . $row["reason"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No appointments found.</td></tr>";
            }
      
            // Close the database connection
            $conn->close();
            ?>
          </tbody>
        </table>
      </div><br>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>