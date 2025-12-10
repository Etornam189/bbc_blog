<?php
include '../db.php';

if (isset($_POST['submit'])) {
    $path = $conn->real_escape_string($_POST['path']);
    $title = $conn->real_escape_string($_POST['title']);
    $summary = $conn->real_escape_string($_POST['summary']);
    $body = $conn->real_escape_string($_POST['body']);

    $sql = "INSERT INTO posts (path, title, summary, body) 
            VALUES ('$path', '$title', '$summary', '$body')";

    if ($conn->query($sql)) {
        echo "<div class='alert alert-success'>Post created successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}

$conn->close();
?>


<div class="modal fade" id="createPostModal" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <!-- Modal Header with Close Button -->
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <form class="form-box" action="" method="post">
                    <h2 style="text-align:center; margin-bottom:20px;">CREATE A POST</h2>

                    <label>News Title:</label>
                    <textarea name="title" placeholder="Type news title" rows="2" cols="50"></textarea>

                    <label>Summary:</label>
                    <textarea name="summary" placeholder="Type news summary" rows="4" cols="50"></textarea>

                    <label>Content:</label>
                    <textarea name="body" placeholder="Type news body" rows="6" cols="50"></textarea>

                    <label>Image Link:</label>
                    <textarea name="path" placeholder="Paste image link" rows="2" cols="50"></textarea>

                    <input type="submit" name="submit" value="Post" class="btn btn-primary mt-3">
                </form>
            </div>

        </div>
    </div>
</div>


<!-- Modal/Form CSS -->
<style>
.form-box {
    width: 200%;
    box-sizing: border-box;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.form-box textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 6px;
    border: 1px solid #ccc;
    resize: vertical;
    font-family: Arial, sans-serif;
    font-size: 16px;
}

.form-box input[type="submit"] {
    width: 100%;
    padding: 12px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.form-box input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Ensure modal stacks correctly */
.modal-backdrop {
    z-index: 1050;
}

.modal {
    z-index: 1060;
}
</style>
