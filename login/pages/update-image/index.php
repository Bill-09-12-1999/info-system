<?php include('header.php'); ?>
<body style="background-image:radial-gradient(#4D774E,#0E3029); color:white;">
    
    
     <?php
    session_start();
    if(!isset($_SESSION['role']))
    {
        header("Location: ../../loginpage.php"); 
    }
    else
    {
    ob_start();
     ?>
    
    <div style="background-image:linear-gradient(90deg,transparent,#164A41,#4D774E,#164A41, transparent);
     color:white;
     text-transform:uppercase;
     padding:10px;
     text-decoration:none;
     margin: 20px;
     text-align:center;
     ">
         
         <a style="background-color:transparent;
     color:white;
     text-transform:uppercase;
     padding:10px;
     text-decoration:none;
     margin: 20px;
     "href="../dashboard/dashboard.php">back</a>
         <a style="background-color:transparent;
     color:white;
     text-transform:uppercase;
     padding:10px;
     text-decoration:none;
     margin: 20px;
     "href="index.php">refresh</a>
     </div>
    
    
         

            <div class="container">
			
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <!--<div class="alert alert-info">-->
                            <!--    <button type="button" class="close" data-dismiss="alert">&times;</button>-->
                                <!--<strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>-->
                            <!--</div>-->
                            <thead>
                                <tr>
                                    <th style="text-align:center;">Image</th>
                                    <th style="text-align:center;">Position</th>
                                    <!--<th style="text-align:center;">LastName</th>-->
                                    <th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM tbl_image ORDER BY tbl_image_id ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['tbl_image_id'];
							?>
								<tr>
								<td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;">
									<?php if($row['image_location'] != ""): ?>
									<img src="uploads/<?php echo $row['image_location']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
									<?php endif; ?>
								</td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['first_name']; ?></td>
								<!--<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['last_name']; ?></td>-->
								<td style="text-align:center; width:350px;">
									 <a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-warning" >Update Image</a>
								</td>
								</tr>
										<!-- Modal -->
							<div id="delete<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-header">
							<h3 id="myModalLabel">Update</h3>
							</div>
							<div class="modal-body">
							<div class="alert alert-danger">
							<?php if($row['image_location'] != ""): ?>
							<img src="uploads/<?php echo $row['image_location']; ?>" width="100px" height="100px" style="border:1px solid #333333; margin-left: 30px;">
							<?php else: ?>
							<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333; margin-left: 30px;">
							<?php endif; ?>
							<form action="edit_PDO.php<?php echo '?tbl_image_id='.$id; ?>" method="post" enctype="multipart/form-data">
							<div style="color:blue; margin-left:150px; font-size:30px;">
								<input type="file" name="image" style="margin-top:-115px;">
							</div>
							
							</div>
							<hr>
							<div class="modal-footer">
							<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
							<button type="submit" name="submit" class="btn btn-danger">Yes</button>
							</form>
							</div>
							</div>
							</div>
								<?php } ?>
                            </tbody>
                        </table>


          
        </div>
        </div>
        </div>
    </div>
        </div>            
        <div style="color:transparent; background:transparent;">
            <h1>Hi</h1>
        </div>
  
        <?php } ?>       
</body>
</html>