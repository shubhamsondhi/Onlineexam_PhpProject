<center>
<table border="1px" height="155" width="165">
<tr>
    <td>NAME</td>
    <td>PHONE NO</td>
    <td>E-MAIL</td>
    <td>ADDRESS</td>
    </tr></br>
    
<?php

include("head.php");
  
include'dbconfig.php';
              
                   
                $sql="SELECT * FROM `mst_user`";

                   
                $result=mysqli_query($conn,$sql);
 

                while($row=mysqli_fetch_row($result)){                   
                

         ?>
 
    <tr> 
       <td><?php echo $row[1] ?></td>
        <td><?php echo $row[6] ?></td>
        <td><?php echo $row[7] ?></td>
        <td><?php echo $row[4] ?></td>
</tr>
   
    
    



                              
                    
        
<?php
                }

        ?></table>
</center>
    
 