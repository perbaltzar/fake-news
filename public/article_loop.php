<?php foreach($sorted_posts as $newsPost):?>
  <div class="row"><!--FIRST ROW-->
    <div class ="col-10 img-box">
    <?php
    if ($newsPost['contentIMG'] !== ''):?>
      <a href="read-article.php?isReading=true&readArticle=<?=$newsPost['articleID'];?>">
      <img class="article-img img-fluid" src="<?=$newsPost['contentIMG'];?>" style= "height: 100%; width: 100%">
      </a>
    <?php endif; ?>
    </div>
    <div class="col-2">
      <!--EMPTY DIV-->
    </div>
  </div><!--END FIRST ROW-->
  <div class="row"><!--SECOND ROW-->
    <div class="col-10 headline-container" id="article<?=$newsPost['articleID']?>">
      <a href="read-article.php?isReading=true&readArticle=<?=$newsPost['articleID'];?>">
      <h2><?= $newsPost['title'];?></h2>
      <p>
      </a>
    </div>
    <div class="col-2">
      <!--EMPTY DIV-->
    </div>
  </div><!--END SECOND ROW-->
  <div class="row author-date-container"><!--THIRD ROW-->
    <div class="col-2">
      <p>By: <?=$newsPost['author'];?></p>
      <p><?=$newsPost['publishDate'];?></p>
    </div>
    <div class="col-10">
      <!--EMPTY DIV-->
    </div>
  </div><!--END THIRD ROW-->
  <div class="row"><!--FOURTH ROW-->
    <div class="col-10">
      <p>
      <a href="read-article.php?isReading=true&readArticle=<?=$newsPost['articleID'];?>">
        <?php
				//------------------------------------------------------------------------------------
				//If-statement to see if we're in the read-article section. Shortening the text or not
				//------------------------------------------------------------------------------------
        if ($isReading === 'true'){
          echo $newsPost['content'];
        }else{
          echo substr($newsPost['content'], 0, 150) . '...';
        }
        ?>
      </a>
      </p>
    </div><!--/-COL-10-->
    <div class="col-2">
      <!--EMPTY DIV-->
    </div>
  </div><!--END FOURTH ROW-->
  <div class="row"><!--FIFTH ROW-->
    <div class="col-9">
      <!--EMPTY DIV-->
    </div>
    <div class="col-3">
      <?= $newsPost['likeCounter'];?><img class="thumb" src="svg/thumb.svg">
    </div>
  </div><!--END FIFTH ROW-->
  <hr>
<?php endforeach; ?>
