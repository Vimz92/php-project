<?php
// include connect file
include('./includes/connect.php');

function getproducts(){
 global $con;

 if(!isset($_GET['category'])){
    if(!isset($_GET['brand'])) {
        $select_query = "SELECT * FROM `products` order by product_title"; 
        $result_query = mysqli_query($con,$select_query);
        while($row_data= mysqli_fetch_assoc($result_query)){
          $product_id=$row_data['product_id'];
          $product_title=$row_data['product_title'];
          $product_desc=$row_data['product_desc'];
          $product_keyword=$row_data['product_keyword'];
          $category_id=$row_data['category_id'];
          $brand_id=$row_data['brand_id'];
          $product_image1=$row_data['product_image1'];
          $product_image2=$row_data['product_image2'];
          $product_image3=$row_data['product_image3'];
          $product_price=$row_data['product_price'];
        
          echo "<div class='col-md-4 mb-2'>
          <div class='card' style='width: 18rem;'>
           <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
           <div class='card-body'>
              <h5 class='card-title'>$product_title</h5>
              <p class='card-text'>$product_desc</p>
              <a href='#' class='btn btn-primary'>Add to Cart </a>
              <a href='#' class='btn btn-secondary'>View more </a>
           </div>
        </div>
        </div>";
    }
 }
}
}

//getting unique categories

function getuniquecategory(){
    global $con;
   
    if(isset($_GET['category'])){
        $category_id=$_GET['category'];

           $select_query = "SELECT * FROM `products` where category_id=$category_id"; 
           $result_query = mysqli_query($con,$select_query);
           while($row_data= mysqli_fetch_assoc($result_query)){
             $product_id=$row_data['product_id'];
             $product_title=$row_data['product_title'];
             $product_desc=$row_data['product_desc'];
             $product_keyword=$row_data['product_keyword'];
             $category_id=$row_data['category_id'];
             $brand_id=$row_data['brand_id'];
             $product_image1=$row_data['product_image1'];
             $product_image2=$row_data['product_image2'];
             $product_image3=$row_data['product_image3'];
             $product_price=$row_data['product_price'];
           
             echo "<div class='col-md-4 mb-2'>
             <div class='card' style='width: 18rem;'>
              <img src='./admin_area/product_images/$product_image1' class='card-img-top' alt='...'>
              <div class='card-body'>
                 <h5 class='card-title'>$product_title</h5>
                 <p class='card-text'>$product_desc</p>
                 <a href='#' class='btn btn-primary'>Add to Cart </a>
                 <a href='#' class='btn btn-secondary'>View more </a>
              </div>
           </div>
           </div>";
       }
    }
   }


function getbrands (){
    global $con;
    if(isset($_GET['brand'])){
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
        </li>";//update 'index.php?brand=$brand_id'
        };
        }
    }



function getcategory () {
    global $con;
    $select_cat="Select * from `categories`"; 
    // select database tables
$resultcat = mysqli_query($con, $select_cat); //connect connection string and db tables
while($datafetch= mysqli_fetch_assoc($resultcat)) {
 $cat_id = $datafetch['category_id'];
 $cat_title = $datafetch['category_title'];
echo "    <li class='nav-item'> 
<a href='index.php?category=$cat_id' class='nav-link text-light'>$cat_title</a>
</li>"; //update 'index.php?category=$cat_id'
}
}
?> 