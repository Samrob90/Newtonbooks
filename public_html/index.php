<?php

include("../private/load.php") ;
?>
<!doctype html>
<html class="no-js" lang="zxx">


<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Newtonbookonline | Buy any book online</title>
	<meta name="description" content="Newton Books Online | #1 Online Bookstore and Publishing House in Ghana | Christian Literature | Business Books | Leadership Books">
	<meta name="keyworlds" content="bookstore , bookshop, buy books in ghana ">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/images/fav.png">
	<link rel="apple-touch-icon" href="assets/images/fav.png">


	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800"
		rel="stylesheet">
	

	<?php include("include/pixel.php") ?>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- Cusom css -->
	<link rel="stylesheet" href="assets/css/custom.css">

	<!-- Modernizer js -->
	<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
	
</head>

<body>


	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<?php include("include/header2.php") ?>
		<!-- //Header -->
	
		<!-- End Search Popup -->
		<!-- Start Slider area -->
		<div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme" style="height:100vh!important;">
			<!-- Start Single Slide -->
			<div class="slide animation__style10 bg-image--8 fullscreen align__center--left">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="slider__content">
								<div class="contentbox">
									<h3>Newtonbooks</h3>
									<h2>The more  you <span>Learn</span></h2>
									<h2 class="another">The more you <span>Earn </span></h2>
									<p style="font-weight:bold;">Get the best books from the best minds in business, Leadership, Enterpreneurship, Academia, Communication and Marketing to make your life better </p>
									<a class="shopbtn" href="shop"><button class="btn btn-primary">  Shop now </button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slide -->
			<!-- Start Single Slide -->
			<div class="slide animation__style10 bg-image--9 fullscreen align__center--left">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="slider__content">
								<div class="contentbox">
									<h3>Newtonbooks</h3>
									<h2 style="">The more  you <span>Learn</span></h2>
									<h2 class="another" style="">The more you <span>Earn </span></h2>
									<p style="">Get the best books from the best minds in business, Leadership, Enterpreneurship, Academia, Communication and Marketing to make your life better </p>
									<a class="shopbtn" href="shop"><button class="btn btn-primary">Shop now </button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Single Slide -->
		</div>
		<!-- End Slider area -->
		<!-- Start BEst Seller Area -->
		<section class="wn__product__area brown--color pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="section__title text-center">
							<h2 class="title__be--2">New <span class="color--theme">Products</span></h2>
							<!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have
								suffered lebmid alteration in some ledmid form</p> -->
						</div>
					</div>
				</div>
				<!-- Start Single Tab Content -->
				<div class="furniture--4 border--round arrows_style owl-carousel owl-theme mt--50" >
						<?php
						 $db = new main_db(HOSTNAME, HOSTUSERNAME, HOSTPASSWORD, DBNAME);
								$SQL = $db->Fetch("SELECT * FROM books ORDER BY id DESC LIMIT 6", null);
								foreach($SQL as $value){
									$img = json_decode($value['images']);
									$url = [];
									if(count($img) == 1){
										 $url[]= $img[0];
										 $url[]= $img[0];
									}else{
										$url = [];
										$url[] = $img[0];
										$url[]= $img[1];
										
									}
								// 	var_dump($url);
								// var_dump($url[0]);
									?>
									
					<!-- Start Single Product -->
					<div class="product product__style--3" >
						<div class="product__thumb">
							<a class="first__img" href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><img src="<?="uploades/".$url[0]?>"
									width="100px" height="384" alt="product image"></a>
							<a class="second__img animation1" href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><img
									src="<?="uploades/".$url[1]?>" width="100px" height="384" alt="product image"></a>
							<div class="hot__box color--2">
								<span class="hot-label">HOT</span>
							</div>
						</div>
						<div class="product__content content--center">
							<h4><a href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><?=$value['title']?></a></h4>
							<ul class="prize d-flex">
								<li>GHS <?=$value['discount_price']?></li>
								<li class="old_prize"> <?=($value['full_price'] > $value['discount_price'])? "GHS ".$value['full_price'] : ""?></li>
							</ul>
							<div class="action">
								<div class="actions_inner">
								<ul class="add_to_links text-center">
												<li id="<?=$value['id']?>">
												<button href="#productmodal" data-toggle="modal" class="btn btn-info modal-view detail-link  view_quick_click"><i class="fa fa-eye text-white"></i> <small>Quick View</small></button>
												</li>
												</ul>
								</div>
							</div>
							<div class="product__hover--content">
								<br>
								<!-- <ul class="rating d-flex">
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li><i class="fa fa-star-o"></i></li>
									<li><i class="fa fa-star-o"></i></li>
								</ul> -->
							</div>
						</div>
					</div>
					<!-- Start Single Product -->
									<?php
								}
						?>
					
					
					</div>
				</div>
				<!-- End Single Tab Content -->
			</div>
		</section>
		<!-- Start BEst Seller Area -->
		<!-- Start Testimonial Area -->
		<section class="wn__testimonial__area bg--gray ptb--80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-12">
						<div class="testimonial__container text-center">
							<div class="tes__img__slide thumb_active">
								
								<div class="testimonial__img text-center" style="margin-left:-350px!important;">
									<span><img img src="assets/images/testimonial/1.jpg" alt="testimonial image" width="100px" height="100px"></span>
								</div>
							</div>
							<div class="testimonial__text__slide testext_active">
								
								<div class="clint__info">
											<p>This simple philosophy has set us on a course to eradicate illiteracy in every form by
											saving books and making them accessible for individuals who are willing to make
											meaning with their lives by the power of information, which intend to shapes their minds, share them a story, give them a bit of wisdom.
											<br><br>
											

											Go ahead and get yourself some good reads and let the reading begins, our customer success team is on stand by to give you superior customer service.</p>
									<div class="name__post">
										<span>Isaac M. Newton</span>
										<h6>CEO</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonial Area -->
		<!-- Start Best Seller Area -->
		<section class="wn__bestseller__area bg--white pt--80  pb--30">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2">All <span class="color--theme">Products</span></h2>
							<!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have
								suffered lebmid alteration in some ledmid form</p> -->
						</div>
					</div>
				</div>
				<div class="row mt--50">
					<div class="col-md-12 col-lg-12 col-sm-12">
						<div class="product__nav nav justify-content-center" role="tablist">
							<a class="nav-item nav-link active" data-toggle="tab" href="#nav-all" role="tab">ALL</a>
							<a class="nav-item nav-link" data-toggle="tab" href="#nav-biographic"
								role="tab">BIOGRAPHIC</a>
							<a class="nav-item nav-link" data-toggle="tab" href="#nav-adventure"
								role="tab">LEADERSHIP</a>
							<a class="nav-item nav-link" data-toggle="tab" href="#nav-children" role="tab">FINANCIAL SUCCESS</a>
							
						</div>
					</div>
				</div>
				<div class="tab__container mt--60">
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade show active" id="nav-all" role="tabpanel">

						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							
							<?php
								$db = new main_db(HOSTNAME, HOSTUSERNAME, HOSTPASSWORD, DBNAME);
								$allprouct = $db->Fetch("SELECT * FROM books ORDER BY id ASC LIMIT 5", null);
								
								foreach($allprouct as $value){
									$img2 = json_decode($value['images']);
									$url2 = [];
									if(count($img2) == 1){
										 $url2[]= $img2[0];
										 $url2[]= $img2[0];
									}else{
										$url2= [];
										$url2[] = $img2[0];
										$url2[]= $img2[1];

										
									}
									
									?>
							<div class="single__product">
									<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><img
													src="<?="uploades/".$url2[0]?>" width="100px" height="384" alt="product image"></a>
											<a class="second__img animation1" href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><img
													src="<?="uploades/".$url2[1]?>" width="100px" height="384" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
										    </div>
										</div>
										<div class="product__content content--center">
											<h4><a href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><?=$value['title']?></a></h4>
											<ul class="prize d-flex">
											<li>GHS <?=$value['discount_price']?></li>
								<li class="old_prize"> <?=($value['full_price'] > $value['discount_price'])? "GHS ".$value['full_price'] : ""?></li>
											</ul>
											<div class="action">
												<div class="actions_inner">
												<ul class="add_to_links text-center">
											<li id="<?=$value['id']?>">
											<button href="#productmodal" data-toggle="modal" class="btn btn-info modal-view detail-link  view_quick_click"><i class="fa fa-eye text-white"></i> <small>Quick View</small></button>
											</li>
											</ul>
												</div>
											</div>
											<div class="product__hover--content">
											<br>	
											<!-- <ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul> -->
											</div>
										</div>
									</div>
								</div>
							</div>
									<?php
								}
					?>

					
							
					
							
							</div>
						
