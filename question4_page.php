 <?php
   session_start();
   
   if(!isset($_SESSION['username'])){
   	 
   }
   
   
   $con = mysqli_connect('localhost','root');
  
   	mysqli_select_db($con,'players');
   
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
   <body style="background-color:yellow;">
      <div class="container">
        <br> <h1 class="text-center text-primary" >  LETS START SAKSHAM'S QUIZ </h1><br>
        <h2><class="text-center text-success"> <?php echo $_SESSION['username']; ?></h2><br>
        <div class="col-lg-8 m-auto d-block>
        <div class="card">
                 <B> <p class="card-header text-center" > <?php echo $_SESSION['username']; ?> YOU HAVE TO SELECT OUT OF 4. BEST OF LUCK<i class="fas fa-thumbs-up"></i>  </p></B>
               </div>
               <br>
                <form action="checked.php" method="post">
               <?php
                      

                     $sql1 = "SELECT * FROM question where qid=4";
                        $result1 = mysqli_query($con, $sql1);
                            
                                       while($rows = mysqli_fetch_array($result1)) {
                        ?> 
                         <div class="card"> <h4 class="card-header"> <?php echo $rows['question']; ?> </h4>
                         <?php
$sql1 = "SELECT * FROM answer where ansid=4";
                        $result1 = mysqli_query($con, $sql1);
                            
                                       while($rows = mysqli_fetch_array($result1)) {
                        ?> 
                        <div class="card-body">
                           <input type="radio" name="quizcheck[] " value="<?php  $rows['aid'] ?>" > 
                           <?php echo $rows['answer']; ?>
                        </div>

                         
                         <?php
                            }
                         }
                            ?>
                            <br>
                  <a href="h5.php" class="btn btn-primary d-block m-auto text-white" > Next Question </a> 
                         </form>
                         </div> 
                         </div>
                         <br>
                         <br>
        <a href="l.php" class="btn btn-primary d-block m-auto text-white" > Logout </a> 


         </div>



   </body>
</html>
