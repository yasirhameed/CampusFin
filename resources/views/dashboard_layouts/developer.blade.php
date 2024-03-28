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
                        <h1 class="h3 mb-0 text-gray-800">Add developer</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="container">

                            <div class="row justify-content-center">
                                <div class="col-md-12">

                                    <div class="card">
                                        <div class="card-header"> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Add developer
                                            </button></div>

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
                                                <div class="row">
                                                    <div class="col-md-6">
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
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Add Developer</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{url('add_developer')}}" method="post">
                                                                        @csrf
                                                                        <div class="mb-3">
                                                                            <label for="name" class="form-label">Developer_Name</label>
                                                                            <input type="text" class="form-control" id="Developer_Name" name="Developer_Name" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="name" class="form-label">Developer_Website</label>
                                                                            <input type="text" class="form-control" id="Developer_Website" name="Developer_Website" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="name" class="form-label">Developer_GitHub_Link</label>
                                                                            <input type="text" class="form-control" id="Developer_GitHub_Link" name="Developer_GitHub_Link" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="name" class="form-label">Developer_Social_Media</label>
                                                                            <input type="text" class="form-control" id="Developer_Social_Media" name="Developer_Social_Media" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="name" class="form-label">Developer_Previous_Project</label>
                                                                            <input type="text" class="form-control" id="Developer_Previous_Project" name="Developer_Previous_Project" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="name" class="form-label">Developer_Comments_Id</label>
                                                                            <input type="text" class="form-control" id="Developer_Comments_Id" name="Developer_Comments_Id" required>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="name" class="form-label">Developer_Comments</label>
                                                                            <input type="text" class="form-control" id="Developer_Comments" name="Developer_Comments" required>
                                                                        </div>
                                                                        <input type="submit" name="submit" class="btn btn-primary" id="">

                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                                                </div>
                                                            </div>
                                                        </div>
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
