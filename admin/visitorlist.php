<?php session_start();
ob_start();

if(!isset($_SESSION['adminuser']))
{
header("Location: index.php");
}

include "config.php";

$users_SQL = "SELECT * FROM `user`";
$users_EXE = mysql_query($users_SQL);
$users_results = array();
while($row = mysql_fetch_array($users_EXE)) {
	$users_results[]=$row;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ADMIN | Visitors</title>
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
            Visitors List
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active">Visitors List</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title" style="line-height:30px;">Visitors List</h3>
                   
                </div><!-- /.box-header -->
                <div class="box-body">
				<?php if(count($users_results)>0) { ?>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                      <th>Visitor ID</th>
                      <th>Visitor Name</th>
                      <th>Visitor Email</th>
                      <th>Visitor Mobile</th>
                      
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                     <?php foreach($users_results as $users_result) { ?>

                    <tr>
                      <td><?php echo $users_result['user_id']; ?></td>
                      <td><?php echo $users_result['name']; ?></td>
                      <td><?php echo $users_result['email']; ?></td>
					  <td><?php echo $users_result['mobile']; ?></td>
                       
                      
                      <td>
                      	 <a style="display:none;" href="contestview.php?id=<?php echo $users_result['id']; ?>">
						 <button type="button" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> View Info</button>
						 </a>
						 
						 <a style="display:none;" href="contestgroup.php?id=<?php echo $users_result['id']; ?>">
						 <button type="button" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> View Groups</button>
						 </a>
						 
						 
                     	 <a style="display:none;" href="#memberedit.html"><button type="submit" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Edit</button></a>
                      	 <a style="display:none;" href="doquestiondelete.php?id=<?php echo $users_result['id']; ?>" onClick="return confirm('Are you sure you want to delete this item?');"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete</button></a>
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
