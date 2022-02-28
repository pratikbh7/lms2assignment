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
													<li class="breadcrumb-item active" aria-current="page">Course Category</li>
												</ol>
											</nav>
										</div>
										<div class="elkios">
											<a href="#" class="add_new_btn" data-toggle="modal" data-target="#catModal"><i class="fas fa-plus-circle mr-1"></i>Add New Category</a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Row -->
							
							<div class="row">
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
									<div class="dash_crs_cat">
										<a href="#" class="remove_tools"><i class="fas fa-trash-alt"></i></a>
										<div class="dash_crs_cat_thumb">
											<img src="https://via.placeholder.com/1200x800" alt="" class="img-fluid" />
										</div>
										<div class="dash_crs_cat_caption">
											<div class="dash_crs_cat_head">
												<h4>Web Development</h4>
												<span>5 Sub Category</span>
											</div>
											<div class="dash_crs_cat_body">
												<ul>
													<li><span>Responsive Design</span></li>
													<li><span>HTML5 & CSS3</span></li>
													<li><span>Java Script</span></li>
													<li><span>Bootstrap</span></li>
													<li><span>PHP Coding</span></li>
												</ul>
											</div>
											<div class="dash_crs_cat_bottom">
												<a href="#" class="btn full-width theme-bg-light theme-cl">Edit Category</a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
									<div class="dash_crs_cat">
										<a href="#" class="remove_tools"><i class="fas fa-trash-alt"></i></a>
										<div class="dash_crs_cat_thumb">
											<img src="https://via.placeholder.com/1200x800" alt="" class="img-fluid" />
										</div>
										<div class="dash_crs_cat_caption">
											<div class="dash_crs_cat_head">
												<h4>Graphic Design</h4>
												<span>5 Sub Category</span>
											</div>
											<div class="dash_crs_cat_body">
												<ul>
													<li><span>Photoshop</span></li>
													<li><span>Illustrator</span></li>
													<li><span>InDesign</span></li>
													<li><span>Logo Design</span></li>
													<li><span>Figma</span></li>
												</ul>
											</div>
											<div class="dash_crs_cat_bottom">
												<a href="#" class="btn full-width theme-bg-light theme-cl">Edit Category</a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
									<div class="dash_crs_cat">
										<a href="#" class="remove_tools"><i class="fas fa-trash-alt"></i></a>
										<div class="dash_crs_cat_thumb">
											<img src="https://via.placeholder.com/1200x800" alt="" class="img-fluid" />
										</div>
										<div class="dash_crs_cat_caption">
											<div class="dash_crs_cat_head">
												<h4>Bank & Finance</h4>
												<span>5 Sub Category</span>
											</div>
											<div class="dash_crs_cat_body">
												<ul>
													<li><span>Banking</span></li>
													<li><span>Business Idea</span></li>
													<li><span>Business Planning</span></li>
													<li><span>Finance</span></li>
													<li><span>Meetings</span></li>
												</ul>
											</div>
											<div class="dash_crs_cat_bottom">
												<a href="#" class="btn full-width theme-bg-light theme-cl">Edit Category</a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
									<div class="dash_crs_cat">
										<a href="#" class="remove_tools"><i class="fas fa-trash-alt"></i></a>
										<div class="dash_crs_cat_thumb">
											<img src="https://via.placeholder.com/1200x800" alt="" class="img-fluid" />
										</div>
										<div class="dash_crs_cat_caption">
											<div class="dash_crs_cat_head">
												<h4>Interior Design</h4>
												<span>5 Sub Category</span>
											</div>
											<div class="dash_crs_cat_body">
												<ul>
													<li><span>Color Combination</span></li>
													<li><span>Lighting Design</span></li>
													<li><span>Home Improvement</span></li>
													<li><span>3D Lighting</span></li>
													<li><span>Bedroom Decorate</span></li>
												</ul>
											</div>
											<div class="dash_crs_cat_bottom">
												<a href="#" class="btn full-width theme-bg-light theme-cl">Edit Category</a>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
									<div class="dash_crs_cat">
										<a href="#" class="remove_tools"><i class="fas fa-trash-alt"></i></a>
										<div class="dash_crs_cat_thumb">
											<img src="https://via.placeholder.com/1200x800" alt="" class="img-fluid" />
										</div>
										<div class="dash_crs_cat_caption">
											<div class="dash_crs_cat_head">
												<h4>2D/ 3D Animation</h4>
												<span>5 Sub Category</span>
											</div>
											<div class="dash_crs_cat_body">
												<ul>
													<li><span>Motion Effect</span></li>
													<li><span>Blender</span></li>
													<li><span>Maya Tools</span></li>
													<li><span>After Effect</span></li>
													<li><span>Pro Tools</span></li>
												</ul>
											</div>
											<div class="dash_crs_cat_bottom">
												<a href="#" class="btn full-width theme-bg-light theme-cl">Edit Category</a>
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
			
			<x-footerwithcoursemodal/>

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