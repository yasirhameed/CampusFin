<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\UserController;


// HomeController

Route::get("/", [HomeController::class, 'index']);
Route::get("/add_project_home", [HomeController::class, 'add_project_home']);
Route::post("/project_store_home", [HomeController::class, 'project_store_home']);
Route::get("/manage_project_home", [HomeController::class, 'manage_project_home']);
Route::get("/project_preview/{id}", [HomeController::class, 'showPreview']);





// Guide Route
Route::get("/guide", [GuideController::class, 'guide_screen']);


// blogs routs

Route::get("/blogs", [BlogsController::class, 'blogs_screen']);
Route::get("/blogs_preview", [BlogsController::class, 'blogs_preview']);


// AdminController

// Route::get("/admin", [AdminController::class, 'index']);
Route::middleware('auth.check')->group(function () {
    if (Auth::check()) {
        $user = Auth::user();
        if ($user->usertype === 'admin') {
            Route::get('/admin', [AdminController::class, 'index'])->name('admin');
            // Other admin routes...
        } elseif ($user->usertype === 'user') {
            Route::get('/user_dashboard', [UserController::class, 'user_dashboard'])->name('user_dashboard');
            // Other user routes...
        }
    }
});

Route::get('/add_project', [AdminController::class, 'add_project'])->name('add_project');
Route::Post('/project_store', [AdminController::class, 'project_store'])->name('project_store');
Route::get('/list_project', [AdminController::class, 'project_list'])->name('list_project');
Route::get('/delete_project/{id}', [AdminController::class, 'delete_project'])->name('delete_project');
Route::get('/approve_project/{id}', [AdminController::class, 'approve'])->name('approve_project');

Route::get('/show_category', [AdminController::class, 'show_category'])->name('show_category');
Route::post('/add_category', [AdminController::class, 'add_category'])->name('add_category');
Route::get('/delete_category/{id}', [AdminController::class, 'delete_category'])->name('delete_category');

Route::get('/developer', [AdminController::class, 'developer'])->name('developer');
Route::post('/add_developer', [AdminController::class, 'add_developer'])->name('add_developer');
Route::get('/delete_developer/{id}', [AdminController::class, 'delete_developer'])->name('delete_developer');







// User dashboard route
Route::get('/user_add_project', [UserController::class, 'user_add_project']);
Route::Post('/user_project_store', [UserController::class, 'user_project_store']);
Route::get('/user_list_project', [UserController::class, 'user_project_list']);


// login system

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



// employee regiseration
Route::get("/register", [AuthController::class, 'register']);
Route::post("/register", [AuthController::class, 'store']);
