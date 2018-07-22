<main>
  <div class="container">
    <div class="row">
      <?php while ($article = mysqli_fetch_assoc($articles)) {
    ?>
      <div class="col-wr">
        <div class="flipcard">
          <div class="front">
            <div class="top-img" style="background-image: url(/img/<?php echo $article['image']; ?>)"></div>
            <h4 class="flip-title"><?php echo mb_substr($article['type'] . ' ' . $article['brand'] . ' ' . $article['model'], 0, 30) . '...'; ?></h5>
              <div class="alert alert-primary" role="alert"><?php echo '$' . $article['price']; ?></div>
            </div>
            <div class="back">
              <div class="top-img" style="background-image: url(/img/<?php echo $article['image']; ?>)"></div>
              <h4 class="flip-title"> <?php echo mb_substr($article['type'] . ' ' . $article['brand'] . ' ' . $article['model'], 0, 30) . '...'; ?></h5>
              <p><?php echo mb_substr($article['description'], 0, 150) . '...'; ?></p>
              <div class="alert alert-primary" role="alert"><?php echo '$' . $article['price']; ?></div>
              <a href="/articles?id=1" class="btn btn-primary" target="_blank">Details</a>
            </div>
          </div>
        </div>
    <?php
} ?>
    </div>
  </div>
</main>