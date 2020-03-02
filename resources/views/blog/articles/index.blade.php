@extends('blog.layout.master')

@section('content')
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader" style="display: none;">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Themex</p>
            </div>
        </div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <div class="topbar" id="top">
                <div class="header light">
                    <div class="container po-relative">
                        <nav class="navbar navbar-expand-lg header-nav-bar">
                            <a href="index-2.html" class="navbar-brand"><img src="assets/img/logo.png" alt="Virasat"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-align-right"></span></button>
                            <div class="collapse navbar-collapse hover-dropdown font-14 ml-auto" id="navigation">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item dropdown nav-dropdown"> 
										<a class="nav-link dropdown-toggle" href="javascript:void(0)" id="nav-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">خانه <i class="fa fa-angle-down m-l-5"></i></a>
										<div class="dropdown-menu b-none font-14 animated fadeInUp">
											<div class="row">
												<div class="col-lg-3 col-md-6">
													<ul class="list-style-none">
														<li><h6>صفحات اصلی عالی</h6></li>
														<li><a href="index-2.html">استارت آپ</a></li>
														<li><a href="business.html">کسب و کار</a></li>
														<li><a href="agency.html">آژانس</a></li>
														<li><a href="seo-smo.html">سئو</a></li>
														
													</ul>
												</div>
												<div class="col-lg-3 col-md-6">
													<ul class="list-style-none">
														<li><h6>صفحات اصلی هوشمند</h6></li>
														<li><a href="landing-page.html">صفحه لندینگ</a></li>
														<li><a href="digital-marketing.html">بازاریابی دیجیتال</a></li>
														<li><a href="software.html">نرم افزار و برنامه</a></li>
														<li><a href="corporate.html">شرکتی</a></li>
														
													</ul>
												</div>
												<div class="col-lg-3 col-md-6">
													<ul class="list-style-none">
														<li><h6>صفحات اصلی استاندارد</h6></li>
														<li><a href="digital-studio.html">استودیو دیجیتال</a></li>
														<li><a href="creative.html">طراحی خلاقانه</a></li>
														<li><a href="business-corporate.html">کسب و کار و شرکت</a></li>
														<li><a href="landing-one.html">لندینگ تک صفحه ای</a></li>
													</ul>
												</div>
												<div class="col-lg-3 col-md-6">
													<ul class="list-style-none">
														<li><h6>صفحات لندینگ اضافی</h6></li>
														<li><a href="landing-two.html">صفحه لندینگ دو</a></li>
														<li><a href="landing-three.html">صفحه لندینگ سه</a></li>
														<li><a href="landing-four.html">صفحه لندینگ چهار</a></li>
														<li><a href="landing-five.html">صفحه لندینگ پنج</a></li>
													</ul>
												</div>
												
											</div>
										</div>
									</li>
									
									<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">صفحات <i class="fa fa-angle-down m-l-5"></i></a>
										<ul class="b-none dropdown-menu font-14 animated fadeInUp">
											<li><a class="dropdown-item" href="about.html">درباره ما</a></li>
											<li><a class="dropdown-item" href="about-2.html">درباره ما 2</a></li>
											<li><a class="dropdown-item" href="services.html">خدمات</a></li>
											<li><a class="dropdown-item" href="contact.html">بگو سلام</a></li>
											<li><a class="dropdown-item" href="contact-2.html">بگو سلام 2</a></li>
											<li><a class="dropdown-item" href="our-team.html">تیم ما</a></li>
											<li><a class="dropdown-item" href="our-team-2.html">تیم ما 2</a></li>
											<li><a class="dropdown-item" href="portfolio.html">نمونه کارها</a></li>
											<li><a class="dropdown-item" href="error-page.html">صفحه ارور</a></li>
										</ul>
									</li>
									
									<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">وبلاگ <i class="fa fa-angle-down m-l-5"></i></a>
										<ul class="b-none dropdown-menu font-14 animated fadeInUp">
											<li><a class="dropdown-item" href="blog-grid.html">وبلاگ شبکه ای</a></li>
											<li><a class="dropdown-item" href="blog-grid-2.html">وبلاگ شبکه ای 2</a></li>
											<li><a class="dropdown-item" href="blog-detail.html">جزئیات وبلاگ</a></li>
										</ul>
									</li>
									
									<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">فروشگاه <i class="fa fa-angle-down m-l-5"></i></a>
										<ul class="b-none dropdown-menu font-14 animated fadeInUp">
											<li class="dropdown-submenu"> <a class="dropdown-toggle dropdown-item" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">محصولات فروشگاه <i class="fa fa-angle-right ml-auto"></i></a>
												<ul class="dropdown-menu menu-right font-14 b-none animated flipInY">
													<li><a class="dropdown-item" href="shop-2-column.html">فروشگاه 2 ستونه</a></li>
													<li><a class="dropdown-item" href="shop-3-column.html">فروشگاه 3 ستونه</a></li>
													<li><a class="dropdown-item" href="shop-left-sidebar.html">فروشگاه با نوارکناری سمت چپ</a></li>
													<li><a class="dropdown-item" href="shop-right-sidebar.html">فروشگاه با نوارکناری سمت راست</a></li>
												</ul>
											</li>
											<li><a class="dropdown-item" href="shop-detail.html">جزئیات فروشگاه</a></li>
											<li><a class="dropdown-item" href="add-to-cart.html">افزودن به سبد خرید</a></li>
											<li><a class="dropdown-item" href="checkout.html">پرداخت</a></li>
										</ul>
									</li>
									
									<li class="nav-item dropdown nav-dropdown"> 
										<a class="nav-link dropdown-toggle" href="javascript:void(0)" id="nav-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">عناصر <i class="fa fa-angle-down m-l-5"></i></a>
										<div class="dropdown-menu b-none font-14 animated fadeInUp">
											<div class="row">
												<div class="col-lg-3 col-md-6">
													<ul class="list-style-none">
														<li><a href="buttons.html">دکمه ها</a></li>
														<li><a href="call-to-action.html">فراخوانی برای اقدام</a></li>
														<li><a href="card.html">کارت</a></li>
														<li><a href="counter.html">شمارنده</a></li>
														
													</ul>
												</div>
												<div class="col-lg-3 col-md-6">
													<ul class="list-style-none">
														<li><a href="form-element.html">عناصر فرم</a></li>
														<li><a href="list-style.html">فهرست استایل</a></li>
														<li><a href="notification.html">اطلاعیه ها</a></li>
														<li><a href="pricing.html">قیمت گذاری</a></li>
														
													</ul>
												</div>
												<div class="col-lg-3 col-md-6">
													<ul class="list-style-none">
														<li><a href="tab.html">زبانه ها</a></li>
														<li><a href="tables.html">جداول</a></li>
														<li><a href="typography.html">تایپوگرافی</a></li>
														<li><a href="video.html">ویدئو</a></li>
													</ul>
												</div>
												<div class="col-lg-3 col-md-6">
													<ul class="list-style-none">
														<li><a href="features.html">باکس برجسته</a></li>
														<li><a href="cover.html">کاور</a></li>
														<li><a href="our-team.html">تیم</a></li>
														<li><a href="our-team-2.html">تیم 2</a></li>
													</ul>
												</div>
												
											</div>
										</div>
									</li>
									
								</ul>
								
								<div class="act-buttons">
									<a class="btn btn-success font-14" href="javascript:void(0)" data-toggle="modal" data-target="#getstarted">شروع کنید</a>
								</div>
								
							</div>
						</nav>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="page-title-wrap pt-img-wrap" style="background:url(assets/img/ser-1.jpg) no-repeat;">
				<div class="container">
					<div class="col-lg-12 col-md-12">
						<div class="pt-caption text-center mt-5">
							<h1>آخرین وبلاگ ما</h1>
							<p><a href="index-2.html">خانه</a><span class="current-page">وبلاگ</span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Blog Grid Start ================================== -->
			<section>
				<div class="container">
					
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<div class="blog-grid-wrap mb-4" data-aos="fade-up" data-aos-duration="1200">
								<div class="blog-grid-thumb">
									<a href="blog-detail.html"><img src="assets/img/banner-3.jpg" class="img-responsive" alt="" /></a>
									<div class="bg-cat-info">
										<div class="post-m-info">
											<h5 class="pm-date">12</h5>
											<h5 class="pm-month">دی</h5>
										</div>
									</div>
									<h6 class="post-cat">سفر و تور</h6>
								</div>
								<div class="blog-grid-content">
									<h4 class="cnt-gb-title"><a href="blog-detail.html">چرا اکثر مردم چارچوب بوت استرپ را استفاده می کنند؟</a></h4>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله.</p>
								</div>
								<div class="blog-grid-meta">
									<div class="gb-info-author">
										<p><strong>توسط </strong>آرش خادملو</p>
									</div>
									<div class="gb-info-cmt">
										<ul>
											<li><a href="#">110<i class="fa fa-comment text-info"></i></a></li>
											<li><a href="#">50<i class="fa fa-heart text-info"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4">
							<div class="blog-grid-wrap mb-4" data-aos="fade-up" data-aos-duration="1200">
								<div class="blog-grid-thumb">
									<a href="blog-detail.html"><img src="assets/img/banner-4.jpg" class="img-responsive" alt="" /></a>
									<div class="bg-cat-info">
										<div class="post-m-info">
											<h5 class="pm-date">10</h5>
											<h5 class="pm-month">بهمن</h5>
										</div>
									</div>
									<h6 class="post-cat">فناوری و مد</h6>
								</div>
								<div class="blog-grid-content">
									<h4 class="cnt-gb-title"><a href="blog-detail.html">تم ایکس راه اندازی قالب جدید و قدرتمند</a></h4>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله.</p>
								</div>
								<div class="blog-grid-meta">
									<div class="gb-info-author">
										<p><strong>توسط </strong>آرش خادملو</p>
									</div>
									<div class="gb-info-cmt">
										<ul>
											<li><a href="#">20<i class="fa fa-comment text-info"></i></a></li>
											<li><a href="#">40<i class="fa fa-heart text-info"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4">
							<div class="blog-grid-wrap mb-4" data-aos="fade-up" data-aos-duration="1200">
								<div class="blog-grid-thumb">
									<a href="blog-detail.html"><img src="assets/img/31.jpg" class="img-responsive" alt="" /></a>
									<div class="bg-cat-info">
										<div class="post-m-info">
											<h5 class="pm-date">10</h5>
											<h5 class="pm-month">اسفند</h5>
										</div>
									</div>
									<h6 class="post-cat">کسب و کار</h6>
								</div>
								<div class="blog-grid-content">
									<h4 class="cnt-gb-title"><a href="blog-detail.html">تم ایکس راه اندازی قالب جدید و قدرتمند</a></h4>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله.</p>
								</div>
								<div class="blog-grid-meta">
									<div class="gb-info-author">
										<p><strong>توسط </strong>آرش خادملو</p>
									</div>
									<div class="gb-info-cmt">
										<ul>
											<li><a href="#">250<i class="fa fa-comment text-info"></i></a></li>
											<li><a href="#">40<i class="fa fa-heart text-info"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<div class="blog-grid-wrap mb-4" data-aos="fade-up" data-aos-duration="1200">
								<div class="blog-grid-thumb">
									<a href="blog-detail.html"><img src="assets/img/banner-3.jpg" class="img-responsive" alt="" /></a>
									<div class="bg-cat-info">
										<div class="post-m-info">
											<h5 class="pm-date">12</h5>
											<h5 class="pm-month">دی</h5>
										</div>
									</div>
									<h6 class="post-cat">سفر و تور</h6>
								</div>
								<div class="blog-grid-content">
									<h4 class="cnt-gb-title"><a href="blog-detail.html">چرا اکثر مردم چارچوب بوت استرپ را استفاده می کنند؟</a></h4>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله.</p>
								</div>
								<div class="blog-grid-meta">
									<div class="gb-info-author">
										<p><strong>توسط </strong>آرش خادملو</p>
									</div>
									<div class="gb-info-cmt">
										<ul>
											<li><a href="#">110<i class="fa fa-comment text-info"></i></a></li>
											<li><a href="#">50<i class="fa fa-heart text-info"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4">
							<div class="blog-grid-wrap mb-4" data-aos="fade-up" data-aos-duration="1200">
								<div class="blog-grid-thumb">
									<a href="blog-detail.html"><img src="assets/img/banner-4.jpg" class="img-responsive" alt="" /></a>
									<div class="bg-cat-info">
										<div class="post-m-info">
											<h5 class="pm-date">10</h5>
											<h5 class="pm-month">بهمن</h5>
										</div>
									</div>
									<h6 class="post-cat">فناوری و مد</h6>
								</div>
								<div class="blog-grid-content">
									<h4 class="cnt-gb-title"><a href="blog-detail.html">تم ایکس راه اندازی قالب جدید و قدرتمند</a></h4>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله.</p>
								</div>
								<div class="blog-grid-meta">
									<div class="gb-info-author">
										<p><strong>توسط </strong>آرش خادملو</p>
									</div>
									<div class="gb-info-cmt">
										<ul>
											<li><a href="#">20<i class="fa fa-comment text-info"></i></a></li>
											<li><a href="#">40<i class="fa fa-heart text-info"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4">
							<div class="blog-grid-wrap mb-4" data-aos="fade-up" data-aos-duration="1200">
								<div class="blog-grid-thumb">
									<a href="blog-detail.html"><img src="assets/img/31.jpg" class="img-responsive" alt="" /></a>
									<div class="bg-cat-info">
										<div class="post-m-info">
											<h5 class="pm-date">10</h5>
											<h5 class="pm-month">اسفند</h5>
										</div>
									</div>
									<h6 class="post-cat">کسب و کار</h6>
								</div>
								<div class="blog-grid-content">
									<h4 class="cnt-gb-title"><a href="blog-detail.html">تم ایکس راه اندازی قالب جدید و قدرتمند</a></h4>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله.</p>
								</div>
								<div class="blog-grid-meta">
									<div class="gb-info-author">
										<p><strong>توسط </strong>آرش خادملو</p>
									</div>
									<div class="gb-info-cmt">
										<ul>
											<li><a href="#">250<i class="fa fa-comment text-info"></i></a></li>
											<li><a href="#">40<i class="fa fa-heart text-info"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<div class="blog-grid-wrap mb-4" data-aos="fade-up" data-aos-duration="1200">
								<div class="blog-grid-thumb">
									<a href="blog-detail.html"><img src="assets/img/banner-3.jpg" class="img-responsive" alt="" /></a>
									<div class="bg-cat-info">
										<div class="post-m-info">
											<h5 class="pm-date">12</h5>
											<h5 class="pm-month">دی</h5>
										</div>
									</div>
									<h6 class="post-cat">سفر و تور</h6>
								</div>
								<div class="blog-grid-content">
									<h4 class="cnt-gb-title"><a href="blog-detail.html">چرا اکثر مردم چارچوب بوت استرپ را استفاده می کنند؟</a></h4>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله.</p>
								</div>
								<div class="blog-grid-meta">
									<div class="gb-info-author">
										<p><strong>توسط </strong>آرش خادملو</p>
									</div>
									<div class="gb-info-cmt">
										<ul>
											<li><a href="#">110<i class="fa fa-comment text-info"></i></a></li>
											<li><a href="#">50<i class="fa fa-heart text-info"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4">
							<div class="blog-grid-wrap mb-4" data-aos="fade-up" data-aos-duration="1200">
								<div class="blog-grid-thumb">
									<a href="blog-detail.html"><img src="assets/img/banner-4.jpg" class="img-responsive" alt="" /></a>
									<div class="bg-cat-info">
										<div class="post-m-info">
											<h5 class="pm-date">10</h5>
											<h5 class="pm-month">بهمن</h5>
										</div>
									</div>
									<h6 class="post-cat">فناوری و مد</h6>
								</div>
								<div class="blog-grid-content">
									<h4 class="cnt-gb-title"><a href="blog-detail.html">تم ایکس راه اندازی قالب جدید و قدرتمند</a></h4>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله.</p>
								</div>
								<div class="blog-grid-meta">
									<div class="gb-info-author">
										<p><strong>توسط </strong>آرش خادملو</p>
									</div>
									<div class="gb-info-cmt">
										<ul>
											<li><a href="#">20<i class="fa fa-comment text-info"></i></a></li>
											<li><a href="#">40<i class="fa fa-heart text-info"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-lg-4 col-md-4">
							<div class="blog-grid-wrap mb-4" data-aos="fade-up" data-aos-duration="1200">
								<div class="blog-grid-thumb">
									<a href="blog-detail.html"><img src="assets/img/31.jpg" class="img-responsive" alt="" /></a>
									<div class="bg-cat-info">
										<div class="post-m-info">
											<h5 class="pm-date">10</h5>
											<h5 class="pm-month">اسفند</h5>
										</div>
									</div>
									<h6 class="post-cat">کسب و کار</h6>
								</div>
								<div class="blog-grid-content">
									<h4 class="cnt-gb-title"><a href="blog-detail.html">تم ایکس راه اندازی قالب جدید و قدرتمند</a></h4>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله.</p>
								</div>
								<div class="blog-grid-meta">
									<div class="gb-info-author">
										<p><strong>توسط </strong>آرش خادملو</p>
									</div>
									<div class="gb-info-cmt">
										<ul>
											<li><a href="#">250<i class="fa fa-comment text-info"></i></a></li>
											<li><a href="#">40<i class="fa fa-heart text-info"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="bs-example">
								<ul class="pagination">
									<li><a href="#"><i class="ti-arrow-left"></i></a></li>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#"><i class="ti-arrow-right"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Blog Grid End ================================== -->
@endsection