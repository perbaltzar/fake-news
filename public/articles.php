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
            <a class="nav-item nav-link active" href="#">Articles</a>
            <a class="nav-item nav-link" href="authors.php">Authors</a>
          </div>
        </div>
      </nav>
      <!--END OF NAVBAR-->
      <div class="row">
        <div class="col-12">
          Sort by:
        </div>
      </div>
      <div class="row"><!--SELECTOR ROW-->
        <div class="col-3">
          <form>
            <button type="sort" name="sortBy" value="author">Author</button>
          </form>
        </div>
        <div class="col-3">
          <form>
            <button type="sort" name="sortBy" value="date">Date</button>
          </form>
        </div>
        <div class="col-3">
          <form>
            <button type="sort" name="sortBy" value="likes">Popular</button>
          </form>
        </div>
        <div class="col-3">
        </div>
      </div><!--/SELECTOR ROW-->
      <?php
      if (isset($_GET['sortBy'])){
        $sortBy = $_GET['sortBy'];

        //If statement to see how to be sorted.
        if ($sortBy === 'likes'){
          $sorted_posts = orderByLikes($newsPosts, 'likeCounter');
        }elseif ($sortBy === 'date'){
          $sorted_posts = orderByDate($newsPosts);
        }elseif ($sortBy === 'author'){
          $sorted_posts = orderByAuthor($newsPosts);
        }elseif ($sortBy === 'selectedAuthor'){
          $sorted_posts = selectByName($newsPosts, $_GET['authorName']);
        }



        //Loop to post the sorted articles
          foreach($sorted_posts  as $newsPost):?>
          <div class="row">
            <div class="col-12">
              <h2><?= $newsPost['title'];?></h2>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              by: <?=$newsPost['author'];?>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              published: <?= $newsPost['publishDate'];?>
            </div>
          </div>
          <!--Make an if to check if picture is needed-->
          <div class="row">
            <div class="col-12">
              <p><?= $newsPost['content'];?></p>
            </div>
          </div>
          <div class="row">
            <div class="col-10">

            </div>
            <div class="col-2">
              likes: <?= $newsPost['likeCounter'];?>
            </div>

          </div>
        <?php endforeach; ?>
        <!--The Very Right Column-->
      <?php
    }

      ?>





    </div><!--/Col-md-8-->
      <!--The Very Right Column-->
      <div class="col-md-2">

      </div>

    </div>
  </div><!--/ROW1-->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  </html>
