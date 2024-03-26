<!DOCTYPE html>
<html lang="en">

<head>
<title>Project List</title>
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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">Create New Project</div>

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
                                            <!-- Add the scrollable div -->
                                            <div class="scrollable-table">
                                                <table class="table table-sm table-boardered">

                                                   <tr>
                                                   <th>Project Name</th>
                                                    <th>Project Logo</th>
                                                    <th>Project Symbol</th>
                                                    <th>Project Type</th>
                                                    <th>Project Domain</th>
                                                    <th>Project Category</th>
                                                    <th>Project Launch Date</th>
                                                    <th>Token Standard</th>
                                                    <th>Blockchain Platform</th>
                                                    <th>Project Website</th>
                                                    <th>Project GitHub Link</th>
                                                    <th>Project White Paper URL</th>
                                                    <th>Project Comment</th>
                                                    <th>Project Comment ID</th>
                                                    <th>Project Total Supply</th>
                                                    <th>Project Circulating Supply</th>
                                                    <th>Status</th>
                                                    </tr>


                                                    @foreach($projects as $project)
                                                    <tr>
                                                        <td>{{ $project->Project_Name }}</td>
                                                          <td>
                                                        @if ($project->Project_Logo)
                                                            <img src="{{ ('products/'. $project->Project_Logo)}} " style="max-width: 100px; max-height: 50px;">
                                                        @else
                                                            No image available
                                                        @endif
                                                    </td>
                                                        <td>{{ $project->Project_Symbol }}</td>
                                                        <td>{{ $project->Project_Type }}</td>
                                                        <td>{{ $project->Project_Domain }}</td>
                                                        <td>{{ $project->Project_Category }}</td>
                                                        <td>{{ $project->Project_Launch_Date }}</td>
                                                        <td>{{ $project->Token_Standard }}</td>
                                                        <td>{{ $project->BlockChain_Plateform }}</td>
                                                        <td>{{ $project->Project_Website }}</td>
                                                        <td>{{ $project->Project_GitHub_Link }}</td>
                                                        <td>{{ $project->Project_WhitePaper }}</td>
                                                        <td>{{ $project->Project_Comment }}</td>
                                                        <td>{{ $project->Project_Comment_Id }}</td>
                                                        <td>{{ $project->Project_Total_Supply }}</td>
                                                        <td>{{ $project->Project_Circulating_Supply }}</td>
                                                        <td>{{ $project->status }}</td>
                                                        <!-- Add more columns as needed -->
                                                    </tr>
                                                    @endforeach
                                                </table>
                                            </div>
                                            <div class="d-flex justify-content-center mt-4">
    {{ $projects->links() }}
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
