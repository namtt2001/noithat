 <?php

use App\Http\Controllers\Admin\CategoryControler;
use App\Http\Controllers\Admin\DashBoadController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Product;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\CategoryProductController;


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
    Route::post('/seach',[HomeController::class,'seach'])->name('seach');

    Route::get('/products/{slug}/detail',[HomeController::class,'detail'])->name('detail');

    Route::get('/login',[UserController::class,'login'])->name('login');
    Route::post('/login',[UserController::class,'postLogin']);

    Route::get('/register',[UserController::class,'register'])->name('register');
    Route::post('/register',[UserController::class,'postRegister']);

    Route::get('/admin/user', [UserController::class, 'index']) ->name('admin.user');
    Route::get('/admin/user/add', [UserController::class, 'create']) ->name('admin.user.create');
    Route::post('/admin/user/add', [UserController::class, 'store']) ->name('admin.user.add');
    Route::get('/admin/user/edit/{id}', [UserController::class, 'edit']) ->name('admin.user.edit');
    Route::put('/admin/user/edit/{id}', [UserController::class, 'update']) ->name('admin.user.update');
    Route::delete('admin/user/delete/{id}', [UserController::class, 'destroy'])->name('admin.user.delete');

    Route::get('/logout',[UserController::class,'logout'])->name('logout');

    Route::get('/logon',[AdminController::class,'logon'])->name('logon');
    Route::post('/logon',[AdminController::class,'postLogon'])->name('admin.logon');
    Route::get('/sign-out',[AdminController::class,'signOut'])->name('admin.signout');

    //Route::get('/detail/{slug}',[HomeController::class,'detail'])->name('detail');

    Route::get('/list-category/{id}/pro', [HomeController::class,'list'])->name('list.category');
    Route::get('/search',[ProductController::class, 'Search'])->name('search');







//Admin

Route::prefix('admin')->middleware('admin')->group(function(){
    Route::get('/', [DashBoadController::class, 'index'])->name('admin.index');
    //category
    Route::resource('category',CategoryControler::class);
    Route::get('/category-trash', [CategoryControler::class, 'trash'])->name('category.trash');
    Route::get('/category/{id}/restore', [CategoryControler::class, 'restore'])->name('category.restore');
    Route::get('/category/{id}/forceDelete', [CategoryControler::class, 'forceDelete'])->name('category.forceDelete');



    //product
    Route::resource('products',ProductController::class);


    });



//
