<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Project</title>
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
                                        <div class="container ">
                                            <form>
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <label for="projectName" class="form-label">Project Name</label>
                                                        <input type="text" class="form-control" id="projectName" name="projectName" placeholder="Project Name">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="projectSymbol" class="form-label">Project Symbol</label>
                                                        <input type="text" class="form-control" id="projectSymbol" name="projectSymbol" placeholder="Project Symbol">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="projectLogo" class="form-label">Project Logo</label>
                                                        <input type="text" class="form-control" id="projectLogo" name="projectLogo" placeholder="Project Logo">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <label for="selectProjectType" class="form-label">Select Project Type</label>
                                                        <input type="text" class="form-control" id="selectProjectType" name="selectProjectType" placeholder="Select Project Type">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="selectProjectCategory" class="form-label">Select Project Category</label>
                                                        <input type="text" class="form-control" id="selectProjectCategory" name="selectProjectCategory" placeholder="Select Project Category">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="selectProjectStandard" class="form-label">Select Project Standard</label>
                                                        <input type="text" class="form-control" id="selectProjectStandard" name="selectProjectStandard" placeholder="Select Project Standard">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <label for="selectProjectPlatform" class="form-label">Select Project Platform</label>
                                                        <input type="text" class="form-control" id="selectProjectPlatform" name="selectProjectPlatform" placeholder="Select Project Platform">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="selectProjectDomain" class="form-label">Select Project Domain</label>
                                                        <input type="text" class="form-control" id="selectProjectDomain" name="selectProjectDomain" placeholder="Select Project Domain">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="projectAuditFile" class="form-label">Project Audit File</label>
                                                        <input type="text" class="form-control" id="projectAuditFile" name="projectAuditFile" placeholder="Project Audit File">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <label for="projectLaunchDate" class="form-label">Select Project Launch Date</label>
                                                        <input type="text" class="form-control" id="projectLaunchDate" name="projectLaunchDate" placeholder="Select Project Launch Date">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="projectWebsiteURL" class="form-label">Enter Project Website URL</label>
                                                        <input type="text" class="form-control" id="projectWebsiteURL" name="projectWebsiteURL" placeholder="Enter Project Website URL">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="projectGitHubURL" class="form-label">Enter Project GitHub URL</label>
                                                        <input type="text" class="form-control" id="projectGitHubURL" name="projectGitHubURL" placeholder="Enter Project GitHub URL">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <label for="projectTotalSupply" class="form-label">Select Project Total Supply</label>
                                                        <input type="text" class="form-control" id="projectTotalSupply" name="projectTotalSupply" placeholder="Select Project Total Supply">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="projectCirculatingSupply" class="form-label">Enter Project Circulating Supply</label>
                                                        <input type="text" class="form-control" id="projectCirculatingSupply" name="projectCirculatingSupply" placeholder="Enter Project Circulating Supply">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="projectWhitepaperURL" class="form-label">Enter Project Whitepaper URL</label>
                                                        <input type="text" class="form-control" id="projectWhitepaperURL" name="projectWhitepaperURL" placeholder="Enter Project Whitepaper URL">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <label for="selectProjectSocialMedia" class="form-label">Select Project Social Media</label>
                                                        <input type="text" class="form-control" id="selectProjectSocialMedia" name="selectProjectSocialMedia" placeholder="Select Project Social Media">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="enterSocialMediaURL" class="form-label">Enter Social Media URL</label>
                                                        <input type="text" class="form-control" id="enterSocialMediaURL" name="enterSocialMediaURL" placeholder="Enter Social Media URL">
                                                    </div>
                                                </div>
                                                <h3>Developer Information</h3>
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <label for="selectDeveloper" class="form-label">Select Developer</label>
                                                        <input type="text" class="form-control" id="selectDeveloper" name="selectDeveloper" placeholder="Select Developer">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="selectCompany" class="form-label">Select Company</label>
                                                        <input type="text" class="form-control" id="selectCompany" name="selectCompany" placeholder="Select Company">
                                                    </div>
                                                </div>
                                                <h3>Promoter Information</h3>
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <label for="selectPromoterName" class="form-label">Select Promoter Name</label>
                                                        <input type="text" class="form-control" id="selectPromoterName" name="selectPromoterName" placeholder="Select Promoter Name">
                                                    </div>
                                                </div>
                                                <h3>Private Investor Information</h3>
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <label for="selectPrivateInvestor" class="form-label">Select Private Investor</label>
                                                        <input type="text" class="form-control" id="selectPrivateInvestor" name="selectPrivateInvestor" placeholder="Select Private Investor">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="privateInvestorTokenRelease" class="form-label">Private Investor Token Release</label>
                                                        <input type="text" class="form-control" id="privateInvestorTokenRelease" name="privateInvestorTokenRelease" placeholder="Private Investor Token Release">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <label for="radioFull">Full</label>
                                                        <input type="radio" class="form-check-input" id="radioFull" name="radioInvestorRelease" value="full">
                                                        <label for="radioPartial">Partial</label>
                                                        <input type="radio" class="form-check-input" id="radioPartial" name="radioInvestorRelease" value="partial">
                                                        <label for="radioNo">No</label>
                                                        <input type="radio" class="form-check-input" id="radioNo" name="radioInvestorRelease" value="no">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <label for="comment" class="form-label">Comment</label>
                                                        <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Enter Comment"></textarea>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
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
