<?php include 'includes/head.php'; ?>

<body>
    <div class="main-wrapper">
        <?php include 'includes/navigation.php'; ?>
        <?php include 'includes/sidebar.php'; ?>    
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">My Profile</h4>
                    </div>

                    <!-- <div class="col-sm-5 col-6 text-right m-b-30">
                        <a href="edit_profile.php" class="btn btn-primary btn-rounded"><i class="fa fa-bolt"></i> Edit Profile</a>
                    </div> -->
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <?php
                                            if (!empty($_SESSION['SESS_PRO_PIC'])) {
                                                echo '<img class="rounded-circle" src="../../uploads/' . $_SESSION['SESS_PRO_PIC'] . '" width="24" alt="Admin">';
                                            } else {
                                                echo '<img class="rounded-circle" src="../../uploads/default.jpg" width="24" alt="Admin">';
                                            }
                                            ?>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0"><?php echo $_SESSION['SESS_FIRST_NAME'];?></h3>
                                                <small class="text-muted">Users</small><br>
                                                <div class="staff-id">USERS-<?php echo $_SESSION['SESS_USERS_ID'];?></div><br><br><br><br>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><?php echo $_SESSION['SESS_PHONE_NUMBER'];?></a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href="#"><?php echo $_SESSION['SESS_EMAIL'];?></a></span>
                                                </li>
                                                <li>
                                                    <span class="title">State:</span>
                                                    <span class="text"><?php echo $_SESSION['SESS_STATE'];?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text"><?php echo $_SESSION['SESS_ADDRESS'];?></span>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
                
				
            </div>
            
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- profile23:03-->
</html>