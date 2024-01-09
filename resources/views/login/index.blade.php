<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dashui.codescandy.com/dashuipro/pages/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 08:11:02 GMT -->
<head>
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Codescandy">

 <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-M8S4MT3EYG');
 </script>


<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico">


<!-- Libs CSS -->
<link href="../assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="../assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
<link href="../assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">



<!-- Theme CSS -->
<link rel="stylesheet" href="../assets/css/theme.min.css">
  <title>Sign In | SIPVTAX</title>
</head>

<body>
  <!-- container -->

  @if(session()->has('succes'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
    </div>
  @endif

  @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{session('loginError')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
    </div>
  @endif

  <main class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
      <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
        <a href="#" class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle d-none ">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
  
           </a>
        <!-- Card -->
        <div class="card smooth-shadow-md">
          <!-- Card body -->
          <div class="card-body p-6">
            <div class="mb-4">
              <!-- LOGO PAS LOGIN -->
              <img src="../assets/images/brand/logo/logo-3.png" class="mb-2 text-inverse" alt="Image"></a> 
              <!-- <p class="mb-6">Masukan Username dan Password.</p> -->
            </div>
            <!-- Form -->
            <form action="/" method="post">
              @csrf
              <!-- Username -->
              <div class="mb-3">
                <label for="email" class="form-label">Username</label>
                <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{old('username')}}" placeholder="Username here" required autofocus>
                @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="**************" required>
              </div>
              <!-- Checkbox -->
              <div class="d-lg-flex justify-content-between align-items-center
                  mb-4">
                <div class="form-check custom-checkbox">
                  <input type="checkbox" class="form-check-input" id="rememberme">
                  <label class="form-check-label" for="rememberme">Remember
                      me</label>
                </div>

              </div>
              <div>
                <!-- Button -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Sign
                    in</button>
                </div>

              
              </div>


            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- Scripts -->
  <!-- Libs JS -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/feather-icons/dist/feather.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>




<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>
</body>


<!-- Mirrored from dashui.codescandy.com/dashuipro/pages/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 08:11:02 GMT -->
</html>