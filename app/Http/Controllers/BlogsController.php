<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function blogs_screen()
    {
        return view("blogs_screen");
    }


    public function blogs_preview()
    {
        return view("blogs_preview");
    }


}
