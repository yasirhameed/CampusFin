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

                <div class="row" style="padding:10px; border-redus:2px solid black">
                <h1>Add Project</h1>
                    <div class="col-md-12 mt-4" >
                    <form action="{{url('project_store_home')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="row">

                            <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Project_Name" class="form-label">Project Name</label>
                                <input type="text" class="form-control form-control-sm" id="Project_Name" name="Project_Name" required>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Project_Logo" class="form-label">Project Logo URL</label>
                                <input type="file" class="form-control form-control-sm" id="Project_Logo" name="Project_Logo" required>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Project_Symbol" class="form-label">Project Symbol</label>
                                <input type="text" class="form-control form-control-sm" id="Project_Symbol" name="Project_Symbol" required>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Project_Type" class="form-label">Project Type</label>
                                <input type="text" class="form-control form-control-sm" id="Project_Type" name="Project_Type" required>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Project_Domain" class="form-label">Project Domain</label>
                                <input type="text" class="form-control form-control-sm" id="Project_Domain" name="Project_Domain" required>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                        <div class="mb-3">
                        <label for="Project_Category" class="form-label">Project Category</label>
                        <select class="form-select form-select-sm" id="Project_Category" name="Project_Category" required>
                            @foreach($project_category as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="Project_Launch_Date" class="form-label">Project Launch Date</label>
            <input type="date" class="form-control form-control-sm" id="Project_Launch_Date" name="Project_Launch_Date" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="Token_Standard" class="form-label">Token Standard</label>
            <input type="text" class="form-control form-control-sm" id="Token_Standard" name="Token_Standard" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="BlockChain_Plateform" class="form-label">Blockchain Platform</label>
            <input type="text" class="form-control form-control-sm" id="BlockChain_Plateform" name="BlockChain_Plateform" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="Project_Website" class="form-label">Project Website</label>
            <input type="url" class="form-control form-control-sm" id="Project_Website" name="Project_Website" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="Project_GitHub_Link" class="form-label">Project GitHub Link</label>
            <input type="url" class="form-control form-control-sm" id="Project_GitHub_Link" name="Project_GitHub_Link" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="Project_WhitePaper" class="form-label">Project White Paper URL</label>
            <input type="url" class="form-control form-control-sm" id="Project_WhitePaper" name="Project_WhitePaper" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="Project_Comment" class="form-label">Project Comment</label>
            <input type="text" class="form-control form-control-sm" id="Project_Comment" name="Project_Comment" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="Project_Comment_Id" class="form-label">Project Comment ID</label>
            <input type="text" class="form-control form-control-sm" id="Project_Comment_Id" name="Project_Comment_Id" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="Project_Total_Supply" class="form-label">Project Total Supply</label>
            <input type="text" class="form-control form-control-sm" id="Project_Total_Supply" name="Project_Total_Supply" required>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="Project_Circulating_Supply" class="form-label">Project Circulating Supply</label>
            <input type="text" class="form-control form-control-sm" id="Project_Circulating_Supply" name="Project_Circulating_Supply" required>
          </div>
        </div>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
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
