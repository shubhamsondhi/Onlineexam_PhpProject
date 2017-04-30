<?php
include "head.php";
include "dbconfig.php";

?>

    <?php
    if(isset($_POST['submit']))
    {
  extract($_POST);

   
    $sql1="INSERT INTO `mst_user` ( `login`, `pass`, `username`, `address`, `city`, `phone`, `email`) VALUES ( '$login_id', '$password', '$user_name', '$addr', '$city', '$mobile_no', '$e_mail')";
     if(mysqli_query($conn,$sql1));
    { 
      echo "inserted";
    }
    }  ?>  
    <center><form method="post"><table class="zoo">
    <tr>   
<td> USERNAME</td>
    <td><input class="form-control" type="text" id="login_id" name="login_id"></td>
    </tr>
<tr>
<td>Name</td>
<td><input class="form-control" type="text" id="user_name" name="user_name">
    </tr>
    <tr>
        <td>PASSWORD</td>
        <td><input class="form-control" type="password" id="password"name="password">

    </tr>
    
    
    <tr>
        <td>E_MAIL</td>
        <td><input class="form-control" type="text" id="e_mail" name="e_mail"></td>
        </tr>
    <tr>
    <td>MOBILE_NO</td>
        <td><input class="form-control" type="text" id="mobile_no" name="mobile_no"></td>
</tr>
<tr>
    
<td>CITY</td>
<td> <input class="form-control" type="text" id="city" name="city">
</tr><tr>
    
<td>ADDRESS</td>
        <td> <textarea class="form-control" type="text" id="city" name="addr"></textarea></td>
</tr>
<tr>
    <td>   </td>
      <td> <input type="submit" name="submit" value="Sign Up"> </td>
<td>  </td>
</tr>
        
        </table></form></center>
<?php
include 'footer.php';
?> 