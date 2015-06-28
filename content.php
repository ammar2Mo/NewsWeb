 <!-- BEGIN content -->
 
 
  <div id="content">
  

    
    
    <!-- begin post -->

    <?php $q = "SELECT * FROM `posts`";

	$r = mysql_query($q);
      while ($record=  mysql_fetch_array($r)) {
          
          echo '<div class="post">
      <div class="thumb"><a href="#"><img src="' .  $record['photo']  . '" alt="" /></a></div>
      <h2><a href="#">"'.$record['title'].'"</a></h2>
      <p class="date">Posted on "'.$record['date'].'"</p>
      <p>"'.$record['p'].'"</p>
      <a class="continue" href="page.php">Continue Reading</a>
    </div>';
          
            }?>
    
   
    
    <!-- end post -->
   
  </div>
  <!-- END content -->