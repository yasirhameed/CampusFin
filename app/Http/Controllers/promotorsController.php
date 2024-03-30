<?php

namespace App\Http\Controllers;

use App\Models\Promotor;
use Illuminate\Http\Request;

class promotorsController extends Controller
{

    public function promotors_list()
    {
        $promotors = Promotor::all();

        return view('dashboard_layouts.promotors_list', compact('promotors'));
    }

    public function promotors()
    {
        return view('dashboard_layouts.sdd_promotors');
    }

        public function add_promotors(Request $request)
        {
            // Validate the incoming request data
            $validatedData = $request->validate([
                'Promotor_Name' => 'required|string',
                'Promotor_Type' => 'required|string',
                'Promotor_Previous_Project_Id' => 'nullable|integer',
                'Promotor_Previous_Project_Name' => 'nullable|string',
                'Promotor_Comment_Id' => 'nullable|integer',
                'Promotor_Comments' => 'nullable|string',
                'Promotor_Wallet_Id' => 'nullable|integer',
                'Promotor_Wallet_URL' => 'nullable|url',
            ]);

            // Create a new Promotor instance
            $promotor = new Promotor();
            $promotor->fill($validatedData);
            $promotor->save();

            // Redirect back with success message
            return redirect()->route('add_promotors')->with('success', 'Promotor added successfully');
        }

    // public function add_promotors(Request $request)
    // {
    //     $promotors = new Promotor();
    //     $promotors->Promotor_Name = $request->Promotor_Name;
    //     $promotors->Promotor_Type = $request->Promotor_Type;
    //     $promotors->Promotor_Previous_Project_Id = $request->Promotor_Previous_Project_Id;
    //     $promotors->Promotor_Previous_Project_Name = $request->Promotor_Previous_Project_Name;
    //     $promotors->Promotor_Comment_Id = $request->Promotor_Comment_Id;
    //     $promotors->Promotor_Comments = $request->Promotor_Comments;
    //     $promotors->Promotor_Wallet_Id = $request->Promotor_Wallet_Id;
    //     $promotors->Promotor_Wallet_URL = $request->Promotor_Wallet_URL;
    //     $promotors->save();
    //     return view('add_promotors')->with('success', 'promotors Add successfully');

    // }
}
