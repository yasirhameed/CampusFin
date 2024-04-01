<!DOCTYPE html>
<html lang="en">

<head>
<title>Project List</title>
@include("user_dashboard_layouts.user_css_link");
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
                        <h1 class="h3 mb-0 text-gray-800">Project List</h1>
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
                                                    <th>ID</th>
                                                    <th>P-Name</th>
                                                    <th>P-Symbol</th>
                                                    <th>P-Logo</th>
                                                    <th>P-Type</th>
                                                    <th>P-Category</th>
                                                    <th>P-Standard</th>
                                                    <th>P-Platform</th>
                                                    <th>P-Domain</th>
                                                    <th>P-Audit File</th>
                                                    <th>P-Launch Date</th>
                                                    <th>P-Website URL</th>
                                                    <th>P-GitHub URL</th>
                                                    <th>P-Total Supply</th>
                                                    <th>P-Circulating Supply</th>
                                                    <th>P-Whitepaper URL</th>
                                                    <th>P-Social Media</th>
                                                    <th>Enter Social Media URL</th>
                                                    <th>Developer</th>
                                                    <th>Company</th>
                                                    <th>Promoter Name</th>
                                                    <th>Private Investor</th>
                                                    <th>Private Investor Token Release</th>
                                                    <th>Radio Investor Release</th>
                                                    <th>Comment</th>
                                                    <th>status</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                    <th>Approved</th>

                                                    </tr>

                                                    @foreach($projects as $project)
                                                    <tr>
                                                        <td>{{ $project->id }}</td>
                                                        <td>{{ $project->projectName }}</td>
                                                        <td>{{ $project->projectSymbol }}</td>
                                                        <td>
                                                            @if ($project->projectLogo)
                                                                <img src="{{ ('products/'. $project->projectLogo)}} " style="max-width: 100px; max-height: 50px;">
                                                            @else
                                                                No image available
                                                            @endif
                                                        </td>
                                                        <td>{{ $project->selectProjectType }}</td>
                                                        <td>{{ $project->selectProjectCategory }}</td>
                                                        <td>{{ $project->selectProjectStandard }}</td>
                                                        <td>{{ $project->selectProjectPlatform }}</td>
                                                        <td>{{ $project->selectProjectDomain }}</td>
                                                        <td>{{ $project->projectAuditFile }}</td>
                                                        <td>{{ $project->projectLaunchDate }}</td>
                                                        <td>{{ $project->projectWebsiteURL }}</td>
                                                        <td>{{ $project->projectGitHubURL }}</td>
                                                        <td>{{ $project->projectTotalSupply }}</td>
                                                        <td>{{ $project->projectCirculatingSupply }}</td>
                                                        <td>{{ $project->projectWhitepaperURL }}</td>
                                                        <td>{{ $project->selectProjectSocialMedia }}</td>
                                                        <td>{{ $project->enterSocialMediaURL }}</td>
                                                        <td>{{ $project->selectDeveloper }}</td>
                                                        <td>{{ $project->selectCompany }}</td>
                                                        <td>{{ $project->selectPromoterName }}</td>
                                                        <td>{{ $project->selectPrivateInvestor }}</td>
                                                        <td>{{ $project->privateInvestorTokenRelease }}</td>
                                                        <td>{{ $project->radioInvestorRelease }}</td>
                                                        <td>{{ $project->comment }}</td>
                                                        <td>{{ $project->status }}</td>
                                                        <td><a href="{{ url('edit_product', $project->id) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                                        <td><a href="{{ url('delete_project', $project->id) }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-delete-left"></i></a></td>
                                                        <td><a href="{{ url('approve_project', $project->id) }}" class="btn btn-dark btn-sm"><i class="fa-solid fa-person-circle-check"></i></a></td>
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
