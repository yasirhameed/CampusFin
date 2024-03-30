<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\developerController;
use App\Http\Controllers\promotorsController;

// homepage
Route::get("/", [HomeController::class, 'index']);
// AUth controller
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get("/register", [AuthController::class, 'register']);
Route::post("/register", [AuthController::class, 'store']);

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

// project and admin routes
Route::get('/add_project', [AdminController::class, 'add_project'])->name('add_project');
Route::Post('/project_store', [AdminController::class, 'project_store'])->name('project_store');
Route::get('/list_project', [AdminController::class, 'project_list'])->name('list_project');
Route::get('/delete_project/{id}', [AdminController::class, 'delete_project'])->name('delete_project');
Route::get('/approve_project/{id}', [AdminController::class, 'approve'])->name('approve_project');

// category routes

Route::get('/show_category', [CategoryController::class, 'show_category'])->name('show_category');
Route::get('/add_category', [CategoryController::class, 'category'])->name('add_category');
Route::post('/add_category', [CategoryController::class, 'add_category'])->name('add_category');
Route::get('/delete_category/{id}', [CategoryController::class, 'delete_category'])->name('delete_category');

// developet  routes

Route::get('/developer', [developerController::class, 'developer_list'])->name('developer');
Route::get('/add_developer', [developerController::class, 'developer'])->name('add_developer');
Route::post('/add_developer', [developerController::class, 'add_developer'])->name('add_developer');
Route::get('/delete_developer/{id}', [developerController::class, 'delete_developer'])->name('delete_developer');


Route::get('/promotors', [promotorsController::class, 'promotors_list'])->name('promotors');
Route::get('/add_promotors', [promotorsController::class, 'promotors'])->name('add_promotors');
Route::post('/add_promotors', [promotorsController::class, 'add_promotors'])->name('add_promotors');
