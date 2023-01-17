<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\FrontendController::class, 'home'])->name('home');
Route::get('/post/{slug}', [App\Http\Controllers\FrontendController::class, 'singlepost'])->name('singlepost');
Route::post('/search', [App\Http\Controllers\FrontendController::class, 'search'])->name('search');
Route::get('/reso', [App\Http\Controllers\FrontendController::class, 'reso'])->name('reso');
Route::get('/design', [App\Http\Controllers\FrontendController::class, 'design'])->name('design');
Route::get('/logout', [App\Http\Controllers\FrontendController::class, 'logout'])->name('logout');
Route::get('/singleins', [App\Http\Controllers\FrontendController::class, 'singleins'])->name('singleins');



Route::middleware('auth', 'admin')->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.home');
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('posts', App\Http\Controllers\Admin\PostController::class);
    Route::resource('messages', App\Http\Controllers\Admin\MessageController::class);
    Route::get('navbar', [App\Http\Controllers\Admin\SettingController::class, 'navbar'])->name('setting.navbar');
    Route::get('footer', [App\Http\Controllers\Admin\SettingController::class, 'footer'])->name('setting.footer');
    Route::get('about', [App\Http\Controllers\Admin\SettingController::class, 'about'])->name('setting.about');
    Route::post('nnavbar', [App\Http\Controllers\Admin\SettingController::class, 'nnavbar'])->name('setting.nnavbar');
    Route::post('nfooter', [App\Http\Controllers\Admin\SettingController::class, 'nfooter'])->name('setting.nfooter');
    Route::post('nabout', [App\Http\Controllers\Admin\SettingController::class, 'nabout'])->name('setting.nabout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
