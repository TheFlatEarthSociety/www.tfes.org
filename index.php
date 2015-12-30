<?php include("header.php"); ?>
<?php
  function sanitise_article($data) {
    $data = preg_replace('{^(<br(\s*/)?>|\s+)+}i', '', $data);
    $data = preg_replace('{(<br(\s*/)?>|\s+)+$}i', '', $data);
    $data = preg_replace('#(?:<br\s*/?>\s*?){2,}#','</p><p>',$data);
    $data = '<p>'.$data.'</p>';
    return $data;
  }
?>
  
  <div id="content">
    <div id="main">
<?php
      $news = ssi_boardNews($board = 3, $limit = 5, $start, $length, $output_method="abc");
      foreach($news as $post)
      {
            echo '<article>
    <header>
        <h2 class="post"><a href="' . $post['href'] . '" rel="bookmark">' . $post['subject'] . '</a></h2>
        <div class="information">
             <time datetime="' . date("c", $post['timestamp']) . '">' . date("d M Y", $post['timestamp']) . '</time>
             by <span class="author">' . $post['poster']['link'] . '</span>
        </div>
    </header>
    ' . sanitise_article($post['body']) . '
    <footer>
        <small>' . $post['link'] . '</small>
    </footer>
</article>';
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
<?php include("footer.php"); ?>
