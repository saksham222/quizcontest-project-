<!DOCTYPE html>
<?php include "db_connect.php"; ?>
<?php
    session_start();
    $error="";
    $name="";
    $username="";
    $surname="";
    $password="";
    $rollno="";
    
    if(isset($_POST["submit"]))
    {
        $_SESSION["submit"]=$_POST["submit"];
        $_SESSION["username"]=$username=$_POST["username"];
        $_SESSION["password"]=$_POST["password"];
        $_SESSION["name"]=$_POST["name"];
        $_SESSION["surname"]=$_POST["surname"];
        $_SESSION["rollno"]=$_POST["rollno"];
    
        $query=mysqli_query($connect,"SELECT * FROM details
                                        WHERE username='$username'");
        if(mysqli_num_rows($query)!=0)
        {
            $name=$_POST["name"];
            $surname=$_POST["surname"];
            $rollno=$_POST["rollno"];
            $error="Username already exists";
        }
        else
        {
            $error="";
            header('Location: User_Profile.php');
        }
    }
?>
<html lang="en">
<head>
    <title>SignUp</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="quiz_app.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
function hello(){
var flag=true;
            var x=document.forms["form1"];
            if(x["name"].value=="")
                {
                    document.getElementById("errname").innerHTML="Name cannot be empty";
                    flag=false;
                }
 else
                {
                    document.getElementById("errname").innerHTML="";
                }
            if(x["surname"].value=="")
                {
                    document.getElementById("errsurname").innerHTML="Surname cannot be empty";
                    flag=false;
                }
            else
                {
                    document.getElementById("errsurname").innerHTML="";
                }
            if(x["username"].value=="")
                {
                    document.getElementById("errusername").innerHTML="Username cannot be empty";
                    flag=false;
                }
            else
                {
                    document.getElementById("errusername").innerHTML="";
                }

            if(x["password"].value=="")
                {
                    document.getElementById("errpassword").innerHTML="Password cannot be empty";
                    flag=false;
                }
            else
                {
                    document.getElementById("errpassword").innerHTML="";
                }
            if(x["rollno"].value>4980 || x["rollno"].value<1000)
                {
                    document.getElementById("errrollno").innerHTML="Invalid roll no.";
                    flag=false;
                }
            else
                {
                    document.getElementById("errrollno").innerHTML="";
                }
           return flag;
}
</script>
<style>


.form-horizontal label{
width:150px;
float:left;
font-size:150%;
color:white;
margin-left:20%;
margin-right:8%;
}

</style>
</head>
<body>
    <div id = "header"><span id = "header-content"><b>SIGNUP</b></span> 
</div>

<br><br><br>
<form class="form-horizontal" role="form" name="form1" onsubmit=" return hello()" action="Signup.php" method="post">
<div class="container">

<div class="form-group">
<label>Name<sup style="color:red;">*</sup></label>
<input type="text" class="form-control" id="name" placeholder="Enter Name" style="width:35%;" name="name" value="<?php echo $name ?>">
<div style="color:red;" id="errname"></div>
</div>

<br><br>

<div class="form-group">
<label>Surname<sup style="color:red;">*</sup></label>
<input type="text" class="form-control" id="surname" placeholder="Enter surname" style="width:35%;" name="surname" value="<?php echo $surname ?>">
<div style="color:red;" id="errsurname"></div>
</div>

<br><br>

<div class="form-group">
<label>Username<sup style="color:red;">*</sup></label>
<input type="text" class="form-control" id="username" placeholder="Enter your profile username" style="width:35%;" name="username">
<div style="color:red;" id="errusername"><?php echo $error; ?></div>
</div>
    
<br><br>

<div class="form-group">
<label>Password<sup style="color:red;">*</sup></label>
<input type="password" class="form-control" id="password" placeholder="Enter password for your account" style="width:25%;" name="password">
<div style="color:red;" id="errpassword"></div>
</div>

<br><br>

<div class="form-group">
<label>Roll No<sup style="color:red;">*</sup></label>
<input type="number" class="form-control" id="rollno" placeholder="Enter 4 digit roll no." style="width:20%;" name="rollno" value="<?php echo $rollno ?>">
<div style="color:red;" id="errrollno"></div>
</div>
    
<br><br>


 

<div class="form-group">
<input type="submit" class="btn btn-primary" style="border:1px solid; border-color:black; margin-left:45%;" name="submit" value="SIGN UP">
<button type="reset" class="btn btn-primary" style="border:1px solid; border-color:black; margin-left:3%;">RESET</button></div>
    <div class="form-group"><b><p class="text-muted" style="margin-left:450px; color:black; font-size:15px;"><span style="color:white">&#40;</span><span style="color:red;">&#42;</span><span style="color:white">&#41;marked fields are compulsory.</span></p></b>
</div>
</form>
</body>
</html>

