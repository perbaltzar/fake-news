<?php
require __DIR__.'/header.php';


?>
      <div class="row">
        <div class="col-12">
          Sort by:
        </div>
      </div>
        <div class="row"><!--SELECTOR ROW-->
          <div class="col-3">

          </div>
          <div class="col-2">
            <form>
              <button type="sort" name="sortBy" value="author">Author</button>
            </form>
          </div>
          <div class="col-2">
            <form>
              <button type="sort" name="sortBy" value="date">Date</button>
            </form>
          </div>
          <div class="col-2">
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
        //If statement to see how the articles are to be sorted.
        if ($sortBy === 'likes'){
          $sorted_posts = orderByLikes($newsPosts, 'likeCounter');
        }elseif ($sortBy === 'date'){
          $sorted_posts = orderByDate($newsPosts);
        }elseif ($sortBy === 'author'){
          $sorted_posts = orderByAuthor($newsPosts);
        }elseif ($sortBy === 'selectedAuthor'){
          $sorted_posts = selectByName($newsPosts, $_GET['authorName']);
        }
      }
      require __DIR__.'/article_loop.php';




        ?>
        <!--The Very Right Column-->







      <!--The Very Right Column






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  </html>
