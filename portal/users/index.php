
<?php include 'includes/head.php'; ?>
<body>
    <div class="main-wrapper">
        <?php include 'includes/navigation.php'; ?>
        <?php include 'includes/sidebar.php'; ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    	<?php
		                // include('../connect.php');
						$result = $db->prepare("SELECT count(*) as total FROM emergency WHERE  victim_id = {$_SESSION['SESS_USERS_ID']} AND status = 'Resolved'  ");
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++){
		                ?>
                        <div class="dash-widget">
							<span class="dash-widget-bg1"><i class="fa fa-bolt" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<h3><?php echo $row['total']; ?></h3>
								<span class="widget-title1">Resolved Emergency<i class="fa fa-flash" aria-hidden="true"></i></span>
							</div>
                        </div>
                        <?php } ?>
                    </div>
                
                    <!-- <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    	<?php
		                // include('../connect.php');
						$result = $db->prepare("SELECT count(*) as total FROM emergency WHERE  agency_id = {$_SESSION['SESS_USERS_ID']}  AND status = 'Resolved' ");
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++){
		                ?>
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-plug"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $row['total'] ;?></h3>
                                <span class="widget-title2">Solved Cases <i class="fa fa-flash" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    <?php } ?>
                    </div> -->

                    <!-- <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    	<?php
		                // include('../connect.php');
						$result = $db->prepare("SELECT count(*) as total FROM agency");
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++){
		                ?>
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $row['total'] ;?></h3>
                                <span class="widget-title3">Agency <i class="fa fa-flash" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    <?php } ?>
                    </div> -->

                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    	<?php
		                // include('../connect.php');
						$result = $db->prepare("SELECT count(*) as total FROM emergency WHERE  victim_id = {$_SESSION['SESS_USERS_ID']}  AND status = 'Pending' ");
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++){
		                ?>
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i class="fa fa-bolt" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $row['total'] ;?></h3>
                                <span class="widget-title4">Pending <i class="fa fa-flash" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">All Agency</h4> 
							</div>
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table mb-0">
										<thead class="">
											<tr>
												<th>Agency</th>
												<th>Contact</th>
												<th>Person In Charge</th>
												<th>Location</th>
												
											</tr>
										</thead>
										<tbody>
											<?php
			                $result = $db->prepare("SELECT * FROM agency ");
			                $result->execute();
			                for($i=1; $row = $result->fetch(); $i++){ 
			               
			               ?> 
											<tr>
												<td style="min-width: 200px;">
													 <a href="#" title=""><img src="../../uploads/<?php echo $row['photo']; ?>" alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
													<h2><a href="#"><?php echo $row['agency_name']; ?> <span><?php echo $row['state']; ?></span></a></h2>
												</td>                 
												<td>
													<h5 class="time-title p-0"><?php echo $row['email']; ?></h5>
													<p><?php echo $row['phone_number']; ?></p>
												</td>
												<td>
													<h5 class="time-title p-0"><?php echo $row['personincharge']; ?></h5>
													<!-- <p>7.00 PM</p> -->
												</td>
												<td>
													<h5 class="time-title p-0"><?php echo $row['state']; ?></h5>
													<p><?php echo $row['address']; ?></p>
												</td>
												
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
                    
				</div>
            </div>
            <?php include 'includes/Message.php'; ?>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/app.js"></script>

</body>


<!-- index22:59-->
</html>