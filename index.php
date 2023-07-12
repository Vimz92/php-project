<?php
include('includes/connect.php');
include('functions/common_functions.php')

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website using php and mysql.</title>

    <link rel="stylesheet" href="style.css">
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container-fluid bg-info p-0">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid bg-danger">
    <img class="logo" src="./images/subscribe.png" />
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>5</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Toral Price</a>
        </li>
       

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- second child -->

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto"> 
        <li class="nav-item">
        <a class="nav-link" href="#"> Welcome Guest </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#"> Login  </a>
        </li>

        
</ul>
</nav>

<!-- Third child -->
<div class="bg-light">
    <h3 class="text-center">Hidden Store</h3>
    <p class="text-center">Communications is at the heart of e-commerce and community</p>
</div>


<!-- fourth child -->
<div class="row">
  <div class="col-md-10">
        <!-- products -->
    <div class="row">     
<?php
 global $con;
getproducts();
getuniquecategory();
?>  
  </div>
    </div>
    <div class="col-md-2 bg-secondary p-0"> 
        <!-- brands to be displayed -->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item"> 
                <a href="#" class="nav-link text-light bg-info"><h4> Delivery Brands </h4></a>
            </li>

 <?php
 global $con;
getbrands();
 
 ?>
        </ul> 
        <!-- categories to be displayed -->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item"> 
                <a href="#" class="nav-link text-light bg-info"><h4> Categories </h4></a>
            </li>

            
<?php
global $con;
getcategory();
?>
         
        </ul> 
    </div>
</div>
</div>



<!-- footer -->
<div class="bg-info text-center">
    <p> All rights reserved @Vimal Vinayraj </p>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>  
</body>
</html>