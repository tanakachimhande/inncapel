<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Dashboard | Inncapel</title>
      <!-- Include Compiled CSS -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- Include Compiled JS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <link rel="shortcut icon" href="{{asset('images/Inncapel Logo.jpg')}}" type="image/x-icon">

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
            <a href="{{route('dashboard')}}" >
              <i class="fa fa-bars text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Dashboard</span>
            </a>
          </li>
          <li class="">
            <a href="{{route('navbar-section')}}" >
              <i class="fa fa-bars text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Navbar</span>
            </a>
          </li>
          <li class="">
            <a href="{{route('about-content')}}">
              <i class="fa fa-info-circle text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">About</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="fa fa-wrench text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Services</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="fa fa-tasks text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Projects</span>
            </a>
          </li>
          <li class="">
            <a href="{{route('why-us')}}">
              <i class="fa fa-quote-right text-white" style="background-color:#2ecc71"></i>
              <span class="text-white" style="font-size: 18px">Why Us</span>
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
        <h4 style="color: #3498db">SERVICES SECTION</h4>
      <hr>
      <a href="#" type="button" class="btn btn-success btn-lg px-4 me-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Category</a>
      <a href="#" type="button" class="btn btn-success btn-lg px-4 me-md-2" data-bs-toggle="modal" data-bs-target="#services" data-bs-whatever="@mdo">Add Service</a>
      <hr>
      <div class="d-flex align-items-center h-100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card" style='width:100%;height:50vh;overflow:scroll;'>
                <div class="card-body p-0">
                  <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                    <table class="table table-striped mb-0 table-bordered" >
                      <thead style="background-color:black;color:white;font-weight:bold;">
                        <tr class="text-center">
                            <th>Category Name</th>
                            <th>Category Image Path</th>
                            <th>Operations</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($serviceCategory as $content)
                        <tr class="text-center">
                            <td>{{$content->services_title}}</td>
                            <td>{{$content->service_image_path}}</td>
                            <td>
                             <a href=""  class='btn btn-sm btn-success'>
                                 <i class='fa fa-edit fa-x2'></i>
                             </a>
                             <a href="#" class="btn btn-danger btn-sm"><i class='fa fa-trash fa-x2'></i></a>
                           </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <h5 style="color: #3498db">SERVICES LIST</h5>
      <div class="d-flex align-items-center h-100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card" style='width:100%;height:50vh;overflow:scroll;'>
                <div class="card-body p-0">
                  <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                    <table class="table table-striped mb-0 table-bordered" >
                      <thead style="background-color:black;color:white;font-weight:bold;">
                        <tr class="text-center">
                            <th>Service Category</th>
                            <th>Service Name</th>
                            <th>Operations</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($services as $content)
                        <tr class="text-center">
                            <td>{{$content->service_category}}</td>
                            <td>{{$content->service_name}}</td>
                            <td>
                             <a href=""  class='btn btn-sm btn-success'>
                                 <i class='fa fa-edit fa-x2'></i>
                             </a>
                             <a href="#" class="btn btn-danger btn-sm"><i class='fa fa-trash fa-x2'></i></a>
                           </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        {{-- Modal  --}}

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('store-service-category-content')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="1"  name="record_id'">
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Category Image:</label>
                    <input type="file" class="form-control" id="recipient-name" name="service_image_path" required>
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Category Name:</label>
                    <input type="text" class="form-control" id="recipient-name" name="services_title" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Content</button>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>

        {{-- End of modal --}}

        {{-- Modal  --}}

        <div class="modal fade" id="services" tabindex="-1" aria-labelledby="services" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="services">Add Services</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('store-service-content')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="1"  name="record_id'">
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Service Name:</label>
                    <input type="text" class="form-control" id="recipient-name" name="service_name" required>
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Service Category:</label>
                    <input type="hidden" name="service_category" value="">
                    <select name="category_id"  class="form-select" aria-label="Default select example" required>
                        <option selected>Select Service Category</option>
                        @foreach ($serviceCategory as $content)
                        <option value="{{$content->id}}">{{$content->services_title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Content</button>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>

        {{-- End of modal --}}

    </div>

  </main>
  <!-- page-content" -->
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"
></script>
<script src="{{ asset('js/dashjs.js') }}"></script>

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

@if (Session::has('error'))
    <script>
        swal("Error Occured", "{!!Session::get('error')!!}", "error",{
            button:true,
            button:'ok',
            timer:3000,
        });
    </script>
@endif

</body>
</html>