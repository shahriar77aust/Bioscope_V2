<?php
	//session_start();
	$_SESSION['movie'] = null;
?>
<!DOCTYPE html>
<html>
	<head>
			<title>Anime</title>
			<meta name="author" content="Ahmed Shahriar Adnan & Biozid Niloy">
			<meta charset="UTF-8">
			<meta name="description" content="Anime">
			<meta name="keywords" content="Anime,Ratings,Recent Release,Trailers">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="foranime.css">
	</head>
	<body>
			<div id="pageWrap">
				<div id="logo">
					<a href="homePage.php" style="text-decoration: none"><h1 id="websiteName">BIOSCOPE</h1></a>
					<p style="font-size:80%">Share the movies you love</p>
					<div style="position: relative;">

						<?php
							if(isset($_SESSION['ID'])){
						}	
						?>

					 </div>
					<img src="logo.png" alt="BIOSCOPE logo" style="width:200px;height:98px">
				</div><!--logo-->
				<div id="nav">
					<ul>
						<li><a href="whatsNew.php">What's New?</a></li>
						<li class="dropdown"><a href="toprated.php" class="dropBtn">Top Rated</a>
    					</li>
						<li><a href="#memebers_choice">Your Choices</a></li>
						<li class="dropdown"><a href="top10.php" class="dropBtn">Top 10 Hits</a>
						</li>
						<li class="dropdown">
							<?php
									if(isset($_SESSION['ID'])){
										echo "<div class='dropBtn' style='color:#9a9a9a'>";
										echo 'Welcome '.$_SESSION['LAST'];
										echo"</div>";
										echo"<div class='dropdown-content'>";
 										echo "<a href='logout.php' >Log Out</a>";
    									echo"</div>";
									
										}
									else
										{
											echo "<a href='loginForm.php' >Log In</a>";
										}
								?>
						</li>
					</ul>
				</div><!--nav-->
				<div class="clearBoth"></div><!--clearBoth-->
				<div id="mainContentBorder">
					<div id="mainContent">
						<div id="movieList">
							<table>
  								<tr>
    								<th>Name</th>
 								</tr>
  								<tr>
    								<td><a href="previewAnime.php?a=Naruto(1998)">Naruto</a></td>
    							</tr>
    							<tr>
    								<td><a href="previewAnime.php?a=Bleach(2006)">Bleach</a></td>
    							</tr>
    							<tr>
    								<td><a href="previewAnime.php?a=Tokyo Ghoul(2012)">Tokyo Ghoul</a></td>
    							</tr>
    							<tr>
    								<td><a href="previewAnime.php?a=Your Lie In April(2014)">Your Lie In April</a></td>
    							</tr>
							</table>
						</div><!--movieList-->
					</div><!--mainContent-->
				</div><!--mainContentBorder-->
			</div><!--pageWrap-->
		<div id="footerWrap">
				<div id="footerContent">
					<p style="position: relative;top: +30px;color:#9a9a9a;font-family: "Comic Sans Ms"; ">www.bioscope.com Copyrights and trademarks for the contents, and other promotional materials are held by their respective owners and their use is allowed under the fair use clause of the Copyright Law|| All rights reserved</p>
					<!--<div id="footerLeft">
						

					</div><!-footerLeft->
					<div id="footerRight">
						 

	

						<br>
						
					</div><!-footerRight->-->
				</div><!--footerContent-->
		</div><!--footerWrap-->

	</body>
</html>