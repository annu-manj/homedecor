<?php
   
require('nav.inc.php');
?>
<?php 
 if(isset($_POST['submit'])) 
 {
     $category_id=$_POST['categoryid'];
     $name=$_POST['name'];
     $price=$_POST['price'];
     $quantity=$_POST['qty'];
     $image=$_FILES['image'];
     $image_loc=$_FILES['image']['tmp_name'];
     $image_name=$_FILES['image']['name'];
     $image_des="images/".$image_name;
     move_uploaded_file($image_loc,"images/".$image_name);
     
     $query="insert into products(categoryid,name,price,qty,img) values('$category_id','$name','$price','$quantity','$image_des')";
     if(mysqli_query($con,$query))
     {
        
         ?>
         <script>
             alert("category added)");
         </script>
         <!---<?php header('location:categories.php'); ?>-->
         <?php
     }
     else
     {
             ?>
         <script>
             alert("action not successful");
         </script>
         
         <?php
             
     }
     
 }
 ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="manage_product.css">
</head>
<body>
<div class="col-md-6 ">
    <h2> Add Product </h2>
    <form  method="post" enctype="multipart/form-data"> 
        <div class="form-group">
            <label>Category</label><br>
            <select class="form-control" name="categoryid">
              <option>Select Categories</option>
              <?php
                $query="select * from categories";
                $result=mysqli_query($con,$query);
                while($row=mysqli_fetch_assoc($result))
                {
                    
            ?>
                <option value="<?php echo $row['id']?>"><li><?php echo $row['categories']?></li></option>
            <?php } 
              ?>
            </select>
        </div>
        <div class="form-group">
            <label>Product Name</label><br>
            <input type="text" name="name" placeholder="enter the product name" class="form-control" required><br><br>
        </div>
        <div class="form-group">
            <label>Price</label><br>
            <input type="text" name="price" placeholder="enter the price" class="form-control" required><br><br>
        </div>
        <div class="form-group">
            <label>Quantity</label><br>
            <input type="text" name="qty" placeholder="enter the quantity" class="form-control" required><br><br>
        </div>
        <div class="form-group">
            <label>Image</label><br>
            <input type="file" name="image"  class="form-control" required><br><br>
        </div> 
        
        <input type="submit" name="submit" class="signup-button" value="ADD">
        
    </form>
</div>