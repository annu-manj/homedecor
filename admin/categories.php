<?php
   
require('nav.inc.php');
?>
<?php 
    if(isset($_GET['remove']))
      {
        $remove_id=$_GET['remove'];
        mysqli_query($con, "delete from categories where id='$remove_id'" );
        
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
    <h2>LIST OF CATEGORIES </h2>
    <button class="sub-category-button"><a href="manage_categories.php">ADD CATEGORY</a></button>
    <div class="cart-table"> 
      
      <div class="container-fluid">
        <div class="row justify-content-around">
          <div class="col-sm-12 col-md-6 col-lg-9">
              <table class="table table-bordered table-striped text-center">
                <thead class=" text-black fs-5">
                <tr>
                    <!---<th scope="col">S.NO</th>--->
                    <th scope="col">CATEGORIES</th>
                    <th scope="col">IMAGE</th>
                    <th scope="col">REMOVE</th>
                    
                </tr>
                </thead>
                <?php 
                    
                    $query="SELECT * FROM categories";
                    $result=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($result))
                    {
                ?>
                <tr>
                  <!---<td><?php echo $row['id'];?></td>--->
                  <td><?php echo $row['categories'];?></td>
                  <td><img src="<?php echo $row['img'];?>"/></td>
                  <td><a href="categories.php?remove=<?php echo $row['id'] ?>" onclick="return confirm('remove category?')" class="delete-btn""><i class="fas fa-trash"></i></a></td>
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