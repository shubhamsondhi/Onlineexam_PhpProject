<?php 


if(!isset($_SESSION["admin"]))
{

    header("location:login.php");
}
else{
    
    $u1=$_SESSION["admin"];
}
?>