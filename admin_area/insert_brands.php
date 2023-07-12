<?php
include('../includes/connect.php');
if(isset($_POST['insert_bra'])){ //BUTTON CLICKED
  $brand_title=$_POST['brand_title']; //selected branch title

  $select_query="select * from `brands` where brand_title='$brand_title'"; //select query
  $result_select=mysqli_query($con, $select_query);
  $number=mysqli_num_rows($result_select);
  if($number > 0){
    echo "<script> alert('Brand has already been added')</script>";
  } else {
    $insert_query="insert into `brands` (brand_title) values ('$brand_title')"; //write insert query
    $execute=mysqli_query($con, $insert_query);
    if($execute){
      echo "<script> alert ('Brand has been inserted successfully') </script>";
    }
  }
  
}
?>


<h3 class="text-center"> Insert Brands </h3>
<form action="" method="post" class="mb-2"> 
     <div class="input-group w-90 mb-3">
     <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
     <input type="text" class="form-control" name="brand_title" placeholder="Insert brands" aria-label="Insert Brands" aria-describedby="basic-addon1">
     </div>
     <div class="input-group w-10 mb-2">
    
     <input type="submit" class="bg-info p-2" name="insert_bra" value="Insert Brands" aria-label="Username" aria-describedby="basic-addon1">
     <!-- <button class="bg-info border-0 p-2">Insert Brands </button> -->
     </div>
</form>