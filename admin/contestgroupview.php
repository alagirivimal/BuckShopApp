<?php session_start();
ob_start();

if(!isset($_SESSION['adminuser']))
{
header("Location: index.php");
}

include "config.php";


$id=$_REQUEST['id'];

$contests_SQL = "SELECT * FROM `contests_groups` WHERE id='$id'";
$contests_EXE = mysql_query($contests_SQL);
$contests_results = array();
while($row = mysql_fetch_array($contests_EXE)) {
	$contests_results[]=$row;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ADMIN | Contest Group Details</title>
    <?php include "head1.php"; ?>
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">	
	<?php include "header.php"; ?>
	
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            View Contest Details
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active">View Contest Details</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-9">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">View Contest Details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                 
                   <div class="col-md-12">
                   <style>.control-label{line-height:32px;} .form-group{line-height:32px;}</style>
                    
					<div class="form-group col-md-12">
                      <label class="col-sm-3 control-label">Group ID</label>
                      <div class="col-sm-9">
                        <div  class=""><?php echo $contests_results[0]['group_unique_id']; ?></div>
                      </div>
                    </div> 
					
					<div class="form-group col-md-12">
                      <label class="col-sm-3 control-label">Group Name</label>
                      <div class="col-sm-9">
                        <div  class=""><?php echo $contests_results[0]['group_name']; ?></div>
                      </div>
                    </div> 
					
                   <div class="form-group col-md-12">
                      <label class="col-sm-3 control-label">Group Detail</label>
                      <div class="col-sm-9"><div class="">
                        <?php echo $contests_results[0]['group_detail']; ?>
                      </div></div>
                    </div>  
                    <div class="form-group col-md-12">
                      <label class="col-sm-3 control-label">Group Member Count</label>
                      <div class="col-sm-9"><div class="">
                        <?php echo $contests_results[0]['group_member_count']; ?>
                      </div></div>
                    </div>
                    <div class="form-group col-md-12">
                      <label class="col-sm-3 control-label">Group Start Date</label>
                      <div class="col-sm-9"><div class="">
                        <?php echo $contests_results[0]['group_start_date']; ?>
                      </div></div>
                    </div>
					<div class="form-group col-md-12">
                      <label class="col-sm-3 control-label">Group End Date</label>
                      <div class="col-sm-9"><div class="">
                        <?php echo $contests_results[0]['group_end_date']; ?>
                      </div></div>
                    </div>
                    
                      
                  	</div> 
                   <div class="col-md-1"></div>   
                  </div><!-- /.box-body -->

                 
                </form>
              </div><!-- /.box -->

           



            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-3">
              <!-- Horizontal Form -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Group Profile</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                  <div class="box-body">
                    <div class="form-group col-md-12">
                       <a href="contestgroup.php?id=<?php echo $id; ?>"><button type="button" class="btn btn-warning col-md-12" style="margin-bottom:10px;" >View Groups List</button></a> 
                    </div>
                    
                    
                  </div><!-- /.box-body -->
                  
                 
            
              </div><!-- /.box -->
              
              
            
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
	<?php include "footer.php"; ?>  
	  
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>
