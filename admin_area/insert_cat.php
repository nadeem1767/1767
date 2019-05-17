<?php

include 'includes/conn.php';



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


    <link rel="stylesheet" type="text/css" href="styles/mystyles.css">


    <title>insert category</title>
  </head>
  <body>
<div class="container">
  <div style="height: 300px; width: 600px; background: gray; margin-left: 250px; margin-top: 100px;box-shadow: 5px 5px; ">
    
<form method="post" action="Insert_cat.php" enctype="form-data">
  <h3 class="display4" style="text-align: center;padding-top:20px;">Insert Category</h3>
  <div class="form-group">
    <label for="pwd" style="padding-left: 30px;"><b>insert Category</b></label>
    <input type="text" class="form-control" id="pwd" name="category" style="width: 550px;margin-left: 30px;">
  </div>
  <div class="form-group form-check">
    
  </div>
  <button type="submit" class="btn btn-primary" name= "upload" style="margin-left: 30px;">Upload</button>
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db  = "myshop";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);


if(isset($_POST['upload']))
{
$category = $_POST['category'];

if ($category=='') {
  
  echo "<script>alert('Please Fill All The Fields!')</script>";
exit();
}

$insert_product = "INSERT INTO `categorie`(`cat_id`,`cat_title`) VALUES (NULL,'$category')";
$run_products = mysqli_query($conn, $insert_product);

if ($run_products)
{
  echo "<script>alert('Data Uploaded successfully!')</script>";
}

}



?>

  </div>

</div>


   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" href="bootstrap-4.0.0/dist/js/bootstrap.min.js"></script>
  </body>
  </html>    