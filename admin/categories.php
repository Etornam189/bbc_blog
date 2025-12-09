<?php
include '../db.php';

$sql = "SELECT * FROM categories ORDER BY id DESC";
$result = $conn->query($sql);
?>

<div class="container mt-4">
    <h2 class="mb-4">Manage Categories</h2>

    <a href="dashboard.php?page=add_category" class="btn btn-primary mb-3">Add Category</a>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td>
                    <a href="dashboard.php?page=edit_category&id=<?php echo $row['id']; ?>" 
                       class="btn btn-warning btn-sm">Edit</a>

                    <a href="dashboard.php?page=delete_category&id=<?php echo $row['id']; ?>" 
                       class="btn btn-danger btn-sm" 
                       onclick="return confirm('Are you sure you want to delete this category?');">
                        Delete
                    </a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
