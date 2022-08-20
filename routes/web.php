<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);
Route::get('/home', [App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get('/job_listing', [App\Http\Controllers\jobListingController::class, 'job_listing'])->name('job_listing');

Route::get('/job_details/{id}', [App\Http\Controllers\job_detailsController::class, 'job_details'])->name('job_details');
Route::get('/index', [App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::post('/filterJob', [App\Http\Controllers\jobListingController::class, 'filterJob'])->name('filterJob');

Route::group(['middleware' =>'auth'], function () {
    
    Route::get('/applyJob/{id}', [App\Http\Controllers\applyJobController::class, 'applyJob'])->name('applyJob')->middleware('checkroleSeeker');
    Route::get('/Userprofile', [App\Http\Controllers\applyJobController::class, 'Userprofile'])->name('Userprofile')->middleware('checkroleSeeker');
    Route::post('/saveUserInfo', [App\Http\Controllers\applyJobController::class, 'saveUserInfo'])->name('saveUserInfo')->middleware('checkroleSeeker');

    Route::get('/postJob', [App\Http\Controllers\postJobController::class, 'postJob'])->name('postJob')->middleware('checkroleCompany');
    Route::post('/saveCompanyInfo', [App\Http\Controllers\postJobController::class, 'saveCompanyInfo'])->name('saveCompanyInfo');
    Route::post('/saveJobInfo', [App\Http\Controllers\postJobController::class, 'saveJobInfo'])->name('saveJobInfo');
});



// Route::group(['middleware'=>'auth:companyUser'], function(){
//     // routes under the admin
// });
