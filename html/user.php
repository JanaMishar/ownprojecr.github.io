<?php
 
    

    $title='User';
    include '../../stock/html/layout/header.php';
    include '../../stock/php/global.php';

	

	if(!isset($_SESSION['name'])){
		header('location:'.plogin);
	}else{



        $_SESSION['logedinuser']='okuser';
    }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

</head>
<body>
    
	<h1>User <?php echo $_SESSION['name']; ?></h1>


     <link href="<?=css.'bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?=css.'font-awesome.css'?>" rel="stylesheet">

    <link href="<?=css.'custom.css'?>" rel="stylesheet">

    <link href="<?=css.'animate.css'?>"   rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=css.'style.css'?>">

<a href="<?=logout ?>">Logout</a>

<br>
<br>

<a href="<?=viewstock ?>">View Stock</a>

<br>
<br>
<br>
<br>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

   
<!-- 
    <link href="../../stock/html/tblcss/bootstrap.min.css" rel="stylesheet">
    <link href="../../stock/html/tblcss/font-awesome.css" rel="stylesheet">
    <link href="../../stock/html/tblcss/custom.css" rel="stylesheet">
    <link href="../../stock/html/tblcss/animate.css" rel="stylesheet">
    <link href="../../stock/html/tblcss/style.css" rel="stylesheet"> -->

</head>

<body>


                    <br>
                    <br>
                    <div class="ibox-content">

                        <table class="table">
                            <thead>
                            <tr>
                                
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Utype</th>
                                <th>Password</th>
                            </tr>
                            </thead>
            <?php
                       include '../../stock/php/connection.php';
                       $email=$_SESSION['email'];

                       $query="select * from user where email='$email' && utype='user'";
                       $processquery=mysqli_query($con,$query);
                         while($result=mysqli_fetch_assoc($processquery)){
                            		
                            	

                            ?>
                            <tbody>
                            <tr>
                                <td><?php echo $result['id']; ?></td>
                                <td><?php echo $result['name']; ?></td>
                                <td><?php echo $result['email']; ?></td>
                                <td><?php echo $result['utype']; ?></td>
                                <td><?php echo $result['password']; ?></td>
                            </tr>
                            
                            </tbody>
                            <?php
                            	}

                            ?>
                        </table>

                    </div>
                </div>
  
 

    <!-- Peity -->
     <script src="<?=js.'jquery-3.1.1.min.js' ?>"></script>
    <!-- <script src="../../stock/html/js/popper.min.js"></script> -->
    <!-- <script src="../../stock/html/js/bootstrap.js"></script> -->
    <script src="<?=js .'jquery.metisMenu.js'?>"></script>
    <script src="<?=js.'jquery.slimscroll.min.js' ?>"></script>


    <!-- <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
 -->
</body>
</html>