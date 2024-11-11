<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap-rtl.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/hover-min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/slick-theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/all.min.css">
<link rel="shortcut icon" href="<?php echo base_url() ?>files/logo.png">
<title>خطا</title>
</head>

<body>
	
	<!-- Start Header -->
	
	<header class="bg-navbar shadow-lg">
		<div class="container">
		  <nav class="navbar navbar-light px-0">
				<a href="<?php echo base_url() ?>index.php/ahooController" class="navbar-brand">
					<img src="<?php echo base_url() ?>files/logo3.png" height="85px" alt="Logo">
				</a>
				<form action="<?php echo base_url('index.php/ahooController/simpleSearchPoem'); ?>" method="post">
                   <div class=" nav-item form-group ml-0 d-flex flex-row hsearch mb-0">
                       <input type="search" name="poem" class="form-control mr-sm-2 rounded-pill border-0 pt-1 pb-1" aria-label="Search" placeholder="کلمه مورد نظر خود را وارد کنید ..." style="width: 400px">
                       <button class="btn btn-outline-primary my-2 my-sm-0 rounded-start" type="submit"> <i class="fa fa-search align-middle" style="font-size: 13px"></i> </button>
                   </div>
				</form>							
		    <div class="d-flex align-items-center justify-content-between align-content-center">
				<ul class="navbar-nav text-center ml-auto d-flex flex-row">
						<li class="nav-item logbtn pr-3 pl-3">
							<a class="nav-link" href="<?php echo base_url() ?>index.php/ahooController/goToIndex/10">
								<i class="fa fa-angle-double-left align-middle" style="font-size: 13px"></i>
								ورود</a>
						</li>
						<li class="nav-item signbtn pr-4 pl-4 mr-2">
							<a class="nav-link" href="<?php echo base_url() ?>index.php/ahooController/goToIndex/20">
								<i class="fa fa-plus align-middle" style="font-size: 12px"></i>
								ثبت نام</a>
						</li>
				  </ul>
				</div>
			</nav>
		</div>
	</header>
	
   <p>&nbsp;</p>

	<!-- End Header -->

	<!-- Start Pro Search -->

	<div class="bg-white py-3 mt-3">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<form class="d-flex justify-content-center align-items-center text-center" method="post" action="<?php echo base_url()?>index.php/ahoocontroller/search">
						<select class="custom-select ml-3 select-custom" id="filter" name="poetField" >
							<option value="" selected>نام شاعر ...</option>
							<option value="حافظ">حافظ</option>
							<option value="سعدی">سعدی</option>
							<option value="خیام">خیام</option>
							<option value="مولانا">مولانا</option>
							<option value="هوشنگ ابتهاج">هوشنگ ابتهاج</option>
							<option value="فرخی یزدی">فرخی یزدی</option>
							<option value="سهراب سپهری">سهراب سپهری</option>
						</select>
						<select class="custom-select ml-3 select-custom" id="filter" name="formField" >
							<option value="" selected>قالب شعری ...</option>
							<option value="مثنوی">مثنوی</option>
							<option value="غزل">غزل</option>
							<option value="رباعی">رباعی</option>
							<option value="کلاسیک و نیمایی">کلاسیک و نیمایی</option>
						</select>
						<select class="custom-select ml-3 select-custom" id="filter" name="bookField">
							<option value="" selected>نام اثر ...</option>
							<option value="دیوان حافظ">دیوان حافظ</option>
							<option value="رباعیات خیام">رباعیات خیام</option>
							<option value="آینه در آینه">آینه در آینه</option>
							<option value="سیاه مشق">سیاه مشق</option>
							<option value="تاسیان">تاسیان</option>
							<option value="مثنوی معنوی">مثنوی معنوی</option>
							<option value="دیوان شمس">دیوان شمس</option>
							<option value="دیوان اشعار">دیوان اشعار</option>
							<option value="بوستان">بوستان</option>
							<option value="حجم سبز">حجم سبز</option>
							<option value="مرگ رنگ">مرگ رنگ</option>
						</select>
						<button type="submit" class="btn btn-block search-ctgr-btn mt-2" id="search" name="search" value="submit" > جستجو</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- End Pro Search -->

	<!-- Start Alert -->
	<main>
		<div class="margin">
			<div class="container">
				<div class="alert alert-danger">
					<strong style="font-family: iybd">&nbsp;&nbsp;نتیجه ای یافت نشد. </strong>
				</div>				
			</div>
		</div>
		
	<!-- End Alert -->
		
