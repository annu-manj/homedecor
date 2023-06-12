
<?php require('nav.inc.php') ?>
<?php
   if(!empty($_GET['addtocart']))
   {
        $pid=$_GET['pid'];
        $qty=$_GET['qty'];
        $uid=$_GET['uid'];
        
        $query="insert into cart(userid,productid,qtty) values($uid,$pid,$qty)";
        if(mysqli_query($con,$query))
        {
          $res="update products set qty=qty-'$qty'";
          mysqli_query($con,$res);
        }
        
   }
?>
<head>
    <link rel="stylesheet" href="stylesheet/products.css">
    <link rel="stylesheet" href="stylesheet/cart.css">
</head>
<body>

  <div class="bynow">
    <div class="container">
      <div class="row">
          <?php 
            $id=$_GET['pid'];
            $query="select * from products where id=$id";
            $result=mysqli_query($con,$query);
            $row=mysqli_fetch_assoc($result);
          ?>
        
            <div class="col-md-4">
                <img  src="<?php echo $row['img']?>" class="cart-img-top" >
            </div>
            <div class="col-md-4">
              <div class="cart-disc">
                <h5 class="cart-title"><?php echo $row['name']?></h5>
                <p class="cart-text">Rs.<?php echo $row['price']?></p>
                <p class="cart-text">In Stock:<?php echo $row['qty']?></p>
                
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                </div>             
                <form>
                    
                    <input type="hidden" name="pid" value="<?php echo $_GET['pid']?>"/>
                    <input type="hidden" name="uid" value="<?php echo $_SESSION['userid'];?>"/>
                    
                    <p class="cart-text">Enter Quantity:</p> <input type="text" name="qty" class="quantity-text"/><br><br>

                    <div class="cart">
                        <?php 
                          if(empty($_SESSION['username']))
                          {
                        ?>
                            <a href="signin_signup.php"><input type="button" value=" Login to Buy Products " class="cart-buttons"/></a>
                        <?php } else { ?>
                            <input type="submit" name="addtocart" value=" Add to Cart " class="cart-buttons"/><br><br>
                            <a href="checkout1.php"><input type="button" name="" value=" Checkout " class="checkout-button"/> </a>
                        <?php } ?>
                    </div>
                </form>
                <br>
                <br>
                
                          
              </div>
            </div>
       
       
      </div>
    </div>
  </div>

</body>