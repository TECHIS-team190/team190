<?php
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
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('items', [App\Http\Controllers\ItemController::class, 'index']); //商品一覧表示
//Route::get('/add', [App\Http\Controllers\TypeController::class, 'type_add']); //登録画面_種別の取得
//Route::get('edit/{id}', [App\Http\Controllers\TypeController::class, 'type_edit']); //編集画面_種別の取得
Route::group(['middleware' => ['auth', 'can:admin-higher']], function () {
    Route::get('/add', [App\Http\Controllers\ItemController::class, 'add']); //登録画面表示
    Route::get('edit/{id}', [App\Http\Controllers\ItemController::class, 'edit']); //編集画面表示
    Route::post('/create', [App\Http\Controllers\ItemController::class, 'create']); //商品登録
    Route::post('/update', [App\Http\Controllers\ItemController::class, 'update']); //商品更新
    Route::get('/delete/{id}', [App\Http\Controllers\ItemController::class, 'destroy']);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');