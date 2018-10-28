<?php
declare(strict_types=1);

require __DIR__.'/functions.php';
require __DIR__.'/data.php';

//Making the URL for the Navbar
if (isset($_GET['isAuthorSelected']) && isset($_GET['authorName']))
{
	$isAuthorSelected = $_GET['isAuthorSelected'];
	$authorName = $_GET['authorName'];
	$authorSelectedURL = '&isAuthorSelected=true&authorName='.$_GET['authorName'];
}else{
	$authorSelectedURL = '';
	$isAuthorSelected = false;
}
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Notable" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<title>WUES 18</title>
</head>
<body>
	<div class="row"><!--  ROW1  -->
		<div class="col-md-2">
			<!--  EMPTY DIV  -->
		</div><!--/Col-md-2-->
		<div class="col-md-8">
			<!--  HEADLINE  -->
			<h1 class="display-4">WUES 18</h1>
			<h6>-the fantastic real fake news site of WU18</h6>
			<!--  NAVBAR  -->
			<nav class="navbar navbar-expand-lg navbar-light bg-info">
				<a class="navbar-brand" href="#"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse fixed-position" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-item nav-link text-light" href="index.php?isReading=false<?=$authorSelectedURL;?>">Home <span class="sr-only">(current)</span></a>
						<a class="nav-item nav-link text-light" href="articles.php?isReading=false<?=$authorSelectedURL;?>">Articles</a>
						<a class="nav-item nav-link text-light" href="authors.php?isReading=false<?=$authorSelectedURL;?>">Authors</a>
					</div>
				</div>
			</nav>
