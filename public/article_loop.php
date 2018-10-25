<?php foreach($sorted_posts as $newsPost):?>
  <div class="row"><!--FIRST ROW-->
    <div class="col-2">

    </div>
    <div class="col-8" id="article<?=$newsPost['articleID']?>">
      <a href="read-article.php?isReading=true&readArticle=<?=$newsPost['articleID'];?>">
      <h2><?= $newsPost['title'];?></h2>
      </a>
    </div>
    <div class="col-2">

    </div>
  </div><!--END FIRST ROW-->
  <div class="row"><!--SECOND ROW-->
    <div class="col-2">

    </div>
    <div class ="col-8 img-box">
    <?php
    if ($newsPost['contentIMG'] !== ''):?>
      <a href="read-article.php?isReading=true&readArticle=<?=$newsPost['articleID'];?>">
      <img class="article-img" src="<?=$newsPost['contentIMG'];?>" style="height: 400px; width: 700px;">
      </a>
    <?php endif; ?>
    </div>
    <div class="col-2">

    </div>
  </div><!--END SECOND ROW-->
  <div class="row"><!--THIRD ROW-->
    <div class="col-2">

    </div>
    <div class="col-2">
      <p>By: <?=$newsPost['author'];?></p>
    </div>
    <div class="col-4">
      <!--EMPTY DIV-->
    </div>
    <div class="col-2">
      <p><?= $newsPost['publishDate'];?></p>
    </div>
    <div class="col-2">

    </div>
  </div><!--END THIRD ROW-->
  <div class="row"><!--FOURTH ROW-->
    <div class="col-2">

    </div>
    <div class="col-8">
      <p>
      <a href="read-article.php?isReading=true&readArticle=<?=$newsPost['articleID'];?>">
        <?php
        //If-statement to see if we're in the read-article section. Shortening the text or not
        if ($isReading === 'true'){
          echo $newsPost['content'];
        }else{
          echo substr($newsPost['content'], 0, 150) . '...';
        }
        ?>
      </a>
      </p>
    </div>
    <div class="col-2">

    </div>
  </div><!--END FOURTH ROW-->
  <div class="row"><!--SIXTH ROW-->
    <div class="col-9">
    </div>
    <div class="col-3">
      <?= $newsPost['likeCounter'];?><img class="thumb" src="svg/thumb.svg">
    </div>
  </div><!--END SIXTH ROW-->
  <hr>
<?php endforeach; ?>
