<?php
// DB connect
$host = "localhost";
$user = "root";
$password = "";
$dbname = "markaza_db";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form values
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$gender = $_POST['gender'];
$age = $_POST['age'];
$education = $_POST['education'];
$course = $_POST['course'];

// Insert into DB
$sql = "INSERT INTO registrations (first_name, last_name, phone, password, gender, age, education, course)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssss", $first_name, $last_name, $phone, $password, $gender, $age, $education, $course);

if ($stmt->execute()) {
    echo "✅ Registration successful!";
} else {
    echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
