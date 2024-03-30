<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Category</title>
@include("dashboard_layouts.css_link");
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include("dashboard_layouts.sidebar")
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include("dashboard_layouts.top_navbar")
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


                                        <div class="container mt-5">

                                            <div class="row">
                                                <div class="col-md-8">
                                                    <form action="{{url('add_promotors')}}" method="POST">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="promotor_name" class="form-label">Promotor Name:</label>
                                                            <input type="text" class="form-control" id="promotor_name" name="promotor_name" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="promotor_type" class="form-label">Promotor Type:</label>
                                                            <input type="text" class="form-control" id="promotor_type" name="promotor_type" required>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="promotor_previous_project_id" class="form-label">Promotor Previous Project ID:</label>
                                                            <input type="number" class="form-control" id="promotor_previous_project_id" name="promotor_previous_project_id">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="promotor_previous_project_name" class="form-label">Promotor Previous Project Name:</label>
                                                            <input type="text" class="form-control" id="promotor_previous_project_name" name="promotor_previous_project_name">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="promotor_comment_id" class="form-label">Promotor Comment ID:</label>
                                                            <input type="number" class="form-control" id="promotor_comment_id" name="promotor_comment_id">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="promotor_comments" class="form-label">Promotor Comments:</label>
                                                            <textarea class="form-control" id="promotor_comments" name="promotor_comments"></textarea>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="promotor_wallet_id" class="form-label">Promotor Wallet ID:</label>
                                                            <input type="number" class="form-control" id="promotor_wallet_id" name="promotor_wallet_id">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="promotor_wallet_url" class="form-label">Promotor Wallet URL:</label>
                                                            <input type="text" class="form-control" id="promotor_wallet_url" name="promotor_wallet_url">
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