<!-- Second row  -->
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							
							<?php
								$db = new main_db(HOSTNAME, HOSTUSERNAME, HOSTPASSWORD, DBNAME);
								$allprouct = $db->Fetch("SELECT * FROM books ORDER BY id ASC LIMIT 5, 10", null);
								
								foreach($allprouct as $value){
									$img2 = json_decode($value['images']);
									$url2 = [];
									if(count($img2) == 1){
										 $url2[]= $img2[0];
										 $url2[]= $img2[0];
									}else{
										$url2= [];
										$url2[] = $img2[0];
										$url2[]= $img2[1];

										
									}
									
									?>
									<div class="single__product">
									<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><img
													src="<?="uploades/".$url2[0]?>" width="100px" height="384" alt="product image"></a>
											<a class="second__img animation1" href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><img
													src="<?="uploades/".$url2[1]?>" width="100px" height="384" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><?=$value['title']?></a></h4>
											<ul class="prize d-flex">
											<li>GHS <?=$value['discount_price']?></li>
								<li class="old_prize"> <?=($value['full_price'] > $value['discount_price'])? "GHS ".$value['full_price'] : ""?></li>
											</ul>
											<div class="action">
												<div class="actions_inner">
												<ul class="add_to_links text-center">
												<li id="<?=$value['id']?>">
												<button href="#productmodal" data-toggle="modal" class="btn btn-info modal-view detail-link  view_quick_click"><i class="fa fa-eye text-white"></i> <small>Quick View</small></button>
												</li>
												</ul>
												</div>
											</div>
											<div class="product__hover--content">
											<br>	
											<!-- <ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul> -->
											</div>
										</div>
									</div>
								</div>
									</div>
								
									<?php
								}
					?>
							
						</div>

							</div>
					
						
					
						
					
					<!-- End Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade" id="nav-biographic" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
								<?php
								$db = new main_db(HOSTNAME, HOSTUSERNAME, HOSTPASSWORD, DBNAME);
								$allprouct = $db->Fetch("SELECT * FROM books WHERE categorie='BIOGRAPHY & AUTOBIOGRAPHY' ORDER BY id ASC LIMIT 5", null);
								
								foreach($allprouct as $value){
									$img2 = json_decode($value['images']);
									$url2 = [];
									if(count($img2) == 1){
										 $url2[]= $img2[0];
										 $url2[]= $img2[0];
									}else{
										$url2= [];
										$url2[] = $img2[0];
										$url2[]= $img2[1];

										
									}
									
									?>
							<div class="single__product">
									<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><img
													src="<?="uploades/".$url2[0]?>" width="100px" height="384" alt="product image"></a>
											<a class="second__img animation1" href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><img
													src="<?="uploades/".$url2[1]?>" width="100px" height="384" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
										    </div>
										</div>
										<div class="product__content content--center">
											<h4><a href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><?=$value['title']?></a></h4>
											<ul class="prize d-flex">
											<li>GHS <?=$value['discount_price']?></li>
								<li class="old_prize"><?=($value['full_price'] > $value['discount_price'])? "GHS ".$value['full_price'] : ""?></li>
											</ul>
											<div class="action">
												<div class="actions_inner">
												<ul class="add_to_links text-center">
												<li id="<?=$value['id']?>">
												<button href="#productmodal" data-toggle="modal" class="btn btn-info modal-view detail-link  view_quick_click"><i class="fa fa-eye text-white"></i> <small>Quick View</small></button>
												</li>
												</ul>
												</div>
											</div>
											<div class="product__hover--content">
											<br>	
											<!-- <ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul> -->
											</div>
										</div>
									</div>
								</div>
							</div>
									<?php
								}
					?>

					
							
					
							
							</div>
						
