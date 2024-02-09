<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lab Test Data</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
  <div style="background-image: url(images/bg.jpg);"><br>
  <div class="container">
    <h2>Booked/Scheduled Lab Tests</h2>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Patient's Name</th>
            <th>Patient's Number</th>
            <th>Lab City</th>
            <th>Lab</th>
            <th>Branch</th>
            <th>Preference</th>
            <th>Age</th>
            <th>Prescription</th>
          </tr>
        </thead>
        <tbody><br>
</div>
          <?php
          // Assuming you have fetched the lab test data from the database and stored it in an array called $labTests
          
// Replace the database credentials with your own
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healhub";

// Creating a database connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM lab_bookings";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>"; // Add the ID column
        echo "<td>" . $row["patient_name"] . "</td>";
        echo "<td>" . $row["patient_number"] . "</td>";
        echo "<td>" . $row["lab_city"] . "</td>";
        echo "<td>" . $row["lab"] . "</td>";
        echo "<td>" . $row["branch"] . "</td>";
        echo "<td>" . $row["preference"] . "</td>";
        echo "<td>" . $row["age"] . "</td>";
        echo "<td>" . $row["prescription"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No appointments found.</td></tr>";
}

// Close the database connection
$conn->close();
?>
        </tbody>
      </table><br><br>
    </div>
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
</body>
</html>
