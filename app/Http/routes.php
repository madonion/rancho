<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', function () {return view('pages/home');});
Route::get('/rooms','roomsController@index');
Route::get('/rooms/{id}','roomController@index');
Route::get('/reservations','reservationsController@index');
Route::get('/reservations/{id}','reservationsController@preSelected');
Route::get('/B&B', function () {return view('pages/BandB');});
Route::get('/weddings', function () {return view('pages/weddings');});
Route::get('/amenities', function () {return view('pages/amenities');});
Route::get('/explore', function () {return view('pages/explore');});
Route::get('/bookings', function () {return view('pages/bookings');});
Route::post('/bookings', function () {return view('pages/bookings');});

Route::get('/sitemap', function () {return view('pages/sitemap');});
Route::get('/about', function () {return view('pages/about');});
Route::get('/location', function () {return view('pages/location');});
Route::get('/press-reviews', function () {return view('pages/press-reviews');});
Route::get('/blog', function () {return view('pages/blog');});
Route::get('/terms', function () {return view('pages/terms');});
Route::get('/links', function () {return view('pages/links');});

Route::get('/contact', function () {return view('pages/contact');});

Route::post('/contact', function () {return view('pages/contact');});

Route::get('/gallery', function () {return view('pages/gallery');});
Route::get('/gallery/ceremony', function () {return view('pages/gallery/ceremony');});
Route::get('/gallery/coctails', function () {return view('pages/gallery/coctails');});
Route::get('/gallery/food-drink', function () {return view('pages/gallery/food-drink');});
Route::get('/gallery/bar-dancing', function () {return view('pages/gallery/bar-dancing');});
Route::get('/weddings/enquiry-form', function () {return view('pages/weddings/enquiry-form');});
Route::post('/weddings/enquiry-form', function () {return view('pages/weddings/enquiry-form');});
Route::get('/weddings/pricing', function () {return view('pages/weddings/pricing');});
Route::get('/weddings/food-and-drink', function () {return view('pages/weddings/food-and-drink');});
Route::get('/weddings/cocktails', function () {return view('pages/weddings/cocktails');});
Route::get('/weddings/walkthrough', function () {return view('pages/weddings/walkthrough');});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

