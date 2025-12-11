<?php include 'db.php';
    
   include 'header.php';

    $news=[];
    $sql="SELECT*FROM posts ORDER BY id DESC";
    $result=$conn->query($sql);
    while($new=$result->fetch_assoc()){
        $news[]=$new;
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


    <div class="container pt-5 t-center">
        <h2 class="text-center text-danger fw-bold">NEWS</h2>
        <br><br>
        <div class="row align-items-start ">
            <div class="row col-9">
                <div class="row ">
                    <?php $now= $news[0]; ?>
                    <div class="col-4 fs-6 text-start">
                        <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h3 class="ftiny fw-bold "><?php echo $now['title']; ?></h3></a><p class="mtiny"><?php echo $now['summary']; ?></p>
                        </div>  
                    
                    
                    <div class="col-8">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <?php $now= $news[0]; ?>
                        <div class="carousel-item active">
                            <a href="detail.php?id=<?php echo $now['id']; ?>">
                                <img src="<?php echo $now['path']; ?>" width="620px" height="350px" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <?php $now= $news[2]; ?>
                        <div class="carousel-item">
                            <a href="detail.php?id=<?php echo $now['id']; ?>">
                               <img src="<?php echo $now['path']; ?>" width="620px" height="350px" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <?php $now= $news[3]; ?>
                        <div class="carousel-item">
                            <a href="detail.php?id=<?php echo $now['id']; ?>">
                               <img src="<?php echo $now['path']; ?>" width="620px" height="350px" class="d-block w-100" alt="...">
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div>
                <br><br>
                    
                </div>
                <div class="row g-2">
                    <?php $now=$news[4]; ?>
                    <div class="col-3">
                        <a href="detail.php?id=<?php echo $now['id']; ?>"><img src="<?php echo $now['path']; ?>" width="220px" height="145px"></a>
                        <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none "></a>
                        <h4 class="text-start fw-bold"><?php echo $now['title']; ?></h4><p class="mtiny"><?php echo $now['summary']; ?><p>
                    <hr>
                    <br><br>
                    </div>
                    <?php $now=$news[5]; ?>
                    <div class="col-3">
                        <a href="detail.php?id=<?php echo $now['id']; ?>"><img src="<?php echo $now['path']; ?>" width="220px" height="145px"></a>
                        <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h4 class="text-start fw-bold"><?php echo $now['title']; ?></h4></a>
                        <p class="mtiny text-start"><?php echo $now['summary']; ?><p>
                    <hr>
                    <br><br>
                    </div>
                    <?php $now=$news[6]; ?>
                    <div class="col-3 ">
                       <a href="detail.php?id=<?php echo $now['id']; ?>"><img src="<?php echo $now['path']; ?>" width="220px" height="145px"></a>
                       <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h4 class="text-start fw-bold"><?php echo $now['title']; ?></h4></a>
                       <p class="mtiny"><?php echo $now['summary']; ?><p>
                    <hr>
                    <br><br>
                    </div>
                    <?php $now=$news[7]; ?>
                    <div class="col-3">
                        <a href="detail.php?id=<?php echo $now['id']; ?>"><img src="<?php echo $now['path']; ?>" width="220px" height="145px"></a>
                        <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h4 class="text-start fw-bold"><?php echo $now['title']; ?></h4></a>
                        <p class="mtiny"><?php echo $now['summary']; ?><p>
                    <hr>
                    <br><br>
                    </div>
                <br><br>
                </div>
               
            </div>



            <div class="col-sm-3">
                <?php $now=$news[1]; ?>
                <div class="text-start fs-6">
                    <a href="detail.php?id=<?php echo $now['id']; ?>"><img src="<?php echo $now['path']; ?>" width="300px" height="145px"></a>
                    <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h4 class="text-start fw-bold"><?php echo $now['title']; ?></h4></a>
                    <p class="mtiny"><?php echo $now['summary']; ?><p>
                <hr>
                </div>
                <?php $now= $news[8]; ?>
                <div class="text-start fs-6">
                    <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h4 class="text-start fw-bold"><?php echo $now['title']; ?></h4></a>
                    <p class="mtiny"><?php echo $now['summary']; ?></p>
                <hr>
                </div>
                 <?php $now= $news[9]; ?>
                <div class="text-start fs-6">
                    <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h4 class="text-start fw-bold"><?php echo $now['title']; ?></h4></a>
                    <p class="mtiny"><?php echo $now['summary']; ?></p>
                <hr>
                <br><br>
                </div>
            </div>
        </div>
        
        <div class="row g-2">
            <?php $now=$news[10]; ?>
            <div class="col">
                <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h5 class="text-start fw-bold"><?php echo $now['title']; ?></h5></a>
            </div>
            <?php $now=$news[11]; ?>
            <div class="col">
                <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h5 class="text-start fw-bold"><?php echo $now['title']; ?></h5></a>
            </div>
            <?php $now=$news[12]; ?>
            <div class="col">
                <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h5 class="text-start fw-bold"><?php echo $now['title']; ?></h5></a>
            </div>
            <?php $now=$news[13]; ?>
            <div class="col">
                <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none  "><h5 class="text-start fw-bold"><?php echo $now['title']; ?></h5></a>
            </div>
            <?php $now=$news[14]; ?>
            <div class="col">
                <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h4 class="text-start fw-bold"><?php echo $now['title']; ?></h4></a>
            </div>
        
        </div>

        <br><br>

        <hr class="border-top border-3 border-dark opacity-100">
        <div class="fw-bold">Also in News</div>
        <br><br>
        </div>
   
    
    </div>
    <div class="container pt-5 t-center">
        <div class="row align-items-start ">
            <div class="row col-9">
                <div class="row ">
                    <?php $now= $news[15]; ?>
                    <div class="col-4 fs-6 text-start">
                    <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h3 class="ftiny fw-bold "><?php echo $now['title']; ?></h3></a><p class="mtiny"><?php echo $now['summary']; ?></p>
                    </div>  
                    <?php $now= $news[16]; ?>
                    <div class="col-8">
                    <a href="detail.php?id=<?php echo $now['id']; ?>">
                    <img src="<?php echo $now['path']; ?>" width="620px" height="350px">
                    </a>
                    <br><br>
                    </div>
                </div>
                <div class="row g-2">
                    <?php $now=$news[17]; ?>
                    <div class="col-6">
                        <a href="detail.php?id=<?php echo $now['id']; ?>"><img src="<?php echo $now['path']; ?>" width="460px" height="250px"></a>
                        <br><br>
                        <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none "></a>
                        <h4 class="text-start fw-bold"><?php echo $now['title']; ?></h4><p class="mtiny"><?php echo $now['summary']; ?><p>
                    <hr>
                    <br><br>
                    </div>
                    <?php $now=$news[18]; ?>
                    <div class="col-6">
                        <a href="detail.php?id=<?php echo $now['id']; ?>"><img src="<?php echo $now['path']; ?>" width="460px" height="250px"></a>
                        <br><br>
                        <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h4 class="text-start fw-bold"><?php echo $now['title']; ?></h4></a>
                        <p class="mtiny text-start"><?php echo $now['summary']; ?><p>
                    <hr>
                    <br><br>
                    </div>
                <br><br>
                </div>
               
            </div>



            <div class="col-3">
                <?php $now=$news[2]; ?>
                <div class="text-start fs-6">
                    <a href="detail.php?id=<?php echo $now['id']; ?>"><img src="<?php echo $now['path']; ?>" width="320px" height="145px"></a>
                    <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h4 class="text-start fw-bold"><?php echo $now['title']; ?></h4></a>
                    <p class="mtiny"><?php echo $now['summary']; ?><p>
                <hr>
                </div>
                <?php $now= $news[3]; ?>
                <div class="text-start fs-6">
                    <a href="detail.php?id=<?php echo $now['id']; ?>"><img src="<?php echo $now['path']; ?>" width="320px" height="145px"></a>
                    <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h4 class="text-start fw-bold"><?php echo $now['title']; ?></h4></a>
                    <p class="mtiny"><?php echo $now['summary']; ?></p>
                <hr>
                </div>
            </div>
        </div>
        
   
        <div class="row g-2">
             <hr class="border-top border-3 border-dark opacity-100">
             <div class="fw-bold">Most watched</div>
             <br><br>
            <?php $now=$news[3]; ?>
            <div class="col">
                <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h5 class="text-start fw-bold"><?php echo $now['title']; ?></h5></a>
            </div>
            <?php $now=$news[4]; ?>
            <div class="col">
                <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h5 class="text-start fw-bold"><?php echo $now['title']; ?></h5></a>
            </div>
            <?php $now=$news[5]; ?>
            <div class="col">
                <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h5 class="text-start fw-bold"><?php echo $now['title']; ?></h5></a>
            </div>
            <?php $now=$news[4]; ?>
            <div class="col">
                <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none  "><h5 class="text-start fw-bold"><?php echo $now['title']; ?></h5></a>
            </div>
            <?php $now=$news[2]; ?>
            <div class="col">
                <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h4 class="text-start fw-bold"><?php echo $now['title']; ?></h4></a>
            </div>
        
        </div>

        <br><br>
        
        <hr class="border-top border-3 border-dark opacity-100">
        <div class="fw-bold">Also in News</div>
        <br><br>
        </div>
   
    </div>

    <div class="container pt-5 t-center">
        <div class="row align-items-start ">
            <div class="row col-9">
                <div class="row ">
                    <?php $now= $news[5]; ?>
                    <div class="col-4 fs-6 text-start">
                    <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h3 class="ftiny fw-bold "><?php echo $now['title']; ?></h3></a><p class="mtiny"><?php echo $now['summary']; ?></p>
                    </div>  
                    <?php $now= $news[20]; ?>
                    <div class="col-8">
                    <a href="detail.php?id=<?php echo $now['id']; ?>">
                    <img src="<?php echo $now['path']; ?>" width="620px" height="350px">
                    </a>
                    <br><br>
                    </div>
                </div>
                <div class="row g-2">
                    <?php $now=$news[3]; ?>
                    <div class="col-4">
                        <a href="detail.php?id=<?php echo $now['id']; ?>"><img src="<?php echo $now['path']; ?>" width="300px" height="200px"></a>
                        <br><br>
                        <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none "></a>
                        <h4 class="text-start fw-bold"><?php echo $now['title']; ?></h4><p class="mtiny"><?php echo $now['summary']; ?><p>
                    <hr>
                    <br><br>
                    </div>
                    <?php $now=$news[18]; ?>
                    <div class="col-4">
                        <a href="detail.php?id=<?php echo $now['id']; ?>"><img src="<?php echo $now['path']; ?>" width="300px" height="200px"></a>
                        <br><br>
                        <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h4 class="text-start fw-bold"><?php echo $now['title']; ?></h4></a>
                        <p class="mtiny text-start"><?php echo $now['summary']; ?><p>
                    <hr>
                    <br><br>
                    </div>
                    <?php $now=$news[19]; ?>
                    <div class="col-4">
                        <a href="detail.php?id=<?php echo $now['id']; ?>"><img src="<?php echo $now['path']; ?>" width="300px" height="200px"></a>
                        <br><br>
                        <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h4 class="text-start fw-bold"><?php echo $now['title']; ?></h4></a>
                        <p class="mtiny text-start"><?php echo $now['summary']; ?><p>
                    <hr>
                    <br><br>
                    </div>
                <br><br>
                </div>
               
            </div>



            <div class="col-sm-3">
                <?php $now=$news[1]; ?>
                <div class="text-start fs-6">
                    <a href="detail.php?id=<?php echo $now['id']; ?>"><img src="<?php echo $now['path']; ?>" width="300px" height="145px"></a>
                    <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h4 class="text-start fw-bold"><?php echo $now['title']; ?></h4></a>
                    <p class="mtiny"><?php echo $now['summary']; ?><p>
                <hr>
                </div>
                <?php $now= $news[8]; ?>
                <div class="text-start fs-6">
                    <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h4 class="text-start fw-bold"><?php echo $now['title']; ?></h4></a>
                    <p class="mtiny"><?php echo $now['summary']; ?></p>
                <hr>
                </div>
                 <?php $now= $news[9]; ?>
                <div class="text-start fs-6">
                    <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none hover-underline "><h4 class="text-start fw-bold"><?php echo $now['title']; ?></h4></a>
                    <p class="mtiny"><?php echo $now['summary']; ?></p>
                <hr>
                <br><br>
                </div>
            </div>
        </div>

        <br><br>
        
    </div>
    

    <?php include 'footer.php'; ?>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    
    