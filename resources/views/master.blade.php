<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<link rel="stylesheet" href="css/app.css" type="text/css">
		<link rel="stylesheet" href="css/form.css" type="text/css">
		<script src="js/app.js"></script>
		<link rel="stylesheet" href="css/onepage-scroll.css" type="text/css">
		<link rel="stylesheet" href="css/onepage-scroll2.css" type="text/css">
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
		<script src="js/jquery.onepage-scroll.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
			<script>
			  $(document).ready(function(){
			  $(".main").onepage_scroll({
				sectionContainer: "section",
				responsiveFallback: 600,
				loop: true
			  });
				});	
			</script>

			
			<script type="text/javascript">			
			function ani(e) {
				if(e.target.offsetParent.className == "col-xs-12 col-sm-12 col-md-4 col-lg-3 my-faq") {
					e.target.offsetParent.className += "-animated";
					console.log(e.target.offsetParent.className);
				}
				else if (e.target.offsetParent.className == "col-xs-12 col-sm-12 col-md-4 col-lg-3 my-faq-animated") {
					var str = e.target.offsetParent.className;
					var res = str.substring(44, -9);
					console.log(res);
					e.target.offsetParent.className = res;
					console.log(e.target.offsetParent.className);
				}
				var elems = document.getElementsByTagName('*'), i;
				for (i in elems) {
					if((' ' + elems[i].className + ' ').indexOf(' ' + "my-faq" + ' ')
							> -1) {
						console.log(elems[i]);
						
					}
				}
			}
			</script>
    </head>
    <body>
	



        @section('menu')
		<div class="menu">
			<div class="vertical-menu">
				<div class="button"><a data-index="1"href="#1" class="active">Home</a><li class="active"></li></div>
				<div class="button"><a data-index="2" href="#2" class="">What We Do?</a><li></li></div>
				<div class="button"><a data-index="3" href="#3" class="">How We Do?</a><li></li></div>
				<div class="button"><a data-index="4" href="#4" class="">FAQ</a><li></li></div>
				<div class="button"><a data-index="5" href="#5" class="">Contact</a><li></li></div>
			</div>
				<div class="verticalLine">
					<div class="verticalLineWhite">
						<div class="verticalLineBlue">
						</div>
					</div>
				</div>
		</div>

<div class="wrapper">
	  <div class="main">
	    
		<section class="page1">
			<div class="page_container">
				@yield('homePage2')
			</div>
		</section>
		<section class="page2">
			<div class="page_container">
				@yield('wwdPage')
			</div>
		</section>
		<section class="page3">
			<div class="page_container">
				@yield('hwdPage')
			</div>
		</section>
		<section class="page4">
			<div class="page_container">
				@yield('faqPage')
			</div>
		</section>
		<section class="page5">
			<div class="page_container">
				@yield('contactPage')
			</div>
		</section>

		</div>
	</div>
    </body>
</html>