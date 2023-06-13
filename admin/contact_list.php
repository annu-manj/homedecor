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
<head>
  
  <link rel="stylesheet" href="categories.css">
</head>
<div class="category">
    <h2>FEEDBACK</h2>
    <div class="cart-table"> 
      <div class="container-fluid">
        <div class="row justify-content-around">
          <div class="col-sm-12 col-md-6 col-lg-9">
            <table class="table table-bordered table-striped text-center">
                <thead class=" text-black fs-5">
                <tr>
                    <th scope="col">S.NO</th>
                    <th scope="col">FULLNAME</th>
                    
                    <th scope="col">EMAIL</th>
                    <th scope="col">MESSAGE</th>
                    
                    
                    <th scope="col">REMOVE</th>
                </tr>
                </thead>
                <?php 
                    
                    $query="SELECT * FROM contact_us";
                    $result=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($result))
                    {
                ?>
                <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['fullname'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['message'];?></td>

                <td><a href="categories.php?remove=<?php echo $row['id'] ?>" onclick="return confirm('remove category?')" class="delete-btn""><i class="fas fa-trash"></i></a></td>
                </tr>

                <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>