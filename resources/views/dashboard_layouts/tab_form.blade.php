<div class="container mt-2">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <!-- Tab 1 -->
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="true">Company Form
</button>
      </li>
      <!-- Tab 2 -->
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">Guide Form</button>
      </li>
      <!-- Add more tabs -->
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">Blog Form</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="false">Project Form</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="false">Tab 5</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="tab6" aria-selected="false">Tab 6</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab7-tab" data-bs-toggle="tab" data-bs-target="#tab7" type="button" role="tab" aria-controls="tab7" aria-selected="false">Tab 7</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab8-tab" data-bs-toggle="tab" data-bs-target="#tab8" type="button" role="tab" aria-controls="tab8" aria-selected="false">Tab 8</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab9-tab" data-bs-toggle="tab" data-bs-target="#tab9" type="button" role="tab" aria-controls="tab9" aria-selected="false">Tab 9</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="tab10-tab" data-bs-toggle="tab" data-bs-target="#tab10" type="button" role="tab" aria-controls="tab10" aria-selected="false">Tab 10</button>
      </li>
    </ul>
    <div class="tab-content mt-3" id="myTabContent">
      <!-- Tab 1 Content -->
      <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">

      <div class="container mt-5">
    <h1 class="mb-4">Company Form</h1>
    <form action="submit.php" method="POST">
      <div class="mb-3">
        <label for="companyName" class="form-label">Company Name</label>
        <input type="text" class="form-control" id="companyName" name="companyName" required>
      </div>
      <div class="mb-3">
        <label for="companyWebsite" class="form-label">Company Website</label>
        <input type="url" class="form-control" id="companyWebsite" name="companyWebsite" required>
      </div>
      <div class="mb-3">
        <label for="companyGitHub" class="form-label">Company GitHub</label>
        <input type="url" class="form-control" id="companyGitHub" name="companyGitHub">
      </div>
      <div class="mb-3">
        <label for="companySocialMedia" class="form-label">Company Social Media</label>
        <input type="url" class="form-control" id="companySocialMedia" name="companySocialMedia">
      </div>
      <div class="mb-3">
        <label for="previousProject" class="form-label">Previous Project</label>
        <input type="text" class="form-control" id="previousProject" name="previousProject">
      </div>
      <div class="mb-3">
        <label for="companyCommentsId" class="form-label">Company Comments ID</label>
        <input type="text" class="form-control" id="companyCommentsId" name="companyCommentsId" required>
      </div>
      <div class="mb-3">
        <label for="companyComments" class="form-label">Company Comments</label>
        <textarea class="form-control" id="companyComments" name="companyComments" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


      </div>
      <!-- Tab 2 Content -->
      <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">

      <div class="container mt-5">
    <h1 class="mb-4">Guide Form</h1>
    <form action="submit_guide.php" method="POST">
      <div class="mb-3">
        <label for="guideId" class="form-label">Guide ID</label>
        <input type="text" class="form-control" id="guideId" name="guideId" required>
      </div>
      <div class="mb-3">
        <label for="guideName" class="form-label">Guide Name</label>
        <input type="text" class="form-control" id="guideName" name="guideName" required>
      </div>
      <div class="mb-3">
        <label for="moduleId" class="form-label">Module ID</label>
        <input type="text" class="form-control" id="moduleId" name="moduleId" required>
      </div>
      <div class="mb-3">
        <label for="moduleName" class="form-label">Module Name</label>
        <input type="text" class="form-control" id="moduleName" name="moduleName" required>
      </div>
      <div class="mb-3">
        <label for="modulePriority" class="form-label">Module Priority</label>
        <input type="text" class="form-control" id="modulePriority" name="modulePriority" required>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="showInOtherGuide" name="showInOtherGuide">
        <label class="form-check-label" for="showInOtherGuide">Show in Other Guide</label>
      </div>
      <div class="mb-3">
        <label for="showInOtherGuidePriority" class="form-label">Show in Other Guide Priority</label>
        <input type="text" class="form-control" id="showInOtherGuidePriority" name="showInOtherGuidePriority">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

      </div>
      <!-- Add more tab content divs for tabs 3 to 10 -->
      <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
         <div class="container mt-5">
    <h1 class="mb-4">Blog Form</h1>
    <form action="submit_blog.php" method="POST">
      <div class="mb-3">
        <label for="blogId" class="form-label">Blog ID</label>
        <input type="text" class="form-control" id="blogId" name="blogId" required>
      </div>
      <div class="mb-3">
        <label for="blogName" class="form-label">Blog Name</label>
        <input type="text" class="form-control" id="blogName" name="blogName" required>
      </div>
      <div class="mb-3">
        <label for="blogCategory" class="form-label">Blog Category</label>
        <input type="text" class="form-control" id="blogCategory" name="blogCategory" required>
      </div>
      <div class="mb-3">
        <label for="relatedBlogId" class="form-label">Related Blog ID</label>
        <input type="text" class="form-control" id="relatedBlogId" name="relatedBlogId" required>
      </div>
      <div class="mb-3">
        <label for="relatedBlogName" class="form-label">Related Blog Name</label>
        <input type="text" class="form-control" id="relatedBlogName" name="relatedBlogName" required>
      </div>
      <div class="mb-3">
        <label for="relatedBlogURL" class="form-label">Related Blog URL</label>
        <input type="url" class="form-control" id="relatedBlogURL" name="relatedBlogURL" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
      </div>



      <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab3-tab">
      <div class="container mt-5">
    <h1 class="mb-4">Project Form</h1>
    <form action="submit_project.php" method="POST">
      <div class="mb-3">
        <label for="projectId" class="form-label">Project ID</label>
        <input type="text" class="form-control" id="projectId" name="projectId" required>
      </div>
      <div class="mb-3">
        <label for="projectName" class="form-label">Project Name</label>
        <input type="text" class="form-control" id="projectName" name="projectName" required>
      </div>
      <div class="mb-3">
        <label for="projectLogo" class="form-label">Project Logo URL</label>
        <input type="text" class="form-control" id="projectLogo" name="projectLogo" required>
      </div>
      <div class="mb-3">
        <label for="projectSymbol" class="form-label">Project Symbol</label>
        <input type="text" class="form-control" id="projectSymbol" name="projectSymbol" required>
      </div>
      <div class="mb-3">
        <label for="projectType" class="form-label">Project Type</label>
        <input type="text" class="form-control" id="projectType" name="projectType" required>
      </div>
      <div class="mb-3">
        <label for="projectDomain" class="form-label">Project Domain</label>
        <input type="text" class="form-control" id="projectDomain" name="projectDomain" required>
      </div>
      <div class="mb-3">
        <label for="projectCategory" class="form-label">Project Category</label>
        <input type="text" class="form-control" id="projectCategory" name="projectCategory" required>
      </div>
      <div class="mb-3">
        <label for="projectLaunchDate" class="form-label">Project Launch Date</label>
        <input type="date" class="form-control" id="projectLaunchDate" name="projectLaunchDate" required>
      </div>
      <div class="mb-3">
        <label for="tokenStandard" class="form-label">Token Standard</label>
        <input type="text" class="form-control" id="tokenStandard" name="tokenStandard" required>
      </div>
      <div class="mb-3">
        <label for="blockchainPlatform" class="form-label">Blockchain Platform</label>
        <input type="text" class="form-control" id="blockchainPlatform" name="blockchainPlatform" required>
      </div>
      <div class="mb-3">
        <label for="projectWebsite" class="form-label">Project Website</label>
        <input type="url" class="form-control" id="projectWebsite" name="projectWebsite" required>
      </div>
      <div class="mb-3">
        <label for="projectGitHubLink" class="form-label">Project GitHub Link</label>
        <input type="url" class="form-control" id="projectGitHubLink" name="projectGitHubLink" required>
      </div>
      <div class="mb-3">
        <label for="projectWhitePaper" class="form-label">Project White Paper URL</label>
        <input type="url" class="form-control" id="projectWhitePaper" name="projectWhitePaper" required>
      </div>
      <div class="mb-3">
        <label for="projectComment" class="form-label">Project Comment</label>
        <input type="text" class="form-control" id="projectComment" name="projectComment" required>
      </div>
      <div class="mb-3">
        <label for="projectCommentId" class="form-label">Project Comment ID</label>
        <input type="text" class="form-control" id="projectCommentId" name="projectCommentId" required>
      </div>
      <div class="mb-3">
        <label for="projectTotalSupply" class="form-label">Project Total Supply</label>
        <input type="text" class="form-control" id="projectTotalSupply" name="projectTotalSupply" required>
      </div>
      <div class="mb-3">
        <label for="projectCirculatingSupply" class="form-label">Project Circulating Supply</label>
        <input type="text" class="form-control" id="projectCirculatingSupply" name="projectCirculatingSupply" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
      </div>
      <!-- Repeat this pattern for tabs 4 to 10 -->
    </div>
  </div>
