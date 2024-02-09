<?php
session_start();

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

// Retrieve the form data
$postTitle = $_POST['postTitle'];
$postContent = $_POST['postContent'];
$postUser = $_POST['postUser'];

// Generate a unique identifier for the blog post
$postId = uniqid();

// Insert the blog post into the "blogpost" table
$insertQuery = "INSERT INTO blogpost (b_id, btitle, bcontent, b_user) VALUES (?, ?, ?, ?)";
$insertStmt = $conn->prepare($insertQuery);
$insertStmt->bind_param('ssss', $postId, $postTitle, $postContent, $postUser);
$insertStmt->execute();

if ($insertStmt) {
    // Close the database connection
    $conn->close();

    // Redirect back to healthblog.php with a success message
    header("Location: healthblog.php?success=true");
    exit();
} else {
    echo "Error: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
