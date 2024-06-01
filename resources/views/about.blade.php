{{-- Developed By Tanaka Chimhande | 01/04/2024 --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $seoData ? $seoData->seo_description : 'Welcome to Inncapel, pioneering digital succes for small businesses' }}">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="{{ $seoData ? $seoData->seo_keywords : 'Web Design, Web Development, Digital Mareketing and Graphics Design' }}">

    <title>{{ $seoData ? $seoData->seo_title : 'Inncapel | Web Development Services' }}</title>


    {{-- Favourite Icon --}}

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

{{-- Content  --}}

<body style="background:" class="">

    {{--Start of Navbar Section --}}

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
        <img id="logo-image" src="{{asset('images/Inncapel_Logo-removebg-preview.png')}}" alt="logo">
      </div>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            @foreach ($navbarItems as $item)
            <li class="nav-item">
                <a class="nav-link" href="{{$item->url}}">{{$item->title}}</a>
            </li>
            @endforeach
            <li class="nav-item">
                <a href="{{route('contactpage')}}" type="button" class="btn btn-lg px-4 me-md-2 " style="background-color:#FF6F61;color:white;">Contact Us</a>
            </li>
          </ul>
      </div>
    </div>
</nav><hr class="line"><br><br>

{{-- End of Navbar Section --}}

{{-- Star of slogan section --}}

<div class="text-center bg-success w-100 text-white p-2 lead fw-bold" style="position: fixed;z-index:1000;background-color:" id="slogan">Empowering <span class="ano1">Small Busineses</span> For  <span class="ano2">Digital Success</span>
@if ($error = Session::get('error'))
<br><span class="text-danger bg-white p-2" id="error">{{$error}}</span>
@endif
</div>
<br><br>
<div style="position: fixed;width:100%;z-index:1000" id="page-tag">
    <img src="{{asset('images/landscape-3773706_1280.jpg')}}" alt="" style="width:100%;height:8vh;object-fit:cover;z-index:1000;position:relative;">
    <div class="overlay-text">About Us</div>