<!-- Second row  -->
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							
							<?php
								$db = new main_db(HOSTNAME, HOSTUSERNAME, HOSTPASSWORD, DBNAME);
								$allprouct = $db->Fetch("SELECT * FROM books  WHERE categorie='BIOGRAPHY & AUTOBIOGRAPHY' ORDER BY id ASC LIMIT 5, 10", null);
								
								foreach($allprouct as $value){
									$img2 = json_decode($value['images']);
									$url2 = [];
									if(count($img2) == 1){
										 $url2[]= $img2[0];
										 $url2[]= $img2[0];
									}else{
										$url2= [];
										$url2[] = $img2[0];
										$url2[]= $img2[1];

										
									}
									
									?>
									<div class="single__product">
									<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><img
													src="<?="uploades/".$url2[0]?>" width="100px" height="384" alt="product image"></a>
											<a class="second__img animation1" href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><img
													src="<?="uploades/".$url2[1]?>" width="100px" height="384" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><?=$value['title']?></a></h4>
											<ul class="prize d-flex">
											<li>GHS <?=$value['discount_price']?></li>
								<li class="old_prize"> <?=($value['full_price'] > $value['discount_price'])? "GHS ".$value['full_price'] : ""?></li>
											</ul>
											<div class="action">
												<div class="actions_inner">
												<ul class="add_to_links text-center">
												<li id="<?=$value['id']?>">
												<button href="#productmodal" data-toggle="modal" class="btn btn-info modal-view detail-link  view_quick_click"><i class="fa fa-eye text-white"></i> <small>Quick View</small></button>
												</li>
												</ul>
												</div>
											</div>
											<div class="product__hover--content">
											<br>	
											<!-- <ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul> -->
											</div>
										</div>
									</div>
								</div>
									</div>
								
									<?php
								}
					?>
						</div>
					</div>
					<!-- End Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade" id="nav-adventure" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
						<?php
								$db = new main_db(HOSTNAME, HOSTUSERNAME, HOSTPASSWORD, DBNAME);
								$allprouct = $db->Fetch("SELECT * FROM books WHERE categorie='LEADERSHIP' ORDER BY id ASC LIMIT 5", null);
								
								foreach($allprouct as $value){
									$img2 = json_decode($value['images']);
									$url2 = [];
									if(count($img2) == 1){
										 $url2[]= $img2[0];
										 $url2[]= $img2[0];
									}else{
										$url2= [];
										$url2[] = $img2[0];
										$url2[]= $img2[1];

										
									}
									
									?>
							<div class="single__product">
									<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><img
													src="<?="uploades/".$url2[0]?>" width="100px" height="384" alt="product image"></a>
											<a class="second__img animation1" href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><img
													src="<?="uploades/".$url2[1]?>" width="100px" height="384" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
										    </div>
										</div>
										<div class="product__content content--center">
											<h4><a href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><?=$value['title']?></a></h4>
											<ul class="prize d-flex">
											<li>GHS <?=$value['discount_price']?></li>
								<li class="old_prize"> <?=($value['full_price'] > $value['discount_price'])? "GHS ".$value['full_price'] : ""?></li>
											</ul>
											<div class="action">
												<div class="actions_inner">
												<ul class="add_to_links text-center">
												<li id="<?=$value['id']?>">
												<button href="#productmodal" data-toggle="modal" class="btn btn-info modal-view detail-link  view_quick_click"><i class="fa fa-eye text-white"></i> <small>Quick View</small></button>
												</li>
												</ul>
												</div>
											</div>
											<div class="product__hover--content">
											<br>	
											<!-- <ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul> -->
											</div>
										</div>
									</div>
								</div>
							</div>
									<?php
								}
					?>

					
							
					
							
							</div>
						
