<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use Illuminate\Auth\Events\Login;
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

route::get('/', [AuthController::class, 'loginForm']);

route::post('/login', [AuthController::class, 'login'])->name("login");


route::get('/article/index', [ArticleController::class, 'index'])->name("article.index");
route::get('/article', [ArticleController::class, 'article'])->name("article");
route::get('/article', [ArticleController::class, 'article'])->name("article");
