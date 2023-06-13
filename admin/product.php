<?php
   
require('nav.inc.php');
?>
<?php 
    if(isset($_GET['remove']))
      {
        $remove_id=$_GET['remove'];
        mysqli_query($con, "delete from products where id='$remove_id'" );
        
      }
?>
<html>
<head>
  <link rel="stylesheet" href="product.css">
</head>
<body>
  <div class="product">
    <h2 id="add-product">LIST OF PRODUCTS </h2>
    <button class="sub-category-button"><a href="manage_product.php">ADD PRODUCT</a></button>
    <div class="cart-table"> 
      <div class="container-fluid">
        <div class="row justify-content-around">
          <div class="col-sm-12 col-md-6 col-lg-9">
            <table class="table table-bordered table-striped text-center">
              <thead class=" text-black fs-5">
                <tr>
                    <!---<th scope="col">S.NO</th>-->
                    <th scope="col">CATEGORY</th>
                    <th scope="col">NAME</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">QUATITY</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">REMOVE</th>
                </tr>
              </thead>
                <?php 
                    
                    $query="SELECT  products.* , categories.categories from products ,categories where products.categoryid=categories.id order by products.categoryid desc";
                    $result=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($result))
                    {
                ?>
                <tr>
                
                <td><?php echo $row['categories'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><?php echo $row['qty'];?></td>
                <td class="table-product-img"><img src="<?php echo $row['img'];?>"/></td>
                <td><a href="product.php?remove=<?php echo $row['id'] ?>" onclick="return confirm('remove product?')" class="delete-btn""><i class="fas fa-trash"></i></a></td>
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