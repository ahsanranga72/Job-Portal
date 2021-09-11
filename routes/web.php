<?php

use App\Http\Controllers\CreateCvController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Auth;

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


// Route::get('/', function () {
//     return view('master');
// });

//Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/createcv', [CreateCvController::class, 'CreateCV'])->name('createcv')->middleware('auth');
Route::post('/storecv', [CreateCvController::class, 'StoreCV'])->name('storecv')->middleware('auth');
Route::get('/editcv', [CreateCvController::class, 'EditCV'])->name('editcv')->middleware('auth');
Route::post('/updatecv', [CreateCvController::class, 'UpdateCV'])->name('updatecv')->middleware('auth');
Route::get('/viewcv', [CreateCvController::class, 'ViewCV'])->name('viewcv')->middleware('auth');
Route::get('/cvtips', [CreateCvController::class, 'cvtips'])->name('cvtips')->middleware('auth');
Route::get('/jobforcandidate', [CreateCvController::class, 'jobforcandidate'])->name('jobforcandidate')->middleware('auth');
Route::get('/jobdetailsforcandidate/{id}', [CreateCvController::class, 'jobdetailsforcandidate'])->name('jobdetailsforcandidate')->middleware('auth');



Route::get('/feedback', [CreateCvController::class, 'feedback'])->name('feedback')->middleware('auth');
Route::post('/storefeedback', [CreateCvController::class, 'storefeedback'])->name('storefeedback')->middleware('auth');
Route::get('/viewfeedback', [CreateCvController::class, 'viewfeedback'])->name('viewfeedback')->middleware('auth');
Route::get('/addcategory', [CreateCvController::class, 'addcategory'])->name('addcategory')->middleware('auth');
Route::post('/storecategory', [CreateCvController::class, 'storecategory'])->name('storecategory')->middleware('auth');
Route::get('/viewcategory', [CreateCvController::class, 'viewcategory'])->name('viewcategory')->middleware('auth');
Route::get('/editcategory/{id}', [CreateCvController::class, 'editcategory'])->name('editcategory')->middleware('auth');
Route::post('/updatecategory/{id}', [CreateCvController::class, 'updatecategory'])->name('updatecategory')->middleware('auth');
Route::get('/deletecategory/{id}', [CreateCvController::class, 'deletecategory'])->name('deletecategory')->middleware('auth');
Route::post('/jobapply/{id}', [CreateCvController::class, 'jobapply'])->name('jobapply')->middleware('auth');


Route::get('/jobtips', [JobController::class, 'jobtips'])->name('jobtips')->middleware('auth');
Route::get('/createjob', [JobController::class, 'createjob'])->name('createjob')->middleware('auth');
Route::post('/storejob', [JobController::class, 'storejob'])->name('storejob')->middleware('auth');
Route::get('/viewjob', [JobController::class, 'viewjob'])->name('viewjob')->middleware('auth');
Route::get('/jobdetailsemployee/{id}', [JobController::class, 'jobdetailsemployee'])->name('jobdetailsemployee')->middleware('auth');
Route::get('/editjob/{id}', [JobController::class, 'editjob'])->name('editjob')->middleware('auth');
Route::get('/updatejob/{id}', [JobController::class, 'updatejob'])->name('updatejob')->middleware('auth');
Route::get('/deletejob/{id}', [JobController::class, 'deletejob'])->name('deletejob')->middleware('auth');
Route::get('/appliedcandidates', [JobController::class, 'appliedcandidates'])->name('appliedcandidates')->middleware('auth');
Route::get('/viewcandidatedetails/{id}', [JobController::class, 'viewcandidatedetails'])->name('viewcandidatedetails')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');