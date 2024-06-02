<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>About Us | Inncapel</title>
    <link rel="shortcut icon" href="{{asset('images/Inncapel Logo.jpg')}}" type="image/x-icon">
      <!-- Include Compiled CSS -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
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
    <main>
        <section class="w-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-12 col-lg-12 col-md-8 col-sm-4">
                    <div class="card rounded-3 text-black">
                    <div class="row g-0">
                        <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">

                            <div class="text-center">
                            <img src="{{asset('images/Inncapel Logo.jpg')}}"
                                style="width: 185px;" alt="logo">
                            </div>

                            <form action="{{route('auth-user')}}" method="post">
                                @csrf
                                <p style="color: #FF6F61" class="fw-bold">ADMINISTRATION ACCESS</p><br>
                                @if ($message = Session::get('message'))
                                <span class="text-center" style="color:red;font-size:18px;font-weight:bold;text-align:center" class="text-center mb-2">{{$message}}</span><br>
                                @endif

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="text" id="form2Example11" class="form-control"
                                    placeholder="Enter username" name="name"/>
                                    <label class="form-label" for="form2Example11">Username</label>
                                    <div class="error" style="color: red;">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="password" id="form2Example22" class="form-control"   placeholder="Enter password" name="password"/>
                                    <label class="form-label" for="form2Example22">Password</label>
                                    <div class="error" style="color: red;">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                                <div class="text-center pt-1 mb-5 pb-1">
                                    <button   class="btn btn-success btn-block fa-lg mb-3" type="Submit">Log
                                    in</button>
                                    <a class="text-muted" href="#!">Forgot password?</a>
                                </div>

                            </form>

                        </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center  bg-primary">
                         <div class="">
                            <img src="{{asset('images/Login.gif')}}" alt="" class="img-fluid  ">
                         </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </section>

    </main>

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
