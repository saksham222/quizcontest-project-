<?php
    $connect=mysqli_connect('localhost','root','lps','players');
    if($connect)
    {
        echo "Connection success";
    }
?>