<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CheckController;

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

Route::put('check/{check}/inventory', [InventoryController::class, 'store'])
->name('inventory.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
