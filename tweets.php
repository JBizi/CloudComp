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
						<a href="tweets.php" class="brand">Viewers Verdict</a>
						
						<a data-toggle="collapse" data-target=".nav-collapse" class="btn btn-navbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						
						<div class="collapse nav-collapse">
							<form class="navbar-search pull-right" method="POST" action="tweets.php">
								<input name="q" type="text" class="search-query" placeholder="search..." />
							</form>
						
							<ul class="nav pull-right">
								<li><a href="index.php">Home</a></li>
								<li><a href="gallery.php">Gallery</a></li>
								<li class="active"><a href="tweets.php">Tweets</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div> <!-- end navbar -->
			

			<h3 class="lead text-center">What People Tweeted About The Movie </h3>


<?php

if(isset($_POST['q']) && $_POST['q']!='') {
    include_once(dirname(__FILE__).'/config.php');
    include_once(dirname(__FILE__).'/lib/TwitterSentimentAnalysis.php');

	$TwitterSentimentAnalysis = new TwitterSentimentAnalysis(DATUMBOX_API_KEY,TWITTER_CONSUMER_KEY,TWITTER_CONSUMER_SECRET,TWITTER_ACCESS_KEY,TWITTER_ACCESS_SECRET);

    //Search Tweets parameters as described at https://dev.twitter.com/docs/api/1.1/get/search/tweets
    $twitterSearchParams=array(
        'q'=>$_POST['q'],
        'lang'=>'en',
        'count'=>20,
    );
    $results=$TwitterSentimentAnalysis->sentimentAnalysis($twitterSearchParams);


    ?>
    <h1>Results for "<?php echo $_POST['q']; ?>"</h1>
    <table border="1">
        <tr>
            <td>Id</td>
            <td>User</td>
            <td>Text</td>
            <td>Twitter Link</td>
            <td>Sentiment</td>
        </tr>
        <?php
        foreach($results as $tweet) {
            
            $color=NULL;
            if($tweet['sentiment']=='positive') {
                $color='#00FF00';
            }
            else if($tweet['sentiment']=='negative') {
                $color='#FF0000';
            }
            else if($tweet['sentiment']=='neutral') {
                $color='#FFFFFF';//@gray-lighter: lighten(#000, 93.5%); // #eee
            }
            ?>
            <tr style="background:<?php echo $color; ?>;">
                <td><?php echo $tweet['id']; ?></td>
                <td><?php echo $tweet['user']; ?></td>
                <td><?php echo $tweet['text']; ?></td>
                <td><a href="<?php echo $tweet['url']; ?>" target="_blank">View</a></td>
                <td><?php echo $tweet['sentiment']; ?></td>
            </tr>
            <?php
        }
        ?>    
    </table>
    <?php
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
