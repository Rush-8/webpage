<?php
// Function to establish a database connection and return the connection object.
function connectDatabase() {
    $servername = "localhost";  
    $username = "rush";    
    $password = "root";    
    $dbname = "nature_outdoors_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

// Function to insert project details into the database.
function insertProject($title, $description, $image) {
    $conn = connectDatabase();

    $stmt = $conn->prepare("INSERT INTO projects (Title, Description, Image) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $description, $image);

    $result = $stmt->execute();

    $stmt->close();
    $conn->close();

    return $result;
}

// Function to retrieve project data from the database.
function getProjects() {
    $conn = connectDatabase();

    $sql = "SELECT * FROM projects";
    $result = $conn->query($sql);

    $projects = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $projects[] = $row;
        }
    }

    $conn->close();

    return $projects;
}

// Function to update project information in the database.
function updateProject($id, $title, $description, $image) {
    $conn = connectDatabase();

    $stmt = $conn->prepare("UPDATE projects SET Title = ?, Description = ?, Image = ? WHERE ID = ?");
    $stmt->bind_param("sssi", $title, $description, $image, $id);

    $result = $stmt->execute();

    $stmt->close();
    $conn->close();

    return $result;
}

// Function to delete projects from the database.
function deleteProject($id) {
    $conn = connectDatabase();

    $stmt = $conn->prepare("DELETE FROM projects WHERE ID = ?");
    $stmt->bind_param("i", $id);

    $result = $stmt->execute();

    $stmt->close();
    $conn->close();

    return $result;
}
?>

<?php


// Function to register a new user.
function registerUser($username, $password) {
    $conn = connectDatabase();

    // You should perform password hashing for better security.
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (Username, Password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashedPassword);

    $result = $stmt->execute();

    $stmt->close();
    $conn->close();

    return $result;
}

// Function to verify user login.
function loginUser($username, $password) {
    $conn = connectDatabase();

    $stmt = $conn->prepare("SELECT Password FROM users WHERE Username = ?");
    $stmt->bind_param("s", $username);

    $stmt->execute();
    $stmt->bind_result($hashedPassword);

    $result = $stmt->fetch();

    $stmt->close();
    $conn->close();

    // Verify the entered password against the stored hashed password.
    return $result && password_verify($password, $hashedPassword);
}
?>
