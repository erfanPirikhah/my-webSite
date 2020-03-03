@extends('blog.layout.master')

@section('content')

<section>
  <div class="container">
  
   
    
    <div class="row mb-5">
      
      <div class="col-lg-5 col-md-5">
        <div class="product-thumb">

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
               <img class="d-block w-100" src="/storage/{{$post->image}}" alt="First slide">
              </div>
              @foreach (json_decode($post->images ,true) as $img)
             
              <div class="carousel-item" >
                <img class="d-block w-100" src="/storage/{{$img}}" alt="Second slide">
              </div>
              @endforeach
              


              {{-- <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Third slide">
              </div> --}}
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
      </div>
      
      <div class="col-lg-7 col-md-7">
        <div class="product-detail">
        
          <h4 class="vr-single-product-title">{{$post->title}}</h4>
        
          
          <div class="short-desc mt-2">
            <p>{!!$post->body!!}</p>
         </div>
        </div>
      </div>
      
    </div>
    
    <!-- Product Detail -->
    <div class="row mb-5">
     
    </div>
  </section>





@endsection