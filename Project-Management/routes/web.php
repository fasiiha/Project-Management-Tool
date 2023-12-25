<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::post('/create', 'App\Http\Controllers\TaskCOntroller@store');

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
Route::post('projects','App\Http\Controllers\TaskCOntroller@projects');

Route::get('/home', 'App\Http\Controllers\SidebarController@home_index')->name('Home');
Route::get('/activity', 'App\Http\Controllers\SidebarController@activity_index')->name('Activity');
Route::get('/discussion', 'App\Http\Controllers\SidebarController@discussion_index')->name('Discussion');
Route::get('/calender', 'App\Http\Controllers\SidebarController@calender_index')->name('Calender');
Route::get('/project', 'App\Http\Controllers\SidebarController@project_index')->name('Project');
Route::get('/team-members', 'App\Http\Controllers\SidebarController@member_index')->name('Member');
Route::get('/task', 'App\Http\Controllers\SidebarController@task_index')->name('Task');
Route::get('/setting', 'App\Http\Controllers\SidebarController@setting_index')->name('Setting');
Route::get('/profile', 'App\Http\Controllers\SidebarController@profile_index')->name('Profile');


Route::get('/chat', 'App\Http\Controllers\PusherController@index');
Route::post('/broadcast', 'App\Http\Controllers\PusherController@broadcast');
Route::post('/receive', 'App\Http\Controllers\PusherController@receive');

use App\Http\Controllers\FeedController;

Route::get('/feed', [FeedController::class, 'showFeed'])->name('feed.show');
Route::post('/feed', [FeedController::class, 'postContent'])->name('feed.postContent');
Route::post('/feed/{feedItem}/comment', [FeedController::class, 'postComment'])->name('feed.postComment');


Route::get('home', [App\Http\Controllers\DashboardController::class, 'index']);