</div><br><br><br>
{{-- Start of home main container --}}

  <main class="container" >

    {{-- Start of about section --}}

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
                @if ($aboutContent)
                <p class="lead text-white">{{$aboutContent->description}}</p><br>
                @else
                    <p class="lead text-white">Loading... content please bear with us</p>
                @endif
                <div class="row gy-4 gy-md-0 gx-xxl-5X p-2 mb-4">
                    <div class="col-12 col-md-6 mb-4">
                        <div class="d-flex">
                            <div class="me-4">
                                <img src="{{asset('images/project-management.png')}}" alt="Captivate Icon">
                            </div>
                            <div>
                                <h2 class="h4 mb-3 text-white">INNOVATION !</h2>
                                <p class="lead text-white">
                                    We don't just chase trends, we develop cutting-edge digital solutions that get you real results.
                                </p>
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
                                <p class="lead text-white">
                                    We craft captivating experiences that turn website visitors into loyal customers.
                                </p>
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
                                <p class="lead text-white">
                                    We help you elevate your business online with clear strategies and easy-to-manage solutions.
                                </p>
                            </div>
                        </div>
                    </div>
                     <div class="container d-flex justify-content-center">
                        <a href="{{route('servicespage')}}" class="btn btn-lg px-4 me-md-2" style="background-color:#FF6F61;color:white;">Get Our Services</a>
                     </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    {{-- End of about section --}}


    {{-- Start of why choose us section --}}

	<section class="why-us" style="background: rgba(128, 128, 128, 0.113)">
		<div class="container">
	        <div class="row">
				<div class="col-md-8 offset-md-2">
					<h1 class="mt-5 text-center text-success">Why Choose Us</h1><br><br>
				</div>
			</div>
			<div class="row">
                @if ($countWhyus == 0)
                <p class="lead text-primary">Loading... content please bear with us</p>
                @else
                     @foreach ($whyusContent as $contnet )
                        <div class="col-sm-6 col-lg-4" >
                            <div class="box" data-aos="zoom-out-down">
                                <span class="text-primary">{{ $loop->first ? '01' : sprintf('%02d', $loop->index + 1) }}</span>
                                <h4>{{$contnet->title}}</h4>
                                <p class="lead text-white">
                                     {{$contnet->description}}
                                </p>
                            </div>
                        </div>
                     @endforeach
                @endif

			</div>
		</div><br>
        <div class="container" id="mission">
            <div class="row">
                <div class="col-md-12">
                    <h3 class='text-success'>Our Mission</h3><br>
                    <p class="lead"><i class="fa fa-check" style="font-size:25px;color:#FF6F61"></i> Empowering small and medium businesses (SMBs) to thrive in the digital age.</p><br>
                </div><br>
                <div class="col-md-12">
                    <h3 class='text-success'>Our Vision</h3><br>
                    <p class="lead"><i class="fa fa-check" style="font-size:25px;color:#FF6F61"></i> To be the leading digital growth partner for SMBs, transforming businesses through innovative digital marketing and automation. We are driven by a spirit of innovation, client focus, and a commitment to empowering SMBs to connect with more customers and achieve sustainable growth in this digital age.</p>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <h3 class='text-success'>Our Values</h3><br>
                    <ol>
                        <li>
                            <h4 class='text-success'>Client Focus</h4><br>
                            <p class="lead"><i class="fa fa-check" style="font-size:25px;color:#FF6F61"></i>Building enduring client partnerships is at the core of everything we do. Inncapel conducts in-depth consultations to understand each client's unique business goals and target audience. We prioritize building trust through regular communication and progress reports, keeping clients informed and involved throughout the process.</p>
                        </li><br>
                        <li>
                            <h4 class='text-success'>Innovation</h4><br>
                            <p class="lead"><i class="fa fa-check" style="font-size:25px;color:#FF6F61"></i>At Inncapel, we're passionate about staying ahead of the curve. We empower our team to continuously learn about the latest digital marketing trends and technologies. Through regular brainstorming sessions and a culture of experimentation, we foster the development of cutting-edge automation solutions and innovative digital marketing strategies that deliver exceptional results for our clients.</p>
                        </li><br>
                        <li>
                            <h4 class='text-success'>Integrity</h4><br>
                            <p class="lead"><i class="fa fa-check" style="font-size:25px;color:#FF6F61"></i>Transparency and ethical practices are the foundation of every client relationship at Inncapel. We present clients with clear and transparent proposals outlining the scope of work, pricing, and expected results. We avoid making unrealistic promises and focus on building long-term trust through honesty and integrity.</p>
                        </li><br>
                        <li>
                            <h4 class='text-success'>Results-Oriented</h4><br>
                            <p class="lead"><i class="fa fa-check" style="font-size:25px;color:#FF6F61"></i>Data-driven decision making is in our DNA. We use advanced data analytics tools to track key metrics such as website traffic, lead generation, and conversions. This allows us to continually optimize campaigns and demonstrate a measurable return on investment (ROI) for our clients. We are obsessed with exceeding client expectations and delivering results that drive tangible business growth.</p>
                        </li><br>
                        <li>
                            <h4 class='text-success'>Collaboration</h4><br>
                            <p class="lead"><i class="fa fa-check" style="font-size:25px;color:#FF6F61"></i>At Inncapel, collaboration is key. We foster a dynamic and inclusive environment through open communication channels and cross-functional teamwork. This ensures that all team members, regardless of department, contribute their unique expertise. This collaborative spirit extends to our client relationships, ensuring all our team members work together to exceed client expectations and deliver the best possible results.</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
	</section>

	<!-- End Why Us Section -->

  </main>


   <!-- Start of Footer Section-->

   <footer class="text-center text-lg-start text-dark" style="background-color:white"
   >
        <!-- Section: Social media -->
        <section
            class="d-flex justify-content-between p-4 text-white bg-success"
            >
            <!-- Left -->
            <div class="me-5">
            <span>Get connected with us on our social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
            <a href="" class="text-white me-4">
            <i class="fab fa-facebook-f" style="color:white  "></i>
            </a>
            <a href="" class="text-white me-4">
            <i class="fab fa-youtube" style="color: white;"></i>
            </a>
            <a href="" class="text-white me-4">
                <i class="fa-brands fa-tiktok" style="color: white;"></i>
            </a>
            <a href="" class="text-white me-4">
            <i class="fab fa-twitter" style="color: white;"></i>
            </a>
            <a href="" class="text-white me-4">
            <i class="fab fa-linkedin" style="color: white;"></i>
            </a>
            <a href="" class="text-white me-4">
            <i class="fab fa-github" style="color: white;"></i>
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
        <h6 class="text-uppercase fw-bold" style="color: #FF6F61;">Our Products</h6>
        <hr
            class="mb-4 mt-0 d-inline-block mx-auto"
            style="width: 60px; background-color: #FF6F61; height: 2px"
            />
        @if ($countProducts === 0)
        <span class="text-warning">Not products as yet</span>
        @else
        @foreach ($products as $product)
        <p class="nav-item">
            <a href="{{$product->product_link}}" class="nav-link" style="font-size: 16px;">{{$product->product_name}}</a>
        </p>
        @endforeach

        @endif


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
            @foreach ($navbarItems as $item)
            <p class="nav-item">
                <a class="nav-link" href="{{$item->url}}" style="font-size: 16px;">{{$item->title}}</a>
            </p>

            @endforeach
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold" style="color: #FF6F61;">Contact Us</h6>
        <hr
            class="mb-4 mt-0 d-inline-block mx-auto"
            style="width: 60px; background-color: #FF6F61; height: 2px"
            />
        <p class="text-success"><i class="fas fa-home mr-3 p-2" style="color: #FF6F61"></i>
            @if ($contacts)
            {{$contacts->address}}
            @else
            <span>No address as of now !</span>
            @endif
        </p>
        <p class="text-success"><i class="fas fa-envelope mr-3 p-2" style="color: #FF6F61"></i>
            @if ($contacts)
            {{$contacts->email}}
            @else
            <span>No address as of now !</span>
            @endif
        </p>
        <p class="text-success"><i class="fas fa-phone mr-3 p-2"  style="color: #FF6F61"></i>
            @if ($contacts)
            {{$contacts->phone}}
            @else
            <span>No address as of now !</span>
            @endif

        </p>
        <p class="text-success"><i class="fa fa-clock mr-3 p-2"  style="color: #FF6F61"></i>
            @if ($contacts)
            {{$contacts->opening_days}} | {{$contacts->opening_hours}}
            @else
            <span>No address as of now !</span>
            @endif
        </p>
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

// Assuming the title is inside an element with an ID, such as 'titleElement'
const titleElement = document.getElementById('heroheader');
if (titleElement) {
    // Replace 'Marketing' and 'Automation' with the same words wrapped in a span with a class or inline style for blue color
    titleElement.innerHTML = titleElement.innerHTML.replace(/(Marketing|Automation|Design)/g, '<span class="text-prima" style="color:#FF6F61;text-decoration:underline;">$1</span>');
}


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
