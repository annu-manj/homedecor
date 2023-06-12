<?php require('nav.inc.php'); ?>
<?php
if(isset($_POST['placeorder_card'])) 
    {
        if(isset($_POST['card']))
        {
            
        $payment_method="card";
        $card_no=$_POST['card_no'];
        $card_name=$_POST['card_name'];
        $exp_month=$_POST['exp_month'];
        $uid=$_GET['userid'];
        $exp_year=$_POST['exp_year'];
        if(strlen($card_no)==16)
          {
          $query="insert into payment(payment_method,card_no,card_name,month,year) values('$payment_method','$card_no','$card_name','$exp_month','$exp_year')";
            if(mysqli_query($con,$query))
                {
                    ?>
                    <script>
                        alert("PAYMENT SUCCESSFULL!!Thank you :)");
                    </script>
                    
                    <?php
                    $queryy="delete from cart where userid='$uid'";
                    mysqli_query($con,$queryy)
                    
                        ?>
                    <?php
                    
                }
                else
                {
                        ?>
                    <script>
                        alert("PAYMENT NOT SUCCESSFULL");
                    </script>
                    
                    <?php
                        
                }
          }
          else
          {
                
            ?>
                <script>
                    alert("INVALID DETAILS");
                </script>
            <?php
          }
        
        }
    }
elseif(isset($_POST['placeorder_upi']))
    {
        if(isset($_POST['upi']))
        {
        $payment_method="UPI";
        $upi_no=$_POST['upi_no'];
        $uid=$_GET['userid'];
        $query="insert into payment(payment_method,upi_no) values('$payment_method','$upi_no')";
        if(mysqli_query($con,$query))
            {
                ?>
                <script>
                    alert("PAYMENT SUCCESSFULL!!Thank you :)");
                </script>
                
                <?php
                $queryy="delete from cart where userid='$uid'";
                mysqli_query($con,$queryy);
                  ?>
                <?php
                  
            }
            else
            {
                    ?>
                <script>
                    alert("PAYMENT NOT SUCCESSFULL");
                </script>
                
                <?php
                    
            }
        
        }
    

    }
elseif(isset($_POST['placeorder_ondelivery']))
    {
    $payment_method="Cash on delivery";
    $uid=$_GET['userid'];
    
    $query="insert into payment(payment_method) values('$payment_method')";
    if(mysqli_query($con,$query))
        {
            ?>
            <script>
                alert("PAYMENT SUCCESSFULL!!Thank you :)");
            </script>
            
            <?php
            $queryy="delete from cart where userid='$uid'";
            mysqli_query($con,$queryy)
              
             ?>
            <?php
              
        }
        else
        {
                ?>
            <script>
                alert("PAYMENT NOT SUCCESSFULL");
            </script>
            
            <?php
                
        }
        
        
    

    } 
 ?>   
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="stylesheet/payment.css">
</head>
<body>
<div class="payment-gateway">
        <div class="container"> 
        <h1> Select Payment Method </h1>
            <div class="payment-box">
                <div class="row">
                   
                        
                    <div class="col-md-4 payment-1">
                        <form method="post">
                        <div class="form-group">
                                <label class="labels"><b>Credit/Debit Card</b></label>
                                <input type="radio" name="card"    required><br><br>
                        </div>
                        <div class="form-group">
                                <label class="labels">Card Number</label><br>
                                <input type="text" name="card_no" placeholder="Card number" class="form-control"  required><br><br>
                        </div>
                        <div class="form-group">
                                <label class="labels">Name On Card</label><br>
                                <input type="text" name="card_name" placeholder="name in card" class="form-control"  required><br><br>
                        </div>
                        <div class="form-group">
                                <label class="labels">Expiration Date</label><br>
                                <input type="text" name="exp_month" placeholder="expiry month" class="form-control"  required><br>
                                <input type="text" name="exp_year" placeholder="expiry year" class="form-control" required><br><br>
                        </div>
                        <input type="submit" name="placeorder_card"  value="Place order" class="pay-button">
                        </form>

                    </div>
                    <div class="col-md-4 payment-2">
                        <form method="post">
                        <div class="form-group">
                                <label class="labels"><b>UPI </b></label>
                                <input type="radio" name="upi"    required><br><br>
                        </div>
                        <div class="form-group">
                                <label class="labels">Enter your UPI ID</label><br>
                                <input type="text" name="upi_no" placeholder="UPI number" class="form-control"  required><br><br>
                        </div>
                        
                        <input type="submit" name="placeorder_upi"  value="Place order" class="pay-button">
                        </form>
                    </div>
                    <div class="col-md-4 payment-3">
                        <form method="post">
                        <div class="form-group">
                                <label class="labels"><b>Cash On Delivery</b></label>
                                <input type="radio" name="upi"    required><br><br>
                        </div>
                        <input type="submit" name="placeorder_ondelivery"  value="Place order" class="pay-button">
                        </form>
                    </div>
                
                </div>
            </div>
        </div>
</div>
<?php require('footer.inc.php') ?>
</html>
