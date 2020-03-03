@extends('blog.layout.master')

@section('content')

			<!-- ============================================================== -->
		

		<br>
		
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div  >
				<div class="container">
					<div class="col-lg-12 col-md-12">
						<div class="pt-caption text-center mt-5">
						
							<p><a href="/">خانه</a><span class="current-page">اخبار و مقالات</span></p>
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
						
						@foreach ($posts as $post)
						
						
						
								
							<div class="col-lg-4 col-md-4">
								<div class="blog-grid-wrap mb-4" data-aos="fade-up" data-aos-duration="1200">
									<div class="blog-grid-thumb">
										<a href="blog-detail.html"><img src="/storage/{{$post->image}}" class="img-responsive" alt="{{$post->title}}" /></a>
										<div class="bg-cat-info">
											<div class="post-m-info">
												
												<h5 class="pm-date">{{jdate($post->created_at)->ago()}}</h5>
											</div>
										</div>
									
									</div>
									<div class="blog-grid-content">
										<h4 class="cnt-gb-title"><a href="blog-detail.html">{{$post->title}}</a></h4>
										<p>{{$post->excerpt}}</p>
									</div>
									<div class="blog-grid-meta">
										<div class="gb-info-author">
											<p><strong>توسط </strong>Admin</p>
										</div>
									
										<div>
											<a href="{{route('post.show',["post"=>$post->slug])}}" class="read-more">ادامه مطلب<i class="ti-arrow-right"></i></a>
										
										</div>
									</div>
								</div>
							</div>
					@endforeach	
						
					
						
						
				</div>
			</section>
			<div class="clearfix"></div>
			{{$posts->render()}}
			<!-- ============================ Blog Grid End ================================== -->
@endsection