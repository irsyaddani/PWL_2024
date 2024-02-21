<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Praktikum - Basic Routing
Route::get('/world', function () {
    return 'World';
});

// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/about', function () {
//     return 'NIM: 2241720233, Nama: Irsyad Danisaputra';
// });

// Praktikum - Route Parameters
Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId. " Komentar ke-".$commentId;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId. " Komentar ke-".$commentId;
});

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID '.$id;
// });

// Praktikum - Optional Parameters

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

// Praktikum - Route Name
Route::get('/user/profile', function () {
    //
}) ->name('profile');

// Praktikum - Membuat Controller
// Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [ArticleController::class,'articles'])->name('id');

// Praktikum - Resource Controller
// Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
'create', 'store', 'update', 'destroy'
]);

// Praktikum - Membuat View
// Route::get('/greeting', function () {
// return view('hello', ['name' => 'Irsyad']);
// });

// Praktikum - View Dalam Direktori
// Route::get('/greeting', function () {
// return view('blog.hello', ['name' => 'Irsyad']);
// });

// Praktikum - Menampilkan View dari Controller
Route::get('/greeting', [WelcomeController::class,
'greeting']);