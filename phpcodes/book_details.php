<?php
include 'db.php';

// Debugging: Check if book_id is present in the URL
if (!isset($_GET['book_id'])) {
    die("Error: Book ID is missing from the URL.");
}

// Get book_id and validate it
$book_id = $_GET['book_id'];

if (empty($book_id) || !ctype_digit($book_id)) {
    die("Error: Invalid Book ID format.");
}

$book_id = intval($book_id); // Convert to integer for safety

// Fetch book details from the database
$query = "SELECT * FROM books WHERE book_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $book_id);
$stmt->execute();
$result = $stmt->get_result();
$book = $result->fetch_assoc();

// Check if the book exists
if (!$book) {
    die("Error: Book not found.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($book['title']); ?> - Book Details</title>
    <link rel="stylesheet" href="stylesbook.css">
    <link rel="stylesheet" href="styleb.css">
    <script src="scriptbook.js" defer></script>
</head>
<body>
    <?php include 'navbar.php'; ?>
    
    <div class="book-detail-container">
        <h1><?php echo htmlspecialchars($book['title']); ?></h1>
        <p><strong>Author:</strong> <?php echo htmlspecialchars($book['author']); ?></p>

        <?php if (!empty($book['description'])): ?>
            <p><strong>Description:</strong> <?php echo nl2br(htmlspecialchars($book['description'])); ?></p>
        <?php endif; ?>

        <div class="book-image">
            <?php
            $imagePath = !empty($book['image']) ? "uploads/" . htmlspecialchars($book['image']) : "uploads/default-book.png";
            ?>
            <img src="<?php echo $imagePath; ?>" alt="Book Cover">
        </div>

        <div class="actions">
            <a href="request_book.php?book_id=<?php echo $book['book_id']; ?>" class="btn">Request Book</a>
            <a href="browse.php" class="btn">Back to Browse</a>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
