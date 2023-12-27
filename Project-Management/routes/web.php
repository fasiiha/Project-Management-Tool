<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskCOntroller;

Route::get('/', function () {
    return view('Home');
});

Route::post('/create', 'App\Http\Controllers\TaskCOntroller@store');
Route::post('/pro', 'App\Http\Controllers\ProjectController@store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
});

Route::get("login",function() {
    if(session()->has('email')){
        return redirect('home');
    }
    return view('login');
});

Route::get("signup",function() {
    return view('signup');
});

Route::get("logout",function() {
    if(session()->has('email')){
        session()->pull('email',null);
    }
    return redirect('login');
});

Route::post('projectdata','App\Http\Controllers\TaskCOntroller@viewproject');
Route::post('login','App\Http\Controllers\TaskCOntroller@login');
Route::post('signup','App\Http\Controllers\TaskCOntroller@signup');
Route::post('complete','App\Http\Controllers\TaskCOntroller@complete');
// Route::post('projects','App\Http\Controllers\TaskCOntroller@projects');

Route::get('/home', 'App\Http\Controllers\SidebarController@home_index')->name('Home');
Route::get('/activity', 'App\Http\Controllers\SidebarController@activity_index')->name('Activity');
Route::get('/discussion', 'App\Http\Controllers\SidebarController@discussion_index')->name('Discussion');
Route::get('/calender', 'App\Http\Controllers\SidebarController@calender_index')->name('Calender');
// Route::get('/project', 'App\Http\Controllers\SidebarController@project_index')->name('Project');
Route::get('/team-members', 'App\Http\Controllers\SidebarController@member_index')->name('Member');
Route::get('/tasks', [TaskCOntroller::class, 'store']);
Route::get('/projects', [ProjectController::class, 'store'])->name('projects.store');


Route::get('/setting', 'App\Http\Controllers\SidebarController@setting_index')->name('Setting');
Route::get('/profile', 'App\Http\Controllers\SidebarController@profile_index')->name('Profile');


Route::get('/chat', 'App\Http\Controllers\PusherController@index');
Route::post('/broadcast', 'App\Http\Controllers\PusherController@broadcast');
Route::post('/receive', 'App\Http\Controllers\PusherController@receive');



Route::get('/feed', [FeedController::class, 'showFeed'])->name('feed.show');
Route::post('/feed', [FeedController::class, 'postContent'])->name('feed.postContent');
Route::post('/feed/{feedItem}/comment', [FeedController::class, 'postComment'])->name('feed.postComment');


Route::get('home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');



use App\Http\Controllers\SearchController;
use App\Http\Controllers\SidebarController;



// Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/search', [SearchController::class, 'search']);
Route::post('/searchresult', [SearchController::class, 'search']);

Route::delete('/projects/delete/{id}', 'App\Http\Controllers\ProjectController@delete')->name('projects.delete');
Route::delete('/tasks/delete/{id}', 'App\Http\Controllers\TaskCOntroller@delete')->name('tasks.delete');
Route::delete('/user/delete/{username}', 'App\Http\Controllers\Controller@delete')->name('users.delete');


Route::get('/delete', 'App\Http\Controllers\SidebarController@delete_index')->name('Delete');
// Route::get('/delete', [SidebarController::class, 'delete_index']);
Route::post('/projects-details', 'App\Http\Controllers\ProjectController@details')->name('projects.details');

// Route::get('/delete', [SidebarController::class, 'delete_index'])->name('delete.index');
// Route::delete('/delete', [SidebarController::class, 'delete'])->name('user.delete');

Route::get('/search/{term}', 'App\Http\Controllers\SearchController@search_suggest');
