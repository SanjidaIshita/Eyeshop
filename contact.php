<?php 
    
    $active='Contact';
    include("includes/header.php");

?> 
   <div id="content">
       <div class="container">
           <div class="col-md-12">
  <!-- breadcrumb for home> contact with us -->             
               <ul class="breadcrumb">
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Contact With Us
                   </li>
               </ul>               
           </div>           
           <div class="col-md-3">   
            <?php     
             include("includes/sidebar.php");    
            ?>              
           </div>           
           <div class="col-md-9">               
               <div class="box">                   
                   <div class="box-header">                       
                       <center>                           
                           <h2>For any query please contact</h2>                           
                           <p class="text-muted">                               
                               We are here for 24/7 hr work.                              
                           </p>                           
                       </center>                       
                       <form action="contact.php" method="post">                           
                           <div class="form-group">                               
                               <label>Name</label>                               
                               <input type="text" class="form-control" name="name" required>                               
                           </div>                           
                           <div class="form-group">                               
                               <label>Email</label>                               
                               <input type="text" class="form-control" name="email" required>                               
                           </div>                           
                           <div class="form-group">                               
                               <label>Topic</label>                               
                               <input type="text" class="form-control" name="subject" required>                               
                           </div>                           
                           <div class="form-group">                               
                               <label>Message</label>                               
                               <textarea name="message" class="form-control"></textarea>                               
                           </div>                           
                           <div class="text-center">                               
                               <button type="submit" name="submit" class="btn btn-primary">                               
                               <i class="fa fa-user-md"></i> Send                               
                               </button>                              
                           </div>                          
                       </form>                      
                       <?php 
                          
                           echo "<h2 align='center'> message sent sucessfully </h2>";
                       
                       ?>                       
                   </div>                   
               </div>               
           </div>           
       </div>
   </div>
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
</html>

<?php 
                       /// from name submit ///
                       if(isset($_POST['submit'])){
                           
                           /// Admin receives message with this ///
                           
                           $name = $_POST['name'];                           
                           $email = $_POST['email'];                           
                           $subject = $_POST['subject'];                           
                           $message = $_POST['message'];                           
                           
                           $c_ip = getRealIpUser();
						   
                           $insert_contact = "insert into contact (contact_name,contact_email,contact_topic,contact_message) values ('$name','$email','$subject','$message')";
                           
                           $run_contact = mysqli_query($con,$insert_contact);
                           
                           echo "<h2 align='center'> message sent sucessfully </h2>";
                           
                       }
                       
                       ?>     