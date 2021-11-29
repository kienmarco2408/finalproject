<?php
      
      $active = 'Home';
      include("includes/header.php");

?>
<h1 style="text-align: center;color: black;font-family: Bahnschrift">WELCOME TO THE WORLD OF FIGURE</h1>
   <div class="container" id="slider">
       
       <div class="col-md-12">
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel">
               
               <ol class="carousel-indicators">
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                   
               </ol>
               

               <div class="carousel-inner">
                  
                  <?php 
                   
                   $get_slides = "select * from slider LIMIT 0,1";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides= mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];
                       
                       echo "
                       
                       <div class='item active'>
                       
                       <img src='admin/slides_images/$slide_image'>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   $get_slides = "select * from slider LIMIT 1,3";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];
                       
                       echo "
                       
                       <div class='item'>
                       
                       <img src='admin/slides_images/$slide_image'>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   ?>
                   
               </div>
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev">

                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a>
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next">
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a>
               
           </div>
           
       </div>
       
   </div>
   
<div class="w3-gray" id="about">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="about">
      <h2 class="w3-wide w3-center" style="color: black">About</h2>
      <br>
        <div class="w3-col m6 w3-padding-large w3-hide-small">
        <img src="images/Minato.jpg" class="w3-round w3-image w3-opacity-min" alt="minato" width="302" height="218">
        </div>
        <h4 style="color: black"><b>WHAT IS FIGURE?</b></h4>
        <p>Figure is a model, a statue, any 3D product that reproduces a character in a movie, story, game, or drawing.</p>
        <p>Usually figure bears the shape of a human, sometimes a beast, a god, a goblin, a monster or even an alien creature ... any character thought of by the artist, sculpted into 3D called the figure.</p>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="w3-col m6 w3-padding-large w3-hide-small">
        <img src="images/kiritoasuna.jpg" class="w3-round w3-image w3-opacity-min" alt="kiritoasuna" width="302" height="218">
        </div>
        <h4 style="color: black"><b>WHAT IS JAPAN FIGURE?</b></h4>
        <p>These are figures created by Japanese artists, illustrating, creating and finishing in Japan.</p>
        <p>Because of being born in Japan, it is obvious that the Japan figure has Japanese culture, from Anime, Manga, Game, Light novel, J-pop to Virtual Singer and so on.</p>
        <p>With Japanese technology and a strictly supervised production process, the figure products are very well-executed, sharp details, vivid colors, precise expressions like the original character have satisfied many fans. fans all over the world.</p>
        <br>    
    </div>
  </div> 
</div>


   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
</body>
</html>