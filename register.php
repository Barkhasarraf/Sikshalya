
<html>
<head>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #633154; 
            color: #fff; 
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff; /* White background for the form */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px; 
            color: #333;
        }

        form input, form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        form button {
            width: 100%;
            padding: 10px;
            background-color: #633154;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #4a253f;
        }

        .success {
            text-align: center;
            color: green;
            margin-top: 10px;
        }

        .error {
            text-align: center;
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form method="POST" action="register.php">
        <input type="text" name="name" placeholder="Name" required />
        <input type="email" name="email" placeholder="Email" required />
        <input type="password" name="password" placeholder="Password" required />
        <select name="role" required>
            <option value="Admin">Admin</option>
            <option value="Teacher">Teacher</option>
            <option value="Student">Student</option>
            <option value="Guard">Guard</option>
            <option value="Faculty-member">Faculty-member</option>
            <option value="Accountant">Accountant</option>
            <option value="Nonteachingstaff">Nonteachingstaff</option>
        </select>
        <button type="submit">Register</button>
    </form>

    <?php
    // backend section
    require 'db_connection.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $role = $_POST['role'];

        $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
        $stmt->bindparam("ssss", $name, $email, $password, $role);

        if ($stmt->execute()) {
            echo "<p class='success'>Registration successful!</p>";
        } else {
            echo "<p class='error'>Error: " . $stmt->error. "</p>";
        }
        $stmt->close();
    }
    ?>
</body>
</html>
