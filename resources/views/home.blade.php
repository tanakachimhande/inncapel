<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Welcome to Inncapel</title>
    <link rel="shortcut icon" href="{{asset('images/Inncapel Logo.jpg')}}" type="image/x-icon">
      <!-- Include Compiled CSS -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://unpkg.com/typeit@@{TYPEIT_VERSION}/dist/index.umd.js"></script>
    <script type="module" src="https://unpkg.com/rough-notation?module"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- Animations --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

     <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css"
    rel="stylesheet"
    />



</head>
<body style="background:" class="">
  <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="nav-brand">
        <img src="{{asset('images/Inncapel_Logo-removebg-preview.png')}}" alt="logo" style="width: 100px;">
      </div>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{route('aboutpage')}}">About Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('servicespage')}}">Our Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('projectspage')}}">Projects Done</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('testimonialspage')}}" >Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('faqpage')}}" >FAQ</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Courses
                </a>
                <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item text-success" href="#">Computer  Literacy</a></li>
                  <li><a class="dropdown-item text-success" href="#">Web Development</a></li>
                  <li><a class="dropdown-item text-success" href="#">Digital Marketing</a></li>
                  <li><a class="dropdown-item text-success" href="#">Graphics Design</a></li>
                  <li><a class="dropdown-item text-success" href="#">Personal Development</a></li>
                </ul>
              </li>
            <li class="nav-item">
              <a href="#" class="nav-link"
                >Blog</a
              >
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Our Products
                </a>
                <ol class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item text-success" href="#">LinkQuickly</a></li>
                  <li><a class="dropdown-item text-success" href="#">Cliidi</a></li>
                  <li><a class="dropdown-item text-success" href="#">FilesSyncro</a></li>
                  <li><a class="dropdown-item text-success" href="#">Fiextrac</a></li>
                </ol>
              </li>
            <li class="nav-item">
              <a href="#" class="nav-link"
                >Blog</a
              >
            </li>
            <li class="nav-item">
                <a href="#" type="button" class="btn btn-success btn-lg px-4 me-md-2">Contact Us</a>
            </li>
          </ul>
      </div>
    </div>
