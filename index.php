<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01+RDFa 1.1//EN" "http://www.w3.org/MarkUp/DTD/html401-rdfa11-1.dtd">
<?php require("/srv/fes-forum/current/SSI.php"); ?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Language" content="en-gb">
  <meta name="Description" content="This is the home of the world-famous Flat Earth Society, a place for free thinkers and the intellectual exchange of ideas.">
  <meta name="viewport" content="width=960px">
  <meta name="Keywords" content="flat earth theory, flat earth society, the flat earth society, flat, earth, society, rowbotham, zetetic, zeteticism, flatearth, cosmology, shape">
  <meta name="Generator" content="BlazeBlogger 1.2.0">
  <meta name="Date" content="Thu Feb 12 15:38:10 2015">
  <link rel="stylesheet" href="tfes.css" type="text/css">
  <meta property="og:site_name" content="The Flat Earth Society">
  <meta property="og:title" content="The Flat Earth Society">
  <meta property="og:description" content="This is the home of the world-famous Flat Earth Society, a place for free thinkers and the intellectual exchange of ideas.">
  <meta property="og:image" content="http://www.tfes.org/images/logo.png">
  <meta property="og:url" content="http://www.tfes.org/">
  <meta property="og:locale" content="en_GB">
  <meta name="application-name" content="The Flat Earth Society">
  <meta name="msapplication-TileColor" content="#455a9e">
  <meta name="msapplication-square70x70logo" content="images/logo_70x70.png">
  <meta name="msapplication-square150x150logo" content="images/logo_150x150.png">
  <meta name="msapplication-wide310x150logo" content="images/logo_310x150.png">
  <meta name="msapplication-square310x310logo" content="images/logo_310x310.png">
  <link rel="shortcut icon" href="/favicon.ico">
  <title>The Flat Earth Society</title>
</head>

<body>

<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48900853-1', 'tfes.org');
  ga('send', 'pageview');
</script>

<div id="wrap">
  <div id="header">
    <h1><img src="./images/header.png" alt="The Flat Earth Society"></h1>
  </div>
  <div id="nav">
    <ul>
<li><a href="http://www.tfes.org/">Home</a></li>
<li><a href="http://forum.tfes.org/">Forum</a></li>
<li><a href="http://wiki.tfes.org/">Wiki</a></li>
<li><a href="http://library.tfes.org/">Library</a></li>
<li><a href="http://www.cafepress.com/theflatearthsociety">Store</a></li>
<li><a href="https://www.facebook.com/FlatSoc" rel="publisher">Facebook</a></li>
<li><a href="https://twitter.com/FlatEarthOrg" rel="publisher">Twitter</a></li>
<li><a href="http://www.reddit.com/r/flatearthsociety/">Reddit</a></li>
<li><a href="https://plus.google.com/+TfesOrgOfficial" rel="publisher">Google+</a></li>
<li>
<form id="searchbar" action="<?php echo ssi_quickSearch("wow") . "2" ?>" style="text-align:center" method="post">
  <input name="search" type="search" placeholder="Search the forum..." style="width:200px">
  <input type="submit" value="Go" style="width:35px">
</form>
</li>
    </ul>
  </div>

  <div id="content">
    <div id="main">
<?php
      $news = ssi_boardNews($board = 3, $limit = 5, $start, $length, $output_method="abc");
      foreach($news as $post)
      {
            echo '<article><h2 class="post"><a href="' . $post['href'] . '" rel="permalink">' . $post['subject'] . '</a></h2>';
            echo '<div class="information">
   <span class="date">' . date("d M Y", $post['timestamp']) . '</span> by <span class="author">' . $post['poster']['link'] . '</span>
</div>
<p>' . $post['body'] . '</p><p>
<small>' . $post['link'] . '</small></p></article>';
      }
?>
    </div>

    <div id="sidebar">
      <h3>About</h3>
      <p>This is the home of the world-famous Flat Earth Society, a place
      for free thinkers and the intellectual exchange of ideas. This
      website hosts information and serves as an archive for Flat Earth
      Theory. It also offers an opportunity to discuss this with the Flat
      Earth community on our forums.</p>

      <h3>IRC chat</h3>
      <p>Join <tt>#theflatearthsociety</tt> on <tt>irc.tfes.org</tt> to chat to us in real time!</p>

      <h3>Recent forum discussions</h3>
      <?php
            $topics = ssi_recentTopics($num_recent = 5, $exclude_boards = null, $include_boards = [5, 6, 7, 8], $output_method="not echo plz");
      ?>
      <ul class="sidemenu">
      <?php
            foreach($topics as $topic)
            {
                  echo "<li>" . $topic['link'] . "<br><small>Last post by <strong>" . $topic['poster']['link'] . "</strong> on " . $topic['time'] . "</small></li>";
            }
      ?>
      </ul>

      <h3>Status notices</h3>
      <?php
            $notices = ssi_boardNews($board = 22, $limit = 3, $start, $length, $output_method="abc");
      ?>
      <ul class="sidemenu">
      <?php
            foreach($notices as $notice)
            {
                  echo '<li><a href="' . $notice['href'] . '">' . $notice['subject'] . '</a>';
            }
      ?>
      </ul>
    </div>
  </div>

  <div id="footer">
      <p>
        Copyright &copy; <?php echo date("Y"); ?> The Flat Earth Society, <a href="copying.html">with exceptions</a> |
        Some content available under a <a href="copying.html">free licence</a>
      </p>

      <p>
        &nbsp;&nbsp;&nbsp;&nbsp;

        <a href="http://validator.w3.org/check?uri=referer">HTML</a> |
        <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> |
        Based on design by <a href="http://www.styleshout.com/">styleshout</a>
      </p>
  </div>
</div>

<div itemscope itemtype="http://schema.org/Organization">
  <span itemprop="logo" content="http://www.tfes.org/images/logo.png"></span>
  <span itemprop="image" content="http://www.tfes.org/images/logo.png"></span>
  <span itemprop="name" content="Flat Earth Society"></span>
  <span itemprop="alternateName" content="FES"></span>
  <span itemprop="alternateName" content="TFES"></span>
  <span itemprop="email" content="admin@tfes.org"></span>
  <span itemprop="description" content="The Flat Earth Society, the latest in a long succession of Societies which traces its roots back to Samuel Rowbotham in the nineteenth century."></span>
  <span itemprop="url" content="http://www.tfes.org/"></span>
  <span itemprop="sameAs" content="https://en.wikipedia.org/wiki/Flat_Earth_Society"></span>
</div>

</body>
</html>
