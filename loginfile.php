<?php
include("dbconfig.php");
extract($_POST);
session_start();
if(isset($submit))
{
	$rs=mysqli_query($conn, "SELECT * FROM `mst_user` WHERE login='$loginid' and pass='$pass'") ;

	if(mysqli_num_rows($rs)<1)
	{
		$found="N";
	}
	else
	{
		$_SESSION["login"]=$loginid;
        
        header("location:index.php");
	}
}



?>

<form name="form1" method="post" action="">
      <table class="table" width="200" border="0">
        <tr>
          <td><span >Login ID </span></td>
          <td><input class="form-control" name="loginid" type="text" id="loginid2" placeholder="Enter Login id " required></td>
        </tr>
        <tr>
          <td><span>Password</span></td>
          <td><input name="pass" type="password" id="pass2"></td>
        </tr>
        <tr>
          <td colspan="2">
              <span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "Invalid Username or Password";
		  }
		  ?>
          </span>
            </td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" value="Login">		  </td>
        </tr>
        <tr>
          <td colspan="2" ><div align="center"><span class="style4">New User ? <a href="signup.php">Signup</a></span></div></td>
          </tr>
      </table>
     
    </form>