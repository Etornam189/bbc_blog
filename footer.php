<?php include 'db.php';

      include 'index.php';

?>

<!DOCTYPE html>
<body>
    <head>
    <meta charset="UTF-8">
    <title>BBC News - Breaking news, videos and the latest top stories from the US and around the world</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
        <style>
         @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap');

        body{
            font-family: "Merriweather", Times New Roman, sans-serif;
        }
        </style>
</head>

<div class="card">
  <div class="card-header">
    <div class="row pt-5">
      <div class="col-4 text-start pt-10">
              <?php $now=$news[6]; ?>
              <h2 class="hover-underline"><?php echo $now['title']; ?></h2>
              <p><?php echo $now['summary']; ?></p>
              <a href="#" class="btn btn-outline-dark px-2 py-0">See more</a>
      </div>
      <div class="col-8">
            <img src="<?php echo $now['path']; ?>" width="900" height="550" class="pb-5">
      </div>
        <hr>
        <div class="navbar-brand align-items-center mx-auto fw-bold">
          <span class="bbc-box">B</span>
          <span class="bbc-box">B</span>
          <span class="bbc-box">C</span>
        </div> 
        <br><br> 
        <div class="container fw-semibold d-flex gap-3 text-start" style="margin-right: -200px;">
          <?php foreach($categories as $ctg): ?>
              <span class="copy"><?php echo $ctg['name']; ?></span>
          <?php endforeach; ?>
        </div>
        <br><br>
        <div class="dropdown pd-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          BBC in other languages: 
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else</a></li>
        </ul>
        </div>

        <hr>
        <div>
          <span><p>follow BBC on: </p><i class="bi bi-tiktok"></i></span>
        </div>
      </div>
    </div>
  </div>
</div>






</body>
</html>