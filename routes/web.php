 <?php

use App\Http\Controllers\Admin\CategoryControler;
use App\Http\Controllers\Admin\DashBoadController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Product;

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
//Main


    Route::get('/',[HomeController::class,'index'])->name('index');
    Route::get('/login',[UserController::class,'login'])->name('login');
    Route::post('/login',[UserController::class,'postLogin']);

    Route::get('/register',[UserController::class,'register'])->name('register');
    Route::post('/register',[UserController::class,'postRegister']);

    Route::get('/logout',[UserController::class,'logout'])->name('logout');
    Route::get('/detail',[UserController::class,'detail'])->name('detail');




//Admin

Route::prefix('admin')->group(function(){
    Route::get('/', [DashBoadController::class, 'index'])->name('admin.index');
    Route::resource('category',CategoryControler::class);
    Route::get('/category-trash', [CategoryControler::class, 'trash'])->name('category.trash');
    Route::get('/category/{id}/restore', [CategoryControler::class, 'restore'])->name('category.restore');
    Route::get('/category/{id}/forceDelete', [CategoryControler::class, 'forceDelete'])->name('category.forceDelete');



    //product
    Route::resource('product',ProductController::class);

    });



//
