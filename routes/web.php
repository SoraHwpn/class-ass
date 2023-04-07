<?php
use App\http\Controllers\Posts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\PostsController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::resource('/posts', PostsController::class);
Route::get('posts',[Posts::class,'index'])->name('posts.index');
Route::get('posts/create',[Posts::class,'create'])->name('posts.create');
Route::post('posts/store',[Posts::class,'store'])->name('posts.store');
Route::get('posts/show',[Posts::class,'show'])->name('posts.show');
Route::get('posts/edit',[Posts::class,'edit'])->name('posts.edit');
Route::post('posts/delete',[Posts::class,'delete'])->name('posts.destroy');
Route::post('posts/update',[Posts::class,'update'])->name('posts.update');

