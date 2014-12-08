<!DOCTYPE html>
<html lang="en">
		<head>
			<meta charset="utf-8" />
			<title>Cloud Computing Module At NCI</title>
			<meta name="description" content="Dynamic Website Design Project">
			<meta name="author" content="BSHC4 Student (11103329)">
			<!-- Mobile Specific Meta -->
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
			<!-- Stylesheets -->
			<link rel="stylesheet" href="css/bootstrap.css" />
			<link rel="stylesheet" href="css/bootstrap-responsive.css" />
			<link rel="stylesheet" href="css/custom.css" />
		</head>
	<body>

			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-inner">
					<div class="container">
						<a href="gallery.php" class="brand">Viewers Verdict</a>
						
						<a data-toggle="collapse" data-target=".nav-collapse" class="btn btn-navbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						
						<div class="collapse nav-collapse">
							<form class="navbar-search pull-right" method="POST" action="index.php">
								<input name="movie_link" type="text" class="search-query" placeholder="search..." />
							</form>
						
							<ul class="nav pull-right">
								<li ><a href="index.php">Home</a></li>
								<li class="active"><a href="gallery.php">Gallery</a></li>
								<li><a href="tweets.php">Tweets</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div> <!-- end navbar -->
			
				
			<h3 class="lead text-center">Movie Posters Gallery</h3>
<table width="760" bgcolor="#ffffff" border="0" cellspacing="8" cellpadding="8" align="center">
<table width="760" bgcolor="#ffffff" border="0" cellspacing="8" cellpadding="8" align="center">
<td>
  <center>
<?php
$root = "posters";
$take = opendir($root);
while($picturefile = readdir($take)){
if(is_file($root."/".$picturefile) && $picturefile != 'not-found.jpg')
$picture[] = $picturefile;
}
closedir($take);


$limit = 24; //Number of images to display on a page
$page = $_GET["page"];
if($page < 1) $page = 1;
$total = count($picture);


$startpage = ($page-1) * $limit;
$endpage = ($startpage+$limit);
if($endpage > $total) $endpage = $total;


for($i=$startpage; $i < $endpage; $i++){
echo "

<a href='http://www.imdb.com/title/tt".substr($picture[$i], 0,strrpos($picture[$i],'.'))."/' target='_blank'>
<img  onContextMenu='return false' src='".$root."/".$picture[$i]."' width='107'  height='158' border='0'></a>";
}
echo"<br>";

for($i=1; $i < $total / $limit; $i++){
if($page == $i)

echo "$in"; else{
echo "<a href='gallery.php?page=$i'>[$i]</a>";
	}
}

?>
	</center>
	<tr></td></tr></table>
	<tr></td></tr></table>
				<div id="footer">
					<section>
						<ul class="inline text-center">
							<li><strong>Follow Us On:</strong></li>
							<li><a href="">Twitter</a></li>
							<li><a href="">Facebook</a></li>
							<li><a href="">LinkedIn</a></li>
						</ul>
						<p class="text-center muted">&copy; Copyright 2014 Viewers Verdict</p>
					</section>
				</div>
				 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
				<script src="js/bootstrap.js"></script>
				<!-- JavaScript -->	
</body>
</html>
