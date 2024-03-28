<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Project</title>
@include("user_dashboard_layouts.user_css_link");
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include("user_dashboard_layouts.user_sidebar")
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include("user_dashboard_layouts.user_top_navbar")
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add Project</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">Add Project</div>

                                        @if(session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                        @endif

                                        @if(session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                        @endif

                                        <div class="card-body">


                                        <div class="container mt-53">

                        <form action="{{url('user_project_store')}}" method="POST" enctype="multipart/form-data">
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
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="admin_dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="admin_dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin_dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin_dashboard/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="admin_dashboard/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="admin_dashboard/js/demo/chart-area-demo.js"></script>
    <script src="admin_dashboard/js/demo/chart-pie-demo.js"></script>

</body>

</html>
