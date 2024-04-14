
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Dashboard | Fiextrac</title>
      <!-- Include Compiled CSS -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
      <!-- MDB -->
      <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css"
      rel="stylesheet"
      />
    <!-- Include Compiled JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <link rel="shortcut icon" href="{{asset('images/linkquickly page.PNG')}}" type="image/x-icon">

</head>
<body style="background-color:#ecf0f1">
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm" href="#" style="background-color:#2ecc71">
    <i class="fas fa-bars text-white" ></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper" style="background-color: #3498db">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#" class="text-white" style="font-size: 22px">INNCAPEL CMS</a>
        <div id="close-sidebar">
          <i class="fas fa-times fa-1x text-white"></i>
        </div>
      </div>
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span class="text-white fw-bold" style="font-size: 22px">Navigation</span>
          </li>
          <li class="">
            <a href="{{route('navbar-section')}}" >
              <i class="fa fa-bars text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Navbar Section</span>
            </a>
          </li>
          <li class="">
            <a href="{{route('home-hero-section')}}">
              <i class="fa fa-home text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Hero Section</span>
            </a>
          </li>
          <li class="">
            <a href="{{route('about-content')}}">
              <i class="fa fa-info-circle text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">About Section</span>
            </a>
          </li>
          <li class="">
            <a href="{{route('why-us')}}">
              <i class="fa fa-info-circle text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Why Us</span>
            </a>
          </li>
          <li class="">
            <a href="{{route('service-category-content')}}">
              <i class="fa fa-wrench text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Services Section</span>
            </a>
          </li>
          <li class="">
            <a href="{{route('projects-content')}}">
              <i class="fa fa-tasks text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Projects Section</span>
            </a>
          </li>
          <li class="">
            <a href="{{route('testimonials-content')}}">
              <i class="fa fa-quote-right text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Testimonials Section</span>
            </a>
          </li>
          <li class="">
            <a href="{{route('faq-content')}}">
              <i class="fa fa-question text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">FAQ Section</span>
            </a>
          </li>
          <li class="">
            <a href="{{route('contact-content')}}">
              <i class="fa fa-phone text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Contact Section</span>
            </a>
          </li>
          <li class="">
            <a href="{{route('product-links')}}">
              <i class="fa fa-phone text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Products Section</span>
            </a>
          </li>
          <li class="">
            <a href="">
            <i class="fa fa-power-off text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Logout</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer" style="background-color: #2ecc71">
       <p class="text-white text-center pl-2 mt-2">@2024.All Rights Reserved</p>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
        <h4 style="color: #3498db">DASHBOARD</h4>
      <hr>
         <div class="container bg-white p-5">
            <h2>Update Content</h2><br>
            <form action="{{route('update-product')}}"  method="post">
                @csrf
                <input type="hidden" name="id" value="{{$product->id}}">
                <div class="form-outline mb-3" data-mdb-input-init>
                    <input type="text" id="form12" class="form-control form-control-lg" value='{{$product->product_name}}' name="product_name" />
                    <label class="form-label" for="form12">Product Name:</label>
                </div>
                <div class="form-outline mb-3" data-mdb-input-init>
                    <input type="text" id="form12" class="form-control form-control-lg" value='{{$product->product_link}}' name="product_link" />
                    <label class="form-label" for="form12">Product Link:</label>
                </div>
                 <br>
                <button class="btn btn-success">Update Content</button>
             </form>
         </div>
    </div>

  </main>
  <!-- page-content" -->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/dashjs.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <!-- MDB -->
 <script
 type="text/javascript"
 src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"
 ></script>

 @if (Session::has('message'))
    <script>
        swal("Successfully", "{!!Session::get('message')!!}", "success",{
            button:true,
            button:'ok',
            timer:3000,
            successMode:true
        });
    </script>
@endif

</body>
</html>

