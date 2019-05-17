function getCatPro()
{
global $connection;
 if(isset($_GET['cat'])){

  $cat_id = $_GET['cat'];
  

$get_Cat_Pro = "SELECT * FROM `products` where cat_id='$cat_id'";
$run_Cat_Pro = mysqli_query($connection, $get_products);

while ($row_Cat_Pro=mysqli_fetch_array($run_product))
{
  $product_id = $row_Cat_Pro['cat_id'];
  $product_title = $row_Cat_Pro['product_title'];
  $product_cat = $row_Cat_Pro['product_cat'];
  $product_brand = $row_Cat_Pro['product_brand'];
  $product_status = $row_Cat_Pro['product_status'];
  
  $product_price = $row_Cat_Pro['product_price'];
  $product_img1 = $row_Cat_Pro['product_img1'];
  $product_img2 = $row_Cat_Pro['product_img2'];

echo"
        <div class='col-md-3'>
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
}







function getContenet()
{
global $connection;
if(!isset($_GET['cat'])){
  if(!isset($_GET['brand'])){

    $get_products = "SELECT * FROM `products` order by rand() LIMIT 0,4";
    $run_product = mysqli_query($connection, $get_products);

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
            <div class='col-md-3 col-sm-6'>
                <div class='product-grid'>
                    <div class='product-image'>
                        <a href='#'>
                            <img class='pic-1' src='admin_area/product_images/$product_img1' style='height:200px;'>
                            <img class='pic-2' src='admin_area/product_images/$product_img2' style='height:200px;'>
                            
                        </a>
                        <ul class='social'>
                            <li><a href='' data-tip='Quick View'><i class='fa fa-search'></i></a></li>
                            <li><a href='' data-tip='Add to Wishlist'><i class='fa fa-shopping-bag'></i></a></li>
                            <li><a href='' data-tip='Add to Cart'><i class='fa fa-shopping-cart'></i></a></li>
                        </ul>
                        
                    </div>
                    <ul class='rating'>
                        <li class='fa fa-star'></li>
                        <li class='fa fa-star'></li>
                        <li class='fa fa-star'></li>
                        <li class='fa fa-star'></li>
                        <li class='fa fa-star disable'></li>
                    </ul>
                    <div class='product-content'>
                        <h3 class='title'><a href='#'>$product_title</a></h3>
                        <div class='price'>$product_price
                            <span>25000 Rs</span>
                        </div>
                        <a class='add-to-cart' href=''>+ Add To Cart</a>
                    </div>
                </div>
            </div>";
          }
        
}
}
}

function getCat()
{
global $connection;
                      $get_cat = "SELECT * FROM `categorie` WHERE 1";
                      $run_cats = mysqli_query($connection ,$get_cat);
                        while ($row_cats=mysqli_fetch_array($run_cats)){

                        $cat_id = $row_cats['cat_id'];
                        $cat_title = $row_cats['cat_title'];

                        echo "<li>
                            <a href='shopee.php?cat$cat_id'><i class='fas fa'></i> $cat_title</a>
                        </li>
                        ";
                    }
                     
}

function getBrand()
{
	global $connection;
	 $get_cat = "SELECT * FROM `brands` WHERE 1";
                      $run_cats = mysqli_query($connection, $get_cat);
                        while ($row_cats=mysqli_fetch_array($run_cats)){

                        $cat_id = $row_cats['brand_id'];
                        $cat_title = $row_cats['brand_title'];

                       echo"
                        <li>
                            <a href='shopee.php?brand$cat_id'>
                               $cat_title</a>
                        </li>";
                      }  
}
