<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 

Route::get('/', function () {
    return view('Home.index')
    ->with('title', 'Home');

});
Route::get('/about', function () {
    return view('Home.about')
            ->with('title', 'About Us');
});

Route::get('/contact', function () {
    return view('Home.contact')
            ->with('title', 'Contact Us');
});
Route::get('/about', function () {
    return view('Home.about')
            ->with('title', 'About Us');
});
Route::get('/FAQ', function () {
    return view('Home.faq')
            ->with('title', 'FAQ');
});
Route::get('/Ourteam/Organization', function () {
    return view('Home.Organization')
            ->with('title', 'Organization');
});
Route::get('/Ourteam/Volunteers', function () {
    return view('Home.Volunteers')
            ->with('title', 'Volunteers');
});
Route::get('/SignIn', function () {
    return view('Home.SignIn')
            ->with('title', 'Account');
});
Route::get('/SignUp', function () {
    return view('Home.SignUp')
            ->with('title', 'Account');
});

Route::get('/admin/dashboard', function () {
    return view('Admin.AdminHome')
            ->with('title', 'Home Admin')
            ->with('date', date('d-M-Y'));
});

Route::get('/admin/createAdmin', function () {
    return view('Admin.createAdmin')->with('title', 'Create Admin | Admin');
});

Route::get('/admin/manageAdmin', function () {
    return view('Admin.ManageAdmin')->with('title', 'Create Admin | Admin');
});

Route::get('/admin/adminEvent', function () {
    return view('Admin.adminEvent')->with('title', 'Create Admin Event | Admin');
});
Route::get('/orgEvent', function () {
    return view('Admin.createOrgEvent');
});

Route::get('/verifyEvent',function(){
    return view('Admin.verifyEvent');
});

Route::get('/blockOrg',function(){
    return view('Admin.blockOrg');
});
Route::get('/transitionList',function(){
    return view('Admin.transitionList');
});

Route::get('/login', function () {
    return view('Signin')
                    ->with('id', 0)
                    ->with('title', 'Sign In');
});

Route::get('/org/dashboard', function () {
    return view('Organization.Home')
            ->with('title', 'Home Organization')
            ->with('date', date('d-M-Y'));
});

Route::get('/org/createEvent', function () {
    return view('Organization.CreateEvent')
            ->with('title', 'Create Event | Organization');
});

Route::get('/org/manageEvent', function () {
    return view('Organization.ManageEvent')
            ->with('title', 'Manage Event | Organization');
});

