<?php

include_once("header.php");
include_once("navbar.php");

if(isset($_POST["log"]))
    {
        $em=$_POST["email"];
        $pw=$_POST["pass"];
        if($em=='brijesh@gmail.com' && $pw=='brijesh123')
        {
            $_SESSION["email"]=$_POST["email"];
            echo "<h2 align='center' style='color:green'>You Are Logged In Successfully</h2>";
            header("location:profile.php");
        }
        else
        {
            echo "<h2 align='center' style='color:red'>Your Email And Password Are Incorrect Try again</h2>";
            header("location:login.php");
        }
    }

?>

<div class=container>
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center bg-white text-dark">Create Your Account</h3>

        <form method="post">

        <div class="form-group col-md-12">
            <label class="text-dark">Email : </label>
            <input type="text" name="Email" placeholder="enter your email *" require class="form-control">
        </div>

        <div class="form-group col-md-12">
            <label class="text-dark">Password : </label>
            <input type="text" name="pass" placeholder="enter your password *" require class="form-control">
        </div>

        <button type="submit" class="btn btn-lg btn-dark" style="margin-left: 15px; width : 15%">Login!</button>
        <b><a href="#">Forget Password</a></b>
        <h4>Don't Have An Account ?<a href="register.php">Create Your Account</a></h4>

        </form>
        </div>
    </div>
</div> 

<?php

include_once("footer.php");

?>
 
