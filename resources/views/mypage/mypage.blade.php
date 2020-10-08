<!doctype html>
<html lang="ja" >
  <head>
    <title>アルバムサンプル for Bootstrap · Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">     
    <link href="{{ secure_asset('css/match.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/dashbord.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/carousel.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/theme.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/min.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/magnificpopup.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
  </head>
  <body >
   <body >
    <a id="skippy" class="sr-only sr-only-focusable" href="#content">
  <div class="container">
    <span class="skiplink-text">Skip to main content</span>
  </div>
</a>

    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <!-- <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a> -->
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">会社名</a>
  <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
  <input class="form-control form-control-dark w-100" type="text" placeholder="検索" aria-label="検索">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <!-- <a class="nav-link" href="#">Sign out</a> -->
      <a class="nav-link" href="#">サインアウト</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              <!-- Dashboard <span class="sr-only">(current)</span> -->
              ダッシュボード <span class="sr-only">(現在位置)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/match">
              <span data-feather="file"></span>
              <!-- Orders -->
              MATCH
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/post">
              <span data-feather="shopping-cart"></span>
              <!-- Products -->
              POST
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/mypage">
              <span data-feather="users"></span>
              <!-- Customers -->
              MY PAGE
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/message">
              <span data-feather="bar-chart-2"></span>
              <!-- Reports -->
              MESSAGE
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/question">
              <span data-feather="layers"></span>
              <!-- Integrations -->
              お問い合わせ
            </a>
          </li>
        </ul>

        
      </div>
    </nav>
  <!-- Main Wrapper -->
