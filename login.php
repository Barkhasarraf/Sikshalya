<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System - Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
        }
        .container {
            display: flex;
            width: 700px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .left-panel {
            background-color: #007bff;
            color: white;
            padding: 50px;
            width: 40%;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .left-panel h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .left-panel p {
            margin-top: auto;
            font-size: 14px;
        }
        .right-panel {
            background-color: #fff;
            padding: 50px;
            width: 60%;
        }
        .right-panel h2 {
            font-size: 22px;
            margin-bottom: 20px;
        }
        .right-panel label {
            display: block;
            margin: 15px 0 5px;
        }
        .right-panel input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .right-panel button {
            width: 48%;
            padding: 10px;
            margin-top: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .right-panel button:nth-child(2) {
            background-color: #dc3545;
        }
    </style>
</head>
<body>

<div class="container">
   
<div class="left-panel">
        <h1>Welcome User!</h1>

        </div>

    <!-- Right Panel -->
    <div class="right-panel">
        <h2>School Management System</h2>
        <h3>Login Page</h3>
        <form action="home.php" method="post">
            <label for="username">User name</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="user_type">User Type</label>
            <select id="user_type" name="user_type">
                <option value="Admin">Admin</option>
                <option value="Student">Student</option>
                <option value="Teacher">Teacher</option>
                <option value="Adminstrator">Adminstrator</option>
                <option value="Guards">Guards</option>
                <option value="Admin">Non-Teaching</option>
            </select>

            <button type="submit" href="home.php">SUBMIT</button>
            
        </form>
    </div>
</div>
<?php
session_start();

// Hardcoded credentials (you can replace this with database validation later)
$valid_username = "";
$valid_password = "";
$valid_user_type = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the posted data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];

    // Check if credentials match
    if ($username == $valid_username && $password == $valid_password && $user_type == $valid_user_type) {
        $_SESSION['username'] = $username;
        $_SESSION['user_type'] = $user_type;
        echo "<script>alert('Login successful! Welcome $username'); window.location.href='dashboard.php';</script>";
    } else {
        echo "<script>alert('Login failed! Invalid credentials.'); window.location.href='index.html';</script>";
    }
}
?>

</body>
</html>