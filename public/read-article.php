<?php

require __DIR__.'/header.php';
//Get which article you want to read
if (isset($_GET['readArticle'])){
	$article = $_GET['readArticle'];
	$sorted_posts = getSelectedArticle($article, $newsPosts);


}

require __DIR__.'/article_loop.php';
$sorted_authors = getAuthorInfo($authors, $newsPost['author']);
$related_articles = getRelatedArticle($sorted_posts, $newsPosts);

?>
<div class="row">

	<?php
	//--------------------------------------------
	//Prints out the information about the author
	//--------------------------------------------
	foreach ($sorted_authors as $sorted_author): ?>
		<div class="col-sm-6 col-md-4 d-flex justify-content-end">
			<img style = "height: 150px;" class = "img-thumbnail rounded-circle" src="<?=$sorted_author['imgURL']?>">
		</div>
		<div class="col-sm-6 col-8 d-flex align-items-center">

			<a href="articles.php?isAuthorSelected=true&authorName=<?= $sorted_author['firstname'];?>"> <p>Read more from <?= $sorted_author['firstname'] . ' ' . $sorted_author['lastname'];?></a>
			</div>
		<?php endforeach ?>

	</div>
	<hr>
	<div class="row">
		<div class="col-12">
			<p>You may also like:</p>
		</div>
	</div>
	<div class="row">
		<?php
		//----------------------------------------------------------
		//Prints all the related articles, (right now, random ones)
		//----------------------------------------------------------
		foreach($related_articles as $related_article) : ?>
			<div class="col-xs-12 col-4">
				<div class="crop">
					<a href="read-article.php?isReading=true&readArticle=<?=$related_article['articleID'];?>">
						<img class="" src="<?=$related_article['contentIMG']; ?>">
					</a>
				</div>
				<div>
					<a href="read-article.php?isReading=true&readArticle=<?=$related_article['articleID'];?>">
					<h6><?=$related_article['title']; ?></h6>
					</a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<hr>

	<?php require __DIR__.'/footer.php';?>
