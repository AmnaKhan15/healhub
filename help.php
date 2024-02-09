<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healhub";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the user's question from the form
    $question = $_POST["question"];

    // Prepare and execute the SQL query
    $stmt = $conn->prepare("INSERT INTO helpsupport (question) VALUES (?)");
    $stmt->bind_param("s", $question);
    $stmt->execute();

    // Close the statement
    $stmt->close();

    // Close the connection
    $conn->close();

    // Redirect back to helpsupport.html with a success message
    header("Location: helpsupport.html?success=true");
    exit();
}
?>
