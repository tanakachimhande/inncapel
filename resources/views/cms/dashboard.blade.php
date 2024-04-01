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
            <a href="" >
              <i class="fa fa-bars text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Navbar Section</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="fa fa-home text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Hero Section</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="fa fa-info-circle text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">About Section</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="fa fa-wrench text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Services Section</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="fa fa-tasks text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Projects Section</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="fa fa-quote-right text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Testimonials Section</span>
            </a>
          </li>
          <li class="">
            <a href="#" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-question text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">FAQ Section</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="fa fa-phone text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Contact Section</span>
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
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-3 w-52">
                <div class="card rounded-5 p-0 shadow-lg bg-body rounded">
                    <div class="card-body text-center">
                       <div class="">
                        <div class="rounded-5 p-1" style="font-size: 25px;color:white;background-color:#3498db">TOTAL INCOME</div>
                      </div><hr>
                       <span class="" style="font-size: 40px;color:#2ecc71;font-weight:bold;"></span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-3 w-52">
                <div class="card rounded-5 p-0 shadow-lg bg-body rounded">
                    <div class="card-body text-center">
                       <div class="">
                        <div class="rounded-5 p-1" style="font-size: 25px;color:white;background-color:#3498db">TOTAL BUDGET</div>
                      </div><hr>
                       <span class="" style="font-size: 40px;color:#2ecc71;font-weight:bold;"></span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-3 w-52">
                <div class="card rounded-5 p-0 shadow-lg bg-body rounded">
                    <div class="card-body text-center">
                       <div class="">
                        <div class="rounded-5 p-1" style="font-size: 25px;color:white;background-color:#3498db">AMOUNT USED</div>
                      </div><hr>
                       <span class="" style="font-size: 40px;color:#2ecc71;font-weight:bold;"></span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 mb-3 w-52">
                <div class="card rounded-5 p-0 shadow-lg bg-body rounded">
                    <div class="card-body text-center">
                       <div class="">
                        <div class="rounded-5 p-1" style="font-size: 25px;color:white;background-color:#3498db">AMOUNT LEFT</div>
                      </div><hr>
                       <span class="" style="font-size: 40px;color:#2ecc71;font-weight:bold;"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>



  </main>
  <!-- page-content" -->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="{{ asset('js/dashjs.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
