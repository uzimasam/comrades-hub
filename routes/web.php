<?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\PageController;
    use App\Http\Controllers\RegisterController;
    use App\Http\Controllers\LoginController;
    use App\Http\Controllers\UserProfileController;
    use App\Http\Controllers\ResetPassword;
    use App\Http\Controllers\ChangePassword;

    Route::get('/', [PageController::class, 'index'])->name('home');
    Route::get('/items', [PageController::class, 'items'])->name('items');
    Route::get('/seller/{slug}', [PageController::class, 'seller'])->name('seller');
    Route::get('/create/seller', [PageController::class, 'createSeller'])->name('create.seller');
    Route::post('/create/seller', [PageController::class, 'storeSeller'])->name('store.seller');
    Route::get('/admin/dashboard', [PageController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/register', [RegisterController::class, 'create'])->name('register');
        Route::post('/register', [RegisterController::class, 'store'])->name('register.perform');
        Route::get('/login', [LoginController::class, 'show'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
        Route::get('/reset-password', [ResetPassword::class, 'show'])->name('reset-password');
        Route::post('/reset-password', [ResetPassword::class, 'send'])->name('reset.perform');
        Route::get('/change-password', [ChangePassword::class, 'show'])->name('change-password');
        Route::post('/change-password', [ChangePassword::class, 'update'])->name('change.perform');
    });
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
        Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
        Route::group(['middleware' => 'seller'], function () {
            Route::get('/sellers/dashboard', [PageController::class, 'sellerDashboard'])->name('seller.dashboard');
        });
    });
