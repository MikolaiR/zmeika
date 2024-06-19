<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\SiteMapController;
use Illuminate\Support\Facades\Route;

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

// home
Route::get('/', [ShowController::class, 'home'])->name('home');

// news
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'detail'])->name('news.detail');

// catalog
Route::get('/catalog/', [CatalogController::class, 'index'])->name('catalog.index');
Route::get('/catalog/{slug}', [CatalogController::class, 'detail'])->name('catalog.detail');
Route::get('/catalog/category/{category?}', [CatalogController::class, 'index'])->name('catalog.category');

//form message
Route::get('/message', [MessageController::class, 'page']);
Route::post('/message', [MessageController::class, 'message']);

Route::get('/contacts', [ShowController::class, 'contacts'])->name('contacts');

//question
Route::get('/questions', [QuestionsController::class, 'index'])->name('questions.index');

Route::get('/sitemap.xml', [SiteMapController::class, 'generateSitemap'])->name('sitemap');
Route::get('/robots.txt', function () {
    return response()->file(public_path('robots.txt'));
});
