<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SkillUp - Online Learning Platform</title>
		 
        <!-- Custom CSS -->
		<link href="{{url('assets/css/styles.css')}}" rel="stylesheet">
		
    </head>
	
    <body>

        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-light">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<x-dropdown/>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ============================ Dashboard: Dashboard Start ================================== -->
			<section class="gray pt-4">
				<div class="container-fluid">
										
					<div class="row">
					
						<div class="col-lg-3 col-md-3">
							<div class="dashboard-navbar">
								
								<div class="d-user-avater">
									<img src="https://via.placeholder.com/500x500" class="img-fluid avater" alt="">
									<h4>Adam Harshvardhan</h4>
									<span>Senior Designer</span>
									<div class="elso_syu89">
										<ul>
											<li><a href="#"><i class="ti-facebook"></i></a></li>
											<li><a href="#"><i class="ti-twitter"></i></a></li>
											<li><a href="#"><i class="ti-instagram"></i></a></li>
											<li><a href="#"><i class="ti-linkedin"></i></a></li>
										</ul>
									</div>
									<div class="elso_syu77">
										<div class="one_third"><div class="one_45ic text-warning bg-light-warning"><i class="fas fa-star"></i></div><span>Ratings</span></div>
										<div class="one_third"><div class="one_45ic text-success bg-light-success"><i class="fas fa-file-invoice"></i></div><span>Courses</span></div>
										<div class="one_third"><div class="one_45ic text-purple bg-light-purple"><i class="fas fa-user"></i></div><span>Enrolled User</span></div>
									</div>
								</div>
								
								<div class="d-navigation">
									<ul id="side-menu">
										<li class="active"><a href="dashboard.html"><i class="fas fa-th"></i>Dashboard</a></li>
										<li class="dropdown">
											<a href="javascript:void(0);"><i class="fas fa-shopping-basket"></i>Courses<span class="ti-angle-left"></span></a>
											<ul class="nav nav-second-level">
												<li><a href="manage-course.html">Manage Courses</a></li>
												<li><a href="add-new-course.html">Add New Course</a></li>
												<li><a href="course-category.html">Course Category</a></li>
												<li><a href="coupons.html">Coupons</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="javascript:void(0);"><i class="fas fa-gem"></i>Enrollment<span class="ti-angle-left"></span></a>
											<ul class="nav nav-second-level">
												<li><a href="enroll-history.html">Enroll History</a></li>
												<li><a href="enroll-student.html">Enroll a Student</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="javascript:void(0);"><i class="fas fa-archive"></i>Report<span class="ti-angle-left"></span></a>
											<ul class="nav nav-second-level">
												<li><a href="admin-revenue.html">Admin Revenue</a></li>
												<li><a href="instructor-revenue.html">Instructor Revenue</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="javascript:void(0);"><i class="fas fa-user-shield"></i>Admins<span class="ti-angle-left"></span></a>
											<ul class="nav nav-second-level">
												<li><a href="manage-admins.html">Manage Admins</a></li>
												<li><a href="add-admin.html">Add New Admins</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="javascript:void(0);"><i class="fas fa-toolbox"></i>Instructors<span class="ti-angle-left"></span></a>
											<ul class="nav nav-second-level">
												<li><a href="manage-instructor.html">Manage Instructors</a></li>
												<li><a href="add-instructor.html">Add New Instructors</a></li>
												<li><a href="instructor-payout.html">Instructors Payouts</a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="javascript:void(0);"><i class="fas fa-user"></i>Students<span class="ti-angle-left"></span></a>
											<ul class="nav nav-second-level">
												<li><a href="manage-students.html">Manage Students</a></li>
												<li><a href="add-students.html">Add New Student</a></li>
											</ul>
										</li>
										<li><a href="addon-manager.html"><i class="fas fa-layer-group"></i>Addon</a></li>
										<li><a href="themes.html"><i class="fas fa-paint-brush"></i>Themes</a></li>
										<li><a href="messages.html"><i class="fas fa-comments"></i>Message</a></li>
										<li><a href="my-profile.html"><i class="fas fa-address-card"></i>My Profile</a></li>
										<li class="dropdown">
											<a href="javascript:void(0);"><i class="fas fa-cog"></i>Settings<span class="ti-angle-left"></span></a>
											<ul class="nav nav-second-level">
												<li><a href="website-settings.html">Website Settings</a></li>
												<li><a href="system-settings.html">System Settings</a></li>
												<li><a href="payment_settings.html">Payment Settings</a></li>
												<li><a href="social-login.html">Social Logins</a></li>
												<li><a href="smtp-setting.html">SMTP Settings</a></li>
												<li><a href="dash-about.html">About App</a></li>
											</ul>
										</li>
									</ul>
								</div>
								
							</div>
						</div>
						
						<div class="col-lg-9 col-md-9 col-sm-12">
							
							<!-- Row -->
							<div class="row justify-content-between">
								<div class="col-lg-12 col-md-12 col-sm-12 pb-4">
									<div class="dashboard_wrap d-flex align-items-center justify-content-between">
										<div class="arion">
											<nav class="transparent">
												<ol class="breadcrumb">
													<li class="breadcrumb-item"><a href="#">Home</a></li>
													<li class="breadcrumb-item active" aria-current="page">Add Instructor</li>
												</ol>
											</nav>
										</div>
									</div>
								</div>
							</div>
							<!-- /Row -->
							
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="dashboard_wrap">
										
										<div class="form_blocs_wrap">
											<form>
												<div class="row justify-content-between">
													
													<div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
														<div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
															<button class="nav-link active" id="v-pills-basic-tab" data-toggle="pill" data-target="#v-pills-basic" type="button" role="tab" aria-controls="v-pills-basic" aria-selected="true">Basic</button>
															<button class="nav-link" id="v-pills-login-tab" data-toggle="pill" data-target="#v-pills-login" type="button" role="tab" aria-controls="v-pills-login" aria-selected="false">Login Details</button>
															<button class="nav-link" id="v-pills-social-tab" data-toggle="pill" data-target="#v-pills-social" type="button" role="tab" aria-controls="v-pills-social" aria-selected="false">Social Info</button>
															<button class="nav-link" id="v-pills-payout-tab" data-toggle="pill" data-target="#v-pills-payout" type="button" role="tab" aria-controls="v-pills-payout" aria-selected="false">Payout Info</button>
															<button class="nav-link" id="v-pills-finish-tab" data-toggle="pill" data-target="#v-pills-finish" type="button" role="tab" aria-controls="v-pills-finish" aria-selected="false">Finish</button>
														</div>
													</div>
													
													<div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
															
														<div class="tab-content" id="v-pills-tabContent">
															<!-- Basic -->
															<div class="tab-pane fade show active" id="v-pills-basic" role="tabpanel" aria-labelledby="v-pills-basic-tab">
																
																<div class="form-group smalls">
																	<label>First Name*</label>
																	<input type="text" class="form-control" placeholder="First Name">
																</div>
																
																<div class="form-group smalls">
																	<label>Last Name</label>
																	<input type="text" class="form-control" placeholder="Last Name">
																</div>
																
																<div class="form-group smalls">
																	<label>Bio Description</label>
																	<textarea class="summernote"></textarea>
																</div>
																
																<div class="form-group smalls">
																	<label>User Image</label>
																	<div class="custom-file">
																	  <input type="file" class="custom-file-input" id="customFile">
																	  <label class="custom-file-label" for="customFile">Choose file</label>
																	</div>
																</div>
																
																<div class="d-flex align-items-center justify-content-center">
																	<ul class="alios_slide_nav">
																		<li><a href="#" class="btn btn_slide disabled"><i class="fas fa-arrow-left"></i></a></li>
																		<li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-right"></i></a></li>
																	</ul>
																</div>
																
															</div>
															
															<!-- login -->
															<div class="tab-pane fade" id="v-pills-login" role="tabpanel" aria-labelledby="v-pills-login-tab">
																<div class="form-group smalls">
																	<label>User Name</label>
																	<input type="text" class="form-control" placeholder="User or email">
																</div>
																
																<div class="form-group smalls">
																	<label>Password</label>
																	<input type="password" class="form-control" placeholder="*******">
																</div>
																
																<div class="d-flex align-items-center justify-content-center">
																	<ul class="alios_slide_nav">
																		<li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-left"></i></a></li>
																		<li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-right"></i></a></li>
																	</ul>
																</div>
															</div>
															
															<!-- social -->
															<div class="tab-pane fade" id="v-pills-social" role="tabpanel" aria-labelledby="v-pills-social-tab">
																
																<div class="form-group smalls">
																	<label>Facebook</label>
																	<input type="text" class="form-control" placeholder="Facebook URL">
																</div>
																
																<div class="form-group smalls">
																	<label>Twitter</label>
																	<input type="text" class="form-control" placeholder="Twitter URL">
																</div>
																
																<div class="form-group smalls">
																	<label>YouTube</label>
																	<input type="text" class="form-control" placeholder="YouTube URL">
																</div>
																
																<div class="form-group smalls">
																	<label>Dribbble</label>
																	<input type="text" class="form-control" placeholder="Dribbble URL">
																</div>
																
																<div class="form-group smalls">
																	<label>LinkedIN</label>
																	<input type="text" class="form-control" placeholder="LinkedIN URL">
																</div>
																
																<div class="d-flex align-items-center justify-content-center">
																	<ul class="alios_slide_nav">
																		<li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-left"></i></a></li>
																		<li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-right"></i></a></li>
																	</ul>
																</div>
															</div>
															
															<!-- payout -->
															<div class="tab-pane fade" id="v-pills-payout" role="tabpanel" aria-labelledby="v-pills-payout-tab">
																
																<div class="form-group smalls">
																	<label>PayPal Client ID*</label>
																	<input type="text" class="form-control">
																</div>
																
																<div class="form-group smalls">
																	<label>PayPal Secret Key*</label>
																	<input type="text" class="form-control">
																</div>
																
																<div class="form-group smalls">
																	<label>Stripe Key</label>
																	<input type="text" class="form-control">
																</div>
																
																<div class="form-group smalls">
																	<label>Stripe Secret Key</label>
																	<input type="text" class="form-control">
																</div>
																
																<div class="d-flex align-items-center justify-content-center">
																	<ul class="alios_slide_nav">
																		<li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-left"></i></a></li>
																		<li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-right"></i></a></li>
																	</ul>
																</div>
															</div>
															
															<!-- finish -->
															<div class="tab-pane fade" id="v-pills-finish" role="tabpanel" aria-labelledby="v-pills-finish-tab">
																<div class="succ_wrap">
																	<div class="succ_121"><i class="fas fa-thumbs-up"></i></div>
																	<div class="succ_122">
																		<h4>Instructor Successfully Added</h4>
																		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
																	</div>
																	<div class="succ_123"><a href="instructor-detail.html" class="btn theme-bg text-white">View Instructor</a></div>
																</div>
															</div>
														</div>
													</div>
													
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Dashboard: Dashboard End ================================== -->
			
			<!-- ============================ Call To Action ================================== -->
			<x-calltoaction/>
			<!-- ============================ Call To Action End ================================== -->
			
			<!-- ============================ Footer Start ================================== -->
		<x-footer/>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="{{url('assets/js/jquery.min.js')}}"></script>
    	<script src="{{url('assets/js/popper.min.js')}}"></script>
    	<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
    	<script src="{{url('assets/js/select2.min.js')}}"></script>
    	<script src="{{url('assets/js/slick.js')}}"></script>
   	 	<script src="{{url('assets/js/moment.min.js')}}"></script>
    	<script src="{{url('assets/js/daterangepicker.js')}}"></script>
    	<script src="{{url('assets/js/summernote.min.js')}}"></script>
   		<script src="{{url('assets/js/metisMenu.min.js')}}"></script>
    	<script src="{{url('assets/js/custom.js')}}"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->		

	</body>
</html>