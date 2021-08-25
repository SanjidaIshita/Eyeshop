<?php 

    $active='Home';
    include("includes/header.php");

?>
   
   <div class="container" id="slider">      
       <div class="col-md-14">        
           <div class="carousel slide" id="myCarousel" data-ride="carousel">             
               <ol class="carousel-indicators">                
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>                   
               </ol>            
               <div class="carousel-inner">                
                   <div class="item active">                       
                       <img src="images/i1.jpg" alt="Slider Image 1">                       
                   </div>                   
                   <div class="item">                       
                       <img src="images/i2.jpg" alt="Slider Image 2">                       
                   </div>                   
                   <div class="item">                       
                       <img src="images/i3.jpg" alt="Slider Image 3">                       
                   </div>                   
                   <div class="item">                       
                       <img src="images/i4.jpg" alt="Slider Image 4">                       
                   </div>                  
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
   
  <div class="featured-categories">
        <div class="container">
            <div class="row">  
                 <div class="col-md-4">
	                 <img src="images/categories1.jpg">
	             </div>	 
	             <div class="col-md-4">
	                 <img src="images/c3.jpg">
	             </div>	 
	             <div class="col-md-4">
	                 <img src="images/c2.jpg">
	             </div>	
	        </div>
	   </div>     
  </div>
   
   <div id="hot"> 
        <div class="container">   
              <div class="col-md-12">    
                <div class="box" >                                                  
                   <h2>
                       Our Products
                   </h2>                                                            
                </div> 
             </div>
         </div>	  
   </div>
   
   <div id="content" class="container">     
       <div class="row">      
          <?php            
           getPro();           
           ?>           
       </div>    
   </div>
   
   <?php     
    include("includes/footer.php");    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>