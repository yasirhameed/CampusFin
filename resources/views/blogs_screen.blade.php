<!DOCTYPE html>
<html lang="en">

<head>
<title>Guide Screen</title>
@include('layouts.head')


</head>

<body>

  <!-- ======= Top Bar ======= -->

  @include('layouts.guide_topbar')
  <!-- ======= Header ======= -->


  @include('layouts.header_nav')


  <!-- End Header -->


  <main id="main">




    <div class="container-fluid mt-3">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Guide</h5>
                        <!-- Your Google Ads content goes here -->

                        <div class="list-group mt-3">

                    <a href="#" class="list-group-item list-group-item-action">Link 1</a>
                    <a href="#" class="list-group-item list-group-item-action">Link 2</a>
                    <a href="#" class="list-group-item list-group-item-action">Link 3</a>
                </div>
                    </div>
                </div>
            </div>
            <!-- Center Content Area -->
            <div class="col-md-8 mt-3">
    <h1 class="text-center">Blogs</h1>
    <!-- <p class="text-center">This is the center content area where your main content will go.</p> -->

    <div class="row">
        <div class="col-md-4">
            <div class="card">
            <img src="img/a.jpg" class="card-img-top" alt="Blog Image 1">
                <div class="card-body">
                    <h5 class="card-title">Blog Title 1</h5>
                    <p class="card-text">Brief description of Blog 1.</p>
                    <!-- <a href="#" class="btn btn-primary">Read More</a> -->
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
            <img src="img/a.jpg" class="card-img-top" alt="Blog Image 1">
                <div class="card-body">
                    <h5 class="card-title">Blog Title 2</h5>
                    <p class="card-text">Brief description of Blog 2.</p>
                    <!-- <a href="#" class="btn btn-primary">Read More</a> -->
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
            <img src="img/a.jpg" class="card-img-top" alt="Blog Image 1">
                <div class="card-body">
                    <h5 class="card-title">Blog Title 3</h5>
                    <p class="card-text">Brief description of Blog 3.</p>
                    <!-- <a href="#" class="btn btn-primary">Read More</a> -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
            <img src="img/a.jpg" class="card-img-top" alt="Blog Image 1">
                <div class="card-body">
                    <h5 class="card-title">Blog Title 3</h5>
                    <p class="card-text">Brief description of Blog 3.</p>
                    <!-- <a href="#" class="btn btn-primary">Read More</a> -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
            <img src="img/a.jpg" class="card-img-top" alt="Blog Image 1">
                <div class="card-body">
                    <h5 class="card-title">Blog Title 3</h5>
                    <p class="card-text">Brief description of Blog 3.</p>
                    <!-- <a href="#" class="btn btn-primary">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
</div>


            <!-- Right Sidebar for Google Ads -->
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Google Ads</h5>
                        <!-- Your Google Ads content goes here -->
                        <img src="https://via.placeholder.com/300x600" alt="Google Ads" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>





  </main><!-- End #main -->

<br><br>  <!-- Yasir Hameed -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')

  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('layouts.script')
</body>

</html>