<main class="wrapper">

	<!-- Header -->
	<header class="header pull-left">

		<!-- Mobile menu -->
		<div class="mobile-bar visible-sm visible-xs">
			<div class="hamburger-menu">
				  <div class="bar"></div>	
			</div>
		</div>
		<!-- Mobile menu end -->

		<div class="avatar">
			<img src="assets/images/my-pic.jpg" alt="avatar">
		</div>

		<div class="name">
			<h1>名前</h1>
			<span>UX/UI Designer</span>
		</div>

		<!-- Social Icons -->
		<div class="social-icons">
			<ul>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<!-- Social Icons end -->

		<!-- Navigation bar -->
		<nav class="main-nav">
			<ul class="navigation">
				
				<li><a href="#about">About Me</a></li>
				<li><a href="#experience">Expereince</a></li>
				<li><a href="#education">Education</a></li>
				<li><a href="#works">Works</a></li>
				
				<li><a href="#contact">Contact</a></li>
			</ul>
		</nav>
		<!-- Navigation bar end -->

		<!-- Footer Copyright -->
		<div class="copyright">
			<span>© Copyright 2018 Designstub</span>
		</div>
		<!-- Footer Copyright end -->

	</header>
	<!-- Header end -->
    <!-- Main Content -->
	<div class="main-content pull-right">

		
		<!-- Section About -->
		<section id="about" class="about">

			<div class="section-header">
				<h2>自己紹介</h2>
				<a href="#" class="resume-download" data-toggle="tooltip" data-placement="bottom" title="Download">
					<i class="fa fa-download" aria-hidden="true"> </i>  Download Resume
				</a>
			</div>

			<!-- Intro -->
			<div class="intro">
				
				<p>Hello, My name is John Doe. Lorem ipsum dolor sit amet, usu sumo dicant vulputate in. Quando fabellas adipiscing nam an. An vis congue oporteat, no eros facer suavitate eos. An debet affert aliquid ius. Veritus placerat est ea, est ne nominavi suscipit maluisset.</p>

				<ul class="info">
					<li><strong>誕生日:</strong> August 14, 1982</li>
					<li><strong>地域:</strong> Central Main Rd, Australia</li>
					<li><strong>Email:</strong> contact@yourmail.com</li>
				</ul>

				

			</div>
			<!-- Intro end -->

			<!-- Skills -->
			<!--<div class="skills">-->

			<!--	<div class="row">-->

			<!--		<div class="col-md-6 col-sm-6 col-xs-12 item">-->
			<!--			<div class="skill-info clearfix">-->
			<!--				<h3 class="pull-left">Photoshop</h3>-->
			<!--				<span class="pull-right">90%</span>-->
			<!--			</div>-->
			<!--			<div class="progress">-->
			<!--				<div class="progress-bar" role="progressbar" aria-valuenow="90"-->
			<!--				aria-valuemin="0" aria-valuemax="100" style="width:90%">-->
			<!--				</div>-->
			<!--			</div>-->
			<!--		</div>-->

			<!--		<div class="col-md-6 col-sm-6 col-xs-12 item">-->
			<!--			<div class="skill-info clearfix">-->
			<!--				<h3 class="pull-left">Illustrator</h3>-->
			<!--				<span class="pull-right">80%</span>-->
			<!--			</div>-->
			<!--			<div class="progress">-->
			<!--				<div class="progress-bar" role="progressbar" aria-valuenow="80"-->
			<!--				aria-valuemin="0" aria-valuemax="100" style="width:80%">-->
			<!--				</div>-->
			<!--			</div>-->
			<!--		</div>-->

			<!--		<div class="col-md-6 col-sm-6 col-xs-12 item">-->
			<!--			<div class="skill-info clearfix">-->
			<!--				<h3 class="pull-left">Indesign</h3>-->
			<!--				<span class="pull-right">45%</span>-->
			<!--			</div>-->
			<!--			<div class="progress">-->
			<!--				<div class="progress-bar" role="progressbar" aria-valuenow="45"-->
			<!--				aria-valuemin="0" aria-valuemax="100" style="width:45%">-->
			<!--				</div>-->
			<!--			</div>-->
			<!--		</div>-->

			<!--		<div class="col-md-6 col-sm-6 col-xs-12 item">-->
			<!--			<div class="skill-info clearfix">-->
			<!--				<h3 class="pull-left">Corel Draw</h3>-->
			<!--				<span class="pull-right">60%</span>-->
			<!--			</div>-->
			<!--			<div class="progress">-->
			<!--				<div class="progress-bar" role="progressbar" aria-valuenow="60"-->
			<!--				aria-valuemin="0" aria-valuemax="100" style="width:60%">-->
			<!--				</div>-->
			<!--			</div>-->
			<!--		</div>-->

			<!--	</div>-->

			<!--</div>-->
			<!-- Skills end -->
		</section>
		<!-- Section About end -->

		

		<!-- Section Resume -->
		<section id="experience" class="resume">
			
			<div class="section-header">
				<h2>主な活動内容</h2>
				
			</div>

			<div class="row">

				
				
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="top-item resume-item">
								<h2>注目する目標について</h2>
								<span>CREATIVE DIRECTOR  |  JANUARY, 2013 - PRESENT</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.</p>
							</div>
						</div>
						
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="resume-item">
								<h2>注目する目標について</h2>
								<span>CREATIVE DIRECTOR  |  MARCH'11 - DECEMBER'12</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam.</p>
							</div>
						</div>

						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="resume-item">
								<h2>注目する目標について</h2>
								<span>SENIOR UX DESIGNER  |  JULY'09 - APRIL'11</span>
								<p>Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.</p>
							</div>
						</div>

					<!-- Page 1 End -->

				
	
			</div>

		</section>
		<!-- Section Resume end -->
		
		
	
		<!-- Section Resume -->
		<section id="education" class="resume">
			
			<div class="section-header">
				<h2>Education</h2>
				
			</div>

			<div class="row">

			
				
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="top-item resume-item">
								<h2>Master Degree Of Design</h2>
								<span>JANUARY, 2007</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.</p>
							</div>
						</div>
						
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="resume-item">
								<h2>Bachelor Of Arts</h2>
								<span>JUNE, 2004</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit maxime laborum sequi, magni earum quo soluta sint velit numquam.</p>
							</div>
						</div>

						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="resume-item">
								<h2>Master Degree Of Design</h2>
								<span>JANUARY, 2001</span>
								<p>Odit maxime laborum sequi, magni earum quo soluta sint velit numquam, ipsum illum! Nostrum possimus illo architecto praesentium ut aliquam dolorem.</p>
							</div>
						</div>
						
						

					<!-- Page 1 End -->

				
			

			</div>

		</section>
		<!-- Section Resume end -->
		
		
		

		<!-- Section Works -->
		<section id="works" class="works clearfix">
			
			<div class="section-header">
				<h2>Portfolio</h2>
			</div>

			<!-- Control -->
			<div class="control">
				<ul>
					<li class="active"><a class="filter" data-filter="all">All Projects</a></li>
					<li><a class="filter" data-filter="1">Logo</a></li>
					<li><a class="filter" data-filter="2">Vector</a></li>
					<li><a class="filter" data-filter="3">Audio</a></li>
					<li><a class="filter" data-filter="4">Video</a></li>
				</ul>
			</div>

			<!-- Items Outer -->
			<div class="item-outer row clearfix">
				<div class="col-md-4 col-sm-6 col-xs-12 filtr-item" data-category="1" data-sort="value">
					<div class="item">
						<a href="assets/images/work1.jpg" class="work-image">
							<div class="title">
								<div class="inner">
									<h2>Project Name</h2>
									<span>View Details</span>
								</div>
							</div>
						</a>
						<div class="overlay"></div>
						<img src="assets/images/work1.jpg" alt="portfolio">
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 col-xs-12 filtr-item" data-category="2" data-sort="value">
					<div class="item">
						<a href="hassets/images/work2.jpg" class="work-image">
							<div class="title">
								<div class="inner">
									<h2>Project Name</h2>
									<span>View Details</span>
								</div>
							</div>
						</a>
						<div class="overlay"></div>
						<img src="assets/images/work2.jpg" alt="portfolio">
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12 filtr-item" data-category="1" data-sort="value">
					<div class="item">
						<a href="assets/images/work3.jpg" class="work-image">
							<div class="title">
								<div class="inner">
									<h2>Project Name</h2>
									<span>View Details</span>
								</div>
							</div>
						</a>
						<div class="overlay"></div>
						<img src="assets/images/work3.jpg" alt="portfolio">
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12 filtr-item" data-category="2" data-sort="value">
					<div class="item">
						<a href="assets/images/work4.jpg" class="work-image">
							<div class="title">
								<div class="inner">
									<h2>Project Name</h2>
									<span>View Details</span>
								</div>
							</div>
						</a>
						<div class="overlay"></div>
						<img src="assets/images/work4.jpg" alt="portfolio">
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 col-xs-12 filtr-item" data-category="3" data-sort="value">
					<div class="item">
						<a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/237603952&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true" class="work-video">
							<div class="title">
								<div class="inner">
									<h2>Project Name</h2>
									<span>View Details</span>
								</div>
							</div>
						</a>
						<div class="overlay"></div>
						<img src="assets/images/work5.jpg" alt="portfolio">
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12 filtr-item" data-category="4" data-sort="value">
					<div class="item">
						<a href="https://www.youtube.com/watch?v=fZdkJKFwDE0" class="work-video">
							<div class="title">
								<div class="inner">
									<h2>Project Name</h2>
									<span>View Details</span>
								</div>
							</div>
						</a>
						<div class="overlay"></div>
						<img src="assets/images/work6.jpg" alt="portfolio">
					</div>
				</div>
			</div>
			
		</section>
		<!-- Section Works end -->

		<!-- Section Testimonials -->
		<section id="testimonials" class="testimonials">
			
			<div class="section-header">
				<h2>Testimonials</h2>
			</div>

			<!-- Carousel -->
			<div class="testimonial-carousel">

				<div class="item">
					<div class="row">
						<div class="col-md-2 col-sm-2 hidden-xs">
							<div class="thumb">
								<img src="assets/images/testimonial-img1.jpg" alt="testimonial-customer">
							</div>
						</div>
						<div class="text col-md-10 col-sm-10 col-xs-12">
							<p>Pri diam soluta molestie at, id melius ponderum mel, nominavi adipisci partiendo per te. No usu doctus dolorem liberavisse, vim nusquam invidunt id.</p>
							<span class="author">- John Doe -</span>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="row">
						<div class="col-md-2 col-sm-2 hidden-xs">
							<div class="thumb">
								<img src="assets/images/testimonial-img2.jpg" alt="testimonial-customer">
							</div>
						</div>
						<div class="text col-md-10 col-sm-10 col-xs-12">
							<p>Pri diam soluta molestie at, id melius ponderum mel, nominavi adipisci partiendo per te. No usu doctus dolorem liberavisse, vim nusquam invidunt id.</p>
							<span class="author">- John Doe -</span>
						</div>
					</div>
				</div>

				<div class="item">
					<div class="row">
						<div class="col-md-2 col-sm-2 hidden-xs">
							<div class="thumb">
								<img src="assets/images/testimonial-img3.jpg" alt="testimonial-customer">
							</div>
						</div>
						<div class="text col-md-10 col-sm-10 col-xs-12">
							<p>Pri diam soluta molestie at, id melius ponderum mel, nominavi adipisci partiendo per te. No usu doctus dolorem liberavisse, vim nusquam invidunt id.</p>
							<span class="author">- John Doe -</span>
						</div>
					</div>
				</div>

			</div>
			<!-- Carousel end -->

		</section>
		<!-- Section Testimonials end -->

		<!-- Section Contact -->
		<section id="contact" class="contact">
			
			<div class="section-header">
				<h2>Get In Touch</h2>
			</div>

			<!-- Contact Form -->
			<form method="post" action="form/contactform.php">

				<div class="row"><!-- Row -->

					<div class="col-md-6 col-sm-6 col-xs-12"><!-- Name input -->
						<div class="form-group">
							<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Your Name" required>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12"><!-- Email input -->
						<div class="form-group">
							<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Your Email" required>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12"><!-- Phone input -->
						<div class="form-group">
							<input type="text" class="form-control" name="InputPhone" id="InputPhone" placeholder="Phone (optional)">
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12"><!-- Subject input -->
						<div class="form-group">
							<input type="text" class="form-control" id="InputSubject" name="InputSubject" placeholder="Subject">
						</div>
					</div>

					<div class="col-md-12 col-sm-12 col-xs-12"><!-- Message textarea -->
						<div class="form-group">
							<textarea name="InputMessage" id="InputMessage" class="form-control" rows="6" placeholder="Message" required></textarea>
						</div>
					</div>

				</div><!-- Row end -->

				<input type="submit" name="submit" id="submit" value="Send Message" class="btn btn-default pull-left"><!-- Send Button -->

			</form>
			<!-- Contact Form end -->

		</section>
		<!-- Section Contact end -->

	</div>
	<!-- Main Content end -->

</main>
  </div>
</div>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()
</script>

<!-- Graphs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
  var ctx = document.getElementById("myChart");
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      datasets: [{
        data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false,
      }
    }
  });
</script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
  window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery-slim.min.js"><\/script>')
</script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script><script src="/docs/4.5/assets/js/vendor/anchor.min.js"></script>
<script src="/docs/4.5/assets/js/vendor/clipboard.min.js"></script>
<script src="/docs/4.5/assets/js/vendor/bs-custom-file-input.min.js"></script>
<script src="/docs/4.5/assets/js/src/application.js"></script>
<script src="/docs/4.5/assets/js/src/search.js"></script>
<script src="/docs/4.5/assets/js/src/ie-emulation-modes-warning.js"></script>
  </body>
</html>
