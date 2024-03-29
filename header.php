<?php require("smf-SSI.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    //Do we have a meta description we'd like to use?
    //If not, fall back to a generic description!
    if (empty($descr))
    {
      $descr = "This is the home of the world-famous Flat Earth Society, a place for free thinkers and the intellectual exchange of ideas.";
    }
    //Ditto for canonical opengraph URL
    if (empty($canon))
    {
      $canon = "https://www.tfes.org/";
    }
  ?>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="<?php echo $descr ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="flat earth theory, flat earth society, the flat earth society, flat, earth, society, rowbotham, zetetic, zeteticism, flatearth, cosmology, shape">
  <link rel="stylesheet" href="tfes5.css" type="text/css">
  <link rel="stylesheet" href="./font-awesome-4.5.0/css/font-awesome.min.css">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="The Flat Earth Society">
  <meta property="og:title" content="The Flat Earth Society">
  <meta property="og:description" content="<?php echo $descr ?>">
  <meta property="og:image" content="https://www.tfes.org/images/fes_banner.png">
  <meta property="og:url" content="<?php echo $canon ?>">
  <meta property="og:locale" content="en_GB">
  <meta property="fb:app_id" content="916617788496217">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@FlatEarthOrg">
  <meta name="twitter:title" content="The Flat Earth Society">
  <meta name="twitter:description" content="<?php echo $descr ?>">
  <meta name="twitter:image" content="https://www.tfes.org/images/fes_banner.png">
  <meta name="application-name" content="The Flat Earth Society">
  <meta name="msapplication-TileColor" content="#455a9e">
  <meta name="msapplication-square70x70logo" content="images/logo_70x70.png">
  <meta name="msapplication-square150x150logo" content="images/logo_150x150.png">
  <meta name="msapplication-wide310x150logo" content="images/logo_310x150.png">
  <meta name="msapplication-square310x310logo" content="images/logo_310x310.png">
  <link rel="shortcut icon" href="/favicon.ico">
  <meta name="theme-color" content="#4c798d">
  <title>The Flat Earth Society</title>
</head>

<body>

<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48900853-1', 'tfes.org');
  ga('set', 'anonymizeIp', true);
  ga('send', 'pageview');
</script>

<div id="wrap">
	<div id="main-col">
		<video id="bg-vid" poster="./images/header.png" autoplay loop muted>
			<source src="./videos/header.mp4" type="video/mp4">
			<source src="./videos/header.webm" type="video/webm">
		</video>
		<img src="./images/overlay.png" id="bg-overlay" alt="">
		<nav>
			<ul>
				<li><a href="https://www.facebook.com/FlatSoc" rel="publisher"><i class="fa fa-facebook-official fa-2x fa-fw"></i></a></li>
				<li><a href="https://twitter.com/FlatEarthOrg" rel="publisher"><i class="fa fa-twitter fa-2x fa-fw"></i></a></li>
			</ul>
			<form id="searchbar" action="<?php echo ssi_quickSearch("wow") . "2" ?>" style="text-align:center" method="post">
				<input id="bar" name="search" type="search" placeholder="Search the forum..." style="width:200px">
				<input id="button" type="submit" value="&#xf002;">
			</form>
		</nav>
		<div id="main-col-inner">
			<header id="header">
				<a href="/"><img id="logo_img" src="./images/logo_white.png" alt=""></a>
				<h1><a href="/"><img id="logo_txt" src="./images/logo_text.png" alt="The Flat Earth Society" title="The Flat Earth Society"></a></h1>
			</header>
			<div id="nav-below">
				<ul>
					<li><a href="//forum.tfes.org/"><i class="fa fa-comments fa-fw"></i><span>Forum</span><br>
					<p>Engage in conversation with our community about Flat Earth theory - or anything else you want!</p></a></li>
					<li><a href="//wiki.tfes.org/"><i class="fa fa-graduation-cap fa-fw"></i><span>Wiki</span><br>
					<p>An information repository for all things related to Flat Earth theory. A great entry point for newcomers.</p></a></li>
					<li><a href="/library.php"><i class="fa fa-book fa-fw"></i><span>Library</span><br>
					<p>A comprehensive collection of Flat Earth literature, consolidated in one place for everyone's benefit.</p></a></li>
					<li><a href="http://www.cafepress.com/theflatearthsociety"><i class="fa fa-shopping-bag fa-fw"></i><span>Store</span><br>
					<p>Shop for shirts, bags, and other official Flat Earth Society merchandise with zero profit markups.</p></a></li>
				</ul>
			</div>
			<div id="nav-below-mobile">
				<ul>
					<li><a href="//forum.tfes.org/"><i class="fa fa-comments fa-fw"></i><span>Forum</span></a><br>
					<div class="link-description" id="1"><p>Engage in conversation with our community about Flat Earth theory - or anything else you want!</p></div></li>
					<li><a href="//wiki.tfes.org/"><i class="fa fa-graduation-cap fa-fw"></i><span>Wiki</span></a><br>
					<div class="link-description" id="2"><p>An information repository for all things related to Flat Earth theory. A great entry point for newcomers.</p></div></li>
					<li><a href="/library.php"><i class="fa fa-book fa-fw"></i><span>Library</span></a><br>
					<div class="link-description" id="3"><p>A comprehensive collection of Flat Earth literature, consolidated in one place for everyone's benefit.</p></div></li>
					<li><a href="http://www.cafepress.com/theflatearthsociety"><i class="fa fa-shopping-bag fa-fw"></i><span>Store</span></a><br>
					<div class="link-description" id="4"><p>Shop for shirts, bags, and other official Flat Earth Society merchandise with zero profit markups.</p></div></li>
				</ul>
			</div>
		</div>
	</div>

