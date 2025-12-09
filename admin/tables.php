<?php
include '../db.php';

$sql = "SELECT * FROM posts ORDER BY id DESC";
$result = $conn->query($sql);
?>

<div class="container mt-4">

    <h2 class="mb-4">Manage Posts</h2>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Summary</th>
                <th>Category</th>
                <th>Image Path</th>
                <th style="width: 180px;">Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['summary']; ?></td>
                <td><?php echo $row['category_id']; ?></td>
                <td><?php echo $row['path']; ?></td>

                <td>
                    <a href="dashboard.php?page=edit_post&id=<?php echo $row['id']; ?>" 
                                class="btn btn-secondary btn-sm">Edit</a>


                    <a href="dashboard.php?page=delete_post&id=<?php echo $row['id']; ?>"
                        class="btn btn-success btn-sm"
                        onclick="return confirm('Are you sure you want to delete this post?');">
                            Delete
                    </a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>

    </table>
</div>
