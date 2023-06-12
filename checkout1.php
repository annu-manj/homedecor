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
          echo "recored inserted";
        }
        else
        {
          echo "not recorded";
        }
   }
?>
<?php 
    if(isset($_GET['remove']))
      {
        $remove_id=$_GET['remove'];
        mysqli_query($con, "delete from cart where cartid='$remove_id'" );
        header('location:checkout1.php');
      }
?>
<html>
<head>
  
    <link rel="stylesheet" href="stylesheet/checkout.css">
</head>
<body>
<div class="cart-table"> 
  <div class="container-fluid">
      <h3>My Cart</h3>
    <div class="row justify-content-around">
      <div class="col-sm-12 col-md-6 col-lg-9">
        <table class="table table-bordered table-striped text-center">
          <thead class=" text-black fs-5">
            <tr>
              <!---<th scope="col">Product id</th>--->
              <th scope="col">Product name</th>
              <th scope="col">Quantity</th>
              <th scope="col">Price</th>
              <th scope="col">Total Price</th>
              <th scope="col">remove</th>
            </tr>
          </thead>
            <?php 
              $grand_total = 0;
              $userid=$_SESSION['userid'];
              $query="SELECT * FROM cart c, products p, signup su where c.userid=su.id and c.productid=p.id and c.userid=$userid" ;
              $result=mysqli_query($con,$query);
              while($row=mysqli_fetch_assoc($result))
              {
            ?>
            <tr>
            <!---<td><?php echo $row['cartid'];?></td>--->
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['qtty'];?></td>
              <td>Rs.<?php echo $row['price'];?></td>
              <td><?php echo ($sub_total=$row['qtty'] * $row['price']) ;?></td>
              <td>
              <a href="checkout1.php?remove=<?php echo $row['cartid'] ?>" onclick="return confirm('remove item from cart?')" class="delete-btn""><i class="fas fa-trash">
              </i></a>
              </td>
            </tr>
            <?php 
              $grand_total = $grand_total + $sub_total; 
            ?>
            <?php } ?>
            <tr>
              <td colspan="2"></td>
              <td></b>Total Price</b></td>
              <td><?php echo $grand_total ;?></td>
            </tr>
        </table> 
                   
      </div>
      <div class="sub-cart">
        
        <h4>Order Details</h4>
        <div class="sub-cart-content">
          <ul>
            <li>Bag total</li>
            <li>Delivery</li>
            <li>Total Amount</li>
          </ul>
          <ul>
            <li><?php echo $grand_total ;?></li>
            <li>FREE</li>
            <li><?php echo $grand_total ;?></li>
          </ul>
        </div>
        
        
        <button class="sub-cart-button" name="payment"><a href="payment.php?userid=<?php echo $_SESSION['userid'];?> ">Place Order</a></button>  
      </div>
    </div>
  </div>
</div>
</body>


</html> 