<?php foreach($sorted_posts as $newsPost):?>
  <div class="row">
    <div class="col-12" id="article<?=$newsPost['articleID']?>">
      <h2><?= $newsPost['title'];?></h2>
    </div>
  </div>
  <div class="row">
    <div class ="col-12 img-box">
  <?php
    if ($newsPost['contentIMG'] !== ''):?>
    <img src="<?=$newsPost['contentIMG'];?>">
    <?php endif; ?>
  </div>
  </div>
  <div class="row">
    <div class="col-12">
      <?= $newsPost['publishDate'];?>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <b>By:</b> <?=$newsPost['author'];?>
    </div>
  </div>
  <div class="row">
    <div class="col-12" id="article<?=$newsPost['articleID']?>">
      <p><?=substr($newsPost['content'], 0, 100);?>...</p>
    </div>
  </div>
  <div class="row">
    <div class="col-10">

    </div>
    <div class="col-2">
      <?= $newsPost['likeCounter'];?><img class="thumb" src="svg/thumb.svg">
    </div>
    <div class="col-6">
    </div>
  </div>
<?php endforeach; ?>
