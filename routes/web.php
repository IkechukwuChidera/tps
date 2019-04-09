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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/tpsadmin', function () {
//     return view('tpsadmin/dashboard');
// });

Auth::routes();

//blades route
Route::get('/home', 'UserController@home')->name('home');
// Route::get('/tpss', 'TpsController@index');
// Route::get('tps/pay', 'TpsController@pay');
// Route::get('tps/profile', 'TpsController@profile');
// Route::get('tps/createprofile', 'TpsController@createprofile');
// Route::get('tps/editprofile', 'TpsController@editprofile');

//logout
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

//joy
//code for users profile
Route::get('tps/createprofile', 'UserController@create')->name('c')->middleware('auth');
Route::post('tps/createprofile/', 'UserController@store');
// Route::post('tps/pay/', 'PaymentController@store');

//code for editing and updating of users profile
Route::get('/tps/editprofile/{id}', 'UserController@edit')->name('e');
Route::get('/tps/pay/{id}', 'UserController@pay')->name('f');
Route::post('tps/editprofile/{id}', 'UserController@update')->name('update');

//code for the user homepage
Route::get('tps', 'UserController@index')->name('tps');

//route for viewing users info.
Route::get('/tps/profile/', 'UserController@view')->name('vi');

//crud route
Route::resource('tpsadmin','AdminController');

//Socialite
Route::get('/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/callback', 'SocialAuthGoogleController@callback');

Route::get('/rdirect', 'SocialAuthFacebookController@rdirect');
Route::get('/cllback', 'SocialAuthFacebookController@cllback');

//Paystack
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
// Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
// Route::post('/tps/success', 'PaymentController@handleGatewayCallback');
Route::get('/tps/taxhistory', 'UserController@history')->name('hi');
Route::get('/tps/paysuccess', 'PaymentController@paysuccess');
// Route::get('/tps/pay', function(){
//     return view('/tps/pay');
// });
