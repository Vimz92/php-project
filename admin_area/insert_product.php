<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
   $product_title=$_POST['product_title'];
   $product_desc=$_POST['product_desc'];
   $product_keyword=$_POST['product_keyword'];
   $product_category=$_POST['product_category'];
   $product_brands=$_POST['product_brands'];
   $product_price=$_POST['product_price'];
   $product_status='true';


   $product_image1=$_FILES['product_image1']['name'];
   $product_image2=$_FILES['product_image2']['name'];
   $product_image3=$_FILES['product_image3']['name'];

   $temp_image1=$_FILES['product_image1']['tmp_name'];
   $temp_image2=$_FILES['product_image2']['tmp_name'];
   $temp_image3=$_FILES['product_image3']['tmp_name'];
}

   //checking if empty
   if($product_title="" or $product_desc="" or $product_keyword="" or $product_category="" 
   or $product_brands="" or $product_price= "" or $product_image1="" or $product_image2="" or
   $product_image3=""){
    echo "<script>alert('Please fill all the availanle fields') </script>";
    exit();
   } else {
     move_uploaded_file($temp_image1,"./product_images/$product_image1");
     move_uploaded_file($temp_image2,"./product_images/$product_image2");
     move_uploaded_file($temp_image3,"./product_images/$product_image3");

     $insert_products="insert into `products` (product_title, product_desc, product_keyword, category_id, 
     brand_id, product_image1, product_image2, product_image3, product_price, date, status values
     ('$product_title', '$product_desc', '$product_keyword', '$product_category', '$product_brands', 
     '$product_image1', '$product_image2', '$product_image3', '$product_price', NOW(),'$product_status')";
     $result_query=mysqli_query($con, $insert_products);
     if($result_query) {
        echo "<script>alert('Successfully inserted the products') </script>";
     }
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../style.css">
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">

<div class="container"> 
 <h1 class="text-center"> Insert Products  </h1>
 <!-- form -->

 <form action="" method="post" enctype="multipart/form-data"> 
   <div class="form-outline mb-4 w-50">

    <label for="product_title" class="form-label">  Product Title  </label>
    <input type="text" name="product_title" id="product_title" 
     class="form-control" placeholder="Enter product title" 
     autocomplete="off" required="required" />

    <label for="product_desc" class="form-label">  Product Description  </label>
    <input type="text" name="product_desc" id="product_desc" 
     class="form-control" placeholder="Enter product title" 
     autocomplete="off" required="required" />

     <label for="product_keyword" class="form-label">  Product keyword  </label>
    <input type="text" name="product_keyword" id="product_keyword" 
     class="form-control" placeholder="Enter product keyword" 
     autocomplete="off" required="required" />

     <label for="product_keyword" class="form-label">  Select Category  </label>
     <div class="form-outline mb-4 w-80 m-auto"> 
        <select name="product_category"  class="form-select" id=""
        class="product_category"> 
        <option value=""> Select a category </option>
<?php
$select_query="select * from `categories`";
$result_query=mysqli_query($con, $select_query); //connection and query
while($row=mysqli_fetch_assoc($result_query)){
$category_title=$row['category_title'];
$category_id=$row['category_id'];
echo "<option value='$category_id'> $category_title </option>";
}
?>
</select>
     </div>

     <!-- brands -->
     <label for="product_keyword" class="form-label">  Select Brand  </label>
     <div class="form-outline mb-4 w-80 m-auto"> 
        <select name="product_brands"  class="form-select" id=""
        class="product_brands"> 
        <option value=""> Select a Brand </option>
<?php
$select_query="select * from `brands`";
$result_query=mysqli_query($con, $select_query);
while($row=mysqli_fetch_assoc($result_query)){
    $brands_title=$row['brand_title'];
    $brands_id=$row['brands_id'];
    echo "<option value='$brands_id'> $brands_title </option>";
}
?>
        </select>
     </div>


<!-- Image 1 -->

<div class="form-outline mb-4 m-auto">
    <label for="product_keywords" class="form-label"> Product image 1 </label>
    <input type="file" name="product_image1" id="product_image1" 
     class="form-control" placeholder="Enter product keywords">
</div>

<!-- image 2 -->
<div class="form-outline mb-4 m-auto">
    <label for="product_keywords" class="form-label"> Product image 2 </label>
    <input type="file" name="product_image1" id="product_image1" 
     class="form-control" placeholder="Enter product keywords">
</div>

<!-- image 3 -->
<div class="form-outline mb-4 m-auto">
    <label for="product_keywords" class="form-label"> Product image 3 </label>
    <input type="file" name="product_image1" id="product_image1" 
     class="form-control" placeholder="Enter product keywords">
</div>

<label for="product_price" name="product_price"> Product Price </label>
<input type="text" class="form-control mb-4" id="product_price" placeholder="Enter Product Price"> </input>

<input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Products">


 </div>
 </form>


</div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>