<!-- Second row  -->
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							
							<?php
								$db = new main_db(HOSTNAME, HOSTUSERNAME, HOSTPASSWORD, DBNAME);
								$allprouct = $db->Fetch("SELECT * FROM books  WHERE categorie='LEADERSHIP' ORDER BY id ASC LIMIT 5, 10", null);
								
								foreach($allprouct as $value){
									$img2 = json_decode($value['images']);
									$url2 = [];
									if(count($img2) == 1){
										 $url2[]= $img2[0];
										 $url2[]= $img2[0];
									}else{
										$url2= [];
										$url2[] = $img2[0];
										$url2[]= $img2[1];

										
									}
									
									?>
									<div class="single__product">
									<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><img
													src="<?="uploades/".$url2[0]?>" width="100px" height="384" alt="product image"></a>
											<a class="second__img animation1" href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><img
													src="<?="uploades/".$url2[1]?>" width="100px" height="384" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="details?id=<?=$value['id']?>t=<?=$value['title']?>"><?=$value['title']?></a></h4>
											<ul class="prize d-flex">
											<li>GHS <?=$value['discount_price']?></li>
								<li class="old_prize"> <?=($value['full_price'] > $value['discount_price'])?"GHS ".$value['full_price'] : ""?></li>
											</ul>
											<div class="action">
												<div class="actions_inner">
												<ul class="add_to_links text-center">
												<li id="<?=$value['id']?>">
												<button href="#productmodal" data-toggle="modal" class="btn btn-info modal-view detail-link  view_quick_click"><i class="fa fa-eye text-white"></i> <small>Quick View</small></button>
												</li>
												</ul>
												</div>
											</div>
											<div class="product__hover--content">
											<br>	
											<!-- <ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul> -->
											</div>
										</div>
									</div>
								</div>
									</div>
								
									<?php
								}
					?>
						</div>
					</div>
					<!-- End Single Tab Content -->
					<!-- Start Single Tab Content -->
					<div class="row single__tab tab-pane fade" id="nav-children" role="tabpanel">
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
						<?php
								$db = new main_db(HOSTNAME, HOSTUSERNAME, HOSTPASSWORD, DBNAME);
								$allprouct = $db->Fetch("SELECT * FROM books WHERE categorie='FINANCIAL SUCCESS' ORDER BY id ASC LIMIT 5", null);
								
								foreach($allprouct as $value){
									$img2 = json_decode($value['images']);
									$url2 = [];
									if(count($img2) == 1){
										 $url2[]= $img2[0];
										 $url2[]= $img2[0];
									}else{
										$url2= [];
										$url2[] = $img2[0];
										$url2[]= $img2[1];

										
									}
									
									?>
							<div class="single__product">
									<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><img
													src="<?="uploades/".$url2[0]?>" width="100px" height="384" alt="product image"></a>
											<a class="second__img animation1" href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><img
													src="<?="uploades/".$url2[1]?>" width="100px" height="384" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
										    </div>
										</div>
										<div class="product__content content--center">
											<h4><a href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><?=$value['title']?></a></h4>
											<ul class="prize d-flex">
											<li>GHS <?=$value['discount_price']?></li>
								<li class="old_prize"> <?=($value['full_price'] > $value['discount_price'])?"GHS ".$value['full_price'] : ""?></li>
											</ul>
											<div class="action">
												<div class="actions_inner">
												<ul class="add_to_links text-center">
												<li id="<?=$value['id']?>">
												<button href="#productmodal" data-toggle="modal" class="btn btn-info modal-view detail-link  view_quick_click"><i class="fa fa-eye text-white"></i> <small>Quick View</small></button>
												</li>
												</ul>
												</div>
											</div>
											<div class="product__hover--content">
											<br>	
											<!-- <ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul> -->
											</div>
										</div>
									</div>
								</div>
							</div>
									<?php
								}
					?>

					
							
					
							
							</div>
						
