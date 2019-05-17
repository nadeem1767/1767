<?php

include 'includes/conn.php';


?>
<!-----script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>------>

<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>Insert_products</title>
	
	<link rel="stylesheet" type="text/css" href="styles/css/bootstrap.min.css">
	<script type="text/javascript" href="styles/js/bootstrap.min"></script>
</head>
<body>
<div class="container">
	<div class="container" style="background: gray;height:100px;"><h1 style="text-align: center; padding-top:18px; color:white;">Insert Products</h1></div>
	<form method="post" action="Insert_product.php" enctype="multipart/form-data">
	<table class="table table-dark" style="background: gray;">
		
	
	
		<tr >
			<td>
				<label>Product Title</label>
		<input type="text" name="Product_title" class="form-control"style="width:495px;">
	      </td>
	      <td>
			<label>Product Price</label>
            <input type="text" name="Product_price" class="form-control" style="width:495px;"/>
		</td>

</tr>

	    <td> 
		<select name="Product_cat" class="form-control" style="width:495px;">	
			<option>
		Select a Catageory		
		</option>
		<?php
$get_cats = "select * from categorie";
$run_cats = mysqli_query ($conn, $get_cats);
 while ($row_cats=mysqli_fetch_array($run_cats) )
 {
$cat_id = $row_cats['cat_id'];
$cat_title = $row_cats['cat_title'];
echo "<option value='$cat_id'>$cat_title</option>";
 }
?>
		</select>
		</td>
		<td>
			<select name="product_brand" class="form-control"style="width:495px;" >
			<option>
		Select a Brand		
		</option>
		<?php
$get_cats = "select * from brands";
$run_cats = mysqli_query ($conn, $get_cats);
 while ($row_cats=mysqli_fetch_array($run_cats) )
 {
$brand_id = $row_cats['brand_id'];
$brand_title = $row_cats['brand_title'];
echo "<option value='$brand_id'>$brand_title</option>";
 }
?>
		</td>
        </tr>
        <tr>
		
		<td>
			<label >Product image1</label>
            <input type="file" name="Product_img1" class="form-control" style="width:495px;"/>
		</td>
		<td>
			<label style="">Product image2</label>
            <input type="file" name="Product_img2" class="form-control" style="width:495px;"/>
		</td>
        </tr>
        <tr>
		
		
		<td>
			<label style="">Product status</label>
            <input type="text" name="Product_status" class="form-control" style="width:495px;"/>
		</td>
        </tr>
        <tr>
		
		
        </tr>
        <tr >
		
		
        <tr align="center">
        	<td colspan="2">
        	<input type="submit" name="insert_product" value="Submit">
        </td>
        </tr>
</table>	
	</form>
</div>

	
</body>
</html>
<?php
  
if(isset($_POST['insert_product']))
{
$product_title = $_POST['Product_title'];
$product_cat = $_POST['Product_cat'];
$product_brand = $_POST['product_brand'];
$product_price = $_POST['Product_price'];

$status = 'on';

//image name
$product_img1 = $_FILES['Product_img1']['name'];
$product_img2 = $_FILES['Product_img2']['name'];


//image temp name

$tmp_name1 = $_FILES['Product_img1']['tmp_name'];
$tmp_name2 = $_FILES['Product_img2']['tmp_name'];



if ($product_title=='' OR $product_cat=='' OR $product_brand=='' OR $product_price==''
OR  $product_img1=='' OR  $product_img2=='' ) {
	
	echo "<script>alert('Please Fill All The Fields!')</script>";
exit();
}
else 
{
move_uploaded_file($tmp_name1, "product_images/$product_img1");
move_uploaded_file($tmp_name2, "product_images/$product_img2");

}

$insert_products = "INSERT INTO `products`(`product_id`, `product_cat`, `product_brand`, `date`, `product_title`, `product_img1`, `product_img2`, `product_price`, `product_status`) 
VALUES (NULL, '$product_cat', '$product_brand', NOW(), '$product_title', '$product_img1', '$product_img2', '$product_price','$status')";
$run_product = mysqli_query($conn, $insert_products);

if ($run_product)
{
	echo "<script>alert('Data Uploaded successfully!')</script>";
}

}



?>