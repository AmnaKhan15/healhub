<?php
// Replace the database credentials with your own
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

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $patientName = $_POST['patient-name'];
    $patientNumber = $_POST['patient-number'];
    $labCity = $_POST['lab-city'];
    $lab = $_POST['lab'];
    $branch = $_POST['branch'];
    $preference = $_POST['preference'];
    $age = $_POST['age'];
    // Handle the uploaded file (prescription)
    $prescriptionPath = '';
    if (isset($_FILES['prescription']) && $_FILES['prescription']['error'] === UPLOAD_ERR_OK) {
        $prescriptionFile = $_FILES['prescription'];
        $prescription = 'uploads/' . $prescriptionFileName;
        move_uploaded_file($prescriptionFile['tmp_name'], $prescriptionPath);
    }

    // Perform the database insertion
    $sql = "INSERT INTO lab_bookings (patient_name, patient_number, lab_city, lab, branch, preference, prescription, age) VALUES ('$patientName', '$patientNumber', '$labCity', '$lab', '$branch', '$preference', '$prescription', '$age')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Redirect to lab_test_data.php
        header('Location: lab_test_data.php');
        exit;
    } else {
        // Handle the case when insertion fails
        echo 'Error: ' . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>