<?php
session_start();
include 'check.php';
include 'head.php';
include'dbconfig.php';

//include 'logout.php';
if(isset($_REQUEST['id']))
      {
        $id=$_REQUEST['id'];
         
    $sql="select * from mst_question where test_id='$id'";
$result=mysqli_query($conn,$sql)or die (mysql_error());
$count=1;
while($row=mysqli_fetch_row($result)){
    
  
?>

            <div class="container">
            <form method="post" action="exam_result.php?test_id=<?php echo $id;?>">
<table  class="table" width="500px">
<tr><td colspan="3">Question <?php echo $count;?> </td></tr>
<tr><td colspan="3"> <?php echo $row[2]?></td></tr>
<tr>
    <td  width="20px" ><input type="radio" name="c[<?php echo $row[0];?>]" value="1"></td><td width="10px">1</td>  <td><?php echo $row[3]?></td></tr>
    
<tr><td><input type="radio" name="c[<?php echo $row[0];?>]"  value="2"></td><td>2</td><td><?php echo $row[4]?></td></tr>
    
<tr><td><input type="radio"  name="c[<?php echo $row[0];?>]" value="3"></td><td>3</td><td><?php echo $row[5]?></td></tr>
    
<tr><td><input type="radio" name="c[<?php echo $row[0];?>]"  value="4"></td><td>4</td><td><?php echo $row[6]?></td></tr>
</table>


     <?php   $count++;
}
   
   }
else
   
   {
   
   header("location:index.php");
   }
?>
    
<table>
<tr><td><input type="submit" name="submit" class="btn btn-warning" value="Submit"></td></tr></table>
    </form>
                </div>
    </body>
</html>