

<?php
session_start();
include 'check.php';
include 'head.php';

include 'dbconfig.php';
if(isset($_POST['submit']))
{

extract($_POST);




$sql="INSERT INTO `mst_question` (`test_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES ( '$test', '$dec', '$opt1', '$opt2', '$opt3', '$opt4', '$true')";

if(mysqli_query($conn,$sql)){

echo "inserted";
}
}
?>







        
   <form method="post" >
        
        
        <table>
       
        
          <tr>
               <td>test id</td>
               <td>
               <select class="form-control" name="test"><option>select</option>
                <?php 
                $sql1="SELECT * FROM `mst_test`";
                $result=mysqli_query($conn,$sql1);
                while($row=mysqli_fetch_row($result)){
                    echo"<option value='$row[0]'>$row[2]</option>";
                }
                ?>
            </select>
                   
              
              </td>
                </tr>
                
               <tr>
                <td>ques description</td>
                <td><input class="form-control" type="text" id="ques" name="dec"></td>
              </tr>
        
                <tr>
                <td>option1</td>
                <td><input class="form-control" type="text" id="opt" name="opt1"></td>
                </tr>
        
                <tr>
               <td>option 2</td>
                <td><input class="form-control"  type="text" id="opt"name="opt2"></td>
                 </tr>
        
                <tr>
                <td>option 3</td>
                 <td><input class="form-control"  type="text" id="opt" name="opt3"></td>
                 </tr>
                
                <tr>
                <td>option 4</td>
                 <td><input class="form-control"  type="text" id="opt" name="opt4"></td>
                 </tr>
             
             <tr>
                <td>true ans</td>
                 <td><input class="form-control"  type="text" id="true" name="true"></td>
                 </tr>
                          
             <tr>
                <td>submit</td>
                 <td><input class="btn btn-info"  type="submit"  name="submit"></td>
                 </tr>
                          
       </table>
    </form>
                
  <?php include 'footer.php'; ?>