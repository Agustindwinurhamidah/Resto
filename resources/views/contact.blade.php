<!DOCTYPE html>
<!--
	Resto by GetTemplates.co
	URL: https://gettemplates.co
-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Entertaiment Resto</title>
    <meta name="description" content="Resto">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar">
	<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
	<div class="sidenav-content">
		<p>
			Kuncen WB1, Wirobrajan 10010, DIY
		</p>
		<p>
			<span class="fs-16 primary-color">(+68) 120034509</span>
		</p>
		<p>info@yourdomain.com</p>
	</div>
</div>	<div id="side-search" class="sidenav">
	<a href="javascript:void(0)" id="side-search-close">&times;</a>
	<div class="sidenav-content">
		<form action="">

			<div class="input-group md-form form-sm form-2 pl-0">
			  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
			  <div class="input-group-append">
			    <button class="input-group-text red lighten-3" id="basic-text1">
			    	<i class="fas fa-search text-grey" aria-hidden="true"></i>
			    </button>
			  </div>
			</div>

		</form>
	</div>
	
 	
</div>	<div id="canvas-overlay"></div>
	<div class="boxed-page">
		<nav id="navbar-header" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="/">
            <img src="img/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex justify-content-between">
                <li class="nav-item only-desktop">
                    <a class="nav-link" id="side-nav-open" href="#">
                        <span class="lnr lnr-menu"></span>
                    </a>
                </li>
                 @php $menu = new App\Models\User();
                     $list = $menu->getMenu();
                @endphp
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('about-us')}}">About</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          News
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          @foreach($list['news'] as $news)
                          <a class="dropdown-item" href="{{url('news/'.$news->slug)}}">{{$news->title}}</a>
                          @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Products
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          @foreach($list['products'] as $products)
                          <a class="dropdown-item" href="{{url('products/'.$products->slug)}}">{{$products->title}}</a>
                          @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Program
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          @foreach($list['programs'] as $programs)
                          <a class="dropdown-item" href="{{url('programs/'.$programs->slug)}}">{{$programs->title}}</a>
                          @endforeach
                        </div>
                    </li>
                </div>
            </ul>
            
            <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="#">
                <img src="img/logo.png" alt="">
            </a>
            <ul class="navbar-nav d-flex justify-content-between">
                <div class="d-flex flex-lg-row flex-column">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('contact-us')}}">Contact Us</a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</nav>		<!-- Welcome Section -->

<!-- End of Welcome Section -->		<footer class="mastfoot pb-5 bg-white section-padding pb-0">
    <div class="inner container">
         <div class="row">

         	<div class="col-lg-12">
         		<div class="footer-widget pl-lg-5 pl-0">
         			<h4>Newsletter</h4>
	         		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	         		<form id="newsletter" action="{{url('contact-us')}}" method="POST">
                        @csrf
						<div class="form-group">
							<input type="email" class="form-control" id="emailNewsletter" aria-describedby="emailNewsletter" placeholder="Enter email" name="email" required>
						</div>
                        <div class="form-group">
                            <textarea class="form-control" name="text" placeholder="Context" required></textarea>
                        </div>
						<button type="submit" class="btn btn-primary w-100">Submit</button>
					</form>
         		</div>
         		
         	</div>
         	<div class="col-md-12 d-flex align-items-center">
         		<p class="mx-auto text-center mb-0">Copyright 2019. All Right Reserved. Design by <a href="https://gettemplates.co" target="_blank">GetTemplates</a></p>
         	</div>
            
        </div>
    </div>
</footer>	</div>
	
</div>
	<!-- External JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
	<script src="vendor/bootstrap/popper.min.js"></script>
	<script src="vendor/bootstrap/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js "></script>
	<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
	<script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
	<script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

	<!-- Main JS -->
	<script src="js/app.min.js "></script>
</body>
</html>
