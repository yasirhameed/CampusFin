<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.css')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       @include('layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
            @include('layouts.nav')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
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

                <!-- /.container-fluid -->
         </div>


     @include('layouts.footer')

</body>

</html>
