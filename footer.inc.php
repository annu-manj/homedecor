<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylesheet/footer.css">
</head>
<body>
<!-------------footer section ------------------->
<div class="footer">
    <div class="footer-container">
       <div class="footer-row">
         <div class="footer-col1">
            <p>100% Original Gurantee <br>
            for all products at BellaCasa.com</p>
         </div>
         
         <div class="footer-col2">
             
             <h3> OFFICE ADDRESS : </h3>
             <p>Buildings Parisona,<br>Begonia and Clover situated <br> in Maheshwar Village,<br>
                Dviratahalli Town,<br>Varthur Hobli,<br>Karnataka 560103, India</p>
   
         </div>
         <div class="footer-col3">
            <h3>SHOP BY</h3>
            
            <ul>
               <?php
                  $query="select * from categories";
                  $result=mysqli_query($con,$query);
                  while($row=mysqli_fetch_assoc($result))
                  {
               ?>
                  <a href="products.php?cid=<?php echo $row['id']?>"><li><?php echo $row['categories']?></li></a>
               <?php } 
               ?>

            </ul>
         </div>
         <div class="footer-col4">
            <h3>KEEP IN TOUCH</h3>
            <ul>
                <li>Instagram</li>
                <li>Facebook</li>
                <li>Twitter</li>
                <li>Youtube</li>
      
            </ul>
   
         </div>
         <div class="footer-col5">
            <h3>Usefull Links</h3>
            <ul>
                <a href="aboutus.php"><li>Who We Are</li></a>
                <a href="contact_us.php"><li>Contact Us</li></a>
            </ul>
   
         </div>
        

       </div> 
     </div>
 </div>
   </body>
</html>

