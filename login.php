<!-- <?php
session_start();
include "connection.php";
?> -->
<!doctype html>
<html class="no-js" lang="en">

<head>
    
    <title>Login</title>
    

</head>

<body>

<div class="error-pagewrap">
    <div class="error-page-int">
        <div class="text-center m-b-md custom-login">
            <h3>LOGIN FORM</h3>

        </div>
        <div class="content-error">
            <div class="hpanel">
                <div class="panel-body">
                    <form action="" name="form1" method="post">
                        <div class="form-group">
                            <label class="control-label" for="username">Username</label>
                            <input type="text"  placeholder="username" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">

                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input type="password"  title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">

                        </div>

                        <button type="submit" name="login" class="btn btn-success btn-block loginbtn">Login</button>
                        <button type="button" name="register" class="btn btn-success btn-block loginbtn" onclick="window.location='register.php'">Register</button>


                        <div class="alert alert-danger" id="failure" style="margin-top: 10px; display: none">
                            <strong>Does Not Match!</strong> Invalid Username Or Password
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


<?php
    $hostname = "http://localhost/index.php";
            $con = mysqli_connect("localhost", "root","", "tour-and-travel") or die("Connection Failed.....");

if(isset($_POST["login"]))
{


    $count=0;
    $res=mysqli_query($con,"select * from login where username='$_POST[username]' && password='$_POST[password]'");

    $count=mysqli_num_rows($res);

    if($count==0)
    {

        ?>
        <script type="text/javascript">
            document.getElementById("failure").style.display = "block";
        </script>
        <?php

    }
    else{

        $_SESSION["username"]=$_POST["username"];

        ?>
<script type="text/javascript">
    window.location="index.php";
</script>
        <?php
    }



}

?>


</body>

</html>