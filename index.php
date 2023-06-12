<?php require('nav.inc.php'); ?>
<?php  
     if(!empty($_GET['log']))
     {
         session_destroy();
         header('location:index.php');
     }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylesheet/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
</head>
<body>
<div class="index_first_part">
    <div class="container">
        <div class="first_first_content">
            <div class="row">
                <div class="col-3 ">
                    <h1  id="heading1">Give <br> a revamp <br> to your <br>home </h1>
                </div>
                <div class="col-8">
                    <img  class="image1" src="images/display4.jpg">
                </div>
                
               
            </div>
        </div>
    </div>
</div>
<!---------------------header section ends-->




<!-----featured categories-------------------------------->

<div class="featured-categories">
    <h2> Featured Categories</h2>
    <div class="container">
        <div class="sub-container">
            <div class="row ">
                <?php
                    $query="select * from categories";
                    $result=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($result))
                    {
                ?>
                
                    <div class="col-md-4">
                        <div class="fpp">
                        <img src="admin/<?php echo $row['img']?>" class="categories-products" >
                        <a  class="category-title" href="products.php?cid=<?php echo $row['id']?>" ><p><?php echo $row['categories']?></p></a>
                        </div>
                    </div>
                    
                    <?php } 
                    ?>
                
            </div>
        </div>
    </div>
</div>




</body>
<?php require('footer.inc.php') ?>
</html> 