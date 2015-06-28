<!-- BEGIN sidebar -->
  <div id="sidebar">
   
    <!-- begin search -->
<!--    <form class="search" action="http://all-free-download.com/free-website-templates/">
      <input type="text" name="s" id="s" />
      <button type="submit">Search</button>
    </form>-->
    <!-- end search -->
    <div class="wrapper">
      <!-- begin popular posts -->
     
      <!-- end popular posts -->
      <!-- begin flickr photos -->
      <h2></h2>
      <div class="flickr"> <?php
      $rss= simplexml_load_file('http://www.filgoal.com/arabic/RSS/NewsRSS.aspx?SecID=3');
      $items=$rss->channel->item;
      echo '<h1>'.$rss->channel->title.'</h1><h3>';
      echo '<img src="'.$rss->channel->image->url.'">';
      echo '<ul>';
     foreach ($items as $item )    
      {
         echo '<li><a href="'.$item->link.'">'.$item->title.'</a></li>';
      }
      
      
      ?> </div>
      <!-- end flickr photos -->
      <!-- begin featured video -->
      <h2></h2>
      <div class="video">  </div>
      
      <h2></h2>
      <div class="tags"> </div>
      <!-- end tags -->
      <!-- BEGIN left -->
      <div class="l sbar">
        
      
      </div>
      <!-- END left -->
      <!-- BEGIN right -->
      <div class="r sbar">
        
        
        
        
        
      </div>
      <!-- END right -->
    </div>
  </div>
  <!-- END sidebar -->