</nav><hr class="line"><br><br><br>
<div class="text-center bg-success w-100 text-white p-2 lead fw-bold" style="position: fixed; font-size:22px;z-index:1000;background-color:">Pioneering <span class="ano1">Digital Success</span> For  <span class="ano2">Small Businesses</span></div><br><br>

  <main class="container" >
    <section class="container">
        <div class="col-lg">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-12 col-md-12 col-sm-8 col-lg-6">
                <img src="{{asset('images/Website Creator (1).gif')}}" class="d-block w-100 col-md-12" alt="Wild Landscape" style="height: 60vh;object-fit:contain;" id="gif"/>
              </div>
              <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3" style="color:#4CAF50;" id="heroheader">Digital Automation and Marketing Services</h1><br>
                <p class="lead">
                    Welcome to Inncapel, where we turn digital chaos into digital charisma! Dive into a world of <span class="ano3">SEO sorcery </span> <span class="ano4">, Web wizardly </span> <span class="ano5">,  Design Delights </span><span class="ano6">, Educational escapades </span><span class="ano7">,   Hosting heaven </span><span class="ano8">, Automation awesomeness </span>. Get ready to level up your digital game with a sprinkle of fun and a dash of professionalism. Let's make your online presence shine brighter than a unicorn's mane!.
                </p><br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                  <a href="#" type="button" class="btn btn-success btn-lg px-4 me-md-2">Explore Our Work</a>
                  <a href="#" type="button" class="btn btn-outline-success btn-lg px-4" style="color: #FF6F61">Let's Talk Now !</a>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- About 1 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5" style="background:#0077CC">
        <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
            <div class="col-12 col-md-12 col-lg-6 col-xl-5">
            <img class="img-fluid rounded col-md-12" loading="lazy" src="{{asset('images/About us page.gif')}}" alt="About Us" >
            </div>
            <div class="col-12 col-lg-6 col-xl-7">
            <div class="row justify-content-xl-center">
                <div class="col-12 col-xl-11">
                <h1 class="mb-3 text-center animate__animated animate__bounce animate__repeat-2 anotate" style="color: #FF6F61;">Who we are?</h1>
                <p class="lead text-white">
                    Embarking on a digital journey like never before with Incapel, client passport to a world where innovation meets impact, and technology dances with creativity.
                </p><br>
                <p class="lead text-white">
                    At Inncapel, we're not just digital automation & marketing agency; we're architects of digital brilliance, maestros of innovation, and client partners in the quest for online excellence. We are the intersection where pixels meet passion, and every click tells a story.
                </p><br>
                <div class="row gy-4 gy-md-0 gx-xxl-5X p-2 mb-4">
                    <div class="col-12 col-md-6 mb-4">
                        <div class="d-flex">
                            <div class="me-4">
                                <img src="{{asset('images/project-management.png')}}" alt="Captivate Icon">
                            </div>
                            <div>
                                <h2 class="h4 mb-3 text-white">INNOVATION !</h2>
                                <p class="lead text-white">We provide you solutions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="d-flex">
                            <div class="me-4 ">
                            <img src="{{asset('images/grab.png')}}" alt="Captivate Icon">
                            </div>
                            <div>
                                <h2 class="h4 mb-3 text-white">CAPTIVATION !</h2>
                                <p class="lead text-white">We bring you customers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="d-flex">
                            <div class="me-4 ">
                            <img src="{{asset('images/rise.png')}}" alt="Elevate Icon">
                            </div>
                            <div>
                                <h2 class="h4 mb-3 text-white">ELEVATION !</h2>
                                <p class="lead text-white">We elevate your businesses.</p>
                            </div>
                        </div>
                    </div>
                     <div class="container d-flex justify-content-center">
                        <button type="button" class="btn btn-success btn-lg px-4 me-md-2">Get Our Affordable Services</button>
                     </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    	<!-- Why Us Section -->
	<section class="why-us" style="background: rgba(128, 128, 128, 0.113)">
		<div class="container">
	        <div class="row">
				<div class="col-md-8 offset-md-2">
					<h1 class="mt-5 text-center text-success">Why Choose Us</h1><br><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-4" >
					<div class="box" data-aos="zoom-out-down">
						<span>01</span>
						<h4>Digi Fusion</h4>
						<p class="lead text-white">
                            We are fusionists of the digital realm, seamlessly blending technology and innovation to craft digital solutions that transcend expectations. From websites that breathe life into client brand to apps that redefine user experiences – we do not just follow trends; we set them.
                        </p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="box" data-aos="zoom-out-down">
						<span>02</span>
						<h4> Innovation Unleashed</h4>
						<p class="lead text-white">
                          At Inncapel, innovation is not a choice; it's in our DNA. We thrive on pushing boundaries, challenging norms, and dreaming up the extraordinary. We let us be client guides on a journey where the ordinary has no place.
                        </p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="box" data-aos="zoom-out-down">
						<span>03</span>
						<h4> Strategic Brilliance</h4>
						<p class="lead text-white">
                             Client success is our mission. Our team of digital strategists, tech enthusiasts, and creative minds collaborate to weave strategies that not only elevate client online presence but also drive tangible results. We do not play the game; we strategize to win.
                        </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Why Us Section -->
    <section class="wrapper">
        <div class="container-fostrap">
            <div class="row">
				<div class="col-md-8 offset-md-2">
					<h1 class="mt-5 text-center text-success">What we do !</h1><br><br>

				</div>
                <div class="call-toaction">
                    <a href="#" type="button" class="btn btn-success btn-lg px-4 me-md-2">View Client Testimonials</a><br><br>
                </div><br><br><br><br>
			</div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-4 col-sm-4">
                            <div class="card" data-aos="flip-left">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                <img src="{{asset('images/webdev.jpg')}}" alt="Web dev image" style=" object-fit: cover"/>
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title text-center text-success">
                                         Web Development
                                    </h4>
                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Website Design</div>
                                          </div>
                                          <span class="badge bg-success rounded-pill">100%</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Website Development</div>

                                          </div>
                                          <span class="badge bg-success rounded-pill">100%</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Website Management</div>
                                          </div>
                                          <span class="badge bg-success rounded-pill">100%</span>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4 col-sm-4">
                            <div class="card" data-aos="flip-left">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                <img src="{{asset('images/digital-marketing.jpg')}}" alt="Digital Marketing image" style=" object-fit: cover"/>
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title text-center text-success">
                                         Digital Marketing
                                    </h4>
                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Search Engine Optimization</div>
                                          </div>
                                          <span class="badge bg-success rounded-pill">100%</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Sicial Media Managment</div>

                                          </div>
                                          <span class="badge bg-success rounded-pill">100%</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Video Creation</div>
                                          </div>
                                          <span class="badge bg-success rounded-pill">100%</span>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4 col-sm-4">
                            <div class="card" data-aos="flip-left">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                <img src="{{asset('images/graphics.jpg')}}" alt="Graphics Design image" style=" object-fit: cover"/>
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title text-center text-success">
                                         Graphics Design
                                    </h4>
                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Logos</div>
                                          </div>
                                          <span class="badge bg-success rounded-pill">100%</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Digital Flyers</div>
                                          </div>
                                          <span class="badge bg-success rounded-pill">100%</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Digital Posters</div>

                                          </div>
                                          <span class="badge bg-success rounded-pill">100%</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Company Profiles</div>
                                          </div>
                                          <span class="badge bg-success rounded-pill">100%</span>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4 col-sm-4">
                            <div class="card" data-aos="flip-left">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                <img src="{{asset('images/hosting.jpg')}}" alt="Web hosting image" style=" object-fit: cover"/>
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title text-center text-success">
                                         Web Hosting
                                    </h4>
                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Website Hosting</div>
                                          </div>
                                          <span class="badge bg-success rounded-pill">100%</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Domin Name Registration</div>
                                          </div>
                                          <span class="badge bg-success rounded-pill">100%</span>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4 col-sm-4">
                            <div class="card" data-aos="flip-left">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                <img src="{{asset('images/education.jpg')}}" alt="Education image" style=" object-fit: cover"/>
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title text-center text-success">
                                         Education
                                    </h4>
                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Computer Literacy Course</div>
                                          </div>
                                          <span class="badge bg-success rounded-pill">100%</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Web Design Course</div>
                                          </div>
                                          <span class="badge bg-success rounded-pill">100%</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Web Development Course</div>

                                          </div>
                                          <span class="badge bg-success rounded-pill">100%</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Digital Marketing Course</div>
                                          </div>
                                          <span class="badge bg-success rounded-pill">100%</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Graphics Desing Course</div>
                                          </div>
                                          <span class="badge bg-success rounded-pill">100%</span>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                          <div class="ms-2 me-auto">
                                            <div class="fw-bold">Personal Development</div>
                                          </div>
                                          <span class="badge bg-success rounded-pill">100%</span>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wrapper anotate" style="background: #0077CC">
        <div class="container-fostrap">
            <div class="row">
				<div class="col-md-8 offset-md-2">
                    <h1 class="mb-3 text-center" style="color: #FF6F61;">Our Work</h1><br><br>

				</div>
                <div class="call-toaction">
                    <a href="#" type="button" class="btn btn-success btn-lg px-4 me-md-2">Get  Our Affordable Services</a><br><br>
                </div><br><br><br><br>
			</div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-4 col-sm-4">
                            <div class="card" data-aos="flip-left">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                    <img src="{{asset('images/webdev.jpg')}}" alt="Web dev image" style=" object-fit: cover"/>
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title text-center text-success">
                                        Web Development
                                    </h4>
                                </div>
                                <div class="card-read-more">
                                    <a href='' type="button" class="btn btn-success btn-lg px-4 me-md-2 btn-block text-white">Click Here & Explore More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4 col-sm-4">
                            <div class="card" data-aos="flip-left">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                    <img src="{{asset('images/graphics.jpg')}}" alt="Web dev image" style=" object-fit: cover"/>
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title text-center text-success">
                                         Graphics Design
                                    </h4>
                                </div>
                                <div class="card-read-more">
                                    <a href='' type="button" class="btn btn-success btn-lg px-4 me-md-2 btn-block text-white">Click Here & Explore More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4 col-sm-4">
                            <div class="card" data-aos="flip-left">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                    <img src="{{asset('images/digital-marketing.jpg')}}" alt="Web dev image" style=" object-fit: cover"/>
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title text-center text-success">
                                         Digital Marketing
                                    </h4>
                                </div>
                                <div class="card-read-more">
                                    <a href='' type="button" class="btn btn-success btn-lg px-4 me-md-2 btn-block text-white">Click Here & Explore More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4 col-sm-4">
                            <div class="card" data-aos="flip-left">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                    <img src="{{asset('images/hosting.jpg')}}" alt="Web dev image" style=" object-fit: cover"/>
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title text-center text-success">
                                         Web Hosting
                                    </h4>
                                </div>
                                <div class="card-read-more">
                                    <a href='' type="button" class="btn btn-success btn-lg px-4 me-md-2 btn-block text-white">Click Here & Explore More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4 col-sm-4">
                            <div class="card" data-aos="flip-left">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                    <img src="{{asset('images/education.jpg')}}" alt="Web dev image" style=" object-fit: cover"/>
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title text-center text-success">
                                         Education
                                    </h4>
                                </div>
                                <div class="card-read-more">
                                    <a href='' type="button" class="btn btn-success btn-lg px-4 me-md-2 btn-block text-white">Click & Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background: rgba(128, 128, 128, 0.113)">
        <div class="container py-5">
          <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
              <h1 class="text-success">What our clients say?</h1><br><br>
              <div class="call-toaction">
                <a href="#" type="button" class="btn btn-success btn-lg px-4 me-md-2">Get your qoute today !</a><br><br>
            </div><br><br>
            </div>

          </div>

          <div class="row text-center">
            <div class="col-md-6 col-md-4 col-sm-4  mb-0">
              <div class="card" data-aos="flip-left">
                <div class="card-body py-4 mt-2">
                  <div class="d-flex justify-content-center mb-4">
                    <img src="{{asset('images/profile-user (1).png')}}"
                      class="rounded-circle shadow-1-strong" width="100" height="100" />
                  </div>
                  <h4 class="font-weight-bold text-success">Bright Mutyandaedza</h4>
                  <h6 class="font-weight-bold my-3 text-primary">CEO, Savana Solutions</h6>
                  <p class="mb-2 lead">
                    <i class="fas fa-quote-left pe-2" style="color: #FF6F61"></i>
                    Working with Inncapel was a game-changer for our business! Their web development team not only created a stunning website but also boosted our online presence, leading to increased traffic and conversions. Highly recommend their services!
                    <i class="fas fa-quote-right pe-2" style="color: #FF6F61"></i>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-md-4 mb-0">
              <div class="card" data-aos="flip-left">
                <div class="card-body py-4 mt-2">
                  <div class="d-flex justify-content-center mb-4">
                    <img src="{{asset('images/profile-user (1).png')}}"
                      class="rounded-circle shadow-1-strong" width="100" height="100" />
                  </div>
                  <h4 class="font-weight-bold text-success">Kumbirai Mudadada</h4>
                  <h6 class="font-weight-bold my-3 text-primary">General Manager, One Touch</h6>
                  <p class="mb-2 lead">
                    <i class="fas fa-quote-left pe-2" style="color: #FF6F61"></i>
                    Inncapel turned our vision into reality with their exceptional web development skills. They delivered a user-friendly and visually appealing website that exceeded our expectations. If you want top-notch web development, look no further!
                    <i class="fas fa-quote-right pe-2" style="color: #FF6F61"></i>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-md-4 mb-0">
              <div class="card" data-aos="flip-left">
                <div class="card-body py-4 mt-2">
                  <div class="d-flex justify-content-center mb-4">
                    <img src="{{asset('images/profile-user (1).png')}}"
                    class="rounded-circle shadow-1-strong" width="100" height="100" />
                  </div>
                  <h4 class="font-weight-bold text-success">Regis Goredema</h4>
                  <h6 class="font-weight-bold my-3 text-primary">CEO, Regis Kitchens</h6>
                  <p class="mb-2 lead">
                    <i class="fas fa-quote-left pe-2" style="color: #FF6F61"></i>
                    Thanks to Inncapel, our website now stands out in a competitive market. Their expertise in web development brought our brand to life online, attracting more customers and boosting our credibility. Trustworthy, professional, and highly recommended!
                    <i class="fas fa-quote-right pe-2" style="color: #FF6F61"></i>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

    </section>
    <!-- FAQ 1 - Bootstrap Brain Component -->