</main>	
	<!--Start Footer -->
<footer>
	<div class="footer-top py-5">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-3 text-right mb-3">
					<h6 class="ttf mb-4 h6dr" style="font-family: iybd"> درباره ما </h6>
					<p class="dtf"> این پروژه توسط دانشجویان بدبخت رشته ی کامپیوتر به ثمر رسیده است. برای رسیدن به مرحله ی نوشتن متن با محتوایی در این قسمت، به زمان کافی نیاز است. </p>
				</div>
				<div class="col-12 col-lg-3 text-right mb-3">
					<h6 class="ttf mb-4 h6dr" style="font-family: iybd"> ارتباط با ما </h6>
					<p class="d-block dtf mb-2"> تهران، بهشت زهرا، مزار شهدا </p>
					<p class="d-block dtf mb-2"> info@beheshtzahra.com </p>
					<p class="d-block dtf mb-2"> 021-9022061202 </p>
				</div>
				<div class="col-12 col-lg-3 text-right mb-3">
					<h6 class="ttf mb-4 h6dr" style="font-family: iybd"> شاعران پرطرفدار </h6>
						<ul class="nav pr-0 flex-column">
						<li class="nav-item"> <a href="<?php echo base_url() ?>index.php/ahooController/loginInsidePoet/1" class="nav-link pt-0 pr-0 dtf"> حافظ </a> </li>
						<li class="nav-item"> <a href="<?php echo base_url() ?>index.php/ahooController/loginInsidePoet/6" class="nav-link pt-0 pr-0 dtf"> سعدی </a> </li>
						<li class="nav-item"> <a href="<?php echo base_url() ?>index.php/ahooController/loginInsidePoet/2" class="nav-link pt-0 pr-0 dtf"> خیام </a> </li>
						<li class="nav-item"> <a href="<?php echo base_url() ?>index.php/ahooController/loginInsidePoet/7" class="nav-link pt-0 pr-0 dtf"> سهراب </a> </li>
						<li class="nav-item"> <a href="<?php echo base_url() ?>index.php/ahooController/loginInsidePoet/4" class="nav-link pt-0 pr-0 dtf"> مولانا </a> </li>
					</ul>
				</div>
				<div class="col-12 col-lg-3 text-right mb-3">
					<h6 class="ttf mb-4 h6dr" style="font-family: iybd"> عضویت در غزلنامه </h6>
					<div class="follow2 d-flex justify-content-between justify-content-lg-between">
						<div class="form-group ml-0 d-flex flex-row">
							<input pe="text" class="form-control rounded-pill py-3 border-0" placeholder="ایمیل خود را وارد کنید . . . .">
							<a href="#" class="btn text-light"> <i class="fa fa-chevron-left align-middle" style="font-size: 13px"></i> </a>

						</div>

					</div>
					<h6 class="ttf my-4 h6dr" style="font-family: iybd"> شبکه های اجتماعی </h6>
					<div class="follow">
					 	<a href="#" class="ml-3 ttf"> <i class="fab fa-telegram align-middle"></i> </a>
						<a href="#" class="ml-3 ttf"> <i class="fab fa-instagram align-middle"></i> </a>
						<a href="#" class="ml-3 ttf"> <i class="fab fa-facebook align-middle"></i> </a>
						<a href="#" class="ml-3 ttf"> <i class="fab fa-google-plus align-middle"></i> </a>
						<a href="#" class="ml-3 ttf"> <i class="fab fa-twitter align-middle"></i> </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom py-3 fmbg">
		<div class="container">
			<div class="row d-flex flex-column flex-lg-row justify-content-center align-items-center text-center">
				<p class="mb-0 text-dark mt-2 mt-lg-0 fsz-footer"> هرگونه کپی برداری از این سایت نه از لحاظ شرعی و نه از لحاظ قانونی هیچ مشکلی ندارد </p>
			</div>
		</div>
	</div>
</footer>
	<!--End Footer -->
</body>
	
	
	
	
<script src="<?php echo base_url() ?>js/all.min.js"></script>
<script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>js/slick.min.js"></script>
<script src="<?php echo base_url() ?>js/myscripts.js"></script>
<script src="<?php echo base_url() ?>js/popper.min.js"></script>
</html>
