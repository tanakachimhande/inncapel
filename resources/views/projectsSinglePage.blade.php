<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Web Development Projects | Inncapel</title>
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
  <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" id="navbarr">
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
        <img src="{{asset('images/Inncapel_Logo-removebg-preview.png')}}" alt="logo" id="logo-image">
      </div>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            @foreach ($navbarItems as $item)
            <li class="nav-item">
                <a class="nav-link" href="{{$item->url}}">{{$item->title}}</a>
            </li>
            @endforeach
            <li class="nav-item">
                <a href="{{route('contactpage')}}" type="button" class="btn btn-success btn-lg px-4 me-md-2">Contact Us</a>
            </li>
          </ul>
      </div>
    </div>
</nav><hr class="line"><br><br>
<div class="text-center bg-success w-100 text-white p-2 lead fw-bold" style="position: fixed;z-index:1000;background-color:" id="slogan">Pioneering <span class="ano1">Digital Success</span> For  <span class="ano2">Small Businesses</span></div><br><br>
<div style="position: fixed;width:100%;z-index:1000" id="page-tag">
    <img src="{{asset('images/landscape-3773706_1280.jpg')}}" alt="" style="width:100%;height:8vh;object-fit:cover;z-index:1000;position:relative;">
    <div class="overlay-text">{{$categoryName}}</div>
</div><br><br><br>
  <main class="container" >
    <section class="wrapper anotate">
        <div class="container-fostrap">
            <div class="row">
				<div class="col-md-8 offset-md-2">
                    <h1 class="mb-3 text-center" style="color:#4CAF50;">Some Projects Done</h1><br>
				</div>
                <div class="call-toaction">
                    <a href="#" type="button" class="btn btn-success btn-lg px-4 me-md-2">Get  Our Affordable Services</a><br><br>
                </div><br><br><br><br>
			</div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        @if ($countProjects === 0)
                        <span>No projects added as yet</span>
                        @else
                         @foreach ($projects as $project)
                         <div class="col-xs-12 col-md-4 col-sm-4">
                            <div class="card" data-aos="flip-left">
                                <a class="img-card" href="http://www.fostrap.com/2016/03/bootstrap-3-carousel-fade-effect.html">
                                    <img src="{{asset($project->project_image_path)}}" alt="Web dev image" style=" object-fit: cover"/>
                              </a>
                                <div class="card-content">
                                    <h4 class="card-title text-center text-success">
                                        {{$project->project_name}}
                                    </h4>
                                </div>
                                <div class="card-read-more">
                                    <a href='{{url($project->project_url)}}' class="btn btn-success btn-lg px-4 me-md-2 btn-block text-white" target="_blank">View Project</a>
                                </div>
                            </div>
                        </div>
                         @endforeach
                        @endif
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
    // const ano3 = annotate(document.querySelector('.ano3'), { type: 'circle' });

    const ag = annotationGroup([ano1, ano2]);
    ag.show();
    ano1.color = '#FF6F61';
    ano2.color = '#FF6F61';
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