<section class=" py-3 py-md-5">
    <div class="container">
      <div class="row gy-5 gy-lg-0 align-items-lg-center">
        <div class="col-12 col-md-12 col-lg-6">
          <img class="img-fluid rounded col-md-12" loading="lazy" src="{{asset('images/FAQs.gif')}}" alt="How can we help you?">
        </div>
        <div class="col-12 col-lg-6">
          <div class="row justify-content-xl-end">
            <div class="col-12 col-xl-11">
                <h1 class="mb-3 text-center" style="color:#4CAF50">How can we help?</h1>
              <p class="lead">We hope you have found an answer to your question. If you need any help, please search your query on our Support Center or contact us via email.</p>
              <div class="accordion accordion-flush" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button lead" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    1. What services does Inncapel offer?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body lead">
                      <p>Inncapel offers a range of services including web development, digital marketing, graphic design, education, web hosting, and automation solutions.</p>

                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header lead" id="headingTwo">
                    <button class="accordion-button collapsed lead" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    2. What sets Inncapel apart from other web development agencies?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body lead">
                        Inncapel stands out for its innovative approach, personalized solutions, and commitment to delivering exceptional results that align with our clients' goals.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed lead" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    3. Does Inncapel provide ongoing support and maintenance for websites?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body lead">
                      <p>Absolutely! Inncapel offers ongoing support and maintenance services to ensure your website runs smoothly, stays secure, and remains up-to-date with the latest technologies.</p>

                    </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed lead" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    4. How can I contact Inncapel for inquiries or support?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body lead">
                      <p>You can reach us through our contact page on our website or email us at [info@inncapel.com | +263778186399]. We're also available on social media platforms for quick communication.</p>

                    </div>
                </div>
                </div>
              </div>
            </div><br><br>
          </div>
          <div class="call-toaction">
            <a href="#" type="button" class="btn btn-success btn-lg px-4 me-md-2">Contact Us For More !</a><br><br>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact 3 - Bootstrap Brain Component -->
