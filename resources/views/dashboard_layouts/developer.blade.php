<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Category</title>
    @include("dashboard_layouts.css_link");


    <style>
        /* Add custom styles for the scrollable table */
        .scrollable-table {
            overflow-x: auto;
        }
    </style>

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
                        <h1 class="h3 mb-0 text-gray-800">Add developer</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="container">

                            <div class="row justify-content-center">
                                <div class="col-md-12">

                                    <div class="card">
                                        <div class="card-header">

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
                                            <div class="scrollable-table">
                                                        <table class="table table-bordered table-sm">
                                                            <tr>
                                                                <th>id</th>
                                                                <th>D_Name</th>
                                                                <th>D_Website</th>
                                                                <th>D_GitHub_Link</th>
                                                                <th>D_Social_Media</th>
                                                                <th>D_Previous_Project</th>
                                                                <th>D_Comments_Id</th>
                                                                <th>D_Comments</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            @foreach($Developers as $Developer)
                                                            <tr>
                                                                <td> {{$Developer->id}}</td>
                                                                <td> {{$Developer->Developer_Name}}</td>
                                                                <td> {{$Developer->Developer_Website}}</td>
                                                                <td> {{$Developer->Developer_GitHub_Link}}</td>
                                                                <td> {{$Developer->Developer_Social_Media}}</td>
                                                                <td> {{$Developer->Developer_Previous_Project}}</td>
                                                                <td> {{$Developer->Developer_Comments_Id}}</td>
                                                                <td> {{$Developer->Developer_Comments}}</td>
                                                                <td >
                                                                    <td><a href="{{ url('delete_developer', $Developer->id) }}" class="btn btn-danger" >Delete</a></td>
                                                                </td>
                                                                <td>
                                                                <a href="">Edit</a>


                                                                </td>

                                                            </tr>

                                                            @endforeach

                                                        </table>
                                                    </div>
                                                    <!-- Button trigger modal -->


                                                    <!-- Modal -->





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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
