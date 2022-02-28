<!DOCTYPE html>
<html lang="zxx">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		
        <title>Rhoomy - Residence & Real Estate Template</title>
		 
        <!-- Custom CSS -->
        <link href="{{url('assets/css/styles.css')}}" rel="stylesheet">
		
    </head>
	
    <body class="yellow-skin">
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
       <div class="preloader"></div>
		
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
						<x-cart/>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ============================ Page Title Start================================== -->
			<section class="page-title">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<div class="breadcrumbs-wrap">
								<h1 class="breadcrumb-title">Courses with Sidebar</h1>
								<nav class="transparent">
									<ol class="breadcrumb p-0 bg-white">
										<li class="breadcrumb-item"><a href="#">Home</a></li>
										<li class="breadcrumb-item active theme-cl" aria-current="page">Add To Cart</li>
									</ol>
								</nav>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Page Title End ================================== -->
			
			<!-- ============================ Product Wishlist ================================== -->
			<section class="pt-0">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-12">
						
							<div class="table-responsive">
								<table class="table add_to_cart">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Title</th>
											<th scope="col">Price</th>
											<th scope="col">Quantity</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><div class="tb_course_thumb"><img src="https://via.placeholder.com/1200x800" class="img-fluid" alt="" /></div></td>
											<th>Besic Web Design<span class="tb_date">18 july 2020</span></th>
											<td><span class="wish_price theme-cl">$149.00</span></td>
											<td><input type="number" class="form-control qty" step="1" value="1" title="Qty" size="4" placeholder="" inputmode="numeric"></td>
											<td><a href="#" class="btn gray btn-default border">Remove</span></td>
										</tr>
										<tr>
											<td><div class="tb_course_thumb"><img src="https://via.placeholder.com/1200x800" class="img-fluid" alt="" /></div></td>
											<th>Advance Java Script<span class="tb_date">15 july 2020</span></th>
											<td><span class="wish_price theme-cl">$129.00</span></td>
											<td><input type="number" class="form-control qty" step="1" value="1" title="Qty" size="4" placeholder="" inputmode="numeric"></td>
											<td><a href="#" class="btn gray btn-default border">Remove</span></td>
										</tr>
										<tr>
											<td><div class="tb_course_thumb"><img src="https://via.placeholder.com/1200x800" class="img-fluid" alt="" /></div></td>
											<th>The Computer Science<span class="tb_date">13 july 2020</span></th>
											<td><span class="wish_price theme-cl">$125.00</span></td>
											<td><input type="number" class="form-control qty" step="1" value="1" title="Qty" size="4" placeholder="" inputmode="numeric"></td>
											<td><a href="#" class="btn gray btn-default border">Remove</span></td>
										</tr>
										<tr>
											<td><div class="tb_course_thumb"><img src="https://via.placeholder.com/1200x800" class="img-fluid" alt="" /></div></td>
											<th>Business Analysis<span class="tb_date">12 july 2020</span></th>
											<td><span class="wish_price theme-cl">$179.00</span></td>
											<td><input type="number" class="form-control qty" step="1" value="1" title="Qty" size="4" placeholder="" inputmode="numeric"></td>
											<td><a href="#" class="btn gray btn-default border">Remove</span></td>
										</tr>
										<tr>
											<td><div class="tb_course_thumb"><img src="https://via.placeholder.com/1200x800" class="img-fluid" alt="" /></div></td>
											<th>The Computer Highnext<span class="tb_date">11 july 2020</span></th>
											<td><span class="wish_price theme-cl">$180.00</span></td>
											<td><input type="number" class="form-control qty" step="1" value="1" title="Qty" size="4" placeholder="" inputmode="numeric"></td>
											<td><a href="#" class="btn gray btn-default border">Remove</span></td>
										</tr>
									</tbody>
								</table>
							</div>
							
							<!-- Coupon Apply -->
							<div class="checkout_coupon checkout d-flex align-items-center justify-content-between">
								<div class="checkout_coupon_flex">
									<form class="form-inline">
										<input class="form-control" type="search" placeholder="Coupon Code" >
										<button type="button" class="btn theme-bg text-white btn-md ml-2">Apply Coupon</button>
									</form>
								</div>
								<div class="ckt_last">
									<form class="form-inline">
										<button type="button" class="btn theme-bg text-white btn-md">Empty cart</button>
										<button type="button" class="btn theme-bg text-white btn-md disabled ml-2">Update Cart</button>
									</form>
								</div>
							</div>
							
							
						</div>
						
						<div class="col-lg-4 col-md-12">
							<!-- Total Cart -->
							<div class="cart_totals checkout">
								<h4>Billing Summary</h4>
								<div class="cart-wrap">
									<ul class="cart_list">
										<li>Base price<strong>$140.00</strong></li>
										<li>Discount<strong>$10.00</strong></li>
										<li>CGST<strong>$10.00</strong></li>
										<li>SGST<strong>$10.00</strong></li>
									</ul>
									<div class="flex_cart">
										<div class="flex_cart_1">
											Total Cost
										</div>
										<div class="flex_cart_2">
											$170.00
										</div>
									</div>
									<button type="button" class="btn checkout_btn">Proceed To Checkout</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Product Wishlist ================================== -->
			
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