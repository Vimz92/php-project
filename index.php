<?php
include('includes/connect.php');

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
        <div class="col-md-4 mb-2">
        <div class="card" style="width: 18rem;">
        <img src="./images/banana.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Add to Cart </a>
            <a href="#" class="btn btn-secondary">View more </a>
        </div>
    </div>
        </div>
        <div class="col-md-4 mb-2"><div class="card" style="width: 18rem;">
  <img src="./images/banana.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more </a>
  </div>
</div>

</div>
        <div class="col-md-4 mb-2">
            <div class="card" style="width: 18rem;">
  <img src="./images/banana.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more </a>
  </div>
</div>
        </div>
     </div>


    </div>
    <div class="col-md-2 bg-secondary p-0"> 
        <!-- brands to be displayed -->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item"> 
                <a href="#" class="nav-link text-light bg-info"><h4> Delivery Brands </h4></a>
            </li>

 <?php
$select_brand="Select * from `brands`";
$result_brand=mysqli_query($con,$select_brand);
// $row_data=mysqli_fetch_assoc($result_brand);
// echo $row_data['brand_title'];
// echo $row_data['brand_title'];
while($row_data=mysqli_fetch_assoc($result_brand)){
  $brand_title=$row_data['brand_title'];
  $brand_id=$row_data['brands_id'];
  echo " <li class='nav-item'> 
  <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
</li>";
};
 ?>
        </ul> 
        <!-- categories to be displayed -->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item"> 
                <a href="#" class="nav-link text-light bg-info"><h4> Categories </h4></a>
            </li>

            
<?php
$select_cat="Select * from `categories`"; //select database tables
$resultcat = mysqli_query($con, $select_cat); //connect connection string and db tables
while($datafetch= mysqli_fetch_assoc($resultcat)) {
 $cat_id = $datafetch['category_id'];
 $cat_title = $datafetch['category_title'];
echo "    <li class='nav-item'> 
<a href='index.php?category=$cat_id' class='nav-link text-light'>$cat_title</a>
</li>";
}
?>
         
        </ul> 
    </div>
</div>



<!-- footer -->
<div class="bg-info text-center">
    <p> All rights reserved @Vimal Vinayraj </p>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>  
</body>
</html>