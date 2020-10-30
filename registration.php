 <?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root');
	if($con){
		echo"connection";
	}

	mysqli_select_db($con,'players');


	$username = $_POST['user'];
	$password = $_POST['pass'];
	

	// echo $username;
	// echo $password;

	$check = "select * from detail where name='$username' && password='$password' ";
	$resultcheck = mysqli_query($con,$check);	

	 $row = mysqli_num_rows($resultcheck);
			if($row == 1){
			
				
			}	else{

				$q = "insert into detail(name, password) values ('$username', '$password')"  ;

				$result = mysqli_query($con,$q);

			}



?>


