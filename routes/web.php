<?php

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

// -----------------------------------------
// *************STATIC PAGES ROUTES***********
// ----------------------------------------

Route::get('/', 'StaticPagesController@home');

Route::get('/waitlist', 'StaticPagesController@waitlist');

Route::get('/contact', 'StaticPagesController@contact');

Route::get('/about', 'StaticPagesController@about');

Route::get('/offers', 'staticPagesController@offers');

Route::get('/giftcards', 'StaticPagesController@giftcards');


// ---------------------------------------------
// *************STATIC MENU PAGES ROUTES********
// ---------------------------------------------

Route::get('/menu', 'StaticPagesController@menu');

Route::get('/menu/{slug}', 'StaticPagesController@singlemenu');


// -------------------------------------------------
// *******ADMIN DASHBOARD AND FOOD CATEGORIES******
// -------------------------------------------------


Route::get('/admin', 'admin\AdminController@dashboard');

Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');

Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');

Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');

// -------------------------------------
// ***********AUTH ROUTES ADMIN***********
// -------------------------------------

Route::get('/admin/register', function(){
    return view('admin.register');
});

Route::get('/admin/login', function(){
    return view('admin.login');
});
