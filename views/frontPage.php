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
