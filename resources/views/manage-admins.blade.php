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
													<li class="breadcrumb-item active" aria-current="page">Manage Admins</li>
												</ol>
											</nav>
										</div>
										<div class="elkios">
											<a href="add-admin.html" class="add_new_btn"><i class="fas fa-plus-circle mr-1"></i>Add Admin</a>
										</div>
									</div>
								</div>
							</div>
							<!-- /Row -->
							
							<div class="row">
								<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="dashboard_wrap">
										
										<div class="row">
											<div class="col-xl-12 col-lg-12 col-md-12 mb-4">
												<h6 class="m-0">All Admin List</h6>
											</div>
										</div>
										
										<div class="row justify-content-between">
											<div class="col-xl-2 col-lg-3 col-md-6">
												<div class="form-group smalls row align-items-center">
													<label class="col-xl-3 col-lg-3 col-sm-2 col-form-label">Show</label>
													<div class="col-xl-9 col-lg-9 col-sm-10">
													  <select id="show" class="form-control">
															<option value="">&nbsp;</option>
															<option value="1">10</option>
															<option value="2">25</option>
															<option value="3">35</option>
															<option value="3">50</option>
															<option value="3">100</option>
															<option value="3">250</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-xl-4 col-lg-5 col-md-6">
												<div class="form-group smalls row align-items-center">
													<label class="col-xl-2 col-lg-2 col-sm-2 col-form-label">Search</label>
													<div class="col-xl-10 col-lg-10 col-sm-10">
													  <input type="text" class="form-control">
													</div>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-xl-12 col-lg-12 col-md-12 mb-2">
												<div class="table-responsive">
													<table class="table dash_list">
														<thead>
															<tr>
																<th scope="col">#</th>
																<th scope="col">Photo</th>
																<th scope="col">Name</th>
																<th scope="col">Email</th>
																<th scope="col">Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<th scope="row">1</th>
																<td><img src="https://via.placeholder.com/500x500" class="img-fluid circle" width="40" alt="" /></td>
																<td><div class="smalls lg">Myrtle M. Korn</div></td>
																<td><span class="smalls lg">Beltran@teleworm.us</span></td>
																<td><span class="trip text-white theme-bg">Root Admin</span></td>
															</tr>
															<tr>
																<th scope="row">2</th>
																<td><img src="https://via.placeholder.com/500x500" class="img-fluid circle" width="40" alt="" /></td>
																<td><div class="smalls lg">Laurie T. Eller</div></td>
																<td><span class="smalls lg">Paxson@armyspy.com</span></td>
																<td>
																	<div class="dropdown show">
																		<a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																			<i class="fas fa-ellipsis-h"></i>
																		</a>
																		<div class="drp-select dropdown-menu">
																			<a class="dropdown-item" href="JavaScript:Void(0);">Assign Permission</a>
																			<a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
																			<a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th scope="row">3</th>
																<td><img src="https://via.placeholder.com/500x500" class="img-fluid circle" width="40" alt="" /></td>
																<td><span class="smalls lg">Lucinda J. Smither</span></td>
																<td><span class="smalls lg">FrankTFleck@rhyta.com</span></td>
																<td>
																	<div class="dropdown show">
																		<a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																			<i class="fas fa-ellipsis-h"></i>
																		</a>
																		<div class="drp-select dropdown-menu">
																			<a class="dropdown-item" href="JavaScript:Void(0);">Assign Permission</a>
																			<a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
																			<a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th scope="row">4</th>
																<td><img src="https://via.placeholder.com/500x500" class="img-fluid circle" width="40" alt="" /></td>
																<td><span class="smalls lg">Shirley L. Townsend</span></td>
																<td><span class="smalls lg">CarloJone@armyspy.com</span></td>
																<td>
																	<div class="dropdown show">
																		<a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																			<i class="fas fa-ellipsis-h"></i>
																		</a>
																		<div class="drp-select dropdown-menu">
																			<a class="dropdown-item" href="JavaScript:Void(0);">Assign Permission</a>
																			<a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
																			<a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<th scope="row">5</th>
																<td><img src="https://via.placeholder.com/500x500" class="img-fluid circle" width="40" alt="" /></td>
																<td><span class="smalls lg">Leonard A. Barker</span></td>
																<td><span class="smalls lg">LeonAarker@rhyta.com</span></td>
																<td>
																	<div class="dropdown show">
																		<a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																			<i class="fas fa-ellipsis-h"></i>
																		</a>
																		<div class="drp-select dropdown-menu">
																			<a class="dropdown-item" href="JavaScript:Void(0);">Assign Permission</a>
																			<a class="dropdown-item" href="JavaScript:Void(0);">Edit</a>
																			<a class="dropdown-item" href="JavaScript:Void(0);">Delete</a>
																		</div>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										
										<div class="row align-items-center justify-content-between">
											<div class="col-xl-6 col-lg-6 col-md-12">
												<p class="p-0">Showing 1 to 15 of 15 entire</p>
											</div>
											<div class="col-xl-6 col-lg-6 col-md-12">
												<nav class="float-right">
													 <ul class="pagination smalls m-0">
														<li class="page-item disabled">
														  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-arrow-circle-left"></i></a>
														</li>
														<li class="page-item"><a class="page-link" href="#">1</a></li>
														<li class="page-item active">
														  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
														</li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item">
														  <a class="page-link" href="#"><i class="fas fa-arrow-circle-right"></i></a>
														</li>
													</ul>
												</nav>
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