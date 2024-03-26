<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuideController extends Controller
{

    public function guide_screen()
    {
        return view("guide_screen");
    }
}
