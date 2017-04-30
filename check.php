<?php 


if(!isset($_SESSION["user"]))
{

    header("location:login.php");
}
else{
    
    $u1=$_SESSION["user"];
}
?>