<section class="bg-primary py-3 py-md-5">
    <div class="container">
      <div class="row gy-3 gy-md-4 gy-lg-0 align-items-md-center">
        <div class="col-12 col-lg-6">
          <div class="row justify-content-xl-center">
            <div class="col-12 col-xl-11">
                <h1 class="mb-3 text-center anotate" style="color: #FF6F61;">Get in touch</h1>
              <p class="lead text-white">We're always on the lookout to work with new clients. If you're interested in working with us, please get in touch in one of the following ways.</p><br>
              <div class="d-flex mb-5">
                <div class="me-4" style="color:#FF6F61">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-geo" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
                  </svg>
                </div>
                <div>
                  <h4 class="mb-3 text-white">Address</h4>
                  <address class="mb-0 text-white">3156 Old Highfield, Harare, Zimbabwe</address>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-12 col-sm-6">
                  <div class="d-flex mb-5 mb-sm-0">
                    <div class="me-4" style="color:#FF6F61">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telephone-outbound" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
                      </svg>
                    </div>
                    <div>
                      <h4 class="mb-3 text-white">Phone</h4>
                      <p class="mb-0">
                        <a class="link-secondary text-decoration-none text-white" href="tel:+15057922430">+263778186399</a>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <div class="d-flex mb-0">
                    <div class="me-4" style="color:#FF6F61">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                        <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                      </svg>
                    </div>
                    <div>
                      <h4 class="mb-3 text-white">E-Mail</h4>
                      <p class="mb-0">
                        <a class="link-secondary text-decoration-none text-white" href="mailto:demo@yourdomain.com">info@inncapel.com</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="d-flex">
                <div class="me-4" style="color:#FF6F61">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                  </svg>
                </div>
                <div>
                  <h4 class="mb-3 text-white">Opening Hours</h4>
                  <div class="d-flex mb-1">
                    <p class="text-secondary fw-bold mb-0 me-5 text-white">Mon - Fri</p>
                    <p class="text-secondary mb-0 text-white">8am - 17pm</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="bg-white border rounded shadow-sm overflow-hidden">

            <form action="#!">
              <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                  <label for="fullname" class="form-label text-success">Full Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="fullname" name="fullname" value="" required>
                </div>
                <div class="col-12 col-md-6">
                  <label for="email" class="form-label text-success">Email <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                      </svg>
                    </span>
                    <input type="email" class="form-control" id="email" name="email" value="" required>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <label for="phone" class="form-label text-success">Phone Number</label>
                  <div class="input-group">
                    <span class="input-group-text">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                      </svg>
                    </span>
                    <input type="tel" class="form-control" id="phone" name="phone" value="">
                  </div>
                </div>
                <div class="col-12">
                  <label for="subject" class="form-label text-success">Subject <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="subject" name="subject" value="" required>
                </div>
                <div class="col-12">
                  <label for="message" class="form-label text-success">Message <span class="text-danger">*</span></label>
                  <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-success btn-lg" type="submit">Send Message</button>
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>

  </main>
   <!-- Footer -->
   <footer
   class="text-center text-lg-start text-dark"
   style="background-color:white"
   >
