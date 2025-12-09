<?php include '../db.php';

if(isset($_POST['submit'])) {

$name = $conn->real_escape_string($_POST['name']);

$sql = "INSERT INTO countries (name) 
VALUES ('$name')";

if($conn->query($sql)){
    echo "added successfully";
}
else{
    echo "Error: " . $conn->error;
}

}
$conn->close();


?>

     <style>
        /* Form container */
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

    <div class="d-flex justify-content-center">
        <form class="form-box" action="" method="post">
            <h2>Add a country</h2>
       Country Name: <br>
        <input type="Text" name="name" cols="50"></textarea><br><br>
        <input type="submit" name="submit" value="Add">
        </form>
    </div>

