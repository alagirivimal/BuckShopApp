<?php session_start();
ob_start();

if(!isset($_SESSION['adminuser']))
{
header("Location: index.php");
}

include "config.php";


$id=$_REQUEST['id'];

$qSQL = "SELECT * FROM `questions` WHERE id='$id'";
$qresult = mysql_query($qSQL, $conn);
$question_results = array();
while($row = mysql_fetch_array($qresult)) {
	$question_results[]=$row;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>HealthOYO | Question Details</title>
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
            View Question Details
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active">View Question Details</li>
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
                  <h3 class="box-title">View Question Details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                 
                   <div class="col-md-12">
                   <style>.control-label{line-height:32px;} .form-group{line-height:32px;}</style>
                    <div class="form-group col-md-12">
                      <label class="col-sm-3 control-label">Question</label>
                      <div class="col-sm-9">
                        <div  class=""><?php echo $question_results[0]['question_value']; ?></div>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <label class="col-sm-3 control-label">Question Type </label>
                      <div class="col-sm-9">
                      <?php if($question_results[0]['question_type']==1) { ?>
                      
                      <div type="text" class="" >Radio</div>
                      
                      <?php } else if($question_results[0]['question_type']==2) { ?>
                      
                      <div type="text" class="" >Checkbox</div>
                                            
                      <?php } ?>
                      
                      </div>
                    </div>
                  
                   <div class="form-group col-md-12">
                      <label class="col-sm-3 control-label">Option One</label>
                      <div class="col-sm-9"><div class="">
                        <?php echo $question_results[0]['question_option_one']; ?>
                      </div></div>
                    </div>
                    <div class="form-group col-md-12">
                      <label class="col-sm-3 control-label">Option Two</label>
                      <div class="col-sm-9"><div class="">
                        <?php echo $question_results[0]['question_option_two']; ?>
                      </div></div>
                    </div>
                    <div class="form-group col-md-12">
                      <label class="col-sm-3 control-label">Option Three</label>
                      <div class="col-sm-9"><div class="">
                        <?php echo $question_results[0]['question_option_three']; ?>
                      </div></div>
                    </div>
                    <div class="form-group col-md-12">
                      <label class="col-sm-3 control-label">Option Four</label>
                      <div class="col-sm-9"><div class="">
                        <?php echo $question_results[0]['question_option_four']; ?>
                      </div></div>
                    </div>
                    <div class="form-group col-md-12">
                      <label class="col-sm-3 control-label">Option Five</label>
                      <div class="col-sm-9"><div class="">
                        <?php echo $question_results[0]['question_option_five']; ?>
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
                  <h3 class="box-title">Question Profile</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                  <div class="box-body">
                    <div class="form-group col-md-12">
                       <a href="questionlist.php"><button type="submit" class="btn btn-warning col-md-12" style="margin-bottom:10px;" >View Questions List</button></a> 
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
