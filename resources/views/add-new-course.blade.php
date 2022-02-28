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
													<li class="breadcrumb-item active" aria-current="page">Add New Course</li>
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
															<button class="nav-link" id="v-pills-requirements-tab" data-toggle="pill" data-target="#v-pills-requirements" type="button" role="tab" aria-controls="v-pills-requirements" aria-selected="false">Requirements</button>
															<button class="nav-link" id="v-pills-pricing-tab" data-toggle="pill" data-target="#v-pills-pricing" type="button" role="tab" aria-controls="v-pills-pricing" aria-selected="false">Pricing</button>
															<button class="nav-link" id="v-pills-media-tab" data-toggle="pill" data-target="#v-pills-media" type="button" role="tab" aria-controls="v-pills-media" aria-selected="false">Media</button>
															<button class="nav-link" id="v-pills-seo-tab" data-toggle="pill" data-target="#v-pills-seo" type="button" role="tab" aria-controls="v-pills-seo" aria-selected="false">SEO</button>
															<button class="nav-link" id="v-pills-finish-tab" data-toggle="pill" data-target="#v-pills-finish" type="button" role="tab" aria-controls="v-pills-finish" aria-selected="false">Finish</button>
														</div>
													</div>
													
													<div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
															
														<div class="tab-content" id="v-pills-tabContent">
															<!-- Basic -->
															<div class="tab-pane fade show active" id="v-pills-basic" role="tabpanel" aria-labelledby="v-pills-basic-tab">
																
																<div class="form-group smalls">
																	<label>Course Title*</label>
																	<input type="text" class="form-control" placeholder="Enter Course Title">
																</div>
																
																<div class="form-group smalls">
																	<label>Short Description</label>
																	<input type="text" class="form-control">
																</div>
																
																<div class="form-group smalls">
																	<label>Description</label>
																	<textarea class="summernote"></textarea>
																</div>
																
																<div class="form-group smalls">
																	<label>Category*</label>
																	<div class="simple-input">
																		<select id="cates" class="form-control">
																			<option value="">&nbsp;</option>
																			<option value="1">Parent</option>
																			<option value="2">Banking</option>
																			<option value="3">Medical</option>
																			<option value="4">Insurence</option>
																			<option value="5">Finance & Accounting</option>
																		</select>
																	</div>
																</div>
																
																<div class="form-group smalls">
																	<label>Level</label>
																	<div class="simple-input">
																		<select id="lvl" class="form-control">
																			<option value="">&nbsp;</option>
																			<option value="1">Beginner</option>
																			<option value="2">Basic</option>
																			<option value="3">Mediam</option>
																			<option value="4">Advance</option>
																		</select>
																	</div>
																</div>
																
																<div class="form-group smalls">
																	<label>Language</label>
																	<div class="simple-input">
																		<select id="lgu" class="form-control">
																			<option value="">&nbsp;</option>
																			<option value="1">Spanish</option>
																			<option value="2">French</option>
																			<option value="3">English</option>
																			<option value="4">Other</option>
																		</select>
																	</div>
																</div>
																
																<div class="form-group smalls">
																	<input id="l2l" class="checkbox-custom" name="l2l" type="checkbox">
																	<label for="l2l" class="checkbox-custom-label">Check this for featured course</label>
																</div>
																
																<div class="d-flex align-items-center justify-content-center">
																	<ul class="alios_slide_nav">
																		<li><a href="#" class="btn btn_slide disabled"><i class="fas fa-arrow-left"></i></a></li>
																		<li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-right"></i></a></li>
																	</ul>
																</div>
																
															</div>
															
															<!-- requirements -->
															<div class="tab-pane fade" id="v-pills-requirements" role="tabpanel" aria-labelledby="v-pills-requirements-tab">
																<div class="form-group smalls">
																	<label>Requirements</label>
																	<div class="row m-0">
																		<input type="text" class="col-9 col-sm-9 form-control" placeholder="Provide Requirements">
																		<div class="col-3 col-sm-3">
																			<button class="btn theme-bg" type="button"><i class="fas fa-plus"></i></button>
																		</div>
																	</div>
																</div>
																
																<div class="form-group smalls">
																	<ul class="lists-4">
																		<li>At vero eos et accusamus et iusto odio dignissimos ducimus</li>
																		<li>At vero eos et accusamus et iusto odio dignissimos ducimus</li>
																		<li>At vero eos et accusamus et iusto odio dignissimos ducimus</li>
																		<li>At vero eos et accusamus et iusto odio dignissimos ducimus</li>
																		<li>At vero eos et accusamus et iusto odio dignissimos ducimus</li>
																	</ul>
																</div>
																
																<div class="d-flex align-items-center justify-content-center">
																	<ul class="alios_slide_nav">
																		<li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-left"></i></a></li>
																		<li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-right"></i></a></li>
																	</ul>
																</div>
															</div>
															
															<!-- pricing -->
															<div class="tab-pane fade" id="v-pills-pricing" role="tabpanel" aria-labelledby="v-pills-pricing-tab">
																
																<div class="form-group smalls">
																	<div class="drios">
																		<input id="l23" class="checkbox-custom" name="l23" type="checkbox">
																		<label for="l23" class="checkbox-custom-label">Check this if Course id Free</label>
																	</div>
																</div>
																
																<div class="form-group smalls">
																	<label>Course Price($)</label>
																	<input type="text" class="form-control" placeholder="Enter Course Price">
																</div>
																
																<div class="form-group smalls">
																	<label>Discount Price($)</label>
																	<input type="text" class="form-control" placeholder="Enter Discount Price">
																	<div class="drios">
																		<input id="l22" class="checkbox-custom" name="l22" type="checkbox">
																		<label for="l22" class="checkbox-custom-label">Enable This Discount</label>
																	</div>
																</div>
																
																<div class="d-flex align-items-center justify-content-center">
																	<ul class="alios_slide_nav">
																		<li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-left"></i></a></li>
																		<li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-right"></i></a></li>
																	</ul>
																</div>
															</div>
															
															<!-- media -->
															<div class="tab-pane fade" id="v-pills-media" role="tabpanel" aria-labelledby="v-pills-media-tab">
																<div class="form-group smalls">
																	<label>Course Provider</label>
																	<div class="simple-input">
																		<select id="vid" class="form-control">
																			<option value="">&nbsp;</option>
																			<option value="1">YouTube</option>
																			<option value="2">Vivo</option>
																			<option value="3">Facebook</option>
																			<option value="4">Other</option>
																		</select>
																	</div>
																</div>
																
																<div class="form-group smalls">
																	<label>Video URL</label>
																	<input type="text" class="form-control" placeholder="https://www.youtube.com/watch?v=ExXhmuH-cw8">
																</div>
																
																<div class="form-group smalls">
																	<label>Thumbnail</label>
																	<div class="custom-file">
																	  <input type="file" class="custom-file-input" id="customFile">
																	  <label class="custom-file-label" for="customFile">Choose file</label>
																	</div>
																</div>
																
																<div class="d-flex align-items-center justify-content-center">
																	<ul class="alios_slide_nav">
																		<li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-left"></i></a></li>
																		<li><a href="#" class="btn btn_slide"><i class="fas fa-arrow-right"></i></a></li>
																	</ul>
																</div>
																
															</div>
															
															<!-- seo -->
															<div class="tab-pane fade" id="v-pills-seo" role="tabpanel" aria-labelledby="v-pills-seo-tab">
																<div class="form-group smalls">
																	<label>Course SEO Title</label>
																	<input type="text" class="form-control" placeholder="Enter Course Title">
																</div>
																
																<div class="form-group smalls">
																	<label>Course SEO Description</label>
																	<textarea class="form-control" placeholder="Enter Course Description"></textarea>
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
																		<h4>Course Successfully Added</h4>
																		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
																	</div>
																	<div class="succ_123"><a href="course-detail.html" class="btn theme-bg text-white">View Course</a></div>
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