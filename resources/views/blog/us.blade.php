@extends('blog.layout.master')


@section('content')
       <!-- ============================ Hero Banner  Start================================== -->
			<div >
				<div class="container">
					<div class="col-lg-12 col-md-12">
						<div class="pt-caption text-center mt-5">
							<h1  style="color:#faaf40">در تماس باشید</h1>
							<p><a href="/"  style="color:#faaf40">خانه</a><span class="current-page"  style="color:#faaf40">تماس با ما</span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Who We Are Start ================================== -->
            <section>
				<div class="container">
					
					<div class="row">
						
						<div class="col-lg-5 col-md-5 bg-primary">
							<div class="contact-address light-text">
								<div class="add-box">
									<div class="add-icon-box">
										<i class="ti-home"></i>
									</div>
									<div class="add-text-box">
										<h4>مدیر تم ایکس</h4>
                                         مدیر و برنامه نویس سایت <br>
                                         عرفان پیری خواه
									</div>
								</div>
								
							
								
								<div class="add-box">
									<div class="add-icon-box">
										<i class="ti-email"></i>
									</div>
									<div class="add-text-box">
										<h4>ایمیل ها</h4>
										virasat@gmail.com<br>
										my.virasat@gmail.com<br>
									</div>
								</div>
								<div class="add-box">
									<div class="add-icon-box">
										<i class="ti-headphone"></i>
									</div>
									<div class="add-text-box">
										<h4>تماس ها</h4>
										91+ 123 456 9857<br>
										91+ 258 548 5426<br>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-md-7">
							<div class="contact-form">
                              <form action="{{route('us.store')}}" method="POST">
                                @CSRF
                                @include('layout.errors')
									<div class="form-row">
										<div class="form-group col-md-6">
										  <label>نام</label>
										  <input type="text" name="name" class="form-control" placeholder="نام">
										</div>
										<div class="form-group col-md-6">
										  <label>ایمیل</label>
										  <input type="email" name="email" class="form-control" placeholder="ایمیل">
										</div>
                                    </div>
                                    <div class="form-group">
										<label>شماره موبایل</label>
										<input type="text" name="mobile"  class="form-control" placeholder="شماره موبایل">
                                    </div>
                                    
									<div class="form-group">
										<label>موضوع</label>
										<input type="text" name="description"  class="form-control" placeholder="موضوع">
									</div>
									<div class="form-group">
										<label>پیام</label>
										<textarea class="form-control" name="body" placeholder="اینجا تایپ کنید ..."></textarea>
									</div>
									<button type="submit" class="btn btn-primary">ارسال درخواست</button>
								</form>
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>


@endsection