<!DOCTYPE html>
<!-- saved from url=(0065)file:///D:/web_btl/WebProgramming20182/public/views/register.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Register - public</title>

  <!-- Custom fonts for this template-->
  <link href="/views/register_files/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="/views/register_files/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
     <nav class="navbar navbar-expand navbar-dark bg-dark static-top password"> <!-- header -->

      <a class="navbar-brand mr-1" href="">
        <img src="views/register_files/logo.png" alt="" class="logo">
        <h6 class="nameweb"> Learning English</h6>
      </a>

    

    <!-- Navbar Search -->
   

    <!-- Navbar -->
    

  </nav> <!-- heets header  -->
    <div class="card card-register mx-auto mt-5">

      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form action="register" method="post" class="beta-form-checkout">
          <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
          @if(count($errors)>0)
          <div class="alert alert-danger">
            @foreach($errors->all() as $err)
            {{$err}}
            @endforeach
          </div>
          @endif
          @if(Session::has('thanhcong'))
          <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
          @endif
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-group">
                  <input style="" type="text" id="firstname" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" id="lastname" class="form-control" placeholder="Last name" required="required" autofocus="autofocus">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <input type="email" id="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="password" id="password" class="form-control" placeholder="Password" required="required" autofocus="autofocus">                 </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required" autofocus="autofocus">                </div>
              </div>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="login.html">Register</a>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="/views/login.blade.php">Login Page</a>
          <a class="d-block small" href="file:///D:/web_btl/WebProgramming20182/public/views/forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="/views/register_files/jquery.min.js"></script>
  <script src="/views/register_files/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/views/register_files/jquery.easing.min.js.tải xuống"></script>
  <script src="/views/register_files/script.js.tải xuống" type="text/javascript" charset="utf-8" async="" defer=""></script>




</body></html>