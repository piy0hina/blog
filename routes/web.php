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

// '/posts/{対象のデータID}'にGetリクエストが来たら、PostControllerのshowメソッドを実行する
Route::get('/posts/{post}', [PostController::class, 'show']);