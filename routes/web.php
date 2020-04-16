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

Route::get('/reservations', 'StaticPagesController@reservations');

Route::get('/contact', 'StaticPagesController@contact');

Route::get('/about', 'StaticPagesController@about');

Route::get('/offers', 'staticPagesController@offers');
Route::post('/offers', 'staticPagesController@registerMember');

Route::get('/offers/thank-you', 'staticPagesController@offersThankYou');

// Route::get('/giftcards', 'StaticPagesController@giftcards');


// ---------------------------------------------
// *************STATIC MENU PAGES ROUTES********
// ---------------------------------------------

Route::get('/menu', 'StaticPagesController@menu');

Route::get('/menu/{slug}', 'StaticPagesController@singlemenu');


// ---------------------------------------------------------------------
// *******ADMIN DASHBOARD AND FOOD CATEGORIES + ITEMS + CUSTOMERS********
// ----------------------------------------------------------------------


Route::get('/admin', 'admin\AdminController@dashboard');

Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');

Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');

Route::post('/admin/food-categories', 'admin\FoodCategoriesController@store');

Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');
Route::put('/admin/food-categories/{id}', 'admin\FoodCategoriesController@update');

Route::get('/admin/food-categories/{id}/delete', 'admin\FoodCategoriesController@delete');

// ############################FOOD ITEMS################################

Route::get('/admin/food-items', 'admin\FoodItemsController@index');

Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');

Route::post('/admin/food-items', 'admin\FoodItemsController@store');

Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit');

Route::put('/admin/food-items/{id}', 'admin\FoodItemsController@update');

Route::get('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete');

// ############################CUSTOMERS#################################

Route::get('/admin/members', 'admin\MemberController@index');

// ############################MEMBERS#################################

// ############################RESERVATIONS#################################
Route::get('/admin/reservations', 'admin\CustomersController@allReservations');
// ############################ADMIN USERS#################################

Route::get('/admin/users', 'admin\UsersController@index');

Route::get('/admin/users/create', 'admin\UsersController@create');

Route::post('/admin/users', 'admin\UsersController@store');

Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit');

Route::put('/admin/users/{id}', 'admin\UsersController@update');

Route::get('/admin/users/{id}/delete', 'admin\UsersController@delete');

// -------------------------------------
// ***********AUTH ROUTES ADMIN***********
// -------------------------------------

Route::get('/admin/register', function(){
    return view('admin.register');
});

Route::get('/admin/login', function(){
    return view('admin.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