<!-- Second row  -->
						<div class="product__indicator--4 arrows_style owl-carousel owl-theme">
							
							<?php
								$db = new main_db(HOSTNAME, HOSTUSERNAME, HOSTPASSWORD, DBNAME);
								$allprouct = $db->Fetch("SELECT * FROM books  WHERE categorie='FINANCIAL SUCCESS' ORDER BY id ASC LIMIT 5, 10", null);
								
								foreach($allprouct as $value){
									$img2 = json_decode($value['images']);
									$url2 = [];
									if(count($img2) == 1){
										 $url2[]= $img2[0];
										 $url2[]= $img2[0];
									}else{
										$url2= [];
										$url2[] = $img2[0];
										$url2[]= $img2[1];

										
									}
									
									?>
									<div class="single__product">
									<!-- Start Single Product -->
								<div class="col-lg-3 col-md-4 col-sm-6 col-12">
									<div class="product product__style--3">
										<div class="product__thumb">
											<a class="first__img" href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><img
													src="<?="uploades/".$url2[0]?>" width="100px" height="384" alt="product image"></a>
											<a class="second__img animation1" href="detail?id=<?=$value['id']?>t=<?=$value['title']?>"><img
													src="<?="uploades/".$url2[1]?>" width="100px" height="384" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALLER</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="details?id=<?=$value['id']?>t=<?=$value['title']?>"><?=$value['title']?></a></h4>
											<ul class="prize d-flex">
											<li>GHS <?=$value['discount_price']?></li>
								<li class="old_prize"> <?=($value['full_price'] > $value['discount_price'])?"GHS ".$value['full_price'] : ""?></li>
											</ul>
											<div class="action">
												<div class="actions_inner">
												<ul class="add_to_links text-center">
												<li id="<?=$value['id']?>">
												<button href="#productmodal" data-toggle="modal" class="btn btn-info modal-view detail-link  view_quick_click"><i class="fa fa-eye text-white"></i> <small>Quick View</small></button>
												</li>
												</ul>
												</div>
											</div>
											<div class="product__hover--content">
											<br>	
											<!-- <ul class="rating d-flex">
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li class="on"><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
													<li><i class="fa fa-star-o"></i></li>
												</ul> -->
											</div>
										</div>
									</div>
								</div>
									</div>
								
									<?php
								}
					?>
						</div>
					</div>
					<!-- End Single Tab Content -->
					
