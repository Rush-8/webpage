<?php
$servername = "localhost";
$username = "rush";
$password = "root";
$dbname = "nature_outdoors_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
    echo"Connection success";
}

function validateForm($name, $email, $message) {
    $errors = array();
    
    // Name: Ensure it contains only letters and spaces.
    if (!preg_match("/^[A-Za-z ]+$/", $name)) {
        $errors[] = "Name should contain only letters and spaces.";
    }
    
    // Email: Validate the email format.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    
    // Message: Avoid any potential malicious code or HTML tags.
    $sanitized_message = strip_tags($message);
    if ($sanitized_message !== $message) {
        $errors[] = "Invalid characters in the message.";
    }
    
    return $errors;
}
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $errors = validateForm($name, $email, $message);
    
    if (empty($errors)) {
        header("Location: index.html");
        exit();
    } else {
        
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    }
}
?>
