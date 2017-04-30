<?php
session_start();
?>
<?php session_start();
include 'head.php';
include 'check.php';
include("dbconfig.php");d=0;
    
 if(isset($_POST['submit'])){
     echo "Total question attempted  ". count($c);
     if(isset($_REQUEST['test_id']))
      {
        $id=$_REQUEST['test_id'];
         
     $sql="select * from mst_question where test_id=$id";
     $question=mysqli_query($cn, $sql);
     while($row=mysqli_fetch_row($question)){
         if(isset($c[$row[0]])){
             $atempted++;
             if($c[$row[0]]==$row[7])
             {
               $trueanswers++;
                 
             }
         }
     }
     
     $date=date("Y/m/d");
    echo $date;
  $sql_insert="INSERT INTO `mst_result` (`login`, `test_id`, `test_date`, `score`) VALUES ('$u1','$id', '$date', '$trueanswers')";
       if(mysqli_query($cn, $sql_insert)){
           
         echo "</br>total correct answers ".$trueanswers;
     echo "</br>total atempted questions ".$atempted;
       }
 }
 
 }



?>
</body>
</html>
