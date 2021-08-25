<?php 

session_start();
include("includes/db.php");
include("functions/functions.php");

?>

<?php 

if(isset($_GET['pro_id'])){    
    $product_id = $_GET['pro_id'];
    
    $get_product = "select * from products where product_id='$product_id'";    
	
    $run_product = mysqli_query($con,$get_product);    
    $row_product = mysqli_fetch_array($run_product);    
    $p_cat_id = $row_product['p_cat_id'];    
    $pro_title = $row_product['product_title'];   
    $pro_price = $row_product['product_price'];    
    $pro_desc = $row_product['product_desc'];    
    $pro_img1 = $row_product['product_img1'];    
    $pro_img2 = $row_product['product_img2'];    
    $pro_img3 = $row_product['product_img3'];    
	
    $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
    
    $run_p_cat = mysqli_query($con,$get_p_cat);    
    $row_p_cat = mysqli_fetch_array($run_p_cat);    
    $p_cat_title = $row_p_cat['p_cat_title'];
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eyewear</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>   
   <div id="top">       
       <div class="container">           
           <div class="col-md-6 offer">               
               <a href="#" >
                   
                   <?php                    
                   if(!isset($_SESSION['customer_email'])){                       
                       echo "Welcome: Guest";                       
                   }else{                       
                       echo "Welcome: " . $_SESSION['customer_email'] . "";                       
                   }                   
                   ?>
                   
               </a>
			   
               <a href="checkout.php"> | <?php items(); ?>  Items in Cart | Total Price: <?php total_price(); ?> </a>               
           </div>
           
           <div class="col-md-6">               
               <ul class="menu">                   
                   <li>
                       <a href="customer_register.php">Register</a>
                   </li>
                   <li>
                       <a href="customer/my_account.php">Account</a>
                   </li>
                   <li>
                       <a href="cart.php">Shipping Cart</a>
                   </li>
                   <li>
                       <a href="checkout.php">                           
                           <?php                            
                           if(!isset($_SESSION['customer_email'])){                       
                                echo "<a href='checkout.php'> Login </a>";
                               }else{
                                echo " <a href='logout.php'> Log Out </a> ";
                               }                           
                           ?>
                           
                       </a>
                   </li>                  
               </ul>               
           </div>           
       </div>       
   </div>
   
   <div id="navbar" class="navbar navbar-default">       
       <div class="container">           
           <div class="navbar-header">               
               <a href="index.php" class="navbar-brand home">                   
                   <img src="images/logo.png" alt="eyewear Logo">                   
               </a>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">                   
                   <span class="sr-only">Toggle Navigation</span>                   
                   <i class="fa fa-align-justify"></i>                   
               </button>                  
           </div>
           
           <div class="navbar-collapse collapse" id="navigation">               
               <div class="padding-nav">                   
                   <ul class="nav navbar-nav left">                       
                       <li class="<?php if($active=='Home') echo"active"; ?>">
                           <a href="index.php">Home</a>
                       </li>
                       <li class="<?php if($active=='Shop') echo"active"; ?>">
                           <a href="shop.php">Shop</a>
                       </li>
                       <li class="<?php if($active=='Account') echo"active"; ?>">
                           
                           <?php                            
                           if(!isset($_SESSION['customer_email'])){                               
                               echo"<a href='checkout.php'>Account</a>";                               
                           }else{                               
                              echo"<a href='customer/my_account.php?my_orders'>Account</a>";                                
                           }                           
                           ?>                           
                       </li>
                       <li class="<?php if($active=='Cart') echo"active"; ?>">
                           <a href="cart.php">Shipping Cart</a>
                       </li>
                       <li class="<?php if($active=='Contact') echo"active"; ?>">
                           <a href="contact.php">Contact With Us</a>
                       </li>
                       
                   </ul>
                   
               </div>
               
               <a href="cart.php" class="btn navbar-btn btn-primary right">                   
                   <i class="fa fa-shopping-cart"></i>                   
                   <span><?php items(); ?> Items in Cart</span>                   
               </a>
               
               
           </div>
           
       </div>
       
   </div>