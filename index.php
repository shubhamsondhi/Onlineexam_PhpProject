<?php
  session_start();
include 'head.php';
include 'dbconfig.php';
?>
<!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">TEST BOOK</p>
                <div class="list-group">
                     <a href="index.php" class="list-group-item">SUBJECT</a>
                   
                
                        <?php 
              
                   
                $sql="SELECT * FROM `mst_subject`";
                   
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_row($result)){
                
     
		
         ?>
               
     
                    <a href="index.php?sub_id=<?php echo "$row[0]";?>" class="list-group-item"><?php echo "$row[1]"; ?> </a>
                    
                
                <?php
                    
                    
                } ?>
                   
                
                
                
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">
     <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="abc/image%20(1).jpg" alt="">
                                </div>
                                   <?php
    for($i=2;$i<4;$i++){
        ?>
                        
        
                                <div class="item">
                                    <img class="slide-image" src='abc/image%20(<?php echo $i ?>).jpg'>
                                                                                                       </div>
                                <?php
    } ?>
                               
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
 <?php 
                    if(isset($_REQUEST['sub_id'])){
                        $id=$_REQUEST['sub_id'];
                $sql="SELECT * FROM `mst_test` where sub_id='$id'";
                    }else{
                        
               
                        $sql="SELECT * FROM `mst_test` ";
                    }
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_row($result)){
                
		
         ?>
               
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="new/image%20(1).jpg" alt="">
                            <div class="caption">
                                <h4><a href="exam.php?id=<?php echo"$row[0]"; ?>"> <?php echo"$row[2]"; ?></a>
                                </h4>
                                <p>online exam portal</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right"></p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                   
                    <?php
                }
                    ?>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>
</div>
<?php include 'footer.php'; ?>