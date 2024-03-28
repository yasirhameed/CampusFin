<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function user_dashboard()
    {
        return view('user_dashboard');
    }

    public function user_add_project()
{
    $project_category = Category::all();
    return view('user_dashboard_layouts.user_add_project', compact('project_category'));
}

    public function user_project_store(Request $request)
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

    // Get the authenticated user's ID (user_id)
    $user_id = auth()->id();

    // Create a new instance of Project and associate it with the authenticated user
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

    // Associate the project with the authenticated user
    $project->user_id = $user_id;

    // Save the project record
    $project->save();

    return view('user_dashboard_layouts.user_add_project')->with('success', 'Project created successfully!');
}




    public function user_project_list(Request $request)
    {
        $searchQuery = $request->input('search');
        $user = auth()->user();

        // Query projects with user relationship and filter by user ID
        $query = Project::with('user')->where('user_id', $user->id);

        // Apply search query if provided
        if (!empty($searchQuery)) {
            $query->where('Project_Name', 'like', '%' . $searchQuery . '%')
                ->orWhere('Project_Logo', 'like', '%' . $searchQuery . '%')
                ->orWhere('Project_Symbol', 'like', '%' . $searchQuery . '%')
                // Add more search conditions as needed
                ->orWhereHas('user', function ($q) use ($searchQuery) {
                    $q->where('name', 'like', '%' . $searchQuery . '%'); // Example: Search by user name
                });
        }

        // Paginate the filtered projects
        $projects = $query->paginate(6);

        return view('user_dashboard_layouts.user_project_list', compact('projects'));
    }


}
