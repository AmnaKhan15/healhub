<?php
// Connect to the database and retrieve the list of doctors
$host = "localhost";
$username = "root";
$password = "";
$database = "healhub";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$category = $_POST['category']; // Get the selected category from the AJAX request

// Query the database to retrieve doctors based on the selected category
$stmt = $conn->prepare("SELECT name FROM doctors WHERE specialty = ?");
$stmt->bind_param("s", $category);
$stmt->execute();
$result = $stmt->get_result();

// Build an array of doctors
$doctors = array();
while ($row = $result->fetch_assoc()) {
    $doctors[] = $row['name'];
}

// Return the doctors as JSON
echo json_encode($doctors);

// Close the database connection
$stmt->close();
$conn->close();
?>
