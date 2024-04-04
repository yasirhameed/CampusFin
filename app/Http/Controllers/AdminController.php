<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Developer;
use App\Models\PrivateInvestor;
use App\Models\Project;
use App\Models\ProjectType;
use Illuminate\Http\Request;
use App\Models\TakenStandard;
use App\Models\ProjectCategory;
use App\Models\Promoter;

class AdminController extends Controller
{
    public function index()
    {
        return view("dashboard");
    }

    public function add_project()
    {
        // return view('layouts.add_project');
        $project_type = ProjectType::all();
        $project_category = ProjectCategory::all();
        $project_standard = TakenStandard::all();
        $developers = Developer::all();
        $companies = Company::all();
        $promoters = Promoter::all();
        $privatenvestors = PrivateInvestor::all();
        return view('layouts.add_project',
                ['project_type' => $project_type,
                'project_category' => $project_category,
                'project_standard' => $project_standard,
                'developers' => $developers,
                'companies' => $companies,
                'promoters' => $promoters,
                'privatenvestors' => $privatenvestors,
                ]);
    }
    public function project_store(Request $request)
    {
        // Validate the request if needed (you mentioned without validation, so validation is omitted here)

        // Handle file upload for Project Logo
        if ($request->hasFile('projectLogo')) {
            $image = $request->file('projectLogo');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('products'), $imageName); // Move image to 'public/products' directory
        } else {
            $imageName = null; // Set imageName to null if no image is uploaded
        }

        // Create a new Project instance and assign values to its properties
        $project = new Project;
        $project->projectName = $request->input('projectName');
        $project->projectSymbol = $request->input('projectSymbol');
        $project->projectLogo = $imageName; // Save the image name or null if no image uploaded
        $project->selectProjectType = $request->input('selectProjectType');
        $project->selectProjectCategory = $request->input('selectProjectCategory');
        $project->selectProjectStandard = $request->input('selectProjectStandard');
        $project->selectProjectPlatform = $request->input('selectProjectPlatform');
        $project->selectProjectDomain = $request->input('selectProjectDomain');
        $project->projectAuditFile = $request->input('projectAuditFile');
        $project->projectLaunchDate = $request->input('projectLaunchDate');
        $project->projectWebsiteURL = $request->input('projectWebsiteURL');
        $project->projectGitHubURL = $request->input('projectGitHubURL');
        $project->projectTotalSupply = $request->input('projectTotalSupply');
        $project->projectCirculatingSupply = $request->input('projectCirculatingSupply');
        $project->projectWhitepaperURL = $request->input('projectWhitepaperURL');
        $project->selectProjectSocialMedia = $request->input('selectProjectSocialMedia');
        $project->enterSocialMediaURL = $request->input('enterSocialMediaURL');
        $project->selectDeveloper = $request->input('selectDeveloper');
        $project->selectCompany = $request->input('selectCompany');
        $project->selectPromoterName = $request->input('selectPromoterName');
        $project->selectPrivateInvestor = $request->input('selectPrivateInvestor');
        $project->privateInvestorTokenRelease = $request->input('privateInvestorTokenRelease');
        $project->radioInvestorRelease = $request->input('radioInvestorRelease');
        $project->comment = $request->input('comment');

        // Save the project record to the database
        $project->save();

        return redirect()->route('add_project')->with('success', 'Project created successfully!');
    }

    public function project_list(Request $request)
    {
        $searchQuery = $request->input('search');
        // Query projects based on search query if it exists
        $query = Project::query();
        if (!empty($searchQuery)) {
            $query->where('projectName', 'like', '%' . $searchQuery . '%')
                ->orWhere('selectProjectType', 'like', '%' . $searchQuery . '%')
                ->orWhere('selectProjectCategory', 'like', '%' . $searchQuery . '%')
                ->orWhere('selectProjectStandard', 'like', '%' . $searchQuery . '%')
                ->orWhere('selectProjectPlatform', 'like', '%' . $searchQuery . '%')
                ->orWhere('projectWhitepaperURL', 'like', '%' . $searchQuery . '%')
                ->orWhere('projectTotalSupply', 'like', '%' . $searchQuery . '%')
                ->orWhere('projectCirculatingSupply', 'like', '%' . $searchQuery . '%');
        }

        // Paginate the filtered projects
        $projects = $query->paginate(10);

        return view('layouts.project_list', compact('projects'));
        // return view('layouts.project_list');
    }


    public function edit_product($id)
    {
        $projects = Project::find($id);
        $project_type = ProjectType::all();
        $project_category = ProjectCategory::all();
        $project_standard = TakenStandard::all();
        $developers = Developer::all();
        $companies = Company::all();
        $promoters = Promoter::all();
        $privatenvestors = PrivateInvestor::all();
        return view('dashboard_layouts.developer',
                ['project_type' => $project_type,
                'project_category' => $project_category,
                'project_standard' => $project_standard,
                'developers' => $developers,
                'companies' => $companies,
                'promoters' => $promoters,
                'privatenvestors' => $privatenvestors,
                'projects' => $projects,
                ]);
    }



    public function delete_project($id)
    {
        $projects = Project::find($id);

        $projects->delete();

        return redirect()->back()->with('success', 'Product deleted successfully.');
    }

    public function approve($id)
    {
        $project = Project::findOrFail($id);
        $project->status = 'approved';
        $project->save();

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'Project approved successfully');
    }



    public function guide()
    {
        return view('template.guide_screen');
    }

}
