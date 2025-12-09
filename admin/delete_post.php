<?php
include '../db.php';  // correct path

if (!isset($_GET['id'])) {
    die("No post ID provided.");
}

$id = intval($_GET['id']);

$sql = "DELETE FROM posts WHERE id = $id";

if ($conn->query($sql)) {
    echo "<script>
            alert('Post deleted successfully!');
            window.location.href = 'dashboard.php?page=update_posts';
          </script>";
} else {
    echo "Error deleting post: " . $conn->error;
}

$conn->close();
?>
