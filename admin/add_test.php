    



<?php
session_start();
include 'check.php';
include 'head.php';
include 'dbconfig.php';
if(isset($_POST['submit']))
{  

   extract($_POST);
$sql="INSERT INTO `mst_test` ( `sub_id`, `test_name`, `total_que`) VALUES ('$sub_id','$name','$total')";
if(mysqli_query($conn,$sql)){

echo "inserted";
    }


}

?>
    







            <div class="container">
            </div>
       
        <form method="post">
         <table border="1px" height="155"width="165">
              <tr>
               <td>sub_id</td>
               <td>
               <select class="form-control" name="sub_id"><option>select</option>
                <?php 
                $sql1=" SELECT * FROM `mst_subject`";
                $result=mysqli_query($conn,$sql1);
                while($row=mysqli_fetch_row($result)){
                    echo"<option value='$row[0]'>$row[1]</option>";
                }
                ?>
            </select>
                   
              
              </td>
                </tr>
            
              <tr>
                <td>test_name</td>
                 <td><input type="text" id="test" name="name"></td>
                 </tr>
             
              <tr>
                <td>total_que</td>
                 <td><input type="text" id="total" name="total"></td>
             </tr>
                <tr>
                <td>submit</td>
                 <td><input type="submit" name="submit"></td>
             </tr>
                
        </table>
        </form>
    <?php include 'footer.php'; ?>