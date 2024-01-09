<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dashui.codescandy.com/dashuipro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 08:09:38 GMT -->
<head>
    <!-- Required meta tags -->
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>SIPVTAX</title>

 <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
<script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-M8S4MT3EYG');
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.ico">
<!-- Libs CSS -->
<link href="assets/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet">
<link href="assets/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">
<!-- Theme CSS -->
<link rel="stylesheet" href="assets/css/theme.min.css">
@stack('css')

</head>

<body>
    <main id="main-wrapper" class="main-wrapper">

        <div class="header">
  <!-- navbar -->
  <div class="navbar-custom navbar navbar-expand-lg">
    <div class="container-fluid px-0">
    <a class="navbar-brand d-block d-md-none" href="index.html">
      <img src="assets/images/brand/logo/logo-2.svg" alt="Image">
  </a>

    <a id="nav-toggle" href="#!" class="ms-auto ms-md-0 me-0 me-lg-3 ">
      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-text-indent-left text-muted" viewBox="0 0 16 16">
        <path d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
      </svg></a>

    <div class="d-none d-md-none d-lg-block">
      <!-- Form -->
      <form action="#">


        <div class="input-group ">
          <input class="form-control rounded-3" type="search" value="" id="searchInput" placeholder="Search">
          <span class="input-group-append">
            <button class="btn  ms-n10 rounded-0 rounded-end" type="button">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="feather feather-search text-dark">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
              </svg>
            </button>
          </span>
        </div>
      </form>
    </div>
    <!--Navbar nav -->
    <ul class="navbar-nav navbar-right-wrap ms-lg-auto d-flex nav-top-wrap align-items-center ms-4 ms-lg-0">
      <a href="#" class="form-check form-switch theme-switch btn btn-ghost btn-icon rounded-circle mb-0 ">
        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault"></label>

               </a>
        </li>

      <!-- List -->
      <li class="dropdown ms-2">
        <a class="rounded-circle" href="#!" role="button" id="dropdownUser"
          data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-md avatar-indicators avatar-online">
            <img alt="avatar" src="assets/images/avatar/avatar-11.jpg" class="rounded-circle">
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end"
          aria-labelledby="dropdownUser">
          <div class="px-4 pb-0 pt-2">


            <div class="lh-1 ">
              <h5 class="mb-1"> </h5>
              <a href="#!" class="text-inherit fs-6">{{ Auth::user()->username  }}</a>
            </div>
            <div class=" dropdown-divider mt-3 mb-2"></div>
          </div>

          <ul class="list-unstyled">

           <!--  <li>
              <a class="dropdown-item d-flex align-items-center" href="#!">
                <i class="me-2 icon-xxs dropdown-item-icon" data-feather="user"></i>Edit
                Profile
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#!">

                  <i class="me-2 icon-xxs dropdown-item-icon"
                  data-feather="settings"></i>Settings
              </a>
            </li> -->
            <li>
              <a class="dropdown-item" href="/logout">
                <i class="me-2 icon-xxs dropdown-item-icon"
                  data-feather="power"></i>Sign Out
              </a>
            </li>
          </ul>

        </div>
      </li>
    </ul>
    </div>
  </div>
</div>
        <!-- navbar vertical -->
        <div class="app-menu">
         <!-- Sidebar -->

    @include('layouts.navbar')



        <!-- Page content -->
       

        <div id="app-content">
        <!-- Container fluid -->
        <div class="app-content-area">
            <div class="container-fluid">
                <div>
                    <div class="row">
                        <div class="col-12">
                        <!-- card -->
                            <div class="card mb-4">
                                <div class="card-header  ">
                                    <div class="row">

                                        <!-- simpan disini-->
                                        @yield('content')

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </main>

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/feather-icons/dist/feather.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>

    <script src="assets/js/theme.min.js"></script>
    <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="assets/js/vendors/chart.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

@stack('scripts')
</body>
</html>