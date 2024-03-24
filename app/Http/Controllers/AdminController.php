<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;
use App\Models\Project;
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
        return view('dashboard_layouts.add_project');
    }

    function project_store(Request $request)
        {
            // Store the project logo file
            if ($request->hasFile('Project_Logo')) {
                $logoPath = $request->file('Project_Logo')->store('project_logos', 'public');
            }

            // Create a new instance of Project
            $project = new Project;
            $project->Project_Name = $request->Project_Name;
            $project->Project_Logo = $logoPath ?? null;
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

            return view('dashboard_layouts.add_project')->with('success', 'Project created successfully!');
        }



    public function project_list()
    {
        $projects = Project::paginate(6);


        return view('dashboard_layouts.project_list', compact('projects'));
    }

}
