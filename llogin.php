<?php
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

if (isset($_POST['submit'])) {
    $email = $_POST['inputEmail'];
    $password = $_POST['inputPassword'];
    // Querying the database to check if a matching user exists
    $sql = "SELECT * FROM register_udb WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Authentication successful
        $row = mysqli_fetch_assoc($result);
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $city = $row['city'];
        $user_type = $row['user_type'];

        // Set session variables
        session_start();
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['email'] = $email;
        $_SESSION['city'] = $city;
        $_SESSION['user_type'] = $user_type;

        // Create a session cookie
        setcookie('healhub_session', session_id(), time() + (86400), '/'); // Cookie valid for 1 day only

        // Redirect to the profile page
        header("Location: profile.php");
        exit();
    } else {
        // Authentication failed
        echo "Invalid email or password. Please try again.";
    }
}

$conn->close();
?>
