<?php

require __DIR__.'/header.php';
//Get which article you want to read
if (isset($_GET['readArticle'])){
  $article = $_GET['readArticle'];
  $sorted_posts = getSelectedArticle($article, $newsPosts);

}

require __DIR__.'/article_loop.php';


require __DIR__.'/footer.php';
