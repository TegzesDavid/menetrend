<?php include('includes/header.php'); ?>

<div id="content">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        
        <ol class="carousel-indicators"> 
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
           <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>  
            
        </ol>
        
        <div class="carousel-inner" role="listbox">
            <div class="item active"> <img src="Image/festival.jpg" alt="Festival">

            </div> <div class="item"> <img src="Image/flashmob.jpg" alt="Flashmob"> 
            </div> <div class="item"> <img src="Image/concert.jpg" alt="Concert"> 
            </div>
        </div> 
        
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> 
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> 
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
  
    
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="200" height="200">
  <param name="movie" value="Image/volanreklam.swf" />
  <param name="quality" value="high" />
  <embed src="Image/volanreklam.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="200" height="200"></embed>
</object>



    <h2>Kezdőlap</h2>
    <?php
    foreach ($news as $item) {
        echo '<div class="news">';
        echo '<div class="title">' . $item['title'] . '</div>';
        echo '<div class="text">' . $item['text'] . '</div>';
        echo '<div class="date">' . $item['date'] . '</div>';
        echo '</div>';
    }
    ?>
</div>

<?php
include('includes/footer.php');
