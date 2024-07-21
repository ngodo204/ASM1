<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    $highestPricedClothes = DB::table('clothes')->orderBy('price', 'desc')->take(8)->get();
    $categories = DB::table('categories')->get();
    return view('index', compact('highestPricedClothes', 'categories'));
})->name('clothes.index');
Route::get('/category/{id}', function ($id) {
    $clothes = DB::table('clothes')->where('category_id', $id)->get();
    
    return view('category', compact('clothes'));
});
Route::get('/categories/{category_id}', function ($category_id) {
    $clothes = DB::table('clothes')->where('category_id', $category_id)->get();
    return view('category_clothes', ['clothes' => $clothes]);
})->name('category.clothes');

Route::get('/detail/{id}', function ($id) {
    $clothing = DB::table('clothes')->find($id);
    $categories = DB::table('categories')->get();
    return view('detail', compact('clothing', 'categories'));
})->name('clothing.show');

Route::group(['prefix' => 'cart'], function(){
    Route::get('/',[CartController::class, 'view'])->name('cart.view');
    Route::get('/add/{product}',[CartController::class, 'addCart'])->name('cart.add');
});
