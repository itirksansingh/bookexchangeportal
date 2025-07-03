<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: user_dashboard.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'] ?? "User";

// Fetch Books Added by User
$query = "SELECT * FROM books WHERE owner_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Fetch Books Requested by User
$req_query = "SELECT requests.*, books.title, books.author, books.image, books.status 
              FROM requests 
              JOIN books ON requests.book_id = books.id 
              WHERE requests.user_id = ?";
$req_stmt = $conn->prepare($req_query);
$req_stmt->bind_param("i", $user_id);
$req_stmt->execute();
$req_result = $req_stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
    <link rel="stylesheet" href="stylesbook.css">
    <link rel="stylesheet" href="styleb.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #1e1e2f;
            color: white;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .dashboard-container {
            margin: 50px auto;
            max-width: 1000px;
            background: #2a2a3a;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(255, 255, 0, 0.5);
        }
        h2, h3 {
            margin-bottom: 15px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background: yellow;
            color: black;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }
        .button:hover { background: orange; }
        .logout { background: red; color: white; }
        .book-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        .book-card {
            background: #333;
            padding: 15px;
            border-radius: 8px;
            width: 200px;
            text-align: center;
        }
        .book-card img {
            width: 150px;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }
        .book-card h3 {
            font-size: 16px;
            margin: 10px 0;
        }
        .book-card p {
            font-size: 14px;
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="dashboard-container">
    <h2>Welcome, <?php echo htmlspecialchars($user_name); ?>! 👋</h2>

    <a href="add_book.php" class="button">➕ Add New Book</a>
    <a href="browse.php" class="button">🔍 Browse Books</a>
    <a href="logout.php" class="button logout">🚪 Logout</a>

    <!-- Added Books Section -->
    <h3>Your Added Books</h3>
    <div class="book-grid">
        <?php if($result->num_rows > 0): ?>
            <?php while ($book = $result->fetch_assoc()): ?>
                <div class="book-card">
                    <img src="<?php echo !empty($book['image']) && file_exists($book['image']) ? $book['image'] : 'uploads/default-book.png'; ?>" alt="Book Cover">
                    <h3><?php echo htmlspecialchars($book['title']); ?></h3>
                    <p>Author: <?php echo htmlspecialchars($book['author']); ?></p>
                    <p>Status: <?php echo htmlspecialchars($book['status']); ?></p>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>You have not added any books yet.</p>
        <?php endif; ?>
    </div>

    <!-- Requested Books Section -->
    <h3>Your Requested Books</h3>
    <div class="book-grid">
        <?php if($req_result->num_rows > 0): ?>
            <?php while ($req = $req_result->fetch_assoc()): ?>
                <div class="book-card">
                    <img src="<?php echo !empty($req['image']) && file_exists($req['image']) ? $req['image'] : 'uploads/default-book.png'; ?>" alt="Book Cover">
                    <h3><?php echo htmlspecialchars($req['title']); ?></h3>
                    <p>Author: <?php echo htmlspecialchars($req['author']); ?></p>
                    <p>Status: <?php echo htmlspecialchars($req['status']); ?></p>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>You have not requested any books yet.</p>
        <?php endif; ?>
    </div>

</div>

</body>
</html>