<!-- Section: Social media -->
<section
      class="d-flex justify-content-between p-4 text-white bg-success"
      >
<!-- Left -->
<div class="me-5">
 <span>Get connected with us on social networks:</span>
</div>
<!-- Left -->

<!-- Right -->
<div>
 <a href="" class="text-white me-4">
   <i class="fab fa-facebook-f" style="color: #FF6F61"></i>
 </a>
 <a href="" class="text-white me-4">
   <i class="fab fa-youtube" style="color: #FF6F61"></i>
 </a>
 <a href="" class="text-white me-4">
    <i class="fa-brands fa-tiktok" style="color: #FF6F61"></i>
 </a>
 <a href="" class="text-white me-4">
   <i class="fab fa-twitter" style="color: #FF6F61"></i>
 </a>
 <a href="" class="text-white me-4">
   <i class="fab fa-linkedin" style="color: #FF6F61"></i>
 </a>
 <a href="" class="text-white me-4">
   <i class="fab fa-github" style="color: #FF6F61"></i>
 </a>
</div>
<!-- Right -->
</section>
<!-- Section: Social media -->

<!-- Section: Links  -->
<section class="bg-white">
<div class="container text-center text-md-start mt-5">
 <!-- Grid row -->
 <div class="row mt-3">
   <!-- Grid column -->
   <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
     <!-- Content -->
     <h6 class="text-uppercase fw-bold" style="color: #FF6F61;">Inncapel</h6>
     <hr
         class="mb-4 mt-0 d-inline-block mx-auto"
         style="width: 60px; background-color: #FF6F61; height: 2px"
         />
     <p class="lead">
        Embarking on a digital journey like never before with Inncapel, client passport to a world where innovation meets impact, and technology dances with creativity.
     </p>
   </div>
   <!-- Grid column -->

   <!-- Grid column -->
   <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
     <!-- Links -->
     <h6 class="text-uppercase fw-bold" style="color: #FF6F61;">Products</h6>
     <hr
         class="mb-4 mt-0 d-inline-block mx-auto"
         style="width: 60px; background-color: #FF6F61; height: 2px"
         />
     <p class="nav-item">
       <a href="#!" class="nav-link" style="font-size: 16px;">LinkQuickly</a>
     </p>
     <p>
     <p class="nav-item">
       <a href="#!" class="nav-link" style="font-size: 16px;">FilesSyncro</a>
     </p>
     <p>
     <p class="nav-item">
       <a href="#!" class="nav-link" style="font-size: 16px;">Fiextrac</a>
     </p>
     <p>
     <p class="nav-item">
       <a href="#!" class="nav-link" style="font-size: 16px;">Cliidi</a>
     </p>
   </div>
   <!-- Grid column -->

   <!-- Grid column -->
   <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
     <!-- Links -->
     <h6 class="text-uppercase fw-bold" style="color: #FF6F61;">Useful links</h6>
     <hr
         class="mb-4 mt-0 d-inline-block mx-auto"
         style="width: 60px; background-color:#FF6F61; height: 2px"
         />
         <p class="nav-item">
            <a href="#!" class="nav-link" style="font-size: 16px;">About Us</a>
          </p>
         <p class="nav-item">
            <a href="#!" class="nav-link" style="font-size: 16px;">Our Services</a>
          </p>
         <p class="nav-item">
            <a href="#!" class="nav-link" style="font-size: 16px;">Our Projects</a>
          </p>
         <p class="nav-item">
            <a href="#!" class="nav-link" style="font-size: 16px;">Client Testimonials</a>
          </p>
         <p class="nav-item">
            <a href="#!" class="nav-link" style="font-size: 16px;">Our Courses</a>
          </p>
         <p class="nav-item">
            <a href="#!" class="nav-link" style="font-size: 16px;">Our Blog</a>
          </p>
   </div>
   <!-- Grid column -->

   <!-- Grid column -->
   <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
     <!-- Links -->
     <h6 class="text-uppercase fw-bold" style="color: #FF6F61;">Contact</h6>
     <hr
         class="mb-4 mt-0 d-inline-block mx-auto"
         style="width: 60px; background-color: #FF6F61; height: 2px"
         />
     <p class="text-success"><i class="fas fa-home mr-3" style="color: #FF6F61"></i> 3156 Old Highfiled, Harare, Zimbabwe</p>
     <p class="text-success"><i class="fas fa-envelope mr-3" style="color: #FF6F61"></i> info@inncapel.com</p>
     <p class="text-success"><i class="fas fa-phone mr-3"  style="color: #FF6F61"></i> +263778186399</p>
     <p class="text-success"><i class="fas fa-print mr-3"  style="color: #FF6F61"></i> +263780322839</p>
   </div>
   <!-- Grid column -->
 </div>
 <!-- Grid row -->
