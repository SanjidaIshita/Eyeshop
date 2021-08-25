<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
               
               <h4>User</h4>			   
			    <ul>                          
                           <?php                            
                           if(!isset($_SESSION['customer_email'])){
                               
                               echo"<a href='checkout.php'>Login</a>";
                               
                           }else
						   {                               
                              echo"<a href='customer/my_account.php?my_orders'>Login</a>"; 
                               
                           }                           
                           ?>                    
                    <li><a href="customer_register.php">Register</a></li>
                </ul>
               
                <hr>
				
				<ul>
                    <li><a href="cart.php">Shipping Cart</a></li>
                    <li><a href="contact.php">Contact with Us</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="customer/my_account.php">Account</a></li>
                </ul>
               
               
                
            </div>
            
            <div class="com-sm-6 col-md-3">
                
                <h4>Products Categories</h4>                
                <ul>             
                    <?php 
                    
                        $get_p_cats = "select * from product_categories";                    
                        $run_p_cats = mysqli_query($con,$get_p_cats);                    
                        while($row_p_cats=mysqli_fetch_array($run_p_cats)){                            
                            $p_cat_id = $row_p_cats['p_cat_id'];                            
                            $p_cat_title = $row_p_cats['p_cat_title'];                            
                            echo "                            
                                <li>                                
                                    <a href='shop.php?p_cat=$p_cat_id'>                                    
                                        $p_cat_title                                   
                                    </a>                                
                                </li>
                            
                            ";
                            
                        }
                    
                    ?>
                
                </ul>
            
            </div>            
            <div class="col-sm-6 col-md-3">
                
                <h4>Find Us</h4>                
                <p>                   
                   <strong>eyewear</strong>                    
                   <br/>+880-1648875632
                   <br/>eyewear@gmail.com                    
                </p>                
                <hr class="hidden-md hidden-lg"> 
				<hr>
                <a href="about_us.php">About Us</a>				
            </div>         
            <div class="col-sm-6 col-md-3">
                
           
                
                <h4>Follow Us On</h4>
                
                <p class="social">
                    <a href="https://www.facebook.com/Eyewear-109566234230129" class="fa fa-facebook"></a>
                    <a href="https://twitter.com/Mithila89138238" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </p>
				<hr>
				
				<p class="text-muted">
                    Dont miss our latest update,Stay connected.
                </p>                              
            </div>
        </div>
    </div>
</div>


<div id="copyright">
    <div class="container">
        <div class="col-md-6">            
            <p class="pull-left">Copyright &copy; 2020 eyewear, All rights reserved.</p>            
        </div>
    </div>
</div>