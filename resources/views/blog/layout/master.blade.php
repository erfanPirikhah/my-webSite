<!DOCTYPE html>
<html lang="en">
	
<head>
	{!! SEO::generate() !!}
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>دلتا وب</title>
		<link rel="shortcut icon" href="/blog/assets/img/Team_Deltalogo_square2.png">
        <!-- All Plugins Css -->
		
		
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
		<link href="/blog/assets/css/all.css" rel="stylesheet">


        <!-- Custom CSS -->
     
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
    </head>




<body >

	


       <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
    
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
		<div id="main-wrapper">

			
            <!-- ============================================================== -->
            <!-- Top header  -->
			<!-- ============================================================== -->
			@if (url()->current()== 'http://localhost:8000' )
				@include('blog.layout.nav')	
			@else
				@include('blog.layout.nav2')
			@endif
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
		
		
				@yield('content')
			
			
			<!-- ============================ Sign up End ================================== -->
			
			<!-- ============================ Footer Start ================================== -->
			@include('blog.layout.footer')
			<!-- ============================ Footer End ================================== -->
			
			<!-- Modal -->
		
			<!-- End Video Modal -->
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		
	
			
	
		

		<script src="/blog/assets/js/all.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->
	
	


		@include('sweet::alert')

	
	</body>
	

</html>