<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Inncapel</title>
      <!-- Include Compiled CSS -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://unpkg.com/typeit@@{TYPEIT_VERSION}/dist/index.umd.js"></script>
    <script type="module" src="https://unpkg.com/rough-notation?module"></script>

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
<body style="background:
">
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
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
              <a class="nav-link" href="About Cliidi?" data-bs-toggle="modal" data-bs-target="#staticBackdrop">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About Cliidi?" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Our Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About Cliidi?" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Projects Done</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About Cliidi?" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About Cliidi?" data-bs-toggle="modal" data-bs-target="#staticBackdrop">FAQ</a>
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
</nav><hr class="line"><br><br><br><br>


  <main class="container" >
    <section>
        <div class="col-lg">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-12 col-sm-8 col-lg-6">
                <img src="{{asset('images/Website Creator (1).gif')}}" class="d-block w-100" alt="Wild Landscape" style="height: 60vh;object-fit:contain;"/>
              </div>
              <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3" style="color:#4CAF50;" id="heroheader"></h1><br>
                <p class="lead">The responsive left-aligned hero with image is a popular design choice for creating visually impactful and attention-grabbing website headers. In this design. Digital Automation & Marketing</h1>
                    <p class="lead">The responsive left-aligned hero with image is a popular design choice for creating visually impactful and attention-grabbing website headers. In this design.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                  <button type="button" class="btn btn-success btn-lg px-4 me-md-2">Our Work</button>
                  <button type="button" class="btn btn-outline-success btn-lg px-4" style="color: #FF6F61">About Us</button>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- About 1 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5" style="background:#0077CC">
        <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
            <div class="col-12 col-lg-6 col-xl-5">
            <img class="img-fluid rounded" loading="lazy" src="{{asset('images/About us page.gif')}}" alt="About Us" >
            </div>
            <div class="col-12 col-lg-6 col-xl-7">
            <div class="row justify-content-xl-center">
                <div class="col-12 col-xl-11">
                <h1 class="mb-3 text-center animate__animated animate__bounce animate__repeat-2 anotate" style="color:#4CAF50;border:2px solid  #4CAF50;background:white;border-radius:10px;">Who Are We?</h1>
                <p class="lead text-white">We help people to build incredible brands and superior products. Our perspective is to furnish outstanding captivating services. We are a fast-growing company, but we have never lost sight of our core values. We believe in collaboration, innovation, and customer satisfaction. We are always looking for new ways to improve our products and services.</p><br>
                <div class="row gy-4 gy-md-0 gx-xxl-5X p-2 mb-4">
                    <div class="col-12 col-md-6 mb-4">
                        <div class="d-flex">
                            <div class="me-4">
                                <img src="{{asset('images/project-management.png')}}" alt="Captivate Icon">
                            </div>
                            <div>
                            <h2 class="h4 mb-3 text-white">INNOVATION</h2>
                            <p class="text-secondary mb-0">We are crafting a digital method that subsists life across all mediums.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="d-flex">
                            <div class="me-4 ">
                            <img src="{{asset('images/grab.png')}}" alt="Captivate Icon">
                            </div>
                            <div>
                            <h2 class="h4 mb-3 text-white">CAPTIVATION</h2>
                            <p class="text-secondary mb-0">We believe in innovation by merging primary with elaborate ideas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <div class="d-flex">
                            <div class="me-4 ">
                            <img src="{{asset('images/rise.png')}}" alt="Elevate Icon">
                            </div>
                            <div>
                            <h2 class="h4 mb-3 text-white">ELEVATION</h2>
                            <p class="text-secondary mb-0">We believe in innovation by merging primary with elaborate ideas.</p>
                            </div>
                        </div>
                    </div>
                     <div class="container d-flex justify-content-center">
                        <button type="button" class="btn btn-success btn-lg px-4 me-md-2">Our Affordable Services</button>
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
					<h1 class="mt-5 text-center text-success">Why Choose Us</h1>
					<p class="mb-5 text-center lead">Why choose us section design HTML is created by using Bootstrap and custom HTML CSS. This our services section cards are more beautiful with pure CSS hover effects.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-4">
					<div class="box">
						<span>01</span>
						<h4>Why Lorem Ipsum</h4>
						<p class="lead text-white">There are many variations of passages of available, but the majority have suffered alteration in some form</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="box">
						<span>02</span>
						<h4>Why Lorem Ipsum</h4>
						<p class="lead text-white">There are many variations of passages of available, but the majority have suffered alteration in some form</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="box">
						<span>03</span>
						<h4>Why Lorem Ipsum</h4>
						<p class="lead text-white">There are many variations of passages of available, but the majority have suffered alteration in some form</p>
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
					<h1 class="mt-5 text-center text-success">What we do !</h1>
					<p class="mb-5 text-center lead">Why choose us section design HTML is created by using Bootstrap and custom HTML CSS. This our services section cards are more beautiful with pure CSS hover effects.</p>
				</div>
			</div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                <img src="https://1.bp.blogspot.com/-Bii3S69BdjQ/VtdOpIi4aoI/AAAAAAAABlk/F0z23Yr59f0/s640/cover.jpg" />
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
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                <img src="https://3.bp.blogspot.com/-bAsTyYC8U80/VtLZRKN6OlI/AAAAAAAABjY/kAoljiMALkQ/s400/material%2Bnavbar.jpg" />
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
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                <img src="https://4.bp.blogspot.com/-TDIJ17DfCco/Vtneyc-0t4I/AAAAAAAABmk/aa4AjmCvRck/s1600/cover.jpg" />
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
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                <img src="https://4.bp.blogspot.com/-TDIJ17DfCco/Vtneyc-0t4I/AAAAAAAABmk/aa4AjmCvRck/s1600/cover.jpg" />
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
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/5-button-hover-animation-effects-css3.html">
                                <img src="https://4.bp.blogspot.com/-TDIJ17DfCco/Vtneyc-0t4I/AAAAAAAABmk/aa4AjmCvRck/s1600/cover.jpg" />
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
    <section class="wrapper" style="background: #0077CC">
        <div class="container-fostrap">
            <div class="row">
				<div class="col-md-8 offset-md-2">
                    <h1 class="mb-3 text-center" style="color:#4CAF50;border:2px solid  #4CAF50;background:white;border-radius:10px;">Our Work</h1>
					<p class="mb-5 text-center lead text-white">Why choose us section design HTML is created by using Bootstrap and custom HTML CSS. This our services section cards are more beautiful with pure CSS hover effects.</p>
				</div>
			</div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                <img src="https://1.bp.blogspot.com/-Bii3S69BdjQ/VtdOpIi4aoI/AAAAAAAABlk/F0z23Yr59f0/s640/cover.jpg" class="img-rounded" />
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title text-center text-success">
                                        Web Development
                                    </h4>
                                </div>
                                <div class="card-read-more">
                                    <a href='' type="button" class="btn btn-success btn-lg px-4 me-md-2 btn-block text-white">Navigate Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                <img src="https://1.bp.blogspot.com/-Bii3S69BdjQ/VtdOpIi4aoI/AAAAAAAABlk/F0z23Yr59f0/s640/cover.jpg" class="img-rounded" />
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title text-center text-success">
                                         Graphics Design
                                    </h4>
                                </div>
                                <div class="card-read-more">
                                    <a href='' type="button" class="btn btn-success btn-lg px-4 me-md-2 btn-block text-white">Navigate Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                <img src="https://1.bp.blogspot.com/-Bii3S69BdjQ/VtdOpIi4aoI/AAAAAAAABlk/F0z23Yr59f0/s640/cover.jpg" class="img-rounded" />
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title text-center text-success">
                                         Digital Marketing
                                    </h4>
                                </div>
                                <div class="card-read-more">
                                    <a href='' type="button" class="btn btn-success btn-lg px-4 me-md-2 btn-block text-white">Navigate Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                <img src="https://1.bp.blogspot.com/-Bii3S69BdjQ/VtdOpIi4aoI/AAAAAAAABlk/F0z23Yr59f0/s640/cover.jpg" class="img-rounded" />
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title text-center text-success">
                                         Web Hosting
                                    </h4>
                                </div>
                                <div class="card-read-more">
                                    <a href='' type="button" class="btn btn-success btn-lg px-4 me-md-2 btn-block text-white">Navigate Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                <img src="https://1.bp.blogspot.com/-Bii3S69BdjQ/VtdOpIi4aoI/AAAAAAAABlk/F0z23Yr59f0/s640/cover.jpg" class="img-rounded" />
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title text-center text-success">
                                         Education
                                    </h4>
                                </div>
                                <div class="card-read-more">
                                    <a href='' type="button" class="btn btn-success btn-lg px-4 me-md-2 btn-block text-white">Navigate Now</a>
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
              <h1 class="text-success">What our clients say?</h1>
              <p class="lead">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
                quisquam eum porro a pariatur veniam.
              </p>
            </div>
          </div>

          <div class="row text-center">
            <div class="col-md-4 mb-0">
              <div class="card">
                <div class="card-body py-4 mt-2">
                  <div class="d-flex justify-content-center mb-4">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(17).webp"
                      class="rounded-circle shadow-1-strong" width="100" height="100" />
                  </div>
                  <h4 class="font-weight-bold text-success">Alexa Horwitz</h4>
                  <h6 class="font-weight-bold my-3 text-primary">Front-end Developer in NY</h6>
                  <p class="mb-2 lead">
                    <i class="fas fa-quote-left pe-2"></i>Cras sit amet nibh libero, in gravida
                    nulla metus scelerisque ante sollicitudin commodo cras purus odio,
                    vestibulum in tempus viverra turpis. <i class="fas fa-quote-right pe-2"></i>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-0">
              <div class="card">
                <div class="card-body py-4 mt-2">
                  <div class="d-flex justify-content-center mb-4">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(17).webp"
                      class="rounded-circle shadow-1-strong" width="100" height="100" />
                  </div>
                  <h4 class="font-weight-bold text-success">Alexa Horwitz</h4>
                  <h6 class="font-weight-bold my-3 text-primary">Front-end Developer in NY</h6>
                  <p class="mb-2 lead">
                    <i class="fas fa-quote-left pe-2"></i>Cras sit amet nibh libero, in gravida
                    nulla metus scelerisque ante sollicitudin commodo cras purus odio,
                    vestibulum in tempus viverra turpis. <i class="fas fa-quote-right pe-2"></i>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-0">
              <div class="card">
                <div class="card-body py-4 mt-2">
                  <div class="d-flex justify-content-center mb-4">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(17).webp"
                      class="rounded-circle shadow-1-strong" width="100" height="100" />
                  </div>
                  <h4 class="font-weight-bold text-success">Alexa Horwitz</h4>
                  <h6 class="font-weight-bold my-3 text-primary">Front-end Developer in NY</h6>
                  <p class="mb-2 lead">
                    <i class="fas fa-quote-left pe-2"></i>Cras sit amet nibh libero, in gravida
                    nulla metus scelerisque ante sollicitudin commodo cras purus odio,
                    vestibulum in tempus viverra turpis. <i class="fas fa-quote-right pe-2"></i>
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
        <div class="col-12 col-lg-6">
          <img class="img-fluid rounded" loading="lazy" src="{{asset('images/FAQs.gif')}}" alt="How can we help you?">
        </div>
        <div class="col-12 col-lg-6">
          <div class="row justify-content-xl-end">
            <div class="col-12 col-xl-11">
                <h1 class="mb-3 text-center" style="color:#4CAF50">How can we help?</h1>
              <p class="lead">We hope you have found an answer to your question. If you need any help, please search your query on our Support Center or contact us via email.</p>
              <div class="accordion accordion-flush" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      How Do I Change My Billing Information?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>To change your billing information, please follow these steps:</p>
                      <ul>
                        <li>Go to our website and sign in to your account.</li>
                        <li>Click on your profile picture in the top right corner of the page and select "Account Settings."</li>
                        <li>Under the "Billing Information" section, click on "Edit."</li>
                        <li>Make your changes and click on "Save."</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      How Does Payment System Work?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      A payment system is a way to transfer money from one person or organization to another. It is a complex process that involves many different parties, including banks, credit card companies, and merchants.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      How Do I Cancel My Account?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>To cancel your account, please follow these steps:</p>
                      <ul>
                        <li>Go to our website and sign in to your account.</li>
                        <li>Click on your profile picture in the top right corner of the page and select "Account Settings."</li>
                        <li>Scroll to the bottom of the page and click on "Cancel Account."</li>
                        <li>Enter your password and click on "Cancel Account."</li>
                      </ul>
                    </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      How Do I Cancel My Account?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>To cancel your account, please follow these steps:</p>
                      <ul>
                        <li>Go to our website and sign in to your account.</li>
                        <li>Click on your profile picture in the top right corner of the page and select "Account Settings."</li>
                        <li>Scroll to the bottom of the page and click on "Cancel Account."</li>
                        <li>Enter your password and click on "Cancel Account."</li>
                      </ul>
                    </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      How Do I Cancel My Account?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>To cancel your account, please follow these steps:</p>
                      <ul>
                        <li>Go to our website and sign in to your account.</li>
                        <li>Click on your profile picture in the top right corner of the page and select "Account Settings."</li>
                        <li>Scroll to the bottom of the page and click on "Cancel Account."</li>
                        <li>Enter your password and click on "Cancel Account."</li>
                      </ul>
                    </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      How Do I Cancel My Account?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>To cancel your account, please follow these steps:</p>
                      <ul>
                        <li>Go to our website and sign in to your account.</li>
                        <li>Click on your profile picture in the top right corner of the page and select "Account Settings."</li>
                        <li>Scroll to the bottom of the page and click on "Cancel Account."</li>
                        <li>Enter your password and click on "Cancel Account."</li>
                      </ul>
                    </div>
                </div>
                </div>
              </div>
            </div>
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
                <h1 class="mb-3 text-center" style="color:#4CAF50;border:2px solid  #4CAF50;background:white;border-radius:10px;">Get in touch</h1>
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
                  <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="fullname" name="fullname" value="" required>
                </div>
                <div class="col-12 col-md-6">
                  <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
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
                  <label for="phone" class="form-label">Phone Number</label>
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
                  <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="subject" name="subject" value="" required>
                </div>
                <div class="col-12">
                  <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
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
   <i class="fab fa-twitter" style="color: #FF6F61"></i>
 </a>
 <a href="" class="text-white me-4">
   <i class="fab fa-google" style="color: #FF6F61"></i>
 </a>
 <a href="" class="text-white me-4">
   <i class="fab fa-instagram" style="color: #FF6F61"></i>
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
     <h6 class="text-uppercase fw-bold">Inncapel</h6>
     <hr
         class="mb-4 mt-0 d-inline-block mx-auto"
         style="width: 60px; background-color: #7c4dff; height: 2px"
         />
     <p>
       Here you can use rows and columns to organize your footer
       content. Lorem ipsum dolor sit amet, consectetur adipisicing
       elit.
     </p>
   </div>
   <!-- Grid column -->

   <!-- Grid column -->
   <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
     <!-- Links -->
     <h6 class="text-uppercase fw-bold">Products</h6>
     <hr
         class="mb-4 mt-0 d-inline-block mx-auto"
         style="width: 60px; background-color: #7c4dff; height: 2px"
         />
     <p>
       <a href="#!" class="text-dark">MDBootstrap</a>
     </p>
     <p>
       <a href="#!" class="text-dark">MDWordPress</a>
     </p>
     <p>
       <a href="#!" class="text-dark">BrandFlow</a>
     </p>
     <p>
       <a href="#!" class="text-dark">Bootstrap Angular</a>
     </p>
   </div>
   <!-- Grid column -->

   <!-- Grid column -->
   <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
     <!-- Links -->
     <h6 class="text-uppercase fw-bold">Useful links</h6>
     <hr
         class="mb-4 mt-0 d-inline-block mx-auto"
         style="width: 60px; background-color: #7c4dff; height: 2px"
         />
     <p>
       <a href="#!" class="text-dark">Your Account</a>
     </p>
     <p>
       <a href="#!" class="text-dark">Become an Affiliate</a>
     </p>
     <p>
       <a href="#!" class="text-dark">Shipping Rates</a>
     </p>
     <p>
       <a href="#!" class="text-dark">Help</a>
     </p>
   </div>
   <!-- Grid column -->

   <!-- Grid column -->
   <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
     <!-- Links -->
     <h6 class="text-uppercase fw-bold">Contact</h6>
     <hr
         class="mb-4 mt-0 d-inline-block mx-auto"
         style="width: 60px; background-color: #7c4dff; height: 2px"
         />
     <p><i class="fas fa-home mr-3" style="color: #FF6F61"></i> 3156 Old Highfiled, Harare, Zimbabwe</p>
     <p><i class="fas fa-envelope mr-3" style="color: #FF6F61"></i> info@inncapel.com</p>
     <p><i class="fas fa-phone mr-3"  style="color: #FF6F61"></i> +263778186399</p>
     <p><i class="fas fa-print mr-3"  style="color: #FF6F61"></i> +263780322839</p>
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
© 2024 Copyright:
<a class="text-white" href="https://inncapel.com"
  >Inncapel.com</a
 >
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->

 </div>
<!-- Load library from the CDN -->
<script type="module" src="https://unpkg.com/rough-notation?module"></script>
 <!-- Load Rough Notation library from unpkg as a module -->
<script type="module">
    import { annotate } from 'https://unpkg.com/rough-notation?module';

    // Wait for the document to finish loading
    document.addEventListener('DOMContentLoaded', function() {
      // Select the element you want to annotate
      const e = document.querySelector('.anotate');

      // Create an annotation object using Rough Notation
      const annotation = annotate(e, { type: 'highlight' });

      // Show the annotation
      annotation.show();
      annotation.color = 'green';
    });
  </script>


<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

<!-- Setup and start animation! -->
<script>
  var typed = new Typed('#heroheader', {
    strings: ['Digital Automation',' Digital Marketing','Digital Automation and Marketing Agency'],
    typeSpeed: 100,
  });
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
</body>
</html>
