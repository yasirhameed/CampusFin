<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/admin')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/admin')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#submodules"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Add Records</span>
                </a>
                <div id="submodules" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a id="openModalButton" class="collapse-item" data-bs-toggle="modal" data-bs-target="#projecttypeModal">Project type</a>
                        <a id="openModalButton" class="collapse-item" data-bs-toggle="modal" data-bs-target="#projectcategoryModal">Project category</a>
                        <a id="openModalButton" class="collapse-item" data-bs-toggle="modal" data-bs-target="#projectdomainModal">Project Domain</a>
                        <a id="openModalButton" class="collapse-item" data-bs-toggle="modal" data-bs-target="#projecttakenstandardModal">Taken Standard</a>
                        <a id="openModalButton" class="collapse-item" data-bs-toggle="modal" data-bs-target="#blockchainplateform">Block chain plateform</a>
                        <a id="openModalButton" class="collapse-item" data-bs-toggle="modal" data-bs-target="#audits">Audits</a>
                        <a id="openModalButton" class="collapse-item" data-bs-toggle="modal" data-bs-target="#socialmedia">Social Media</a>
                        <a id="openModalButton" class="collapse-item" data-bs-toggle="modal" data-bs-target="#company">Company</a>
                        <a id="openModalButton" class="collapse-item" data-bs-toggle="modal" data-bs-target="#developer">Developer</a>
                        <a id="openModalButton" class="collapse-item" data-bs-toggle="modal" data-bs-target="#promoter">Promoter</a>
                        <a id="openModalButton" class="collapse-item" data-bs-toggle="modal" data-bs-target="#privateinvester">Private Invester</a>
                        <a id="openModalButton" class="collapse-item" data-bs-toggle="modal" data-bs-target="#investercompany">Invester Company</a>
                        <a id="openModalButton" class="collapse-item" data-bs-toggle="modal" data-bs-target="#promotertype">Promoter Type</a>
                        <a id="openModalButton" class="collapse-item" data-bs-toggle="modal" data-bs-target="#walletaddress">Wallet Address</a>
                        {{-- <a class="collapse-item" href="{{url('list_project')}}">Project List</a> --}}
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#project"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Projects</span>
                </a>
                <div id="project" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="{{url('add_project')}}">Add Project</a>
                        <a class="collapse-item" href="{{url('list_project')}}">Project List</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Category</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Category</h6>
                        <a class="collapse-item" href="{{url('add_category')}}">Add category</a>
                        <a class="collapse-item" href="{{url('show_category')}}">Show category</a>

                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Developer</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Developer List:</h6>
                        <a class="collapse-item" href="{{url('add_developer')}}">add developer</a>
                        <a class="collapse-item" href="{{url('developer')}}">Developer List</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#promotorspage"
                    aria-expanded="true" aria-controls="promotorspage">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>promotors</span>
                </a>
                <div id="promotorspage" class="collapse" aria-labelledby="headingPages" data-parent="#promotorspage">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">promotors List:</h6>
                        <a class="collapse-item" href="{{url('add_promotors')}}">add promotors</a>
                        <a class="collapse-item" href="{{url('promotors')}}">promotors List</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            <!-- Sidebar Message -->
        </ul>

        {{-- models  --}}

        {{-- project type  --}}
        <div class="modal fade" id="projecttypeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Project type</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form id="addCategoryForm" action="{{url('project-type')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">Enter a project type</label>
                      <input type="text" class="form-control"  name="categoryName" required>
                    </div>
                  </form>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="submit" form="addCategoryForm" class="btn btn-info">Update</button>
                    <button type="submit" name="submit" form="addCategoryForm" class="btn btn-primary">Add</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="projectcategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Project Category</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form id="addCategoryForm" action="{{url('project-category')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">Enter a project Category</label>
                      <input type="text" class="form-control"  name="categoryName" required>
                    </div>
                  </form>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="submit" form="addCategoryForm" class="btn btn-info">Update</button>
                    <button type="submit" name="submit" form="addCategoryForm" class="btn btn-primary">Add</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="projectdomainModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Project Domain</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form  action="{{url('project-domains')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Enter a project Domain</label>
                      <input type="text" class="form-control"  name="domainName" required>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>

                </div>
                <div class="modal-footer justify-content-end">
                    <button type="submit" form="addCategoryForm" class="btn btn-info">Update</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </form>
            </div>
          </div>

          {{-- taken satandard  --}}

          <div class="modal fade" id="projecttakenstandardModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Taken Standard</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form  action="{{url('taken_standard')}}"  method="POST">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">Enter a project Standard</label>
                      <input type="text" class="form-control" id="" name="name" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                  </form>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="submit" form="addCategoryForm" class="btn btn-info">Update</button>

                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="blockchainplateform" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Block chain plateform</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{url('blockchain-platform')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">Enter Block chain plateform</label>
                      <input type="text" class="form-control"  name="name" required>
                    </div>
                    <button type="submit"  class="btn btn-primary">Add</button>
                  </form>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="submit" form="addCategoryForm" class="btn btn-info">Update</button>

                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>
{{-- Audit  --}}
          <div class="modal fade" id="audits" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Audits</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{url('audits')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">Enter audit name</label>
                      <input type="text" class="form-control"  name="audits_name" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                  </form>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="submit" form="addCategoryForm" class="btn btn-info">Update</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>

{{-- social media  --}}

          <div class="modal fade" id="socialmedia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Socail Media</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{url('social-media')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">Enter Social Media</label>
                      <input type="text" class="form-control"  name="social_media_name" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>

                  </form>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="submit" form="addCategoryForm" class="btn btn-info">Update</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>

          {{-- company  --}}

          <div class="modal fade" id="company" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Company</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{url('companies')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">Enter Company Name</label>
                      <input type="text" class="form-control"  name="name" required>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Enter Company website URL</label>
                      <input type="text" class="form-control"  name="website_url" required>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Enter Company GitHub URL</label>
                      <input type="text" class="form-control"  name="github_url" required>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Enter Company Social Media</label>
                      <input type="text" class="form-control"  name="social_media" required>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Coments</label> <br>
                        <textarea name="comments" id="" cols="30" rows="6"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                  </form>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="submit" form="addCategoryForm" class="btn btn-info">Update</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>

          {{-- developer  --}}

          <div class="modal fade" id="developer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Developer</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{url('developers')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">Enter Developer Name</label>
                      <input type="text" class="form-control"  name="name" required>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Enter Developer website URL</label>
                      <input type="text" class="form-control"  name="website_url" required>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Enter Developer GitHub URL</label>
                      <input type="text" class="form-control"  name="github_url" required>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Enter Developer Social Media</label>
                      <input type="text" class="form-control"  name="social_media" required>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Coments</label> <br>
                      {{-- <input type="textarea" class="form-control"  name="categoryName" required> --}}
                        <textarea name="comments" id="" cols="30" rows="6"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                  </form>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="submit" form="addCategoryForm" class="btn btn-info">Update</button>

                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>

          {{-- promoter  --}}

          <div class="modal fade" id="promoter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Promoter</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{url('promoters')}}"  method="POST">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">Enter Promoter Name</label>
                      <input type="text" class="form-control"  name="name" required>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Enter Promoter Type</label>
                      <input type="text" class="form-control"  name="type" required>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Enter Promoter wallets</label>
                      <input type="text" class="form-control"  name="wallets" required>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Coments</label> <br>
                      {{-- <input type="textarea" class="form-control"  name="categoryName" required> --}}
                        <textarea name="comments" id="" cols="30" rows="6"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                  </form>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="submit" form="addCategoryForm" class="btn btn-info">Update</button>

                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>


          {{-- private incerster  --}}

          <div class="modal fade" id="privateinvester" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Private Invester</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{url('private-investors')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">Enter Private Invester Name</label>
                      <input type="text" class="form-control"  name="name" required>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Enter Private Invester Company Name</label>
                      <input type="text" class="form-control"  name="company_name" required>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Select Private Invester Social Media</label>
                      <input type="text" class="form-control"  name="social_media" required>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Coments</label> <br>
                      {{-- <input type="textarea" class="form-control"  name="categoryName" required> --}}
                        <textarea name="comments" id="" cols="30" rows="6"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                  </form>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="submit" form="addCategoryForm" class="btn btn-info">Update</button>

                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>

          {{-- investor company  --}}

          <div class="modal fade" id="investercompany" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Investor Company</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{url('investor-companies')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">Enter Investor Company</label>
                      <input type="text" class="form-control"  name="name" required>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Enter Investor Company URL</label>
                      <input type="text" class="form-control"  name="url" required>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Select Company Social Media</label>
                      <input type="text" class="form-control"  name="social_media" required>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Coments</label> <br>
                      {{-- <input type="textarea" class="form-control"  name="categoryName" required> --}}
                        <textarea name="comments" id="" cols="30" rows="6"></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                  </form>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="submit" form="addCategoryForm" class="btn btn-info">Update</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>


          {{-- Permoter type  --}}

          <div class="modal fade" id="promotertype" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Permoter type</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{url('promoter-types')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">Enter Permoter type</label>
                      <input type="text" class="form-control"  name="name" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                  </form>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="submit" form="addCategoryForm" class="btn btn-info">Update</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>

          {{-- wallert address  --}}

          <div class="modal fade" id="walletaddress" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Wallet Address</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="{{url('wallet-addresses')}}"  method="POST" >
                    @csrf
                    <div class="mb-3">
                      <label  class="form-label">Enter Wallet Holder Name</label>
                      <input type="text" class="form-control"  name="holder_name" required>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Enter Wallet Holder Category</label>
                      <input type="text" class="form-control"  name="holder_category" required>
                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Add Wallet Address</label>
                      <input type="text" class="form-control"  name="address" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                  </form>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="submit" form="addCategoryForm" class="btn btn-info">Update</button>

                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </div>
