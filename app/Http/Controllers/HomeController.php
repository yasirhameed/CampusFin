<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("index");
    }


    public function blogs_screen()
    {
        return view("blogs_screen");
    }


    public function guide_screen()
    {
        return view("guide_screen");
    }

    public function blogs_preview()
    {
        return view("blogs_preview");
    }



}
