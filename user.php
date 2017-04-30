<?php include'dbconfig.php';
if(isset($_POST['submit']))
{
    

    $pass=$_POST["pass"];
    $e_mail=$_POST["mail"];
    $address=$_POST["address"];
    $city=$_POST["city"];
    $phone_no=$_POST["no"];
    



$sql="INSERT INTO `user` ( `pass`, `e_mail`, `address`, `city`, `phone_no`) VALUES ('$pass', '$e_mail', ' $address',  '$city', ' $phone_no')";
if(mysqli_query($conn,$sql))
{
    echo "inserted";
}

}

?>






<html>
<head>
    <link href="bootstrap.css"rel="stylesheet">
    <link href="user.css"rel="stylesheet">
    <title>
    
    </title>
    </head>
    
    <body bgcolor="pink">
     <nav class="navbar-fixed-top">
             <div class="navbar-collapse style">                             
            <ul class="nav navbar-nav">
            <li><a href="#">home</a></li>
                <li><a href="#">
                    about</li>
                </ul>
                </div>
            </nav>
            <div class="container">
            </div>
            
            <center>
       
        <form method="post">
         <table border="1px" height="155"width="165">
             
              <tr>
                <td>password</td>
                 <td><input type="pass" id="pass" name="pass"></td>
                 </tr>
             
              <tr>
                <td>E-mail</td>
                 <td><input type="text" id="mail" name="mail"></td>
             </tr>
             
              <tr>
                <td>address</td>
                 <td><input type="text" id="address" name="address"></td>
             </tr>
             
               <tr>
                <td>city</td>
                 <td><input type="text" id="city" name="city"></td>
             </tr>
             
             <tr>
                <td>phone no</td>
                 <td><input type="text" id="no" name="no"></td>
             </tr>
             <tr>
                <td>submit</td>
                 <td><input type="submit"  name="submit"></td>
             </tr>
             
            </table>
        </form>
        
        
         <?php
        echo"<table class='table'><tr><td>user</td></tr>";
        $sql="SELECT * FROM user";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_row($result))
        {
        echo"<tr><td>$row[1]</td></tr>";
        
        
        
        }
        
        echo "</table>";
        ?>
        </center>
    </body>
</html>