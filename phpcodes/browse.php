<?php
include 'db.php';
$search = isset($_GET['search']) ? $_GET['search'] : '';

$query = "SELECT * FROM books WHERE title LIKE ? OR author LIKE ?";
$stmt = $conn->prepare($query);
$search_param = "%$search%";
$stmt->bind_param("ss", $search_param, $search_param);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Browse Books</title>
    <link rel="stylesheet" href="stylesbook.css">
    <link rel="stylesheet" href="styleb.css">
    <script src="scriptbook.js" defer></script>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="search-container">
        <form method="GET" action="browse.php">
            <input type="text" name="search" placeholder="Search books by title or author..." value="<?php echo htmlspecialchars($search); ?>">
            <button type="submit">Search</button>
        </form>
    </div>

    <div class="book-grid">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="book-card">
<?php
$imagePath = 'uploads/' . htmlspecialchars($row['image']);

echo '<img src="' . $imagePath . '" alt="Book Image" width="150px" height="180px">';
?>      <h3><?php echo htmlspecialchars($row['title']); ?></h3>
                <p>Author: <?php echo htmlspecialchars($row['author']); ?></p>
                <a href="book_details.php?book_id=<?php echo $row['book_id']; ?>">View Details</a>
            </div>
        <?php endwhile; ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>