<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            padding: 30px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background-color: white;
            padding: 25px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e8f4ff;
        }

        .message {
            text-align: center;
            font-size: 16px;
            color: #666;
            margin-top: 15px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Registered Users</h2>
    <table>
        <tr>
            <th>Matric</th>
            <th>Name</th>
            <th>Role</th>
        </tr>

        <?php
        $conn = new mysqli("localhost", "root", "", "Lab_7");

        if ($conn->connect_error) {
            die("<tr><td colspan='3' class='message'>Connection failed: " . $conn->connect_error . "</td></tr>");
        }

        $sql = "SELECT matric, name, role FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['matric']}</td><td>{$row['name']}</td><td>{$row['role']}</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3' class='message'>No users found</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</div>
</body>
</html>