<!-- Second row  -->
						
			</div>
		</section>
		<!-- Start BEst Seller Area -->
		<!-- Start NEwsletter Area -->
		<section class="wn__newsletter__area bg-image--2">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150">
						<div class="section__title text-center">
							<h2>Stay With Us</h2>
						</div>
						<div class="newsletter__block text-center">
							<p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest
								lookbooks and exclusive offers.</p>


								<div class="alert alert-warning alert-dismissible fade show mbs" style="display:none;" role="alert">
							<strong></strong> <span class="tst">exp</span>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
								</div>

							<form action="#">
								<div class="newsletter__box">
									<input type="email" placeholder="Enter your e-mail" id="newsletter_email" required>
									<button data-toggle="modal" class="subscribe_to_newletter">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		
	
		<!-- End NEwsletter Area -->
		<!-- Start Recent Post Area -->
		<section class="wn__recent__post style-two ptb--80">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title text-center">
							<h2 class="title__be--2"> <span class="color--theme">Blog</span></h2>
							<!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have
								suffered lebmid alteration in some ledmid form</p> -->
						</div>
					</div>
				</div>
				<div class="row mt--50">
					

						<?php 
							$db = new main_db(HOSTNAME, HOSTUSERNAME, HOSTPASSWORD, DBNAME);
							$post = $db->Fetch("SELECT * FROM blog ORDER BY id DESC limit 3", null);
							foreach($post as $Post){
								?>
									<div class="col-md-6 col-lg-4 col-sm-12">
						<div class="post__itam">
							<div class="content">
								<h3><a href="blog-details?wp=<?=$Post['title']?>&dw=<?=$Post['id']?>"><?=htmlspecialchars($Post['title'])?></a></h3>
								<article><?=(strlen($Post['article']) > 200)? substr($Post['article'], 0 , 200).'..':htmlspecialchars($Post['article']);  ?></article>
								<div class="post__time">
									<span class="day"><?=$Post['created_at']?></span>
									<div class="post-meta">
										<ul>
											<li><a href="#"><i class="bi bi-love"></i><?=$Post['likes']?></a></li>
											<li><a href="#"><i class="bi bi-chat-bubble"></i><?=$Post['comment']?></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
								<?php
							}
						?>

				
					
				</div>
			</div>
		</section>
		<!-- End Recent Post Area -->
	
		<!-- //Footer Area -->
		<!-- QUICKVIEW PRODUCT -->
		<div id="quickview-wrapper">
			<!-- Modal -->
			<div class="modal fade" id="productmodal" tabindex="-1" role="dialog">
				<div class="modal-dialog modal__container" role="document">
					<div class="modal-content">
						<div class="modal-header modal__header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
									aria-hidden="true">&times;</span></button>
						</div>
						
						<div class="modal-body">
						<div class="img-loader text-center " style="margin-top:10vh;">
							<img src="assets/images/ajax-loader.gif" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END QUICKVIEW PRODUCT -->
		
	</div>
	<!-- //Main wrapper -->
	<!-- Footer Area -->
	 <?php include("include/footer.php") ?>
	 <script src="assets/js/main.js"></script>
</body>
</html>