
<?php
include 'db.php';

if (isset($_POST['delete'])) {
    $post_id = $_POST['post_id'];

    $sql = "UPDATE posts SET deleted_at = NOW() WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $post_id);
    $stmt->execute();

    if($stmt->affected_rows > 0){
        echo "Post deleted successfully.";
    } else {
        echo "Error deleting post.";
    }
}
?>







<?php
// include '../db.php'; 

// if (!isset($_GET['id'])) {
//     die("No post ID provided.");
// }

// $id = intval($_GET['id']);

// $sql = "DELETE FROM posts WHERE id = $id";

// if ($conn->query($sql)) {
//     echo "<script>
//             alert('Post deleted successfully!');
//             window.location.href = 'dashboard.php?page=update_posts';
//           </script>";
// } else {
//     echo "Error deleting post: " . $conn->error;
// }

// $conn->close();
?>
