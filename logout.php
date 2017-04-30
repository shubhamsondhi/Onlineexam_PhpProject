


<?php 

if(isset($_POST['logout'])){
    
    unset($_SESSION["user"]);
    header("location:login.php");
    
}
if(isset($_SESSION["user"]))
{ 

?>
<form method="post">
    <input type="submit" value="Log out" name="logout"class="btn">

</form>
<?php
} 

else {
    
    
    echo "<a class='page-scroll' href='login.php' class='btn btn-success'>Login</a>";
}
?>