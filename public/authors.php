<?php
require __DIR__.'/header.php';
?>
      <div class="row"><!--ROW2-->

          <?php

            //Printing out all the author in a foreach-loop

            foreach ($authors as $author):?>
            <div style="display: inline-block; display: flex; flex-flow: column; align-items: center;" class="col-3">
            <img style = "height: 150px;" class = "img-thumbnail" src="<?= $author['imgURL'] ?>">

            <a href="articles.php?sortBy=selectedAuthor&authorName=<?=$author['firstname']?>"><?= $author['firstname'] . " " . $author['lastname'];?></a>
            <br>
            </div>
          <?php endforeach;?>







    
  <?php
  require __DIR__.'/footer.php';
  ?>
