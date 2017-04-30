<?php 

session_start();
include 'check.php';
include 'head.php';
include'dbconfig.php';
if(isset($_POST['submit']))
{
    
    

extract($_POST);

$sql="INSERT INTO `mst_subject` ( `sub_name`) VALUES ('$name')";
if(mysqli_query($conn,$sql)){

echo "inserted";
}}
?>


       <center>
        <form method="post">
         <table class="table" height="155"width="165">
             
             
                <tr>
                <td>subject name</td>
                 <td><input class="form-control" type="text" id="name" name="name"></td>
                 </tr>
             <tr>
                <td>submit</td>
                 <td><input class="btn btn-info" type="submit"  name="submit"></td>
                 </tr>
             
                
        </table>
            
        </form>
        
        <?php
        echo "<table class='table'> <tr><td>subject</td></tr>";
        $sql="SELECT * FROM mst_subject";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_row($result))
        {
        echo "<tr><td>$row[1]</td></tr>";
        
        
        
        }
        
        echo "</table>";
        ?>
        </center>
<?php include 'footer.php'; ?>