<?php
declare(strict_types=1);


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
</head>
<body>
  <div class="row"><!--ROW1-->
    <div class="col-md-2">

    </div><!--/Col-md-2-->
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
            <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="articles.php">Articles</a>
            <a class="nav-item nav-link active" href="index.php">Authors</a>
          </div>
        </div>
      </nav>
      <div class="row"><!--ROW2-->

          <?php

            //Printing out all the author in a foreach-loop

            foreach ($authors as $author):?>
            <div style="display: inline-block; display: flex; flex-flow: column; align-items: center;" class="col-3">
            <img style = "height: 150px;" class = "img-thumbnail" src="<?= $author['imgURL'] ?>">

            <a href="articles.php?sortBy=selectedAuthor&authorName=<?=$author['firstname']?>  "><?= $author['firstname'] . " " . $author['lastname'];?></a>
            <br>
            </div>
          <?php endforeach;?>







    </div><!--ROW2-->
    <div class="col-md-2">

    </div><!--/Col-md-2-->
  </div><!--ROW1-->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
