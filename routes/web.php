<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\AdminpostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MultimediasController;
use App\Http\Controllers\ExpertiseListController;
use App\Http\Controllers\FollowController;
use App\Models\Post;
use App\Models\Multimedia;
use App\Http\Livewire\ListCoversationAndMessage;
use App\Http\Livewire\ListUser;
use App\Http\Controllers\CerteficateController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AiController;
use App\Http\Controllers\ProfileupdateController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\EntertainmentController;



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
    return view('abebe');
});
Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::resource('posts',PostsController::class);
Route::resource('multimedia',MultimediasController::class);
Route::resource('user/followedexpertise',FollowController::class);

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/admin/view', [App\Http\Controllers\AdminController::class, 'view'])->name('admin.view');
Route::get('/admin/feedback', [App\Http\Controllers\AdminController::class, 'feedback'])->name('admin.feedback');
Route::get('/admin/books', [App\Http\Controllers\AdminController::class, 'books'])->name('admin.books');
Route::get('/admin/multimedias', [App\Http\Controllers\AdminController::class, 'multimedias'])->name('admin.multimedias');
Route::get('/admin/payment', [App\Http\Controllers\AdminController::class, 'payment'])->name('admin.payment');

Route::get('/expertise', [App\Http\Controllers\ExpertiseController::class, 'index'])->name('expertise')->middleware('expertise');
Route::get('/expertise/view', [App\Http\Controllers\ExpertiseController::class, 'view']);
Route::get('/expertise/view2', [App\Http\Controllers\ExpertiseController::class, 'view2']);

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user')->middleware('user');


Route::get('userss',[App\Http\Controllers\UserController::class, 'users'])->name('users');
Route::get('search',[App\Http\Controllers\UserController::class, 'search'])->name('search');
Route::get('users/{id}',[App\Http\Controllers\UserController::class, 'user'])->name('user.view');
Route::post('ajaxRequest', [App\Http\Controllers\UserController::class, 'ajaxRequest'])->name('ajaxRequest');

Route::resource('dashboard',AdminpostController::class);
Route::resource('certeficate',CerteficateController::class);
Route::resource('contact',ContactusController::class);
Route::resource('feedback',FeedbackController::class);
Route::resource('profileupdate',ProfileupdateController::class);
Route::resource('payment',PaymentController::class);

Route::resource('entertainment',EntertainmentController::class);

Route::get('messages',ListCoversationAndMessage::class)->name('messages');
Route::get('users',ListUser::class)->name('users');


Route::get('/ml', [AiController::class, 'index']);
Route::post('/ml', [AiController::class, 'result'])->name('result');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
