<?php
$dir = '../assets/';
$files = array_diff(scandir($dir), array('.', '..'));
?>

<div class="container">
    <h2>Media Files</h2>
    <div class="row">
        <?php foreach ($files as $file): ?>
            <div class="col-md-3 mb-3 text-center">
                <?php if (preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $file)): ?>
                    <img src="<?php echo $dir.$file; ?>" class="img-fluid" alt="">
                <?php else: ?>
                    <a href="<?php echo $dir.$file; ?>" target="_blank"><?php echo $file; ?></a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
