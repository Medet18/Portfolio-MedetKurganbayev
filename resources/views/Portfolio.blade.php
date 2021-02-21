<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<title>Portfolio</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('asset/CSSFolder/Portfolio.css') }}">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script type="text/javascript" src="{{ asset('asset/JSFolder/Portfolio.js') }}"></script>
</head>
<body>
	<section class="sect">
		<!--navigation-->
		<nav>
			<!--logo-->
			<a href="#" class="logo">G T Internet</a>
			<!--menu-->
			<ul>
				<li><a href="#" class="active" onclick="window.location.reload()">Home</a></li>
				<li><a id = "about" onclick="change(this)" href="#">ASkils</a></li>
				<li><a href="#" onclick="change(this)">Hobbi</a></li>
				<li><a href="#" onclick="change(this)">Contact</a></li>
			</ul>
		</nav>
		<!--Text0--0000------------------>
		<div class="text_container" id="text_container">
			<p>Hello</p>
			<p>I'M Me</p>
			<p>I am Software Enginear <br>$ Full Stack developer</p>
			<button class="hire_btn">Hire me</button>
			<button class="down_cv">Download CV</button>
		</div>

		<!--Model------------------>
		<img id="model" src="https://cdn3.iconfinder.com/data/icons/human-resources-2-6/48/106-512.png" class="model" alt="user">
	</section>
	<!--about section --------------------------------->
	<div class="about_container">
		<!--img------------------1------------>
		<div class="sec" id="about_container">
	
			<div class="circle circle1">
				<img src="https://developers.google.com/web/images/contributors/philipwalton.jpg">
			</div>
	
			<div class="circle circle2">
				<img src="https://cdn.mos.cms.futurecdn.net/Tw4oCiJrKzJLgHrwMHuRHf.jpg">
			</div>
	
			<div>
				<h2>About My Life!</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			  	consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			 Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			  	consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	
		<!----------------2nd part----------------------->
	<div id="services">
		<div class="services_text">
			<p>Services</p>
			<p>Services required</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="body">
			<div class="container">
				<div class="card">
					<div class="box">
						<div class="percent">
							<svg>
								<circle cx='70' cy='70' r = '70'></circle>
								<circle cx='70' cy='70' r = '70'></circle>
							</svg>
							<div class="number">
								<h2>90<span>%</span></h2>
							</div>
						</div>
						<h2 class="raiText">HTML</h2>
					</div>
				</div>

				<div class="card">	
					<div class="box">
						<div class="percent">
							<svg>
								<circle cx='70' cy='70' r = '70'></circle>
								<circle cx='70' cy='70' r = '70'></circle>
							</svg>
							<div class="number">
								<h2>85<span>%</span></h2>
							</div>
						</div>
						<h2 class="raiText">CSS</h2>
					</div>
				</div>

				<div class="card">
					<div class="box">
						<div class="percent">
							<svg>
								<circle cx='70' cy='70' r = '70'></circle>
								<circle cx='70' cy='70' r = '70'></circle>
							</svg>
							<div class="number">
								<h2>65<span>%</span></h2>
							</div>
						</div>
						<h2 class="raiText">JAVASCRIPT</h2>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--3rd part------------------------------------>
	<div id="movies_list" class="mov">
		<!-------box-1--------->
		<div class="movies_box">
			<!--------img_3---------->
			<div class="movies_img">
				<div class="quality">HDRip</div>
				<img src="https://i.pinimg.com/originals/a2/10/bb/a210bb32416b8369004e3c0f79f50c07.jpg" alt="Captain Marvel">
			</div>
			<!----------text----------------->
			<a class="a" target="_blank" href="index.html" onload="load(this)">
				Captain Marvel (2019) Starting from September only in cinemas HD quality
			</a>
		</div>

		<div class="movies_box">
			<!--------img_1---------->
			<div class="movies_img">
				<div class="quality">HDRip</div>
				<img src="https://i.pinimg.com/736x/50/be/da/50beda9281aea5004e5ebfd1b9f85a95--movie-couples-wallpaper.jpg" alt="Avatar">
			</div>
			<!----------text----------------->
			<a href="#">
				Avatar (2006) Starting from September only in cinemas HD quality
			</a>
		</div>
		
		<div class="movies_box">
			<!--------img_2---------->
			<div class="movies_img">
				<div class="quality">HDRip</div>
				<img src="https://picfiles.alphacoders.com/138/138143.jpg" alt="Reinger">
			</div>
			<!----------text----------------->
			<a href="#">
				Single Reinger (2012) Starting from September only in cinemas HD quality
			</a>
		</div>

		<div class="movies_box">
			<!--------img_4---------->
			<div class="movies_img">
				<div class="quality">HDRip</div>
				<img src="https://filmhd.newmulti-torrent.ru/wp-content/uploads/2019/06/shazam-film-2019-skachat-torrent-besplatno-webrip-avi-kachestvo.jpg" alt="Shazam">
			</div>
			<!----------text----------------->
			<a href="#">
				Shazam (2019) Starting from September only in cinemas HD quality
			</a>
		</div>

		<div class="movies_box">
			<!--------img_3---------->
			<div class="movies_img">
				<div class="quality">HDRip</div>
				<img src="https://i.pinimg.com/originals/75/d5/10/75d5106643d5ec1903cfc8d929b7bd3a.jpg" alt="Ant man">
			</div>
			<!----------text----------------->
			<a href="#">
				Ant Man (2015) Full Movie in Russia with English subtitles | HDRip 1080p HD
			</a>
		</div>

		<div class="movies_box">
			<!--------img_4---------->
			<div class="movies_img">
				<div class="quality">HDRip</div>
				<img src="https://i0.wp.com/batman-news.com/wp-content/uploads/2019/12/Birds-of-Prey-Official-Images-Movie-Poster-3-01.jpeg?quality=80&strip=info&ssl=1" alt="Bird of prey">
			</div>
			<!----------text----------------->
			<a href="#">
				Birds of prey (2019) Full Movie in Russia with English subtitles | HDRip 1080p HD
			</a>
		</div>

	</div>

	<!---------4th part------------------>
	<div id="body4">
		<div class="container4">
			<div class = "box4">
				<div class="icon">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
					<h4>Address</h4>
					<h3>Aktau, 12, Kazakhstan</h3>
				</div>
			</div>


			<div class = "box4">
				<div class="icon">
					<i class="fa fa-phone" aria-hidden="true"></i>
					<h4>Mobile</h4>
					<h3>+7(778)-985-83-90</h3>
				</div>
			</div>


			<div class = "box4">
				<div class="icon">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<h4>Email</h4>
					<h3>190103471@stu.sdu.edu.kz</h3>
				</div>
			</div>
		</div>
	</div>	
	</div>
</body>
</html>