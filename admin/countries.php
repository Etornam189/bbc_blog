<?php
include '../db.php';

$sql = "SELECT * FROM countries ORDER BY id DESC";
$result = $conn->query($sql);
?>

<div class="container mt-4">
    <h2 class="mb-4">Manage Countries</h2>

    <a href="dashboard.php?page=add_country" class="btn btn-primary mb-3">Add Country</a>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td>
                    <a href="dashboard.php?page=delete_country&id=<?php echo $row['id']; ?>" 
                       class="btn btn-success btn-sm" 
                       onclick="return confirm('Are you sure you want to delete this category?');">
                        Delete
                    </a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
