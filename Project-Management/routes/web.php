<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::post('/create', 'App\Http\Controllers\TaskCOntroller@store');
Route::get('/task', 'App\Http\Controllers\TaskCOntroller@index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
});


Route::get('/home', 'App\Http\Controllers\SidebarController@home_index')->name('Home');
Route::get('/activity', 'App\Http\Controllers\SidebarController@activity_index')->name('Activity');
Route::get('/discussion', 'App\Http\Controllers\SidebarController@discussion_index')->name('Discussion');
Route::get('/calender', 'App\Http\Controllers\SidebarController@calender_index')->name('Calender');
Route::get('/project', 'App\Http\Controllers\SidebarController@project_index')->name('Project');
Route::get('/team-members', 'App\Http\Controllers\SidebarController@member_index')->name('Member');
Route::get('/task', 'App\Http\Controllers\SidebarController@task_index')->name('Task');
Route::get('/setting', 'App\Http\Controllers\SidebarController@setting_index')->name('Setting');
Route::get('/profile', 'App\Http\Controllers\SidebarController@profile_index')->name('Profile');


Route::get('/chat','App\Http\Controllers\PusherController@index');
Route::push('/broadcast','App\Http\Controllers\PusherController@broadcast');
Route::push('/receive','App\Http\Controllers\PusherController@receive');