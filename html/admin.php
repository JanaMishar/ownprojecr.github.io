<?php

	session_start();
include '../../stock/php/global.php';
	if(!isset($_SESSION['name'])){
		// header('location:../../stock/html/login.php');
        header('location:'.login);
	}else{
       // setcookie("logedinadmin",'okadmin',time()+3600);

        $_SESSION['logedinuser']='okuser';
    }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../stock/html/style1.css">
</head>
<body>
	<h1>Admin <?php echo $_SESSION['name']; ?></h1>

<div style="padding-left: 1100px;">
<a href="../../stock/php/logout.php">Logout</a>
</div>

<br>


<a href="../../stock/html/addstock.php">Add Stock</a>


<br>

<a href="../../stock/html/viewstocks.php">View Stock</a>

<br>
<br>





 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Static Tables</title>

    <link href="../../stock/html/tblcss/bootstrap.min.css" rel="stylesheet">
    <link href="../../stock/html/tblcss/font-awesome.css" rel="stylesheet">
    <link href="../../stock/html/tblcss/custom.css" rel="stylesheet">
    <link href="../../stock/html/tblcss/animate.css" rel="stylesheet">
    <link href="../../stock/html/tblcss/style.css" rel="stylesheet">

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
                                <th>Age</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                     <?php
			include '../../stock/php/connection.php';

			$query="select * from stocktbl";
			$processquery=mysqli_query($con,$query);

			while($result=mysqli_fetch_assoc($processquery)){


			

		?>


                            <tbody>
                <tr id="tr_<?php echo $result['id']; ?>">
					<td><?php echo $result['id']; ?></td>
					<td><?php echo $result['name']; ?></td>
					<td><?php echo $result['email']; ?></td>
					<td><?php echo $result['utype']; ?></td>
					<td><?php echo $result['password']; ?></td>
					<td>
						<a href="../../stock/html/edit.php?idu=<?php echo $result['id']; ?>">Update</a>
		<button type='button' class='btn btn-danger' onclick="delete_data('<?php echo $result['id']; ?>')">dellete</button>
					</td>
				</tr>
                            
                            </tbody>
                            <?php
                        }

                            ?>
                        </table>

                    </div>
                </div>

               
  
    <script src="../../stock/html/js/jquery-3.1.1.min.js"></script>
    <script src="../../stock/html/js/popper.min.js"></script>
    <script src="../../stock/html/js/bootstrap.js"></script>
    <script src="../../stock/html/js/jquery.metisMenu.js"></script>
    <script src="../../stock/html/js/jquery.slimscroll.min.js"></script>

    <!-- Peity -->
    <script src="../../stock/html/js/plugins/peity/jquery.peity.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../../stock/html/js/inspinia.js"></script>
    <script src="../../stock/html/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="../../stock/html/js/plugins/iCheck/icheck.min.js"></script>

    <!-- Peity -->
    <script src="../../stock/html/js/demo/peity-demo.js"></script>

    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>


                <script>
                        function delete_data(id){
                            jQuery.ajax({
                                url:'../../stock/php/pdodelete.php',
                                type:'post',
                                data:'id='+id,
                                success:function(result){
                                        jQuery('#tr_'+id).hide(500);
                                }


                            });
                        }


                            
                </script>



















































