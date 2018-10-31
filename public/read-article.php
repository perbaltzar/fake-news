<?php

require __DIR__.'/header.php';
//Get which article you want to read
if (isset($_GET['readArticle'])){
	$article = $_GET['readArticle'];
	$sortedPosts = getSelectedArticle($article, $newsPosts);


}

require __DIR__.'/article_loop.php';
$sortedAuthors = getAuthorInfo($authors, $sortedPost['author']);
$relatedArticles = getRelatedArticle($sortedPosts, $newsPosts);


?>
<div class="row">

	<?php
	//--------------------------------------------
	//Prints out the information about the author
	//--------------------------------------------
	foreach ($sortedAuthors as $sortedAuthor): ?>
		<div class="col-sm-6 col-md-4 d-flex justify-content-end">
			<a href="articles.php?isAuthorSelected=true&authorName=<?= $sortedAuthor['firstname'];?>">
				<img style = "height: 150px;" class = "img-thumbnail rounded-circle" src="<?=$sortedAuthor['imgURL']?>">
			</a>
		</div>
		<div class="col-sm-6 col-8 d-flex align-items-center">

			<a href="articles.php?isAuthorSelected=true&authorName=<?= $sortedAuthor['firstname'];?>"> <p>Read more from <?= $sortedAuthor['firstname'] . ' ' . $sortedAuthor['lastname'];?></a>
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
		foreach($relatedArticles as $relatedArticle) : ?>
			<div class="col-xs-12 col-4">
				<div class="crop">
					<a href="read-article.php?isReading=true&readArticle=<?=$relatedArticle['articleID'];?>">
						<img class="" src="<?=$relatedArticle['contentIMG']; ?>">
					</a>
				</div>
				<div>
					<a href="read-article.php?isReading=true&readArticle=<?=$relatedArticle['articleID'];?>">
					<h6><?=$relatedArticle['title']; ?></h6>
					</a>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<hr>

	<?php require __DIR__.'/footer.php';?>
