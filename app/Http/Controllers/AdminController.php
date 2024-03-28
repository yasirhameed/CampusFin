<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;
use App\Models\Project;
use App\Models\Category;
use App\Models\Developer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {

        return view("dashboard");
    }

    public function add_project()
    {
        $project_category = Category::all();
        return view('dashboard_layouts.add_project', compact('project_category'));
    }

    public function project_store(Request $request)
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

        return redirect()->route('add_project')->with('success', 'Project created successfully!');
    }



    public function project_list(Request $request)
    {
        $searchQuery = $request->input('search');

        // Query projects based on search query if it exists
        $query = Project::query();
        if (!empty($searchQuery)) {
            $query->where('Project_Name', 'like', '%' . $searchQuery . '%')
                ->orWhere('Project_Logo', 'like', '%' . $searchQuery . '%')
                ->orWhere('Project_Symbol', 'like', '%' . $searchQuery . '%')
                ->orWhere('Project_Type', 'like', '%' . $searchQuery . '%')
                ->orWhere('Project_Domain', 'like', '%' . $searchQuery . '%')
                ->orWhere('Project_Category', 'like', '%' . $searchQuery . '%')
                ->orWhere('Project_Launch_Date', 'like', '%' . $searchQuery . '%')
                ->orWhere('Token_Standard', 'like', '%' . $searchQuery . '%')
                ->orWhere('BlockChain_Plateform', 'like', '%' . $searchQuery . '%')
                ->orWhere('Project_Website', 'like', '%' . $searchQuery . '%')
                ->orWhere('Project_GitHub_Link', 'like', '%' . $searchQuery . '%')
                ->orWhere('Project_WhitePaper', 'like', '%' . $searchQuery . '%')
                ->orWhere('Project_Comment', 'like', '%' . $searchQuery . '%')
                ->orWhere('Project_Comment_Id', 'like', '%' . $searchQuery . '%')
                ->orWhere('Project_Total_Supply', 'like', '%' . $searchQuery . '%')
                ->orWhere('Project_Circulating_Supply', 'like', '%' . $searchQuery . '%');
        }

        // Paginate the filtered projects
        $projects = $query->paginate(6);

        return view('dashboard_layouts.project_list', compact('projects'));
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

    public function show_category()
    {
        $category = Category::all();

        return view('dashboard_layouts.show_category', compact('category'));
    }


    public function add_category(Request $request)
    {
        $category = new Category();

        $category->name = $request->name;
        $category->save();

        // return view('dashboard_layouts.show_category')->with('success', 'category add successfully');
        return redirect()->back()->with('success', 'category add successfully');
    }

    public function delete_category($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('success', 'category delete successfully');
    }

    // Developer Work


    public function developer()
    {
        $Developers = Developer::all();

        return view('dashboard_layouts.developer', compact('Developers'));
    }

    public function add_developer(Request $request)

    {
        $Developers = new Developer();

        $Developers->Developer_Name = $request->Developer_Name;
        $Developers->Developer_Website = $request->Developer_Website;
        $Developers->Developer_GitHub_Link = $request->Developer_GitHub_Link;
        $Developers->Developer_Social_Media = $request->Developer_Social_Media;
        $Developers->Developer_Previous_Project = $request->Developer_Previous_Project;
        $Developers->Developer_Comments_Id = $request->Developer_Comments_Id;
        $Developers->Developer_Comments = $request->Developer_Comments;

        $Developers->save();
        return redirect()->back()->with('success', 'category delete successfully');
    }

    public function delete_developer($id)
    {
        $Developers = Developer::find($id);
        $Developers->delete();

        return redirect()->back()->with('success', 'Developer delete successfully');

    }
}
