<?php include 'db.php';include 'header.php';
$news = [];
$sql = "SELECT*FROM posts";
$result = $conn->query($sql);while ($new = $result->fetch_assoc()) {$news[] = $new;} ?>

<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col-3">
            <div class="row">
                <?php $now = $news[11]; ?>
                <div class="text-start">
                    <a href="detail.php?id=<?php echo $now['id']; ?>"><img src="<?php echo $now['path']; ?>"
                            width="300px" height="145px"></a>
                    <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none">
                        <h4><?php echo $now['title']; ?></h4>
                    </a>
                    <p class="mtiny"><?php echo $now['summary']; ?>
                    <p>
                </div>
                <hr>
            </div>
            <div class="row">
                <?php $now = $news[5]; ?>
                <div class="text-start">
                    <a href="detail.php?id=<?php echo $now['id']; ?>"><img src="<?php echo $now['path']; ?>"
                            width="300px" height="145px"></a>
                    <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none">
                        <h4><?php echo $now['title']; ?></h4>
                    </a>
                    <p class="mtiny"><?php echo $now['summary']; ?>
                    <p>
                </div>
                <hr>
            </div>
        </div>
        <div class="col-6">
            <?php $now = $news[8]; ?>
            <a href="detail.php?id=<?php echo $now['id']; ?>"><img src="<?php echo $now['path']; ?>" width="620px"
                    height="350px"></a>
            <br><br>
            <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none">
                <h4><?php echo $now['title']; ?></h4>
            </a>
            <p><?php echo $now['summary']; ?></p>
        </div>
        <div class="col-3">
            <div class="row">
                <?php $now = $news[3]; ?>
                <div class="text-start">
                    <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none">
                        <h4><?php echo $now['title']; ?></h4>
                    </a>
                    <p class="mtiny"><?php echo $now['summary']; ?></p>
                </div>
                <hr>
            </div>
            <div class="row">
                <?php $now = $news[9]; ?>
                <div class="text-start">
                    <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none">
                        <h4><?php echo $now['title']; ?></h4>
                    </a>
                    <p class="mtiny"><?php echo $now['summary']; ?></p>
                </div>
                <hr>
            </div>
            <div class="row">
                <?php $now = $news[10]; ?>
                <div class="text-start">
                    <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none">
                        <h4><?php echo $now['title']; ?></h4>
                    </a>
                    <p class="mtiny"><?php echo $now['summary']; ?></p>
                </div>
                <hr>
            </div>
            <div class="row">
                <?php $now = $news[11]; ?>
                <div class="text-start">
                    <a href="detail.php?id=<?php echo $now['id']; ?>" class="text-black text-decoration-none">
                        <h4><?php echo $now['title']; ?></h4>
                    </a>
                    <p><?php echo $now['summary']; ?></p>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>