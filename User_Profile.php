<?php include 'db_connect.php'; ?>
<?php
    session_start();

    if (!isset($_SESSION["username"])) 
    {
        header('Location: User_Login.php');
    }
    else
    {
        if($_SESSION["submit"]=="LOGIN")
        {
            $username=$_SESSION["username"];
            $password=$_SESSION["password"];
            $query=mysqli_query($connect,"SELECT * FROM details
                                            WHERE username='$username'");
            $row=$query->fetch_assoc();
        }
        else if($_SESSION["submit"]=="SIGN UP")
        {
            $name=$_SESSION["name"];
            $username=$_SESSION["username"];
            $surname=$_SESSION["surname"];
            $password=$_SESSION["password"];
            $rollno=$_SESSION["rollno"];
            
            $insert="INSERT INTO details(name,username,surname,password,rollno,)
                                            VALUES('$name','$username','$surname','$password','$rollno')";
            mysqli_query($connect,$insert);
            $query=mysqli_query($connect,"SELECT * FROM details
                                            WHERE username='$username'");
            $row = $query->fetch_assoc();
        }
        else if($_SESSION["submit"]=="EDIT")
        {
            $username=$_SESSION["username"];
            $query=mysqli_query($connect,"SELECT * FROM details
                                            WHERE username='$username'");
            $row=$query->fetch_assoc();

        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="quiz_app.css">
    <link rel="stylesheet" href="quiz_app_links.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        img 
        {
            display: block;
            margin: 0 auto;
        }

        .center
        {
            text-align: center;
            font-family: Georgia;
            font-size: 20px;
            margin: 50px;
            border: 2px hidden;
            padding: 10px;
        }
        #bio
        {
            color: white;
            font-weight: bold;
        }
        .link
        {
            margin: 20px;
        }

    </style>
</head>
<body>


<div id = "header">
    <span id = "header-content"><b>PROFILE</b></span>
</div>

<br><br>
<img src="https://image.flaticon.com/icons/png/512/21/21294.png " alt="Profile picture" style="none" width="200px" height="200px";>

<div class="center">
<p><div id="bio">
Name:&nbsp;<?php echo $row["name"]; ?> <br>
<hr size=3 width=50%>
Surname:&nbsp;<?php echo $row["surname"]; ?> <br>
<hr size=3 width=50%>
Username:&nbsp;<?php echo $row["username"]; ?> <br>
<hr size=3 width=50%>
Password:&nbsp;<?php echo $row["password"]; ?> <br>
<hr size=3 width=50%>
Roll no&#46;&nbsp;:&nbsp;<?php echo $row["rollno"]; ?> <br>
<hr size=3 width=50%>
 
Quiz attempted:&nbsp; <br>
<hr size=3 width=50%>
Total marks:&nbsp;<?php echo $row["Points"]; ?> <br>
<hr size=3 width=50%>
    </div>
</div>



<div id="links">
    <div class="link">
        <i class="material-icons" style="font-size:180px">account_box</i> <br>
        <a href="edit_profile.php" button class="button"><span>Edit Profile</span></a>
    </div>

    <div class="link">
        <i class="material-icons" style="font-size:180px">assessment</i> <br>
        <a href="LeaderBoard.php" button class="button"><span>Leaderboard</span></a>
    </div>

    <div class="link">
        <i class="material-icons" style="font-size:180px">gavel</i><br>
        <a href="index.php" button class="button"><span>Quizzes</span></a>
    </div>

    <div class="link">
        <i class="material-icons" style="font-size:180px">exit_to_app</i><br>
        <a href="User_Logout.php" button class="button"><span>Log out</span></a>
    </div>
</div>
<?php
    $_SESSION["username"]=$row["username"];
    $_SESSION["name"]=$row["name"];
    $_SESSION["surname"]=$row["surname"];
    $_SESSION["password"]=$row["password"];
    $_SESSION["rollno"]=$row["rollno"];
    
?>
</body>
</html>
