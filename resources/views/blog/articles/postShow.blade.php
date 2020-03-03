@extends('blog.layout.master')

@section('content')


		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
  
			
			<!-- ============================ Blog Grid Start ================================== -->
			<section>
				<div class="container">
					
					<div class="row">
	
						<div class="col-lg-8 col-md-8 col-sm-12">
							<article class="blog-news big-detail-wrap">
								<div class="blog-detail-wrap">
								
									<!-- Featured Image -->
									<figure class="img-holder">
										<a href="blog-detail.html"><img src="/storage/{{$post->image}}" class="img-responsive" alt="{{$post->title}}"></a>
										<div class="blog-post-date theme-bg">
											{{jdate($post->created_at)->ago()}}
										</div>
									</figure>
									
									<!-- Blog Content -->
									<div class="full blog-content">
										<div class="post-meta">توسط: <a href="#" class="author theme-cl">Admin</a></div>
										<a href="blog-detail.html"><h3>{{$post->title}}</h3></a>
										<div class="blog-text">
                                            <p>{!!$post->body!!}</p>
										</div>
										
										<!-- Blog Share Option -->
										
										
									</div>
									<!-- Blog Content -->
									
								</div>
							</article>
							
							<!-- Comment -->
				
									
						</div>
						
						<!-- Sidebar Start -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="sidebar">
								
							
								
								<div class="side-widget">
									<div class="side-widget-header">
										<h4><i class="ti-check-box"></i>آخرین پست ها</h4>
									</div>
									<div class="side-widget-body p-t-10">
										<div class="side-list">
											<ul class="side-blog-list">
												
												
                                                    @foreach ($latestpost as $item)
                                                    <li>
                                                        <a href="{{route('post.show',['post'=>$item->id])}}">
                                                            <div class="blog-list-img">
                                                                <img src="/storage/{{$item->image}}" class="img-responsive" alt="{{$item->image}}">
                                                            </div>
                                                        </a>
                                                        <div class="blog-list-info">
                                                            <h5><a href="#" title="blog">{{$item->title}}</a></h5>
                                                            <div class="blog-post-meta">
                                                                <span class="updated">{{jdate($item->created_at)->ago()}}</span> 			
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach

											</ul>
										</div>
									</div>
								</div>
								
							
								
							</div>
						</div>
						
					</div>
					
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- ============================ Blog Grid End ================================== -->
			
    
@endsection