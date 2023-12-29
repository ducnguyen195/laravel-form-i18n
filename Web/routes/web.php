<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\RegisterController;
use App\Models\Register;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/',[RegisterController::class,'index'])->name('user.index');

Route::group(['prefix'=>'user'],function(){
    Route::get('/',[RegisterController::class,'index'])->name('user.index');
});

