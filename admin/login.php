<?php
require('connection.inc.php');      /* for database connectivity*/
?>
<?php 
if(isset($_POST['login'])) 
{
    $username=$_POST['username'];
    $passwd=$_POST['pswd'];
    $query="select * from admin_users where username='$username' and password='$passwd'";         
    $result=mysqli_query($con,$query);
    $r=mysqli_fetch_assoc($result);
    $count=mysqli_num_rows($result);
        if($count>0)
        {
        $_SESSION['ADMIN_LOGIN']='yes';
        $_SESSION['ADMIN_USERNAME']=$username;
        
            ?>
            <script>
                alert("Login successfull");
                
            </script>
            <?php header('location:categories.php'); ?>
            <?php
        }
        else
        {
        ?>
        <script>
            alert("Login unsuccessfull");
        </script>
        <?php
        }

}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    
    <div class="signin">
       <div class="container"> 
            <div class="login-box">
                <div class="row">
                    <div class="col-md-6 ">
                        <h1> SIGN IN </h1>
                        <form  method="post">
                            <div class="form-group">
                                <label class="labels">Username</label><br>
                                <input type="text" name="username" placeholder="Username" class="form-control" required><br><br>
                            </div>
                            <div class="form-group">
                                <label for="PASSWORD" class="labels">Password</label><br>
                                <input type="password" name="pswd" class="form-control"  placeholder="password" required><br><br>
                            </div>
                                <input type="submit" name="login" class="signup-button" value="Sign In"> 
                            
                        </form>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>