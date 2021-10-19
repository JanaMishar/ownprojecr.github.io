<!DOCTYPE html>
<html>



<?php


     $title='Login';
        include '../../stock/html/layout/header.php';
    
    include '../../stock/php/global.php';

    
   if(isset($_SESSION['logedinadmin'])){
        header("location:".admin);
    }
    elseif(isset($_SESSION['logedinuser'])){
        header('location:'.user);
    }
    

    // if(isset($_COOKIE['logedinadmin'])){
    //     header("location:".admina);
    // }
    // elseif(isset($_COOKIE['logedinuser'])){
    //     header('location:'.user);
    // }
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link href="<?=css.'bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?=css. 'font-awesome.css'?> " rel="stylesheet">

    <link href="<?=css.'animate.css'?>"   rel="stylesheet">
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="<?=css.'style.css'?>">

</head>
   
<body class="gray-bg">
    
    <div class="middle-box text-center loginscreen animated fadeInDown">
       
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Welcome to Stock</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" method="post" action="../../stock/php/signin.php">
<!-- ../../stock/php/signin.php -->
                
                <div class="form-group">
                    <input type="email" name='email' class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <!-- <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
 -->
                <input type="submit" name="submit">
                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="ind">Create an account</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <?php
        include '../../stock/html/layout/footer.php';

    ?>

</body>

</html>
