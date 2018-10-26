<?php
require __DIR__.'/header.php';
?>
      <div class="row">
        <div class="col-12">

        </div>
      </div>
      <?php

      $sorted_posts = getRandomArticle($newsPosts);
      require __DIR__.'/article_loop.php'
       ?>

      <!--Put in a random article?-->

      <!--The Very Right Column-->


<?php
require __DIR__.'/footer.php';

?>
