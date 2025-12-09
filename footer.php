<?php
// Ensure $news and $categories exist to avoid warnings
$now = isset($news[6]) ? $news[6] : ['title' => '', 'summary' => '', 'path' => ''];
$categories = isset($categories) ? $categories : [];
?>

<div class="card mt-5">
  <div class="card-header">
    <div class="row pt-5">
      <!-- Left Column: News Info -->
      <div class="col-md-4 text-start">
        <h2 class="hover-underline"><?php echo htmlspecialchars($now['title']); ?></h2>
        <p><?php echo htmlspecialchars($now['summary']); ?></p>
        <a href="#" class="btn btn-outline-dark px-2 py-1">See more</a>
      </div>

      <!-- Right Column: Image -->
      <div class="col-md-8">
        <?php if (!empty($now['path'])): ?>
          <img src="<?php echo htmlspecialchars($now['path']); ?>" class="img-fluid pb-5" alt="News Image">
        <?php endif; ?>
      </div>
    </div>

    <hr>

    <!-- BBC Branding -->
    <div class="d-flex justify-content-center fw-bold mb-3">
      <span class="bbc-box mx-1">B</span>
      <span class="bbc-box mx-1">B</span>
      <span class="bbc-box mx-1">C</span>
    </div>

    <!-- Categories -->
    <div class="container d-flex flex-wrap gap-3 justify-content-start mb-4">
      <?php foreach($categories as $ctg): ?>
        <span class="copy"><?php echo htmlspecialchars($ctg['name']); ?></span>
      <?php endforeach; ?>
    </div>

    <!-- Language Dropdown -->
    <div class="dropdown mb-4">
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

    <!-- Social Media -->
    <div class="d-flex align-items-center gap-2">
      <p class="mb-0">Follow BBC on:</p>
      <i class="bi bi-tiktok"></i>
      <!-- Add more social icons if needed -->
    </div>
  </div>
</div>

<!-- 
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
</html> -->