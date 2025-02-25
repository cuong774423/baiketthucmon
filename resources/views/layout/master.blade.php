<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bánh Mỳ Huynh Hoa</title>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="/source/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="/source/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="/source/assets/dest/rs-plugin/css/settings.css">
	<!-- <link rel="stylesheet" href="/source/assets/dest/rs-plugin/css/responsive.css">  -->
	<link rel="stylesheet" title="style" href="/source/assets/dest/css/style.css">
	<link rel="stylesheet" href="/source/assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="/source/assets/dest/css/huong-style.css">
    @yield('css')
</head>
<body>
@include('layout.header')
    
    <div  class="container_main">
        @yield('content')
    </div>
    

	@include('layout.footer')
    @yield('js')
    <script src="/source/assets/dest/js/jquery.js"></script>
	<script src="/source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="/source/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="/source/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="/source/assets/dest/vendors/animo/Animo.js"></script>
	<script src="/source/assets/dest/vendors/dug/dug.js"></script>
	<script src="/source/assets/dest/js/scripts.min.js"></script>
	<script src="/source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="/source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="/source/assets/dest/js/waypoints.min.js"></script>
	<script src="/source/assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="/source/assets/dest/js/custom2.js"></script>
    <script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
</body>
</html>
