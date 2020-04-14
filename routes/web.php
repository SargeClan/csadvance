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

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/board', function () {
    return view('board');
})->name('board');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('contact-us', 'ContactController@contactUs')->name('contact.us');
Route::get('/loan-application', function () {
    return view('loan-application');
})->name('loan-application');

Route::post('loan-application', 'ContactController@loanApp')->name('user.loan');

Route::get('/loan-application-faq', function () {
    return view('loan-application-faq');
})->name('loan-application-faq');

Route::get('/quick-business-loans-nigeria', function () {
    return view('quick-business-loans-nigeria');
})->name('quick-business-loans-nigeria');

Route::get('/quick-online-loans-no-collateral-nigeria', function () {
    return view('quick-online-loans-no-collateral-nigeria');
})->name('quick-online-loans-no-collateral-nigeria');

Route::get('/quick-personal-loans-nigeria', function () {
    return view('quick-personal-loans-nigeria');
})->name('quick-personal-loans-nigeria');
Route::get('/online-investment-company-nigeria', function () {
    return view('online-investment-company-nigeria');
})->name('online-investment-company-nigeria');

Route::get('/business-loan-application', function () {
    return view('business-loan-application');
})->name('business-loan-application');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/investment-application', 'InvestmentController@index')->name('investment-application');
Route::post('/investment-application', 'InvestmentController@store')->name('investment-application-store');
