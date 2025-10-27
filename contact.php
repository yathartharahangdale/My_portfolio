<?php
// Database connection settings
$servername = "localhost";   // or your server name
$username = "root";          // your MySQL username
$password = "";              // your MySQL password
$dbname = "portfolio_db";    // database you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['mess']));

    // Prepare SQL query
    $sql = "INSERT INTO contact_messages (name, email, subject, message)
            VALUES (?, ?, ?, ?)";

    // Prepare and bind
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    // Execute the query
    if ($stmt->execute()) {
    header("Location: thankyou.php");
    exit();
} else {
    echo "<h2>Sorry, something went wrong: " . $stmt->error . "</h2>";
}


    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "<h3>Form not submitted properly.</h3>";
}

header("Location: thankyou.php");
exit();

?>
