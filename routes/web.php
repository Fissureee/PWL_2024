<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
//route1
Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});
   
Route::get('/welcome', function() {
    return 'Welcome to my website!';
});

Route::get('/about', function() {
    return 'NIM:224172xxxx <br/> Name: Steven';
});

//route2
Route::get('/user/{name}', function ($name) {
    return 'My name is '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function($id) {
    return 'Article Page with ID : '. $id;
});

//route3
Route::get('/user/{name?}', function ($name='John') {
    return 'My name is '.$name;
});

// Route::get('/user/profile', function () {
//     //
//    })->name('profile');
//    Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
//    )->name('profile');
//    // Generating URLs...
//    $url = route('profile');
//    // Generating Redirects...
//    return redirect()->route('profile');

//    Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//     // Uses first & second middleware...
//     });
//    Route::get('/user/profile', function () {
//     // Uses first & second middleware...
// });
// });
// Route::domain('{account}.example.com')->group(function () {
//  Route::get('user/{id}', function ($account, $id) {
//  //
//  });
// });
// Route::middleware('auth')->group(function () {
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/post', [PostController::class, 'index']);
// Route::get('/event', [EventController::class, 'index']);
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });


Route::redirect('/here', '/there');

Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

//route c
Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/', [HomeController::class, 'home']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'article']);

Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
   Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

//route v
Route::get('/greeting', [WelcomeController::class, 'greeting']);