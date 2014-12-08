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
						<a href="index.php" class="brand">Viewers Verdict</a>
						
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
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="gallery.php">Gallery</a></li>
								<li><a href="tweets.php">Tweets</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div> <!-- end navbar -->
			
				
			<h3 class="lead text-center">Welcome To Movies Viewers Verdict</h3>

		<?php
			include_once 'imdb.class.php';

			$strSearch = @$_POST['movie_link'];

			if ($strSearch) {
				$oIMDB = new IMDB($strSearch, '');//10
			if ($oIMDB->isReady) {
					echo '<p>Movie Title: <b>' . $oIMDB->getTitle() . '</b></p>';
					echo '<p><img src="' . $oIMDB->getPoster() . '" style="float:left;margin:4px 10px 10px 0;"> <b>About The Movie:</b> ' . $oIMDB->getPlot() . '</p>';
					echo '<p>Also Known As: <b>' . $oIMDB->getAka() . '</b></p>';
					echo '<p>Aspect Ratio: <b>' . $oIMDB->getAspectRatio() . '</b></p>';
					echo '<p>Budget: <b>' . $oIMDB->getBudget() . '</b></p>';
					echo '<p>Cast: <b>' . $oIMDB->getCast() . '</b></p>';
					echo '<p>Full Cast: <b>' . $oIMDB->getFullCast() . '</b></p>';
					echo '<p>Cast as URL: <b>' . $oIMDB->getCastAsUrl() . '</b></p>';
					echo '<p>Cast and Character: <b>' . $oIMDB->getCastAndCharacter() . '</b></p>';
					echo '<p>Cast and Character as URL: <b>' . $oIMDB->getCastAndCharacterAsUrl() . '</b></p>';
					echo '<p>Color: <b>' . $oIMDB->getColor() . '</b></p>';
					echo '<p>Company: <b>' . $oIMDB->getCompany() . '</b></p>';
					echo '<p>Company as URL: <b>' . $oIMDB->getCompanyAsUrl() . '</b></p>';
					echo '<p>Countries: <b>' . $oIMDB->getCountry() . '</b></p>';
					echo '<p>Countries as URL: <b>' . $oIMDB->getCountryAsUrl() . '</b></p>';
					echo '<p>Creators: <b>' . $oIMDB->getCreator() . '</b></p>';
					echo '<p>Creators as URL: <b>' . $oIMDB->getCreatorAsUrl() . '</b></p>';
					echo '<p>Description: <b>' . $oIMDB->getDescription() . '</b></p>';
					echo '<p>Directors: <b>' . $oIMDB->getDirector() . '</b></p>';
					echo '<p>Directors as URL: <b>' . $oIMDB->getDirectorAsUrl() . '</b></p>';
					echo '<p>Genres: <b>' . $oIMDB->getGenre() . '</b></p>';
					echo '<p>Genres as URL: <b>' . $oIMDB->getGenreAsUrl() . '</b></p>';
					echo '<p>Languages: <b>' . $oIMDB->getLanguages() . '</b></p>';
					echo '<p>Languages as URL: <b>' . $oIMDB->getLanguagesAsUrl() . '</b></p>';
					echo '<p>Location: <b>' . $oIMDB->getLocation() . '</b></p>';
					echo '<p>Location as URL: <b>' . $oIMDB->getLocationAsUrl() . '</b></p>';
					echo '<p>MPAA: <b>' . $oIMDB->getMpaa() . '</b></p>';
					echo '<p>Opening Weekend: <b>' . $oIMDB->getOpening() . '</b></p>';
					echo '<p>Rating: <b>' . $oIMDB->getRating() . '</b></p>';
					echo '<p>Release Date: <b>' . $oIMDB->getReleaseDate() . '</b></p>';
					echo '<p>Runtime: <b>' . $oIMDB->getRuntime() . '</b></p>';
					echo '<p>Seasons: <b>' . $oIMDB->getSeasons() . '</b></p>';
					echo '<p>Sound Mix: <b>' . $oIMDB->getSoundMix() . '</b></p>';
					echo '<p>Sites as URL: <b>' . $oIMDB->getSitesAsUrl('_blank') . '</b></p>';
					echo '<p>Tagline: <b>' . $oIMDB->getTagline() . '</b></p>';
					echo '<p>Title: <b>' . $oIMDB->getTitle() . '</b></p>';
					echo '<p>Trailer: <br>';
					if ($oIMDB->getTrailerAsUrl() != 'n/A') {
						echo '<iframe width="640" height="480" scrolling="no" border="0" src="' . $oIMDB->getTrailerAsUrl() . '"></iframe>';
					}
					else {
						echo '<p>Trailer: <b>' . $oIMDB->getTrailerAsUrl() . '</b></p>';
					}
					echo '<p>Url: <b><a href="' . $oIMDB->getUrl() . '">' . $oIMDB->getUrl() . '</a></b></p>';
					echo '<p>Votes: <b>' . $oIMDB->getVotes() . '</b></p>';
					echo '<p>Writers: <b>' . $oIMDB->getWriter() . '</b></p>';
					echo '<p>Writers as URL: <b>' . $oIMDB->getWriterAsUrl() . '</b></p>';
					echo '<p>Year: <b>' . $oIMDB->getYear() . '</b></p>';
			}
			else {
				echo '<p>Movie not found!</p>';
				}
			}
			
	?>	
	
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
