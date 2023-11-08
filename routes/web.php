<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowUserAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DatosproveedorController;
use App\Http\Controllers\CuentasContablesController;
use App\Http\Controllers\DatosadminController;

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

/*Route::get('/user', function () {
    return view('user.index');
})->middleware(['auth', 'verified'])->name('user');*/
Route::get('admin/adminhome',[DatosproveedorController::class,'index'])->middleware('auth')->name('admin.adminhome');
Route::get('admin/{id}/show',[DatosproveedorController::class,'show'])->middleware('auth')->name('admin.show');
//Route::get('admin/{id}/show',[DatosproveedorController::class,'showcuentas'])->middleware('auth')->name('admin.show');



route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');

Route::get('/dashboard',[DatosproveedorController::class,'index'])->middleware('auth')->name('dashboard');

Route::get('/user/{id}/edit',[DatosproveedorController::class,'edit'])->middleware('auth')->name('user.edit');

Route::put('user/{id}',[DatosproveedorController::class,'update'])->middleware('auth')->name('user.update');



/*route::get('/user',function(){
    return view('create');
});*/





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';



Route::post('/user/create', [DatosproveedorController::class, 'store'])->middleware('auth')->name('user.create');
Route::get('user/create',[DatosproveedorController::class,'create'])->middleware('auth')->name('user.create');
//Route::post('/user/edit', [DatosproveedorController::class, 'store'])->middleware('auth')->name('user.edit');



Route::resource('/user/index', 'DatosproveedorController@index');
Route::resource('/admin/adminhome', 'DatosproveedorController@index');
//Route::post('create','DatosproveedorController@store');
Route::get('/user/create', [ShowUserAdminController::class, 'index'])->middleware('auth')->name('user.create');


/*Route::controller(App\Http\Controllers\DatosproveedorController::class)->group(function(){
    //Route::resource('/user/index', 'DatosproveedorController@index');
    //Route::get('/user/indexuser',[DatosproveedorController::class,'index'])->middleware('auth')->name('user.indexuser');
    //Route::get('/create', 'store');

    Route::get('/create', 'store');

});*/