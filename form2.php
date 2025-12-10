<?php include 'db.php'; 

$categoriesResult = $conn->query("SELECT * FROM categories");

if(isset($_POST['submit'])) {

$path = $conn->real_escape_string($_POST['path']);
$title = $conn->real_escape_string($_POST['title']);
$summary = $conn->real_escape_string($_POST['summary']);
$body = $conn->real_escape_string($_POST['body']);
$category_id =$conn->real_escape_string($_POST['category_id']);


$sql = "INSERT INTO posts (path, title, summary, body, category_id) 
VALUES ('$path', '$title', '$summary', '$body', '$category_id')";

if($conn->query($sql)){
    echo "";
}
else{
    echo "Error: " . $conn->error;
}

}
$conn->close();


?>


     <style>
        .form-box {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 600px;
            
        }

        /* Heading */
        h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        /* Labels */
        .form-box textarea,
        .form-box input[type="submit"] {
            width: 100%;
            font-size: 16px;
            margin-top: 5px;
        }

        /* Textareas */
        .form-box textarea {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            resize: vertical;
            font-family: Arial, sans-serif;
        }

        /* Submit button */
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

        /* Spacing between fields */
        .form-box textarea + br + br {
            margin-bottom: 15px;
        }
    </style>


    <!-- <div class="modal fade" id="createPostModal" tabindex="-1">
        <div class="modal-dialog modal-lg"> -->
            <!-- <div class="modal-content"> -->
                <!-- <div class="modal-body"> -->
                    <!-- Your form goes here -->
                    <form class="form-box" action="" method="post">
                    <h2>CREATE A POST</h2>

                    News Title: <br>
                    <textarea name="title" placeholder="type news title"></textarea><br><br>

                    Summary: <br>
                    <textarea name="summary" placeholder="type news summary" rows="10"></textarea><br><br>

                    Content: <br>
                    <textarea name="body" placeholder="type news body" cols="50" rows="10"></textarea><br><br>

                    Image Link: <br>
                    <textarea name="path" placeholder="paste image link" cols="50"></textarea><br><br>

                   <label>Category</label>
                    <select name="category_id" class="form-control">
                    <?php while ($cat = $categoriesResult->fetch_assoc()): ?>
                        <option value="<?php echo $cat['id']; ?>">
                            <?php echo htmlspecialchars($cat['name']); ?>
                        </option>
                        <br><br>
                    <?php endwhile; ?>
                    <input type="submit" name="submit" value="Post" class="btn btn-primary me-10">
                    </form>

                <!-- </div> -->

            <!-- </div>
        </div>
   </div> -->


 
    <!-- <form class="form-box" action="" method="post">
          <h2>CREATE A POST</h2>
       News Title: <br>
       <textarea name="title" placeholder="type news title" cols="50"></textarea><br><br>
       Summary: <br>
       <textarea name="summary" placeholder="type news summary" rows="10" cols="50"></textarea><br><br> 
       Content: <br>
       <textarea name="body" placeholder="type news body" cols="50" rows="10"></textarea><br><br>
       Image Link: <br>
       <textarea name="path" placeholder="paste image link" cols="50"></textarea><br><br>
       <br><br>
       <input type="submit" name="submit" value="Post" >

    </form> -->

