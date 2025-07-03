<?php
session_start();

if(!isset($_SESSION['user_email'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e6e6e6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .dashboard {
            /* ======== Cool Animated Background ======== */
.dashboard-animation {
    position: fixed;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, rgba(34,193,195,1) 0%, rgba(253,187,45,1) 100%);
    animation: gradient 10s infinite alternate;
    z-index: -1;
}

@keyframes gradient {
    0% { background: radial-gradient(circle, #22c1c3, #fdbb2d); }
    100% { background: radial-gradient(circle, #fdbb2d, #22c1c3); }
};
            padding: 30px;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 25px;
            background: #e74c3c;
            color: white;
            text-decoration: none;
            border-radius: 3px;
        }
        a:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>

<div class="dashboard">
   <h2>Welcome, <?php echo $_SESSION['user_name']; ?>!</h2>
<p>Email: <?php echo $_SESSION['user_email']; ?></p>
<a href="my_books.php" class="button">📚 My Books</a>
    <a href="logout.php">Logout</a>
</div>

</body>
</html>
