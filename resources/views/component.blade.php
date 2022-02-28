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
			
			<!-- ============================ Page Title Start================================== -->
			<section class="page-title gray">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<div class="breadcrumbs-wrap">
								<h1 class="breadcrumb-title">Elements</h1>
								<nav class="transparent">
									<ol class="breadcrumb p-0">
										<li class="breadcrumb-item"><a href="#">Home</a></li>
										<li class="breadcrumb-item active theme-cl" aria-current="page">Components</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ Agency List Start ================================== -->
			<section class="pt-0">
			
				<div class="container">
				
					<!-- row Start -->
					<div class="row">
					
						<div class="col-lg-6 col-md-12 col-sm-12">
							<h4>Tabs Examples</h4>
							<div class="custom-tab customize-tab tabs_creative">
								<ul class="nav nav-tabs pb-2 b-0" id="myTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
									</li>
								</ul>
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
									<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
									<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-12 col-sm-12">
							<h4>Accordion Examples</h4>
							<div id="accordionExample" class="accordion">

								<!-- Part 1 -->
								<div class="card">
								  <div id="headingOne" class="card-header bg-white shadow-sm border-0">
									<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="d-block position-relative text-dark collapsible-link py-2">How To Learn Web Designing Step by Step</a></h6>
								  </div>
								  <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="collapse show">
									<div class="card-body pl-3 pr-3 pt-0">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
									</div>
								  </div>
								</div>

								<!-- Part 2 -->
								<div class="card">
								  <div id="headingTwo" class="card-header bg-white shadow-sm border-0">
									<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="d-block position-relative collapsed text-dark collapsible-link py-2">Learn Web Designing in Basic Level</a></h6>
								  </div>
								  <div id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordionExample" class="collapse">
									<div class="card-body pl-3 pr-3 pt-0">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
									</div>
								  </div>
								</div>

								<!-- Part 3 -->
								<div class="card">
								  <div id="headingThree" class="card-header bg-white shadow-sm border-0">
									<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="d-block position-relative collapsed text-dark collapsible-link py-2">Learn Web Designing in Advance Level</a></h6>
								  </div>
								  <div id="collapseThree" aria-labelledby="headingThree" data-parent="#accordionExample" class="collapse">
									<div class="card-body pl-3 pr-3 pt-0">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
									</div>
								  </div>
								</div>
								
								<!-- Part 04 -->
								<div class="card">
								  <div id="headingFour" class="card-header bg-white shadow-sm border-0">
									<h6 class="mb-0 accordion_title"><a href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="d-block position-relative collapsed text-dark collapsible-link py-2">How To Become Succes in Designing & Development?</a></h6>
								  </div>
								  <div id="collapseFour" aria-labelledby="headingFour" data-parent="#accordionExample" class="collapse">
									<div class="card-body pl-3 pr-3 pt-0">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
									</div>
								  </div>
								</div>

							</div>
						</div>
						
					</div>
					<!-- /row -->

					<!-- row Start -->
					<div class="row mt-4">
					
						<div class="col-lg-6 col-md-12 col-sm-12">
							<h4>Typography</h4>
							 <h1>Heading One</h1>
                            <h2>Heading Two</h2>
                            <h3>Heading Three</h3>
                            <h4>Heading Four</h4>
                            <h5>Heading Five</h5>
                            <h6>Heading Six</h6>
						</div>
						
						<div class="col-lg-6 col-md-12 col-sm-12">
							<h4>Buttons</h4>
							<button type="submit" class="btn theme-bg">Simple button</button></br>
							<button type="submit" class="btn theme-bg btn-rounded">Simple button</button>
							<button type="submit" class="btn theme-bg btn-md">Midium Button</button></br>
							<button type="submit" class="btn bg-dark btn-lg">Large Button</button>
							<button type="submit" class="btn btn-outline-theme">Outline Button</button></br></br>
							<a href="#" class="btn btn-theme">Simple button</a></br>
							<a href="#" class="btn btn-theme-2">Simple button</a>
						</div>
						
					</div>
					<!-- /row -->	

					<!-- row Start -->
					<div class="row mt-4">
					
						<div class="col-lg-6 col-md-12 col-sm-12">
							<h4>Shadow & Simple Inputbox</h4>
							
							<div class="input-with-icon">
								<input type="text" class="form-control" placeholder="Search Your Cources">
								<i class="ti-search"></i>
							</div>
								
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control simple">
							</div>
						</div>
						
						<div class="col-lg-6 col-md-12 col-sm-12">
							<h4>Checkbox & Radio buttons</h4>
							<ul class="no-ul-list">
								<li>
									<input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
									<label for="a-1" class="checkbox-custom-label">Air Condition</label>
								</li>
								<li>
									<input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
									<label for="a-2" class="checkbox-custom-label">Bedding</label>
								</li>
								
							</ul>
							
							<ul class="no-ul-list">
								<li>
									<input id="a-p" class="checkbox-custom" name="a-p" type="radio">
									<label for="a-p" class="checkbox-custom-label">Air Condition</label>
								</li>
								<li>
									<input id="a-c" class="checkbox-custom" name="a-c" type="radio">
									<label for="a-c" class="checkbox-custom-label">Bedding</label>
								</li>
								
							</ul>
						</div>
						
					</div>
					<!-- /row -->

					<div class="row mt-3">
						<div class="col-lg-12 col-md-12">
							<h4>Lists Style</h4>
						</div>
						
						<!-- Buttons Styles -->			
						<div class="col-lg-4 col-md-4">
							<ul class="lists lists-1">
								<li>A simple light alert</li>
								<li>A simple light alert</li>
								<li>A simple light alert</li>
								<li>A simple light alert</li>
							</ul>	
						</div>
						
						<!-- Buttons Styles -->			
						<div class="col-lg-4 col-md-4">
							<ul class="lists lists-2">
								<li>A simple light alert</li>
								<li>A simple light alert</li>
								<li>A simple light alert</li>
								<li>A simple light alert</li>
							</ul>
						</div>
						
						<!-- Buttons Styles -->			
						<div class="col-lg-4 col-md-4">
							<ul class="lists lists-3">
								<li>A simple light alert</li>
								<li>A simple light alert</li>
								<li>A simple light alert</li>
								<li>A simple light alert</li>
							</ul>
						</div>
						
					</div>					
					
				</div>
						
			</section>
			<!-- ============================ Agency List End ================================== -->
			
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
    	<script src="{{url('assets/js/custom.js')}}"></script>======================= -->
		<!-- This page plugins -->
		<!-- ============================================================== -->		

	</body>
</html>