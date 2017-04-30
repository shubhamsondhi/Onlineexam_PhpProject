<?php
$username='root';
$pass='';
$server='localhost';
$db='question';
$conn=mysqli_connect($server,$username,$pass,$db);
if(!$conn)
{
  die("connection error");
    
}
?>