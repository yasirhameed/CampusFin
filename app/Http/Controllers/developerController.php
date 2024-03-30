<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use Illuminate\Http\Request;

class developerController extends Controller
{

    public function developer_list()
    {
        $Developers = Developer::all();

        return view('dashboard_layouts.developer', compact('Developers'));
    }

    public function developer()
    {

        return view('dashboard_layouts.add_developer');
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
