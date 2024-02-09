<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" || isset($_POST['submit'])) {
    // Retrieve the form data
    $id = $_POST["id"];
    $doctorCategory = $_POST["doctor-category"];
    $doctorName = $_POST["doctor-name"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $reason = $_POST["reason"];

    echo "doctorCategory:" . $doctorCategory . ", doctorName:" . $doctorName . ", date:" . $date . ", time:" . $time . ", reason:" . $reason . "<br>";

    // Perform validation or additional processing if needed

    // Connect to the MySQL database
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "healhub";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error . "<br>");
    } else {
        echo "Connection done" . "<br>";
    }

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("INSERT INTO appointments (id, category, doctor_name, date, time, reason) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $id, $doctorCategory, $doctorName, $date, $time, $reason);

    if ($stmt->execute()) {
        // Appointment booked successfully
        echo "Appointment booked successfully!" . "<br>";
        // Redirect to scheduled_appointments.php
        header("Location: scheduled_appointments.php?category=$doctorCategory&doctor=$doctorName&date=$date&time=$time&reason=$reason");
        exit(); // Terminate the current script to ensure the redirect is executed
    } else {
        // Error occurred while booking the appointment
        echo "Error: " . $stmt->error . "<br>";
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
} else {
    echo "Form not submitted.";
}
?>