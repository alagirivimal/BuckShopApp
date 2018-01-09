<?php session_start();
ob_start();

require_once 'config.php'; 

//initalize user class
$user_obj = new Cl_User();
?>
<?php 
	if( !empty( $_POST )){
		try {
			
			$data = $user_obj->login( $_POST );
			if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
				header('Location: home.php');
			}
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
	}
	//print_r($_SESSION);
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
		header('Location: home.php');
	}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <title>Welcome to BuckShop</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />


</head>

<body class="stretched dark">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix full-height"  style="background:url(images/bs/bglanding.jpg) no-repeat !important; background-size: contain; min-height: 680px;">


        		<!-- Header
		============================================= -->
		<header id="header" class="transparent-header full-header" data-sticky-class="dark">

			<div id="header-wrap">

				<div class="container clearfix">



					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.php" class="standard-logo" data-dark-logo="images/bs/bucksshop.png"><img src="images/bs/bucksshop.png" alt="Bucks Shop"></a>
						<a href="index.php" class="retina-logo" data-dark-logo="images/bs/bucksshop.png"><img src="images/bs/bucksshop.png" alt="Bucks Shop"></a>
					</div><!-- #logo end -->



				</div>

			</div>

		</header><!-- #header end -->



		<!-- Content
		============================================= -->

			<div class="content-wrap">

				<div class="container center clearfix">
                    <?php if( !empty( $error )){ ?>
                        <div class="message_error message_div">
                            <p class="text-center"> <?php echo $error; ?> </p>
                        </div>
                    <?php } ?>

                    <?php if( !empty( $success )){ ?>
                        <div class="message_success message_div">
                            <p class="text-center"> <?php echo $success; ?> </p>
                        </div>
                    <?php } ?>

                    <?php if( !empty( $success ) || !empty( $error ) ){ ?>
                        <script>
                            $(document).ready(function(){
                                $('.message_div').delay(5000).slideUp();
                            });
                        </script>
                    <?php } ?>


					<p>START WITH</p>

					<div class="divider divider-short divider-center"><i class="icon-unlock-alt"></i></div>


                    <a class="btn btn-default google" href="login.php?type=google" style="border:0px;"> <img src="images/bs/google.png" class="logwith"/> </a>
                    <br/>
                    <a class="btn btn-default facebook" href="login.php?type=facebook" style="border:0px;"> <img src="images/bs/facebook.png" class="logwith"/> </a>
                    <a class="btn btn-default twitter" href="login.php?type=twitter" style="border:0px;"> <img src="images/bs/twitter.png" class="logwith"/> </a>

                    <!--
                    <img src="images/bs/google.png" class="logwith"/>

                    <img src="images/bs/facebook.png" class="logwith"/>

                    <br/><img src="images/bs/twitter.png" class="logwith"/>
                    -->

				</div>

			</div>



	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>



<?php /* ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to BuckShop</title>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	
  </head>
  <body>
	<div class="container">
	
	<div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        
        
    </video>
	</div>
	 
		<?php require_once 'templates/ads.php';?>
		<div class="login-form">
			<?php require_once 'templates/message.php';?>

			<h1 class="text-center" style="color:#ffffff"><img src="app/images/bs/bucksshop2.png"/></h1>
			
			
			<div class="social-header">
			<h4 class="text-center login-txt-center">You can log in using:</h4>
				
				 
				<a class="btn btn-default google" href="login.php?type=google"> <i class="fa fa-google-plus modal-icons"></i> Signin with Google </a>  
				<a class="btn btn-default twitter" href="login.php?type=twitter"> <i class="fa fa-twitter modal-icons"></i> Signin with Twitter </a>
<a class="btn btn-default facebook" href="login.php?type=facebook"> <i class="fa fa-facebook modal-icons"></i> Signin with Facebook </a> 
				
			</div>
			<?php / *  ?>
			<div class="form-header">
				<i class="fa fa-user"></i>
			</div>
			<form id="login-form" method="post" class="form-signin" role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<input name="email" id="email" type="email" class="form-control" placeholder="Email address" autofocus> 
				<input name="password" id="password" type="password" class="form-control" placeholder="Password"> 
				<button class="btn btn-block bt-login" type="submit">Sign in</button>
				
				<h4 class="text-center login-txt-center">Alternatively, you can log in using:</h4>
				
				<a class="btn btn-default facebook" href="login.php?type=facebook"> <i class="fa fa-facebook modal-icons"></i> Signin with Google </a>  
				<a class="btn btn-default google" href="login.php?type=google"> <i class="fa fa-google-plus modal-icons"></i> Signin with Google </a>  
				<a class="btn btn-default twitter" href="login.php?type=twitter"> <i class="fa fa-twitter modal-icons"></i> Signin with Twitter </a>
			</form>
			<div class="form-footer">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-lock"></i>
						<a href="forget_password.php"> Forgot password? </a>					
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-check"></i>
						<a href="register.php"> Sign Up </a>
					</div>
				</div>
			</div>
			<?php * / ?>
		</div>
	</div>
	<!-- /container -->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
<?php */ ?>
<?php ob_end_flush(); ?>