<?php require('nav.inc.php'); ?>
<?php 
    //signup part
    
    if(!empty($_POST['signup'])) 
    {
        $fname=$_POST['fullname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="insert into signup(fullname,email,password) values('$fname','$email','$password')";
        if(mysqli_query($con,$query))
        {
            ?>
            <script>
                alert("Signup completed!! Please SignIn to enter into your account. Thank you :)");
            </script>
            
            <?php
        }
        else
        {
                ?>
            <script>
                alert("Signup not completed Try again");
            </script>
            
            <?php
                
        }
        
    }
    //signup part ends
    //signin 
    if(!empty($_POST['signin'])) 
    {
        $username=$_POST['username'];
        $passwd=$_POST['pswd'];
        $query="select * from signup where email='$username' and password='$passwd'";         
        $result=mysqli_query($con,$query);
        $r=mysqli_fetch_assoc($result);
        $count=mysqli_num_rows($result);
          if($count>0)
          {
            $_SESSION['username']=$r['fullname'];
            $_SESSION['userid']=$r['id'];
              ?>
              <script>
                  alert("Login successfull");
                  
              </script>
              <?php header('location:index.php'); ?>
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
    <link rel="stylesheet" href="stylesheet/signup-in.css">
</head>
<body>
    <div class="signin">
        <div class="container"> 
            <div class="login-box">
                <div class="row">
                    <div class="col-md-6 login-left">
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
                                <input type="submit" name="signin" class="signup-button" value="Sign In"> 
                            
                        </form>
                    </div>

                    <div class="col-md-6 login-right">
                        <h1> SIGN UP </h1>
                        <form  method="post"> 
                            <div class="form-group">
                                <label>Full Name</label><br>
                                <input type="text" name="fullname" placeholder="fullname" class="form-control" required><br><br>
                            </div>
                            <div class="form-group">
                                <label >Email</label><br>
                                <input type="text" name="email" placeholder="Username" class="form-control" required><br><br>
                            </div>
                            <div class="form-group">
                                <label for="PASSWORD" >Password</label><br>
                                <input type="password" name="password" class="form-control" placeholder="password" required><br><br>
                            </div>
                            <input type="submit" name="signup" class="signup-button" value="Sign Up">
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<?php require('footer.inc.php') ?>
</html>