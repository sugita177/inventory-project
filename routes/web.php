<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\SupplierController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function() {
    return view('start');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('article/create', [ArticleController::class, 'create'])
->name('article.create');

Route::post('article', [ArticleController::class, 'store'])
->name('article.store');

Route::get('article', [ArticleController::class, 'index'])
->name('article.index');

Route::get('article/show/{article}', [ArticleController::class, 'show'])
->name('article.show');

Route::get('article/{article}/edit', [ArticleController::class, 'edit'])
->name('article.edit');

Route::patch('article/{article}', [ArticleController::class, 'update'])
->name('article.update');

Route::delete('article/{article}', [ArticleController::class, 'destroy'])
->name('article.destroy');

Route::get('check', [CheckController::class, 'index'])
->name('check.index');

Route::get('check/create', [CheckController::class, 'create'])
->name('check.create');

Route::post('check', [CheckController::class, 'store'])
->name('check.store');

Route::get('check/show/{check}', [CheckController::class, 'show'])
->name('check.show');

Route::get('check/show_checked/{check}', [CheckController::class, 'showChecked'])
->name('check.show_checked');

Route::get('check/confirm/{check}', [CheckController::class, 'confirmEdit'])
->name('check.confirm_edit');

Route::patch('check/confirm/{check}', [CheckController::class, 'confirm'])
->name('check.confirm');

Route::get('check/cancel/{check}', [CheckController::class, 'cancel'])
->name('check.cancel');

Route::get('check/delete/{check}', [CheckController::class, 'deleteEdit'])
->name('check.delete_edit');

Route::delete('check/{check}', [CheckController::class, 'destroy'])
->name('check.destroy');

Route::patch('check/{check}/inventory', [InventoryController::class, 'update'])
->name('inventory.update');

Route::get('inventory/latest_state', [InventoryController::class, 'latestState'])
->name('inventory.latest_state');

Route::get('csv', function () {
    return view('csv.index');
})
->name('csv.index');

Route::post('article/csv_import', [ArticleController::class, 'csvImport'])
->name('article.csv_import');

Route::get('check/order/index', [CheckController::class, 'orderIndex'])
->name('check.order_index');

Route::get('check/order/show/{check}', [CheckController::class, 'orderShow'])
->name('check.order_show');


Route::get('category/create', [CategoryController::class, 'create'])
->name('category.create');

Route::post('category', [CategoryController::class, 'store'])
->name('category.store');

Route::get('category', [CategoryController::class, 'index'])
->name('category.index');

Route::get('category/show/{category}', [CategoryController::class, 'show'])
->name('category.show');

Route::get('category/edit/{category}', [CategoryController::class, 'edit'])
->name('category.edit');

Route::patch('category/{category}', [CategoryController::class, 'update'])
->name('category.update');

Route::delete('category/{category}', [CategoryController::class, 'destroy'])
->name('category.destroy');


Route::get('place/create', [PlaceController::class, 'create'])
->name('place.create');

Route::post('place', [PlaceController::class, 'store'])
->name('place.store');

Route::get('place', [PlaceController::class, 'index'])
->name('place.index');

Route::get('place/show/{place}', [PlaceController::class, 'show'])
->name('place.show');

Route::get('place/edit/{place}', [PlaceController::class, 'edit'])
->name('place.edit');

Route::patch('place/{place}', [PlaceController::class, 'update'])
->name('place.update');

Route::delete('place/{place}', [PlaceController::class, 'destroy'])
->name('place.destroy');


Route::get('supplier/create', [SupplierController::class, 'create'])
->name('supplier.create');

Route::post('supplier', [SupplierController::class, 'store'])
->name('supplier.store');

Route::get('supplier', [SupplierController::class, 'index'])
->name('supplier.index');

Route::get('supplier/show/{supplier}', [SupplierController::class, 'show'])
->name('supplier.show');

Route::get('supplier/edit/{supplier}', [SupplierController::class, 'edit'])
->name('supplier.edit');

Route::patch('supplier/{supplier}', [SupplierController::class, 'update'])
->name('supplier.update');

Route::delete('supplier/{supplier}', [SupplierController::class, 'destroy'])
->name('supplier.destroy');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
