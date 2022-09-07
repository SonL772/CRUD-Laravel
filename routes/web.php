<?php



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\postController;
use App\Http\Controllers\AboutControllers;

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

Route::get('/', function(){
    return view('welcome');
});


Route::middleware(['auth'])->group(function(){
    Route::get('/post',[postController::class,'index']);
    Route::get('/post/create',[postController::class,'create']);
    Route::post('/post/store',[postController::class,'store']);
    Route::get('/post/{id}/edit',[postController::class,'edit']);
    Route::put('/post/{id}',[postController::class,'update']);
    Route::delete('/post/{id}',[postController::class,'delete']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

