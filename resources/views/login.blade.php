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
			<div class="header header-light head-shadow">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<x-defnav/>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ============================ Login Wrap ================================== -->
			<section>
				<div class="container">
					<div class="row justify-content-center">
					
						<div class="col-xl-7 col-lg-8 col-md-12 col-sm-12">
							<form>
								<div class="crs_log_wrap">
									<div class="crs_log__thumb">
										<img src="https://via.placeholder.com/1920x1200" class="img-fluid" alt="" />
									</div>
									<div class="crs_log__caption">
										<div class="rcs_log_123">
											<div class="rcs_ico"><i class="fas fa-lock"></i></div>
										</div>
										
										<div class="rcs_log_124">
											<div class="Lpo09"><h4>Login Your Account</h4></div>
											<div class="form-group">
												<label>User Name</label>
												<input type="text" class="form-control" placeholder="support@themezhub.com" />
											</div>
											<div class="form-group">
												<label>Password</label>
												<input type="text" class="form-control" placeholder="*******" />
											</div>
											<div class="form-group row">
												<div class="col-xl-4 col-lg-4 col-4">
													<input id="admin" class="checkbox-custom" name="admin" type="checkbox">
													<label for="admin" class="checkbox-custom-label">Admin</label>
												</div>
												<div class="col-xl-4 col-lg-4 col-4">
													<input id="student" class="checkbox-custom" name="student" type="checkbox" checked>
													<label for="student" class="checkbox-custom-label">Student</label>
												</div>
												<div class="col-xl-4 col-lg-4 col-4">
													<input id="instructor" class="checkbox-custom" name="instructor" type="checkbox">
													<label for="instructor" class="checkbox-custom-label">Tutors</label>
												</div>
											</div>
											<div class="form-group">
												<button type="button" class="btn full-width btn-md theme-bg text-white">Login</button>
											</div>
										</div>
										<div class="rcs_log_125">
											<span>Or Login with Social Info</span>
										</div>
										<div class="rcs_log_126">
											<ul class="social_log_45 row">
												<li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-facebook text-info"></i>Facebook</a></li>
												<li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-google text-danger"></i>Google</a></li>
												<li class="col-xl-4 col-lg-4 col-md-4 col-4"><a href="javascript:void(0);" class="sl_btn"><i class="ti-twitter theme-cl"></i>Twitter</a></li>
											</ul>
										</div>
									</div>
									<div class="crs_log__footer d-flex justify-content-between">
										<div class="fhg_45"><p class="musrt">Don't have account? <a href="signup.html" class="theme-cl">SignUp</a></p></div>
										<div class="fhg_45"><p class="musrt"><a href="forgot.html" class="text-danger">Forgot Password?</a></p></div>
									</div>
								</div>
							</form>
						</div>

					</div>
				</div>
			</section>
			<!-- ============================ Login Wrap ================================== -->
			
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