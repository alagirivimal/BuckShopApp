<?php session_start();
ob_start();

if(!isset($_SESSION['adminuser']))
{
header("Location: index.php");
}

include "config.php";

$contests_SQL = "SELECT * FROM `contests`";
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
    <title>ADMIN | Contests</title>
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
            Contests List
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active">Contests List</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="line-height:30px;">Contests List</h3>
                  <a href="contestcreate.php" style="float:right;display:none;"><button type="submit" class="btn btn-success"><i class="fa fa-edit"></i><b> Create New Contest</b></button></a>
                </div><!-- /.box-header -->
                <div class="box-body">
				<?php if(count($contests_results)>0) { ?>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                      <th>Contest ID</th>
                      <th>Contest Name</th>
                      <th>Contest Rate</th>
                      <th>Status</th>
                      
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                     <?php foreach($contests_results as $contests_result) { ?>

                    <tr>
                      <td><?php echo $contests_result['contest_unique_id']; ?></td>
                      <td><?php echo $contests_result['contest_name']; ?></td>
                      <td><?php echo $contests_result['contest_fee']; ?></td>
                      <td>
					  <?php if($contests_result['contest_status']==1) { ?>
					  <span class="label label-success">ACTIVE</span>
					  <?php } else if($contests_result['contest_status']==0) { ?>
					  <span class="label label-warning">INACTIVE</span>
					  <?php } ?>
					  </td>
                      
                      <td>
                      	 <a href="contestview.php?id=<?php echo $contests_result['id']; ?>">
						 <button type="button" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> View Info</button>
						 </a>
						 
						 <a href="contestgroup.php?id=<?php echo $contests_result['id']; ?>">
						 <button type="button" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> View Groups</button>
						 </a>
						 
						 
                     	 <a style="display:none;" href="#memberedit.html"><button type="submit" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit</button></a>
                      	 <a style="display:none;" href="doquestiondelete.php?id=<?php echo $contests_result['id']; ?>" onClick="return confirm('Are you sure you want to delete this item?');"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</button></a>
                       </td>
                    </tr>
					  <?php } ?>
                     
                    </tbody>
                   
                  </table>
				  <?php } ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
				
             
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
	<?php include "footer.php"; ?>  
	
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
  </body>
</html>
