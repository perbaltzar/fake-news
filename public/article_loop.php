<?php foreach($sortedPosts as $sortedPost):?>
  <div class="row"><!--FIRST ROW-->
    <div class ="col-10 img-box">
    <?php
    if ($sortedPost['contentIMG'] !== ''):?>
      <a href="read-article.php?isReading=true&readArticle=<?=$sortedPost['articleID'];?>">
      <img class="img-fluid article-img" src="<?=$sortedPost['contentIMG'];?>" style= "height: 100%; width: 100%">
      </a>
    <?php endif; ?>
    </div>
    <div class="col-2">
      <!--EMPTY DIV-->
    </div>
  </div><!--END FIRST ROW-->
  <div class="row"><!--SECOND ROW-->
    <div class="col-10 headline-container" id="article<?=$sortedPost['articleID']?>">
      <a href="read-article.php?isReading=true&readArticle=<?=$sortedPost['articleID'];?>">
      <h2><?= $sortedPost['title'];?></h2>
      <p>
      </a>
    </div>
    <div class="col-2">
      <!--EMPTY DIV-->
    </div>
  </div><!--END SECOND ROW-->
  <div class="row author-date-container"><!--THIRD ROW-->
    <div class="col-2">
      <p>By: <?=$sortedPost['author'];?></p>
      <p><?=$sortedPost['publishDate'];?></p>
    </div>
    <div class="col-10">
      <!--EMPTY DIV-->
    </div>
  </div><!--END THIRD ROW-->
  <div class="row"><!--FOURTH ROW-->
    <div class="col-10">
      <p>
      <a href="read-article.php?isReading=true&readArticle=<?=$sortedPost['articleID'];?>">
        <?php
				//------------------------------------------------------------------------------------
				//If-statement to see if we're in the read-article section. Shortening the text or not
				//------------------------------------------------------------------------------------
        if ($isReading === 'true'){
          echo $sortedPost['content'];
        }else{
          echo substr($sortedPost['content'], 0, 150) . '...';
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
      <?= $sortedPost['likeCounter'];?><img class="thumb" src="svg/thumb.svg">
    </div>
  </div><!--END FIFTH ROW-->
  <hr>
<?php endforeach; ?>
