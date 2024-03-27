<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        return view("index");
    }


    public function add_project_home()
    {

        $project_category = Category::all();
        return view('screens.add_project_home', compact('project_category'));
    }


    public function project_store_home(Request $request)
    {
        // Validate the request data if needed

        // Validate the Project_Logo file
        $request->validate([
            'Project_Logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);

        // Handle file upload
        if ($request->hasFile('Project_Logo')) {
            $image = $request->file('Project_Logo');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('products'), $imageName); // Move image to 'public/products' directory

            // Check if the image was successfully moved
            if (!file_exists(public_path('products/' . $imageName))) {
                return redirect()->back()->with('error', 'Failed to move image');
            }
        } else {
            return redirect()->back()->with('error', 'No image file uploaded');
        }



        // dd($project_category);

        // Create a new instance of Project
        $project = new Project;
        $project->Project_Name = $request->Project_Name;
        $project->Project_Logo = '/products/' . $imageName; // Save the file path in the database
        $project->Project_Symbol = $request->Project_Symbol;
        $project->Project_Type = $request->Project_Type;
        $project->Project_Domain = $request->Project_Domain;
        $project->Project_Category = $request->Project_Category;
        $project->Project_Launch_Date = $request->Project_Launch_Date;
        $project->Token_Standard = $request->Token_Standard;
        $project->BlockChain_Plateform = $request->BlockChain_Plateform;
        $project->Project_Website = $request->Project_Website;
        $project->Project_GitHub_Link = $request->Project_GitHub_Link;
        $project->Project_WhitePaper = $request->Project_WhitePaper;
        $project->Project_Comment = $request->Project_Comment;
        $project->Project_Comment_Id = $request->Project_Comment_Id;
        $project->Project_Total_Supply = $request->Project_Total_Supply;
        $project->Project_Circulating_Supply = $request->Project_Circulating_Supply;

        // Save the project record
        $project->save();

        return view('screens.add_project_home')->with('success', 'Project created successfully!');
    }

    public function manage_project_home(Request $request)
    {
        // Get all categories
        $categories = Category::all();

        // Get search query
        $searchQuery = $request->input('search');

        // Get projects based on the selected category IDs (if filter is applied)
        $selectedCategoryIds = $request->input('category_id', []);

        // Query projects with eager loading of the category relationship
        $projectsQuery = Project::with('category')
            ->where('status', 'approved');

        // Apply search filter if search query exists
        if ($searchQuery) {
            $projectsQuery->where('Project_Name', 'like', '%' . $searchQuery . '%');
        }

        // Apply category filter if selected categories exist
        if (!empty($selectedCategoryIds)) {
            $projectsQuery->whereIn('category_id', $selectedCategoryIds);
        }

        // Paginate the filtered projects
        $projects = $projectsQuery->paginate(5);

        return view('screens.manage_project_home', compact('categories', 'projects'));
    }

    public function showPreview($id)
    {

        $projects = Project::findOrFail($id);
        return view('screens.blogs_screen', compact('projects'));
    }


}
