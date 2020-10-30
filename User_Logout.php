<?php 
session_start();
session_destroy();
$_SESSION = array();
header("location: User_Login.php");
?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
       </head>
      <body style="background-color:orange;">
      <div class="container">
       <b><center> <br> <h1 class="text-center text-primary" >  THANKYOU FOR ATTEMPTING SAKSHAM'S QUIZ </h1><br></center></b>

        

        
         <br>
         <br>
         <a href="login.php" class="btn btn-primary d-block m-auto text-white" > ATTEMPT THE QUIZ </a> 

 </div>


   </body>
</html>
