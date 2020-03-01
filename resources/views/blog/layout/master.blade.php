<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Themex Multipurpose HTML Template</title>
		
        <!-- All Plugins Css -->
        <link href="/blog/assets/css/plugins.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/blog/assets/css/styles.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
    </head>
	
    <body>
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
            @include('blog.layout.nav')
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
		<script src="/blog/assets/js/jquery.min.js"></script>
		<script src="/blog/assets/js/popper.min.js"></script>
		<script src="/blog/assets/js/bootstrap.min.js"></script>
		<script src="/blog/assets/js/aos.js"></script>
		<script src="/blog/assets/js/perfect-scrollbar.jquery.min.js"></script>
		<script src="/blog/assets/js/owl.carousel.min.js"></script>
		<script src="/blog/assets/js/jquery-rating.js"></script>
		<script src="/blog/assets/js/slick.js"></script>
		<script src="/blog/assets/js/slider-bg.js"></script>
		<script src="/blog/assets/js/lightbox.js"></script> 
		<script src="/blog/assets/js/imagesloaded.js"></script>
		<script src="/blog/assets/js/isotope.min.js"></script>
		<script src="/blog/assets/js/custom.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->


	</body>

</html>