<?php

use App\GeneralSetting;
use App\SocialSetting;
use App\SeoSetting;

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

// ------------------------------------------------
// *************STATIC PAGES ROUTES***********
// --------------------------------------------------

Route::get('/', 'StaticPagesController@home');

Route::get('/reservations', 'StaticPagesController@reservations');

Route::get('/contact', 'StaticPagesController@contact');

Route::get('/about', 'StaticPagesController@about');

Route::get('/offers', 'staticPagesController@offers');


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

Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index')->middleware('role:Admin');

Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create')->middleware('role:Admin');

Route::post('/admin/food-categories', 'admin\FoodCategoriesController@store')->middleware('role:Admin');

Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit')->middleware('role:Admin');
Route::put('/admin/food-categories/{id}', 'admin\FoodCategoriesController@update')->middleware('role:Admin');

Route::get('/admin/food-categories/{id}/delete', 'admin\FoodCategoriesController@delete')->middleware('role:Admin');

// ############################FOOD ITEMS################################

Route::get('/admin/food-items', 'admin\FoodItemsController@index')->middleware('role:Admin');

Route::get('/admin/food-items/create', 'admin\FoodItemsController@create')->middleware('role:Admin');

Route::post('/admin/food-items', 'admin\FoodItemsController@store')->middleware('role:Admin');

Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit')->middleware('role:Admin');

Route::put('/admin/food-items/{id}', 'admin\FoodItemsController@update')->middleware('role:Admin');

Route::get('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete')->middleware('role:Admin');

// ############################CUSTOMERS#################################

Route::post('/offers', 'staticPagesController@registerMember');
Route::get('/offers/thank-you', 'staticPagesController@thankYou');

// ############################MEMBERS#################################

Route::get('/admin/members', 'admin\MemberController@index');
Route::get('/admin/members/{id}/delete', 'admin\MemberController@delete');

// ############################RESERVATIONS#################################

Route::post('/reservations', 'StaticPagesController@saveReservation');
Route::get('/reservations/thank-you', 'StaticPagesController@thankYou');

Route::get('/admin/reservations', 'admin\ReservationController@index');
Route::get('/admin/reservations/{id}/delete', 'admin\ReservationController@delete');

// ------------------------------------------------------------------------
// ############################ADMIN USERS#################################
// ------------------------------------------------------------------------

Route::get('/admin/users', 'admin\UsersController@index')->middleware('role:Admin');

Route::get('/admin/users/create', 'admin\UsersController@create')->middleware('role:Admin');

Route::post('/admin/users', 'admin\UsersController@store')->middleware('role:Admin');

Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit')->middleware('role:Admin');

Route::put('/admin/users/{id}', 'admin\UsersController@update')->middleware('role:Admin');

Route::get('/admin/users/{id}/delete', 'admin\UsersController@delete')->middleware('role:Admin');

// ############################ADMIN SETTINGS#################################

Route::get('/admin/settings/general', 'admin\SettingController@general')->middleware('role:Admin');
Route::put('/admin/settings/general', 'admin\SettingController@saveGeneral')->middleware('role:Admin');

Route::get('/admin/settings/seo', 'admin\SettingController@seo')->middleware('role:Admin');
Route::put('/admin/settings/seo', 'admin\SettingController@saveSeo')->middleware('role:Admin');

Route::get('/admin/settings/social', 'admin\SettingController@social')->middleware('role:Admin');
Route::put('/admin/settings/social', 'admin\SettingController@saveSocial')->middleware('role:Admin');

// -------------------------------------------------
// ***********AUTHENTICATION ROUTES ADMIN***********
// -------------------------------------------------

Route::get('/admin/register', function(){
    return view('admin.register');
});

Route::get('/admin/login', function(){
    return view('admin.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

View::composer(['home', 'pages/about', 'pages/contact', 'pages/offers', 

'pages/reservations', 'pages/thank-you', 'menu/index', 'menu/single-menu'], function($view){

    $general_settings = GeneralSetting::find(1);
    $social_settings = SocialSetting::find(1);
    $seo_settings = SeoSetting::find(1);

    $view->with('settings', [
        "general_settings"=> $general_settings,
        "social_settings" => $social_settings,
        "seo_settings"=> $seo_settings
    ]);

});