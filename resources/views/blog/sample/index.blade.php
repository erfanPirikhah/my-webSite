@extends('blog.layout.master')


@section('content')

    	<!-- ============================ Blog Grid Start ================================== -->
			<section>
				<div class="container">
					
					<div class="row">

						<!-- Single Blog Grid -->
						
                        
                        @foreach ($samples as $item)
                        <div class="col-lg-6 col-md-6">
							<div class="blog-grid-wrap mb-4">
								<div class="blog-grid-thumb">
                                <a href="blog-detail.html"><img src="/storage/{{$item->image}}" class="img-responsive" alt="{{$item->title}}" /></a>
									<div class="bg-cat-info">
										
										<span>{{jdate($item->created_at)->ago()}}</span>
									</div>
								</div>
								<div class="blog-grid-content">
									<h4 class="cnt-gb-title"><a href="blog-detail.html">{{$item->title}}</a></h4>
									<p>{{$item->excerpt}}</p>
								</div>
								<div class="blog-grid-meta">
									<div class="gb-info-author">
										<p><strong>توسط </strong>Admin</p>
                                    </div>
                                    
                                    <div>
                                        <a href="{{route('sample.show',["post"=>$item->slug])}}" class="read-more">ادامه مطلب<i class="ti-arrow-right"></i></a>

                                    </div>
								
								</div>
							</div>
						</div>
                        @endforeach

						
					</div>
					
				
					
				</div>
            </section>
            
            {{$samples->render()}}
			<div class="clearfix"></div>
			<!-- ============================ Blog Grid End ================================== -->
			
			


    
@endsection