<!DOCTYPE html>
<html lang="en">
<head>

<title>Project Preview</title>

@include('layouts.head')
</head>
<body>

@include('layouts.guide_topbar')
  <!-- ======= Header ======= -->
  @include('layouts.header_nav')






  <main id="main">
    <div class="container-fluid mt-3">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-md-2 mt-5">
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

    <!-- <p class="text-center">This is the center content area where your main content will go.</p> -->
    <div class="row">
    <div class="col-md-8 mt-5">
    <div class="card mx-5 col-12" >
        <img src="img/a.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <!-- Card body content here -->
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">A second item</li>
        </ul>
        <div class="card-body">
            <!-- Additional card body content here -->
        </div>
    </div>
</div>


</div>
<br>
<!-- Centered pagination links -->
<div class="centered-pagination-container">

</div>

</div>

<!-- Right Sidebar for Google Ads -->
            <div class="col-md-2 mt-5">
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










  @include('layouts.footer')

  <!-- End Footer -->
  <!-- Vendor JS Files -->
  @include('layouts.script')
</body>
</html>
