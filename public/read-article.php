<?php

require __DIR__.'/header.php';
//Get which article you want to read
if (isset($_GET['readArticle'])){
  $article = $_GET['readArticle'];
  $sorted_posts = getSelectedArticle($article, $newsPosts);


}

require __DIR__.'/article_loop.php';
$sorted_authors = getAuthorInfo($authors, $newsPost['author']);

?>
<div class="row">

  <?php foreach ($sorted_authors as $sorted_author): ?>
    <div class="col-3">
      <img style = "height: 150px;" class = "img-thumbnail rounded-circle" src="<?=$sorted_author['imgURL']?>">
    </div>
    <div class="col-3">

      <a href="articles.php?sortBy=selectedAuthor&authorName=<?=$sorted_author['firstname']?>"> <p>Read more from <?= $sorted_author['firstname'] . ' ' . $sorted_author['lastname'];?></a>
    </div>
  <?php endforeach ?>




</div>




<?php require __DIR__.'/footer.php';?>
