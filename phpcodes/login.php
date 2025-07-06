<?php
include 'db.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
          $_SESSION['user_id'] = $row['id'];
$_SESSION['user_name'] = $row['name'];
$_SESSION['user_email'] = $row['email'];


            echo "<script>alert('Login Successful!'); window.location.href='user_dashboard.php';</script>";
        } else {
            echo "<script>alert('Incorrect Password!'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('Email not registered!'); window.location.href='register.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="stylesbook.css">
    <link rel="stylesheet" href="styleb.css">
    <script src="scriptbook.js" defer></script>

    <style>
        .login-form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background: #0a0942;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-form input,
        .login-form button {
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-form button {
            background: #28a745;
            color: white;
            cursor: pointer;
        }
        .login-form button:hover {
            background: yellow;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="login-form">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
