<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\GuideController;


// HomeController

Route::get("/", [HomeController::class, 'index']);
Route::get("/add_project_home", [HomeController::class, 'add_project_home']);
Route::post("/project_store_home", [HomeController::class, 'project_store_home']);



// Guide Route
Route::get("/guide", [GuideController::class, 'guide_screen']);


// blogs routs

Route::get("/blogs", [BlogsController::class, 'blogs_screen']);
Route::get("/blogs_preview", [BlogsController::class, 'blogs_preview']);


// AdminController

// Route::get("/admin", [AdminController::class, 'index']);
Route::middleware('auth.check')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    // Other admin routes...
});
Route::get('/add_project', [AdminController::class, 'add_project'])->name('add_project');
Route::Post('/project_store', [AdminController::class, 'project_store'])->name('project_store');
Route::get('/list_project', [AdminController::class, 'project_list'])->name('list_project');
// Route::get('/project-list', 'YourController@project_list')->name('project.list');


// login system

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



// employee regiseration
Route::get("/register", [AuthController::class, 'register']);
Route::post("/register", [AuthController::class, 'store']);
