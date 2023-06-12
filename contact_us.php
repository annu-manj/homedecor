<?php require('nav.inc.php') ?>
<?php 
    if(!empty($_POST['contactform']))
    {
        $fullname = $_POST['fname'];
        $email= $_POST['email-add'];
        $message=$_POST['msg'];
        $query= "insert into contact_us(fullname,email,message) values('$fullname','$email','$message')";
        if(mysqli_query($con,$query))
        {
            echo "Contact Form Saved";

        }
        else
        {
            echo "Contact Form Not Saved";
        }
    }
?>
<link rel="stylesheet" href="stylesheet/contact_us.css">
<div class="contact">
    <div class="contact-us">
        <h3> WRITE TO US</h3>
    </div>
 
    <div class="col-md-6">
                        
        <form  method="post"> 
            <div class="form-group">
                <label class="labels">Full Name</label><br>
                <input type="text" name="fname" placeholder="Enter your Name" class="form-control" required><br><br>
            </div>
            <div class="form-group">
                <label class="labels">E-mail Address</label><br>
                <input type="text" name="email-add" placeholder="Enter your Email Address" class="form-control" width="200px" required><br><br>
            </div>
            <div class="form-group">
                <label class="labels">Message</label><br>
                <input type="message" name="msg" class="form-control" placeholder="Enter your Message " required><br><br>
            </div>
            <input type="submit" name="contactform" class="signup-button" value="Save Form">
            
        </form>
    </div>
</div>

<?php require('footer.inc.php') ?>
</html>              