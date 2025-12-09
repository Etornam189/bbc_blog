<?php 
include '../db.php';

if (!isset($_GET['id'])) {
    echo "<h3>No post selected.</h3>";
    exit;
}

$id = intval($_GET['id']);

$categoriesResult = $conn->query("SELECT * FROM categories");

$id = $_GET['id'];
$postResult = $conn->query("SELECT * FROM posts WHERE id = $id");
$post = $postResult->fetch_assoc();
$currentCategory = $post['category_id']; 


$sql = "SELECT * FROM posts WHERE id = $id LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "<h3>Post not found.</h3>";
    exit;
}

$post = $result->fetch_assoc();

if (isset($_POST['update'])) {

    $path = $conn->real_escape_string($_POST['path']);
    $title = $conn->real_escape_string($_POST['title']);
    $summary = $conn->real_escape_string($_POST['summary']);
    $body = $conn->real_escape_string($_POST['body']);
    $category_id =$conn->real_escape_string($_POST['category_id']);


    $update = "
        UPDATE posts 
        SET title='$title', summary='$summary', body='$body', path='$path', category_id='$category_id'
        WHERE id=$id
    ";

    if ($conn->query($update)) {
        echo "<script>
                alert('Post updated successfully');
                window.location.href='dashboard.php?page=update_posts';
              </script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<style>
    .form-box {
        background-color: #fff;
        padding: 30px 40px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        width: 600px;
    }

    h2 {
        text-align: center;
        margin-bottom: 30px;
        color: #333;
    }

    .form-box textarea,
    .form-box input[type="submit"] {
        width: 100%;
        font-size: 16px;
        margin-top: 5px;
    }

    .form-box textarea {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        resize: vertical;
        font-family: Arial, sans-serif;
    }

    .form-box input[type="submit"] {
        background-color: #007BFF;
        color: #fff;
        border: none;
        padding: 12px;
        border-radius: 6px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    .form-box input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<div class="d-flex justify-content-center">
    <form class="form-box" action="" method="post">
        <h2>EDIT POST</h2>

        News Title: <br>
        <textarea name="title" cols="50"><?php echo $post['title']; ?></textarea><br><br>

        Summary: <br>
        <textarea name="summary" rows="10" cols="50"><?php echo $post['summary']; ?></textarea><br><br>

        Content: <br>
        <textarea name="body" cols="50" rows="10"><?php echo $post['body']; ?></textarea><br><br>

        Image Link: <br>
        <textarea name="path" cols="50"><?php echo $post['path']; ?></textarea><br><br>

        <label>Category</label>
        <select name="category_id" class="form-control">
            <?php while($cat = $categoriesResult->fetch_assoc()): ?>
                <option value="<?php echo $cat['id']; ?>"
                    <?php if($cat['id'] == $currentCategory) echo "selected"; ?>>
                    <?php echo $cat['name']; ?>
                </option>
            <?php endwhile; ?>
        </select>

        <br><br>
        <input type="submit" name="update" value="Update Post">
    </form>
</div>
