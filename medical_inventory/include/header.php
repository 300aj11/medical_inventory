<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>header</title>
</head>

<body>


<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top" style="background:rgb(162, 46, 46);">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll">
								<a href="index.php"><img id="logo" src="images/logo-image.png" alt="Medicalhub"></a>
							</div>

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name"><a href="index.php">Medicalhub</a></div>
								<div class="site-slogan">INVENTORY by <a target="_blank" href="www.fidaato.in">Fidaato</a></div>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
												<li <?php if($pagename=="index.php") echo "class='active'" ; ?> > <a href="index.php">Home</a></li>
												<li <?php if($pagename=="create_medicine_category.php" || $pagename=="create_medicine_purpose.php" || $pagename=="create_medicine.php" || $pagename=="create_vendor.php" || $pagename=="vendor_sales_person.php" || $pagename=="create_stock.php")
echo"class='active dropdown'"; ?> class="dropdown" > 
                                                <a href="#">Create</a> <div class="dropdown-content">
                                                <a href="create_medicine_category.php">Categories</a>
                                                <a href="create_medicine_purpose.php">Purposes</a>
                                                <a href="create_medicine.php">Medicines</a>
                                                <a href="create_vendor.php">Vendors</a>
                                                <a href="vendor_sales_person.php">Sales Person</a>
                                                <a href="create_stock.php">Stock</a>
                                                </div> </li>
                                                <li <?php if($pagename=="view_stock_exist.php" || $pagename=="sale_record.php") echo "class='active dropdown'"; ?> class="dropdown" >               <a href="#">View</a> <div class="dropdown-content">
                                                <a href="view_stock_exist.php">Stock Details</a>
                                                <a href="sale_record.php">Sale Record</a>
                                                <div> </li>
												<li <?php if($pagename=="customer_medicine_sale.php") echo "class='active'" ; ?> > <a href="customer_medicine_sale.php">Customer</a></li>
												<li <?php if($pagename=="change_password.php") echo "class='active'" ; ?> > <a href="change_password.php">Change Password</a></li>
												<li> <a href="logout.php">LOGOUT!</a> </li> </ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->
<div class="scroll-gap" > </div>

</body>
</html>