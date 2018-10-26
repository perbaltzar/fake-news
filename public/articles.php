<?php
require __DIR__.'/header.php';


?>
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          Sort by:
        </div>
      </div>
        <div class="row"><!--SELECTOR ROW-->
          <div class="col-2">
            <?php
              if ($isAuthorSelected):?>
                <form>
                  <button class="btn-info rounded text-light" type="sort" name="isAuthorSelected" value=""><?= $authorName?></button>
                </form>

              <?php endif; ?>


          </div>
          <div class="col-8 d-flex justify-content-center">



              <!-- <button class="btn-info rounded text-light" type="sort" name="sortBy" value="author">Author</button>-->
                <div class="sort-button"><a href="articles.php?sortBy=author<?=$isauthor_printing?>">Author </a></div>
                <div class="sort-button"><a href="articles.php?sortBy=date<?=$isauthor_printing?>"> Date </a></div>
                <div class="sort-button"><a href="articles.php?sortBy=likes<?=$isauthor_printing?>"> Popularity </a></div>
              <!-- <button class="btn-info rounded text-light" type="sort" name="sortBy" value="date">Date</button> -->

              <!-- <button class="btn-info rounded text-light" type="sort" name="sortBy" value="likes">Popular</button> -->


          </div>
          <div class="col-2">
          </div>
        </div><!--/SELECTOR ROW-->
      <?php


      if (!isset($_GET['isAuthorSelected']) || !isset($_GET['sortBy'])){
          $sorted_posts = $newsPosts;
      }

      //Checking if an author is selected
      if (isset($_GET['isAuthorSelected'])){
        if ($_GET['isAuthorSelected'] == true){
        //  $authorName = $_GET['authorName'];
          $sorted_posts = selectByName($newsPosts, $_GET['authorName']);
        }
      }

    //Checking how to sort the selected articles
      if (isset($_GET['sortBy'])){

        $sortBy = $_GET['sortBy'];
        //If statement to see how the articles are to be sorted.
        if ($sortBy === 'likes'){
          $sorted_posts = orderByLikes($sorted_posts);
        }elseif ($sortBy === 'date'){
          $sorted_posts = orderByDate($sorted_posts);
        }elseif ($sortBy === 'author'){
          $sorted_posts = orderByAuthor($sorted_posts);
        }
      }
      require __DIR__.'/article_loop.php';





        ?>
        <!--The Very Right Column-->







      <!--The Very Right Column-->






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  </html>
