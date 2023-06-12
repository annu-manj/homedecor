<?php 
require('nav.inc.php'); 

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylesheet/products.css">
</head>
<body>
<div class="products-products"> 
    
     
    <div class="container">
        <div class="row">
            <?php 
                $cid=$_GET['cid'];
                $query="select * from products where categoryid=$cid";
                $result=mysqli_query($con,$query);
                while($row=mysqli_fetch_assoc($result))
                {
            ?> 
            <div class="col-md-4">
                <img src="admin/<?php echo $row['img']?>" class="card-img-top">
                        <div class="card-disc">
                            <h5 class="card-title"><?php echo $row['name']?></h5>
                            <p class="card-text">Rs.<?php echo $row['price']?></p>
                            <div class="rating">
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star-o"></i>
                            </div>             
                           <a href="bynow.php?pid=<?php echo $row['id']?>" class="btn">Buy Now</a>
                        </div>
                        
            </div>
            <?php } ?>                    
        </div>
    </div>
</div>


</body>
<?php require('footer.inc.php') ?>

</html> 
