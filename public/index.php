<?php
require __DIR__.'/header.php';
?>
      <div class="row">
        <div class="col-12">
			  <!--EMPTY DIV-->
        </div>
	  </div><!--/-ROW-->

	  <?php
		//Getting a random article for the start page
   	$sorted_posts = getRandomArticle($newsPosts);
   	require __DIR__.'/article_loop.php';
		require __DIR__.'/footer.php';
		?>
