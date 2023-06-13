<?php
require('nav.inc.php');
?>

<?php
   if(!empty($_GET['placeorder_card']))
   {
        $pid=$_GET['pid'];
        $qty=$_GET['qty'];
        $uid=$_GET['uid'];
        $query="insert into cart(userid,productid,qtty) values($uid,$pid,$qty)";
        if(mysqli_query($con,$query))
        {
          echo "record inserted";
        }
        else
        {
          echo "not recorded";
        }
   }
?>
<html>
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,intial-scale=1.0"/>

  
  <link rel="stylesheet" href="categories.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Smooch+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
  <div class="category">
    <h2>ADD CATEGORIES </h2>
    <button class="sub-category-button"><a href="manage_categories.php">ADD CATEGORY</a></button>
    <div class="cart-table"> 
      
      <div class="container-fluid">
        <div class="row justify-content-around">
          <div class="col-sm-12 col-md-6 col-lg-9">
              <table class="table table-bordered table-striped text-center">
                <thead class=" text-black fs-5">
                <tr>
                    <!---<th scope="col">S.NO</th>--->
                    <th scope="col">USERID</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col">TOTAL PRICE</th>
                </tr>
                </thead>
                <?php 
                    
                    $query="SELECT * FROM order-list";
                    $result=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($result))
                    {
                ?>
                <tr>
                <!---<td><?php echo $row['id'];?></td>--->
                <td><?php echo $row['userid'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['totalprice'];?></td>
                
                </tr>
                

                <?php } ?>
              </table>
             
          
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>