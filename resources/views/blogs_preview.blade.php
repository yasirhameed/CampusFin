<!DOCTYPE html>
<html lang="en">

<head>
<title>Guide Screen</title>
@include('layouts.head')

<style>
    .blog-preview {
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid #ccc;
        padding-bottom: 20px;
    }

    .blog-thumbnail img {
        max-width: 200px;
        height: auto;
    }

    .blog-info {
        flex-grow: 1;
        margin-left: 20px;
    }

    .blog-title {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .blog-summary {
        font-size: 16px;
        margin-bottom: 10px;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        padding: 8px 16px;
        border-radius: 4px;
        text-decoration: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>


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
            <div class="col-md-8">
    <h1 class="text-center">Blog Title</h1>
    <!-- <p class="text-center">This is the center content area where your main content will go.</p> -->

    <div class="blog-preview">
        <div class="blog-thumbnail">
            <img src="img/a.jpg" alt="Google Ads" class="img-fluid">
        </div>
        <div class="blog-info">
            <h2 class="blog-title">Blog Title 1</h2>
            <p class="blog-summary">Brief summary of Blog 1. This is a short description of the blog content. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque, recusandae praesentium eos sapiente quia dicta fugiat corrupti deserunt! Saepe unde eius similique necessitatibus maxime autem ex. Aspernatur ipsum facere velit.</p>
            <!-- <a href="#" class="btn btn-primary">Read More</a> -->
        </div>
    </div>

    <!-- Repeat the above structure for other blogs -->
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
