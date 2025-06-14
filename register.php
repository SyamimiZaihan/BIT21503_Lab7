<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 25px 40px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"],
        select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            outline: none;
        }

        input[type="submit"] {
            margin-top: 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .message {
            margin-top: 15px;
            text-align: center;
            color: green;
            font-weight: bold;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Registration Form</h2>
    <form method="POST" action="">
        <label>Matric No:</label>
        <input type="text" name="matric" required>

        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <label>Role:</label>
        <select name="role">
            <option value="student">Student</option>
            <option value="lecturer">Lecturer</option>
        </select>

        <input type="submit" name="submit" value="Register"><br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $conn = new mysqli("localhost", "root", "", "Lab_7");

        if ($conn->connect_error) {
            echo "<div class='message error'>Connection failed: " . $conn->connect_error . "</div>";
        } else {
            $matric = $_POST['matric'];
            $name = $_POST['name'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $role = $_POST['role'];

            $sql = "INSERT INTO users (matric, name, password, role) VALUES ('$matric', '$name', '$password', '$role')";

            if ($conn->query($sql) === TRUE) {
                echo "<div class='message'>New user registered successfully.</div>";
            } else {
                echo "<div class='message error'>Error: " . $conn->error . "</div>";
            }

            $conn->close();
        }
    }
    ?>
</div>
</body>
</html>
