<?php

use Illuminate\Support\Facades\Route;
//Controllerとの接続
use App\Http\Controllers\PostController;

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
/*
//Bladeファイルの直接表示
Route::get('/', function () {
    //return view('welcome');
    return view('posts/index');
});
*/
//ルーティングの設定 PostControllerを呼び出し、indexを返す
Route::get('/', [PostController::class, 'index']);

Route::post('/posts', [PostController::class, 'store']);

// /posts/createにGetリクエストが来たら、PostControllerのcreateメソッドを実行する
Route::get('/posts/create', [PostController::class, 'create']);



// /posts/~のGetリクエストを判定するルーティングは、下のルーティングによりも上に書かないと、ルートパラメーター部分に情報として入ってしまう

// '/posts/{ルートパラメーター}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する
Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
//Route::put('/posts/{post}', [PostController::class, 'update']);