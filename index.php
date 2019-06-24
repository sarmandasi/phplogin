<?php
include_once('connection.php');

session_start();

if (isset($_POST["Sign"])) {
   $usrname=$_POST["username"];
   $pasword=$_POST["adminpass"];

   $sql="SELECT * FROM users WHERE username='$usrname' AND password='$pasword'";
   $checker=mysqli_query($conn,$sql);
 $count=0; 
   while ($rows=mysqli_fetch_array($checker)) {
      
      $count=1;
      $usid=$rows["username"];
   }
    if($count==1)
    {
        $_SESSION["login_account"]=$usid;
        header("location:dashboard.php");
    }
    else
    {

            echo"<script>alert('Login Error Try Again Later.!!');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>KurdDev | Login</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="style/css/bootstrap.css" type="text/css" />
</head>

<body class="">



        <center>
    <section id="content" class="col-sm-4 wrapper-md animated fadeInUp">
        <div class="container aside-xxl">
           

            <br><br><br>

            <section class="panel panel-default  m-t-lg box-shadow">
                <header class="panel-heading text-center " style="background: #2ecc71;color: white;">
                </header>
                <form action="" method="POST" class="panel-body wrapper-lg">
                    <div class="form-group">

                        <input type="text" placeholder="Email" class="form-control input-lg " name="username">
                        <br>
                        <div class="form-group">
                            <input type="password" id="inputPassword" placeholder="Password" class="form-control input-lg " name="adminpass">
                        </div>



                        &nbsp;&nbsp;
                        <div class="">
                            <a href="">
                                <button type="submit" name="Sign" class="btn btn-success   ">Sign in</button>
                            </a>


                            <button type="submit" name="cancel" class="btn btn-danger">Back</button>

                        </div>






                </form>
            </section>
        </div>
    </section>
</center>
    <!-- footer -->

    <!-- / footer -->
    <!-- Bootstrap -->
    <!-- App -->
    <script src="js/app.v1.js"></script>
    <script src="js/app.plugin.js"></script>
</body>

</html>