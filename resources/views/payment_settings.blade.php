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
													<li class="breadcrumb-item active" aria-current="page">Payment Settings</li>
												</ol>
											</nav>
										</div>
									</div>
								</div>
							</div>
							<!-- /Row -->
							
							<div class="row">
								<div class="col-xl-6 col-lg-6 col-md-12">
									<div class="dashboard_wrap">
										
										<div class="row">
											<div class="col-xl-12 col-lg-12 col-md-12 mb-4">
												<h6 class="m-0">Currency Settings</h6>
											</div>
										</div>
										
										<div class="row justify-content-center">
											<div class="col-xl-12 col-lg-12 col-md-12">
												<form>
													<div class="form-group smalls">
														<label>System Currency*</label>
														<div class="simple-input">
															<select id="crn" class="form-control">
																<option value="">&nbsp;</option>
																<option value="1">USD</option>
																<option value="2">NRI</option>
																<option value="3">Yuro</option>
																<option value="4">Pound</option>
															</select>
														</div>
													</div>
													<div class="form-group smalls">
														<label>Currency Position</label>
														<div class="simple-input">
															<select id="psst" class="form-control">
																<option value="">&nbsp;</option>
																<option value="1">Left</option>
																<option value="2">Right</option>
															</select>
														</div>
													</div>
													<div class="form-group smalls">
														<button class="btn theme-bg text-white" type="button">Save & Update</button>
													</div>
												</form>
											</div>
										</div>
										
									</div>
									
									<div class="dashboard_wrap">

										<div class="row">
											<div class="col-xl-12 col-lg-12 col-md-12 mb-4">
												<h6 class="m-0">PayPal Setup</h6>
											</div>
										</div>
										
										<div class="row justify-content-center">
											<div class="col-xl-12 col-lg-12 col-md-12">
												<form>
													<div class="form-group smalls">
														<label>Status</label>
														<div class="d-flex">
															<div class="drios">
																<input id="458" class="checkbox-custom" name="paypal" type="radio" checked>
																<label for="458" class="checkbox-custom-label">Enable</label>
															</div>
															<div class="drios ml-3">
																<input id="459" class="checkbox-custom" name="paypal" type="radio">
																<label for="459" class="checkbox-custom-label">Disable</label>
															</div>
														</div>
													</div>
													<div class="form-group smalls">
														<label>Client ID</label>
														<input type="text" class="form-control" value="JHKJHSJKFHKSJHFKJS54824" />
													</div>
													<div class="form-group smalls">
														<label>Client ID Production</label>
														<input type="text" class="form-control" placeholder="123245" />
													</div>
													<div class="form-group smalls">
														<label>Secret Key</label>
														<input type="text" class="form-control" placeholder="JKHSKGFJSGJTEYUFJSFGSJ" />
													</div>
													<div class="form-group smalls">
														<button class="btn theme-bg text-white" type="button">Save Change</button>
													</div>
												</form>
											</div>
										</div>
										
									</div>
								</div>
								
								<div class="col-xl-6 col-lg-6 col-md-12">
									<div class="dashboard_wrap">
										<div class="row">
											<div class="col-xl-12 col-lg-12 col-md-12 mb-4">
												<h6 class="m-0">Stripe Settings</h6>
											</div>
										</div>
											
										<div class="row justify-content-center">
											<div class="col-xl-12 col-lg-12 col-md-12">
												<form>
													<div class="form-group smalls">
														<label>Status</label>
														<div class="d-flex">
															<div class="drios">
																<input id="448" class="checkbox-custom" name="stripe" type="radio" checked>
																<label for="448" class="checkbox-custom-label">Enable</label>
															</div>
															<div class="drios ml-3">
																<input id="449" class="checkbox-custom" name="stripe" type="radio">
																<label for="449" class="checkbox-custom-label">Disable</label>
															</div>
														</div>
													</div>
													<div class="form-group smalls">
														<label>Client ID</label>
														<input type="text" class="form-control" value="JHKJHSJKFHKSJHFKJS54824" />
													</div>
													<div class="form-group smalls">
														<label>Client ID Production</label>
														<input type="text" class="form-control" placeholder="123245" />
													</div>
													<div class="form-group smalls">
														<label>Secret Key</label>
														<input type="text" class="form-control" placeholder="JKHSKGFJSGJTEYUFJSFGSJ" />
													</div>
													<div class="form-group smalls">
														<button class="btn theme-bg text-white" type="button">Save Change</button>
													</div>
												</form>
											</div>
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