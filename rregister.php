<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healhub";

// Creating a database connection
$conn = new mysqli($servername, $username, $password, $dbname);
echo "Database connected";
// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<br>Inserting...";
if (isset($_POST['submit'])) 
{
    $fname = $_POST['inputFirstName'];
    $lname = $_POST['inputLastName'];
    $email = $_POST['inputEmail'];
    $password = $_POST['inputPassword'];
    $address = $_POST['inputAddress'];
    $city = $_POST['inputCity'];
    $user_type = $_POST['inputUser'];
    $sql = "INSERT INTO register_udb (fname, lname, email, password, address, city, user_type) VALUES ('$fname', '$lname', '$email', '$password', '$address', '$city', '$user_type')";
    echo "<br>Insertion Complete";
    if (mysqli_query($conn, $sql)) 
    {
        echo "<br>Registration successful...";
        // Redirects the user to the homepage or any other page
        header("Location: login.html");
        exit();
    } else {
        // Registration failed
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
}
?>
