<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Markaza kabab binu Arat - Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Header */
        header {
            background-color: #33485c;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-nav {
            display: flex;
            align-items: center;
        }

        header img {
            height: 50px;
            margin-right: 20px;
        }

        nav {
            display: flex;
            gap: 15px;
        }

        nav a {
            color: white;
            padding: 5px 10px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #28a745;
            border-radius: 5px;
        }

        .auth-buttons {
            display: flex;
            gap: 10px;
        }

        .auth-buttons a {
            background-color: #28a745;
            color: white;
            padding: 5px 15px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .auth-buttons a:hover {
            background-color: #218838;
        }

        /* Hamburger Menu */
        .menu-icon {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }

        /* Registration Form Styles */
        .container {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #0056b3;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #218838;
        }

        /* Footer */
        footer {
            background-color: #33485c;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }

        footer p {
            margin: 10px 0;
        }

        .social-icons {
            margin-top: 10px;
        }

        .social-icons i {
            font-size: 1.5em;
            margin: 0 10px;
            color: white;
            transition: color 0.3s ease;
        }

        .social-icons i:hover {
            color: #28a745;
        }

        /* Floating Phone Button */
        .floating-phone-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            font-size: 24px;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        .floating-phone-btn:hover {
            background-color: #218838;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .menu-icon {
                display: block;
            }

            nav {
                display: none;
                flex-direction: column;
                width: 100%;
                background-color: #33485c;
                position: absolute;
                top: 60px;
                left: 0;
            }

            nav a {
                padding: 10px;
                text-align: center;
            }

            .auth-buttons {
                display: none;
            }

            .logo-nav {
                width: 100%;
                justify-content: space-between;
            }
        }
        footer .contact-links {
            margin: 10px 0;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        footer .contact-links a {
            color: white;
            text-decoration: none;
            font-size: 1em;
            transition: color 0.3s ease;
        }

        footer .contact-links a:hover {
            color: #28a745;
        }

        footer .contact-links i {
            margin-right: 10px;
            color: #28a745;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo-nav">
            <img src="images/logo.png" alt="Darul Arqam Dawah Logo">
            <nav id="nav-menu">
                <a href="index.html">Home</a>
                <a href="Services.html">Services</a>
                <a href="Contact.html">Contact US</a>
                <a href="Registr.html">Register</a>
            </nav>
            <div class="menu-icon" id="menu-icon">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div class="auth-buttons">
            <a href="login.html">Login</a>
        </div>
    </header>

    <div class="container">
        <h2>Registration Form</h2>
        <form action="submit_registration.php" method="POST">
            <label for="first-name">First Name:</label>
            <input type="text" id="first-name" name="first_name" placeholder="Enter your first name" required>

            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" name="last_name" placeholder="Enter your last name" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Create a password" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select your gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" placeholder="Enter your age" required>

            <label for="education">Educational Background:</label>
            <input type="text" id="education" name="education" placeholder="Enter your highest qualification" required>

            <label for="course">Select a Course:</label>
            <select id="course" name="course" required>
                <option value="">Select a course</option>
                <option value="Harfii Dubbisu">Harfii Dubbisu</option>
                <option value="Qur'ana dubbisu">Qur'ana dubbisu</option>
                <option value="Qur'ana hifzi">Qur'ana hifzi</option>
                <option value="lenjii dawa">lenjii dawa</option>
                <option value="Hadiisa">Hadiisa</option>
            </select>

            <button type="submit">Register</button>
        </form>
    </div>

    <!-- Floating Phone Button with Your Phone Number -->
    <a href="tel:+251985252568" class="floating-phone-btn">
        <i class="fas fa-phone"></i>
    </a>

    <footer>
        <p>Follow Us:</p>
        <div class="social-icons">
            <a href="https://t.me/+6PKgSzINV0VkOTI0" target="_blank"><i class="fa-brands fa-telegram"></i></a>
            <a href="https://www.facebook.com/share/159vkALX6x/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://www.youtube.com/@Markaza1442" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://www.tiktok.com/@khabbaabibnu4?_t=ZM-8uGHS2mivoc&_r=1" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
            <a href="https://chat.whatsapp.com/G4oRH4dfCz8IJ3r9AFDHkj" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
        <p>Contact Us:</p>
        <div class="contact-links">
            <a href="tel:+251985252568"><i class="fas fa-phone"></i>+251938212783</a>
           
        </div>
        <p>&copy; 2025 Markaza kabab Arat. All rights reserved.</p>
        <p>Powered by Mahamisha Oro</p>
    </footer>

    <script>
        // Toggle the navigation menu on mobile devices
        document.getElementById('menu-icon').addEventListener('click', function() {
            var navMenu = document.getElementById('nav-menu');
            if (navMenu.style.display === 'flex') {
                navMenu.style.display = 'none';
            } else {
                navMenu.style.display = 'flex';
            }
        });
    </script>


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
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?
</body>
</html>