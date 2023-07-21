<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\RecoverController;
use App\Http\Controllers\NewPasswordController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\ErrorController;

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/edit/{id}', [EditController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [EditController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [DeleteController::class, 'delete'])->name('delete');
});

// Route::middleware(['auth', 'canEditDeletePost'])->group(function () {
    // Route::get('/user', [UserController::class, 'create'])->name('user');
// });

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/posts', [PostController::class, 'create'])->name('posts');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'show'])->name('home.show');


Route::get('/error', [ErrorController::class, 'create'])->name('error');

Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/posts', [PostController::class, 'create'])->name('posts');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/recover', [RecoverController::class, 'create'])->name('recover');

Route::post('/send-email', [TestController::class, 'sendEmail'])->name('sendEmail');
Route::post('/confirm-email', [TestController::class, 'confirmEmail'])->name('confirmEmail');
Route::get('/enter-code', [TestController::class, 'create'])->name('create'); 

Route::get('/new-password', [NewPasswordController::class, 'create'])->name('new-password.create');
Route::post('/new-password', [NewPasswordController::class, 'update'])->name('update-password');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



