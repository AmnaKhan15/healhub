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

// Retrieve the email from the URL parameters
$email = $_GET['email'];

// Prepare the SQL statement to retrieve the doctor's details
$query = "SELECT fname, lname, email, city FROM register_udb WHERE email = :email AND user_type = 'doctor'";
$stmt = $conn->prepare($query);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

// Fetch the doctor's details
$row = $result->fetch_assoc();
$fname = $row['fname'];
$lname = $row['lname'];
$email = $row['email'];
$city = $row['city'];

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Doctor Profile</title>
  <!-- Add Bootstrap CSS link here -->
  <link rel="stylesheet" href="path_to_bootstrap_css_file">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">HealHub</a>
    </div>
  </nav>

  <div class="container mt-4">
    <h2>Doctor Profile</h2>
    <div class="card mt-4">
      <div class="card-body">
        <h5 class="card-title">Name: <?php echo $fname . ' ' . $lname; ?></h5>
        <p class="card-text">Email: <?php echo $email; ?></p>
        <p class="card-text">City: <?php echo $city; ?></p>
      </div>
    </div>
  </div>

  <!-- Add Bootstrap JS script link here -->
  <script src="path_to_bootstrap_js_file"></script>
</body>
</html>
