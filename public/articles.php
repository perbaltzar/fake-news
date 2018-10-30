<?php
require __DIR__.'/header.php';
//-----------------------------------
//Making URL for the sort-by Boxes
//-----------------------------------
if (isset($_GET['sortBy'])){
	$sortBy = $_GET['sortBy'];
	$isSortBySelected = true;
	$sortByURL = '?sortBy='.$_GET['sortBy'];
}else{
	$sortByURL = '';
	$isSortBySelected = false;
}
?>
<div class="row">
	<div class="col-2">
		Filter:
	</div>
	<div class="col-8 d-flex justify-content-center">
		Sort by:
	</div>
	<div class="col-2">
		<!--EMPTY DIV-->
	</div>
</div><!-- END ROW -->
<div class="row"><!--SELECTOR ROW-->
	<div class="col-4 d-flex">
		<?php
		if ($isAuthorSelected):?>
		<div class="sort-button filter-button">
			<img class="close-svg" src="svg/close.svg">
			<a href="articles.php<?= $sortByURL;?>">
				<?= $authorName?>
			</a>
		</div>
		<?php endif;
		if ($isSortBySelected):?>
		<div class="sort-button filter-button">
			<img class="close-svg" src="svg/close.svg">
			<a href="articles.php?<?= $authorSelectedURL;?>"><?=$sortBy;?></a>
		</div>
		<?php endif;?>
	</div>
	<div class="col-4 d-flex justify-content-center">
		<div class="sort-button"><a href="articles.php?sortBy=Author<?=$authorSelectedURL?>">Author</a></div>
		<div class="sort-button"><a href="articles.php?sortBy=Date<?=$authorSelectedURL?>">Date</a></div>
		<div class="sort-button"><a href="articles.php?sortBy=Popularity<?=$authorSelectedURL?>">Popularity </a></div>
	</div>
	<div class="col-4">
		<!--EMPTY DIV-->
	</div>
</div><!--/SELECTOR ROW-->
<?php
//--------------------------------------------------------------------------------------------
// Checking if no articles is selected or sorted so the articles is default by order in array
//--------------------------------------------------------------------------------------------
if (!isset($_GET['isAuthorSelected']) || !isset($_GET['sortBy'])){
	$sorted_posts = $newsPosts;
}
//-----------------------------------
// Checking if an Author is selected
//-----------------------------------
if (isset($_GET['isAuthorSelected'])){
	if ($_GET['isAuthorSelected'] == true){
		$sorted_posts = selectByName($newsPosts, $_GET['authorName']);
	}
}
//-------------------------------------------
// Checking how to sort the selected articles
//-------------------------------------------
if (isset($_GET['sortBy'])){
	if ($sortBy === 'Popularity'){
		$sorted_posts = orderByLikes($sorted_posts);
	}elseif ($sortBy === 'Date'){
		$sorted_posts = orderByDate($sorted_posts);
	}elseif ($sortBy === 'Author'){
		$sorted_posts = orderByAuthor($sorted_posts);
	}
}
require __DIR__.'/article_loop.php';
?>







<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
