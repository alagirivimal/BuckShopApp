<?php
//print_r($_SESSION);
$user_id=$_SESSION['user_id'];

$check_profile_cnt=0;
$check_profile_sql = "SELECT * FROM `user_profile` WHERE `user_id`='$user_id'";
$check_profile_exe = mysql_query($check_profile_sql);
$check_profile_cnt = mysql_num_rows($check_profile_exe); 
if($check_profile_cnt>0)
{
	$check_profile_fetch = mysql_fetch_array($check_profile_exe); 
}
//echo $check_profile_cnt;
?>


<?php /* ?>
		<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.php" class="standard-logo" data-dark-logo="images/bs/bucksshop.png">
						<img src="images/bs/bucksshop2.png" alt="Bucks Shop">
						</a>
						<a href="index.php" class="retina-logo" data-dark-logo="images/bs/bucksshop.png">
						<img src="images/bs/bucksshop2.png" alt="Bucks Shop">
						</a>
					</div><!-- #logo end -->
                    
                    	<div id="top-account" class="dropdown">
						
						<a href="#" data-toggle="dropdown" class="dropdown-toggle">
							Welcome <?php if($_SESSION['logged_in']) { ?> <?php echo $_SESSION['name']; ?><?php } ?><span class="caret"></span>
							
							<?php if($check_profile_cnt>0) { ?>								 
								<p style="color:gold;">
								CUSTOMER ID:  <?php echo $check_profile_fetch['profile_unique_id']; ?>
								</p> 
							<?php } ?>
						</a>
						
						<a href="#" class="btn btn-default dropdown-toggle hidden" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon-user"></i><i class="icon-angle-down"></i></a>
						<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
							<li><a href="#">Profile</a></li>
							<li><a href="#">Messages <span class="badge">5</span></a></li>
							<li><a href="#">Settings</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="../logout.php">Logout <i class="icon-signout"></i></a></li>
						</ul>
					</div>

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="dark">

						<ul>
							<li class="current"><a href="index.php"><div>Home</div></a></li>
							<li><a href="sop.php"><div>SOP</div></a></li>
                            <li><a href="winners.php"><div>Winners List</div></a></li>
                            <li><a href="contact.php"><div>Contact</div></a></li>
						</ul>
 
						 
					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

<?php */ ?>

<header id="header" class="transparent-header full-header" data-sticky-class="dark">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="index.php" class="standard-logo" data-dark-logo="images/bs/bucksshop.png"><img src="images/bs/bucksshop.png" alt="bucks shop"></a>
                <a href="index.php" class="retina-logo" data-dark-logo="images/bs/bucksshop.png"><img src="images/bs/bucksshop.png" alt="bucks shop"></a>
            </div><!-- #logo end -->

            <div id="top-account" class="dropdown">

                <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden">
                    Welcome <?php if($_SESSION['logged_in']) { ?> <?php echo $_SESSION['name']; ?><?php } ?><span class="caret"></span>

                    <?php if($check_profile_cnt>0) { ?>
                        <p style="color:gold;">
                            CUSTOMER ID:  <?php echo $check_profile_fetch['profile_unique_id']; ?>
                        </p>
                    <?php } ?>
                </a>


                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icon-user"></i><i class="icon-angle-down"></i></a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Messages <span class="badge">5</span></a></li>
                    <li><a href="#">Settings</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="../logout.php">Logout <i class="icon-signout"></i></a></li>
                </ul>
            </div>

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu" class="dark">

                <ul>
                    <li class="current"><a href="index.php"><div>Home</div></a></li>
                    <li><a href="sop.php"><div>SOP</div></a></li>
                    <li><a href="winners.php"><div>Winners List</div></a></li>
                    <li><a href="contact.php"><div>Contact</div></a></li>
                </ul>

                <!-- Top Cart
                ============================================= -->
                <div id="top-cart" class="hidden">
                    <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
                    <div class="top-cart-content">
                        <div class="top-cart-title">
                            <h4>Shopping Cart</h4>
                        </div>
                        <div class="top-cart-items">
                            <div class="top-cart-item clearfix">
                                <div class="top-cart-item-image">
                                    <a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
                                </div>
                                <div class="top-cart-item-desc">
                                    <a href="#">Blue Round-Neck Tshirt</a>
                                    <span class="top-cart-item-price">$19.99</span>
                                    <span class="top-cart-item-quantity">x 2</span>
                                </div>
                            </div>

                        </div>
                        <div class="top-cart-action clearfix">
                            <span class="fleft top-checkout-price">$114.95</span>
                            <button class="button button-3d button-small nomargin fright">View Cart</button>
                        </div>
                    </div>
                </div><!-- #top-cart end -->

                <!-- Top Search
                ============================================= -->
                <div id="top-search" class="hidden">
                    <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                    <form action="search.html" method="get">
                        <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                    </form>
                </div><!-- #top-search end -->

            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header><!-- #header end -->
