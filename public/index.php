<?php
declare(strict_types=1);
$openArticle = 0;

require __DIR__.'/functions.php';
require __DIR__.'/data.php';
?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Very Old News</title>
  <style>
  a {
  color: inherit;
  text-decoration: none;
}

a:hover
{
   color: inherit;
   text-decoration:none;
   cursor:pointer;
}
  </style>
</head>
<body>
  <div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
      <!--HEADLINE-->
      <h1 class="display-4">WUES 18</h1>
      <!--NAVBAR-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="articles.php">Articles</a>
            <a class="nav-item nav-link" href="authors.php">Authors</a>
          </div>
        </div>
      </nav>
      <!--END OF NAVBAR-->
      <?php
      if (isset($_GET['openArticleID'])){
        $openArticle = $_GET['openArticleID'];
      }
       ?>

      <!--Put in a random article?-->
      <?php foreach($newsPosts as $newsPost):?>
        <div class="row">
          <div class="col-12">
            <h2><?= $newsPost['title'];?></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <b>By:</b> <?=$newsPost['author'];?>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <b>Published:</b> <?= $newsPost['publishDate'];?>
          </div>
        </div>
        <!--Make an if to check if picture is needed-->
        <div class="row">
          <div class="col-12">
            <p><a href="index.php?openArticleID=<?=$newsPost['articleID']?>">
              <?=$newsPost['articleID'] ==  $openArticle ? $newsPost['content'] : substr($newsPost['content'], 0, 200) . '...';?>
            </a></p>
          </div>
        </div>
      <div class="row">
        <div class="col-10">

        </div>
        <div class="col-2">
          likes: <?= $newsPost['likeCounter'];?>
        </div>
        <div class="col-6">
        </div>
      </div>
      <?php endforeach; ?>
      <!--The Very Right Column-->
    <div class="col-md-2">

    </div>
</div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  </html>
