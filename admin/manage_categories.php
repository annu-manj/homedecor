<?php
   
require('nav.inc.php');
?>
<?php 
 if(isset($_POST['submit'])) 
 {
     
     $category=$_POST['category'];
     
     $image=$_FILES['image'];
     $image_loc=$_FILES['image']['tmp_name'];
     $image_name=$_FILES['image']['name'];
     $image_des="images/".$image_name;
     move_uploaded_file($image_loc,"images/".$image_name);
     
     $query="insert into categories(categories,img) values('$category','$image_des')";
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
    <link rel="stylesheet" href="manage_categories.css">
</head>
<body>
<div class="col-md-6">
    <h2 id="add-categories"> Add Categories </h2>
    <form  method="post" enctype="multipart/form-data"> 
        
        <div class="form-group">
            <label class="label">Categories</label><br>
            <input type="text" name="category" placeholder="product name" class="form-control" required><br><br>
        </div>
       
        <div class="form-group">
            <label class="label">Image</label><br>
            <input type="file" name="image"  class="form-control" required><br><br>
        </div> 
        
        <input type="submit" name="submit" class="signup-button" value="ADD">
        
    </form>
</div>
</body>
</html>