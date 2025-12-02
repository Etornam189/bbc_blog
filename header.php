<?php include 'db.php';

$categories=[];

$sql="SELECT*FROM categories";
$result=$conn->query($sql);
while($ctgs = $result->fetch_assoc()){
     $categories[]=$ctgs;
}

$countries=[];
$sql="SELECT*FROM countries";
$outcome=$conn->query($sql);
while($cts = $outcome->fetch_assoc()){
    $countries[]=$cts;
}





?>


<!DOCTYPE html>
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

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
    <div class="bug">
      <span></span>
    </div>
    <div class="navbar-brand align-items-center mx-auto fw-bold">
        <span class="bbc-box">B</span>
        <span class="bbc-box">B</span>
        <span class="bbc-box">C</span>
  </div>  
      <div class="ms-auto d-flex gap-3">
        <button class="bt1" type="submit">Register</button>
        <button class="bt2" type="submit">Sign Up</button>
      </div>
 </nav>
<nav class="mini-nav bg-white border-bottom py-3 sticky-top" style="margin-top: \10px;">
    <div class="container fw-semibold d-flex gap-3" style="margin-right: -200px;">
    <?php foreach($categories as $ctg): ?>
        <span class="tiny"><?php echo $ctg['name']; ?></span>
    <?php endforeach; ?>
    </div>
</nav>
<nav class="mini-nav bg-white border-bottom py-1 sticky-top" style="margin-top: 0px;">
     <div class="container fw-normal d-flex gap-3 fs-6" style="margin-right: 5px;">
        <?php foreach($countries as $country): ?>
            <span class="mtiny"><?php echo $country['name']; ?></span>
        <?php endforeach; ?>
     </div>
</nav>
</body>
</html>