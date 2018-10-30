<?php
require __DIR__.'/header.php';
?>
<div class="row">
	<div class="col-12">
		<!--EMPTY DIV-->
	</div>
</div><!--/-ROW-->

<?php
//-----------------------------------
//Setting default sorting as by Date
//-----------------------------------
$sorted_posts = orderByDate($newsPosts);

require __DIR__.'/article_loop.php';
require __DIR__.'/footer.php';
?>
