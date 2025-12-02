<?php include 'db.php';
      
      include 'header.php';
   

      
$id = $_GET['id'];

$sql = "SELECT * FROM posts WHERE id = $id";
$result = $conn->query($sql);
$news = $result->fetch_assoc();
?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>BBC News - Breaking news, videos and the latest top stories from the US and around the world</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

        <style>
         @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap');

        body{
            font-family: "Merriweather", Times New Roman, sans-serif;
        }
        </style>
</head>
<body>
    <style>
         body {
           
            background-color: #ffff;
        }
    </style>
<div class="row">
    <div class="col-2">

    </div>
    <div class="col-8">
        <div class="container text-start fs-5 px-5 pt-5">

        <p class="fs-3 fw-bold"><?php echo $news['title']; ?></p>
        <a href=""class="text-black text-decoration-none link-opacity-50-hover">
            <p class="text-end fw-bold">
            <i class="bi bi-share "></i> Share &nbsp;
            <i class="bi bi-bookmark"></i> Save
            </p>
        </a>

        <img src=<?php echo $news['path']; ?> width="900" height="500">
        <br><br>
        <p><?php echo $news['body']; ?></p>
        </div>
    </div>
    <div class="col-2">
    </div>  
</div>

</body>
</html>