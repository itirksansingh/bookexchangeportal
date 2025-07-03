<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $owner_id = $_SESSION['user_id'];
    $owner_name = $_SESSION['user_name'];
    $image = '';

    // Image Upload Handling
    if (!empty($_FILES["image"]["name"])) {
        $target_dir = "uploads/"; // Changed from books/ to uploads/
        $image_name = time() . "_" . basename($_FILES["image"]["name"]); // Unique filename
        $target_file = $target_dir . $image_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if the file is a valid image
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array($imageFileType, $allowed_types)) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image = $target_file; // Store the correct path in DB
            } else {
                echo "<script>alert('Error uploading image.');</script>";
            }
        } else {
            echo "<script>alert('Invalid image format. Only JPG, PNG, and GIF allowed.');</script>";
        }
    }

    // Insert Book Details into Database
    $stmt = $conn->prepare("INSERT INTO books (title, author, description, owner_id, owner_name, image) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiss", $title, $author, $description, $owner_id, $owner_name, $image);

    if ($stmt->execute()) {
        echo "<script>alert('Book added successfully!'); window.location.href='user_dashboard.php';</script>";
    } else {
        echo "<script>alert('Error: Could not add book.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Book</title>
    <link rel="stylesheet" href="stylesbook.css">
    <link rel="stylesheet" href="styleb.css">
    <script src="scriptbook.js" defer></script>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="form-container">
        <h2>Add New Book</h2>
        <form action="add_book.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="title" placeholder="Book Title" required>
            <input type="text" name="author" placeholder="Author" required>
            <textarea name="description" placeholder="Book Description" required></textarea>
            <input type="file" name="image" accept="image/*">
            <button type="submit">Add Book</button>
        </form>
    </div>
</body>
</html>

