	<section id="page-title">

			<div class="container clearfix">
			
			<?php if(count($contests_results)>0) { ?>
			<h1>Contest ID: <?php echo $contests_results[0]['contest_unique_id']; ?></h1> 
			<?php } ?>
			<?php if(count($contests_groups_results)>0) { ?>
			<h1>Group ID: <?php echo $contests_groups_results[0]['group_unique_id']; ?></h1> 
			<?php $group_id = $contests_groups_results[0]['id']?>
			<?php } ?>
		
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Contest</a></li>
					<li class="active">Contest Details</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="single-event">

						<div class="col_three_fourth">
							<div class="entry-image nobottommargin">
								<a href="#"><img src="images/bs/contestbanner.jpg" alt="Event Single"></a>
								<div class="entry-overlay">
									<span class="hidden-xs">Starts in: </span>
                                    <div id="countdown-ex2" class="countdown countdown-medium"></div>
                                    <div id="event-countdown" class="countdown"></div>
								</div>
							</div>
						</div>
						<div class="col_one_fourth col_last">
							<div class="panel panel-default events-meta">
								<div class="panel-heading">
									<h3 class="panel-title">Event Info:</h3>
								</div>
								<div class="panel-body">
									<ul class="iconlist nobottommargin">
										<li><i class="icon-calendar3"></i> <?php echo $contests_results[0]['contest_end_date']; ?> </li>
										<li><i class="icon-time"></i> 18:00 PM</li>
										
										<li><i class="icon-inr">₹</i> <strong>999.99</strong></li>
									</ul>
								</div>
							</div>
							
							<?php if(count($contests_results)>0) { ?>
							<a href="confirm-contest.php?contest_id=<?php echo $contest_id; ?>&group_id=<?php echo $group_id; ?>&user_id=<?php echo $user_id; ?>" class="btn btn-success btn-block btn-lg">Join Now</a> 
							<?php } ?>
			 
						</div>

						<div class="clear"></div>

						<div class="col_three_fourth">

							<h3>Details</h3>

							<p>The Mega opportunity to win gold and make wealth is here. The contest for the gold will be held every month last day at 6 pm. The next contest is scheduled on 31st october 2017 at 6pm. Join now and make sure that you are part of the gold winning community.</p>

							<p>You are awesome! Bucks shop is unique and presenting the one of its kind program in the gold business. Thanks for being here.</p>

							<h3>Participants</h3>
                            

                            	<table class="table table-striped">
						  <thead>
							<tr>
							  <th>#</th>
							  <th>Unique ID</th>
							  <th>Full Name</th>
							  
							</tr>
						  </thead>
						  <tbody>
						  <?php 
						  $sl=0; 
						  foreach($contests_groups_members_results as $contests_groups_members_result) { 
						  $sl++;
						  ?>
							<?php
							$user_id = $contests_groups_members_result['user_id'];
							$profile_members_SQL = "SELECT * FROM `user_profile` WHERE user_id='$user_id'";
							$profile_members_EXE = mysql_query($profile_members_SQL);
							$profile_row = mysql_fetch_array($profile_members_EXE);

							?>
							<tr>
							  <td><?php echo $sl; ?></td>
							  <td><?php echo $profile_row['profile_unique_id']?></td>
							  <td><?php echo $profile_row['profile_name']?></td>
							  
							</tr>
						
						<?php } ?>
						</tbody>
						</table>

						

						</div>

					

					

					</div>

				</div>

			</div>

		</section><!-- #content end -->