<?php
require __DIR__.'/header.php';
?>
<div class="row pt-4"><!--ROW2-->
	<?php
	//------------------------------------------------
	//Printing out all the author in a foreach-loop
	//------------------------------------------------
	foreach ($authors as $author):?>
	<div style="display: inline-block; flex-flow: column; align-items: center;" class="d-flex col-md-3 col-sm-4">
		<a href="articles.php?isAuthorSelected=true&authorName=<?=$author['firstname']?>">
			<img style = "height: 150px;" class = "img-thumbnail" src="<?= $author['imgURL'] ?>">
		</a>
		<a href="articles.php?isAuthorSelected=true&authorName=<?=$author['firstname']?>"><?= $author['firstname'] . " " . $author['lastname'];?></a>
		<br>
	</div>
<?php endforeach;
require __DIR__.'/footer.php';
?>
