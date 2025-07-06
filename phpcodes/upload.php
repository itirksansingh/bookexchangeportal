<?php
include 'db.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $owner_id = $_POST['owner_id']; // User who is uploading the book
    $status = "available"; // Default status

    // Check if file was uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image_name = basename($_FILES['image']['name']);
        $target_dir = "uploads/";
        $target_file = $target_dir . $image_name;

        // Move uploaded file to uploads/ folder
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            // Insert into database
            $sql = "INSERT INTO books (title, author, category_id, description, image, owner_id, status) 
                    VALUES ('$title', '$author', '$category_id', '$description', '$target_file', '$owner_id', '$status')";

            if (mysqli_query($conn, $sql)) {
                echo "Book added successfully!";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "Failed to upload image.";
        }
    } else {
        echo "No image uploaded.";
    }
}

mysqli_close($conn);
?>
