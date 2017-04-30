
<?php

  session_start();
include 'check.php';

include("head.php");

if(isset($_POST['submit']))
{
    
extract($_POST);
  


include'dbconfig.php';

$sql="INSERT INTO `mst_admin` (`id`, `loginid`, `pass`) VALUES (NULL, '$login', '$pass')";

if(mysqli_query($conn,$sql))
{
    echo "inserted";
}

}

?>
    


       
        <form method="POST">
         
          <tr>
                <td>ADMIN NAME</td>
                <td><input class="form-control" type="text" id="admin" name="admin"></td>
                </tr>
        
          <tr>
               <td>E-MAIL</td>
               <td><input class="form-control" type="text" id="mail" name="mail"></td>
                </tr>
                
               <tr>
                <td>MOBILE NO</td>
                <td><input class="form-control" type="text" id="no" name="no"></td>
              </tr>
        
                <tr>
                <td>PASSWORD</td>
                <td><input  class="form-control" type="password" id="pass" name="pass"></td>
                </tr>
        
              
                <tr>
                <td>lOGIN ID</td>
                 <td><input class="form-control" type="text" id="login" name="login"></td>
                 </tr>

                <tr>
                <td></td>
                 <td><input class="btn btn-info" type="submit"  name="submit"></td>
                 </tr>
        
        
              </table>
              </form>
              <?php include 'footer.php'; ?>