</div>
</section>
<!-- Section: Links  -->

<!-- Copyright -->
<div
  class="text-center p-3 text-white"
  style="background-color:#0077CC"
  >
©<span id="currentYear"></span> Copyright:
<a class="text-white" href="https://inncapel.com"
  >Inncapel.com</a
 >
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->
<button
type="button"
class="btn btn btn-floating"
id="btn-back-to-top" style="background: #FF6F61"
>
<i class="fas fa-arrow-up 2x" style="color:white;ffont-size:30px;"></i>
</button>

 </div>

<!-- Load library from the CDN -->

<script type="module">
    // Rough Annotation
    import { annotate, annotationGroup } from 'https://unpkg.com/rough-notation?module';

// Wait for the document to finish loading
document.addEventListener('DOMContentLoaded', function() {
    const ano1 = annotate(document.querySelector('.ano1'), { type: 'underline' });
    const ano2 = annotate(document.querySelector('.ano2'), { type: 'underline' });
    const ano3 = annotate(document.querySelector('.ano3'), { type: 'underline' });
    const ano4 = annotate(document.querySelector('.ano4'), { type: 'underline' });
    const ano5 = annotate(document.querySelector('.ano5'), { type: 'underline' });
    const ano6 = annotate(document.querySelector('.ano6'), { type: 'underline' });
    const ano7 = annotate(document.querySelector('.ano7'), { type: 'underline' });
    const ano8 = annotate(document.querySelector('.ano8'), { type: 'underline' });
    // const ano3 = annotate(document.querySelector('.ano3'), { type: 'circle' });

    const ag = annotationGroup([ano1, ano2,ano3,ano4,ano5,ano6,ano7,ano8]);
    ag.show();
    ano1.color = '#FF6F61';
    ano2.color = '#FF6F61';
    ano3.color = '#FF6F61';
    ano4.color = '#FF6F61';
    ano5.color = '#FF6F61';
    ano6.color = '#FF6F61';
    ano7.color = '#FF6F61';
    ano8.color = '#FF6F61';
});

</script>

<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
 <!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"
></script>
<script src="{{asset('js/dashboard.js')}}"></script>
</body>
</html>
