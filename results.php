<?php

include 'includes/conn.php';
include 'functions/function.php';


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="styles/cascading_2.css">


    <title>all products!</title>
  </head>
  <body>

<div class="container-fluid" style="background: white;">
<!-----first row---->
<div class="row" style="margin-bottom: 30px; border-bottom: 10px solid gray;">
  <!---navbar--->
  <div class="col-md-12">
    <nav class="navbar navbar-expand-lg navbar-light  sticky-top munavbar">
         <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <i class="fas fa-angle-double-down"></i>
         </button>
        <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Shopon</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" >
      <li class="nav-item active">
        <a class="nav-link " href="shopee.php" data-toggle="tooltip" data-placement="bottom" title="Home">
          <i class="fas fa-home"> </i> Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="all_products.php"data-toggle="tooltip" data-placement="bottom" title="see all products"  >
          <i class="fab fa-product-hunt"> </i> Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="my_account.php"data-toggle="tooltip" data-placement="bottom" title="view account">
          <i class="fas fa-user-circle"> </i> Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="catr.php"data-toggle="tooltip" data-placement="bottom" title="Go to shopping cart ">
          <i class="fas fa-cart-arrow-down"> </i> Shopping</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="contact.php"data-toggle="tooltip" data-placement="bottom" title="Our Contact ">
          <i class="fas fa-address-book"> </i> Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="user_register.php"data-toggle="tooltip" data-placement="bottom" title="Register you account">
          <i class="fas fa-user-plus"> </i> Sighn Up</a>
      </li>
    </ul>
    <form method="GET" action="results.php" style="margin-top: 20px;">
      <input type="text" name="user_query" placeholder=" What are we looking for?" style="width: 300px;">
      <input type="submit" name="search" value="search" style="background: #003366;color: white;height: 30px;border:0px;  ">
    </form>
  </div>
</nav>

  </div>
  <!---navbar--->
</div>
<!-----first row---->
<!-----2 row---->

<!-----2 row---->
<!-----3 row---->


<!-----3 row---->
<!-----4 row---->
 

  <!---content-under-slider-->
  <div class="row" style="margin-top: 30px;border-bottom: 1px solid gray">
  <div class="col-md-12" >
     <div class="row rowcontent" style="margin-top: 0px;">
<?php

          if(isset($_GET['search'])) {

            $user_keyword = $_GET['user_query'];
            
$get_products = "SELECT * FROM `products` where product_keyword like '%$user_keyword%'";
$run_product = mysqli_query($conn, $get_products);

while ($row_products=mysqli_fetch_array($run_product))
{
  $product_id = $row_products['product_id'];
  $product_title = $row_products['product_title'];
  $product_cat = $row_products['product_cat'];
  $product_brand = $row_products['product_brand'];
  $product_status = $row_products['product_status'];

  
  $product_price = $row_products['product_price'];
  $product_img1 = $row_products['product_img1'];
  $product_img2 = $row_products['product_img2'];

echo"
        <div class='col-md-2'>
            <div class='product-grid'>
                <div class='product-image'>
                    <a href='#'>
                        <img class='pic-1' src='admin_area/product_images/$product_img1' style='height:200px;'>
                        <img class='pic-2' src='admin_area/product_images/$product_img2' style='height:200px;'>
                        
                    </a>
                    <ul class='social' style='margin-top:45px;'>
                        
                        <li><a href='' data-tip='Add to Cart/Rs$product_price'><i class='fa fa-shopping-cart'></i></a></li>
                    <li>
                     <span class='price_bottom_slider'></span>
                    </li>
                    </ul>
                    
                </div>
                
                
                
            

            </div>
        </div>";
      }

}

          ?>
     
</div>

  </div>
  <!---content-under-slider-->
</div>
<!-----4 row---->
<!-----5 row---->


<!-----------products------------------------------------------------->








  
<!-------main container---></div><!-------main container--->
  

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" href="bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
  </body>
  </html>  