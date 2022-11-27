<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;

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
  
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [WelcomeController::class, 'index']);
Route::get('home', [HomeController::class, 'index']);
Route::get('contacts', [ContactsController::class, 'show']);
Route::get('contacts/create', [ContactsController::class, 'create']);


// Route::resource('contacts', 'ContactsController');

Route::resource('groups', 'GroupsController');

Route::get('phones/create/{id}', 'PhonesController@create');

Route::resource('phones', 'PhonesController',
    ['only' => ['store', 'destroy']]);

