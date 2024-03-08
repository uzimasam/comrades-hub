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
    Route::get('/item/{slug}', [PageController::class, 'item'])->name('item');
    Route::get('/ads', [PageController::class, 'ads'])->name('ads');
    Route::get('/ad/{slug}', [PageController::class, 'ad'])->name('ad');
    Route::get('/sellers', [PageController::class, 'sellers'])->name('sellers');
    Route::get('/seller/{slug}', [PageController::class, 'seller'])->name('seller');
    Route::get('/chat/seller/{slug}', [PageController::class, 'chatSeller'])->name('chat.seller');
    Route::get('/chat/item/{slug}', [PageController::class, 'chatItem'])->name('chat.item');
    Route::get('/chat/ad/{slug}', [PageController::class, 'chatAd'])->name('chat.ad');
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
        Route::get('/follow/seller/{slug}', [PageController::class, 'followSeller'])->name('follow.seller');
        Route::get('/unfollow/seller/{slug}', [PageController::class, 'unfollowSeller'])->name('unfollow.seller');
        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
        Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
        Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('/create/seller', [PageController::class, 'createSeller'])->name('create.seller');
        Route::post('/create/seller', [PageController::class, 'storeSeller'])->name('store.seller');
        Route::group(['middleware' => 'seller'], function () {
            Route::get('/sellers/dashboard', [PageController::class, 'sellerDashboard'])->name('seller.dashboard');
            Route::post('/sellers/dashboard', [PageController::class, 'updateSeller'])->name('update.seller');
            Route::get('/create/ad', [PageController::class, 'createAd'])->name('create.ad');
            Route::post('/create/ad', [PageController::class, 'storeAd'])->name('store.ad');
            Route::get('/create/item', [PageController::class, 'createItem'])->name('create.item');
            Route::post('/create/item', [PageController::class, 'storeItem'])->name('store.item');
            Route::get('/seller/item/{slug}', [PageController::class, 'sellerItem'])->name('seller.item');
            Route::delete('/seller/item/{slug}', [PageController::class, 'deleteItem'])->name('delete.item');
            Route::get('/seller/ad/{slug}', [PageController::class, 'sellerAd'])->name('seller.ad');
            Route::delete('/seller/ad/{slug}', [PageController::class, 'deleteAd'])->name('delete.ad');
        });
        Route::group(['middleware' => 'admin'], function () {
            Route::get('/admin/dashboard', [PageController::class, 'adminDashboard'])->name('admin.dashboard');
            Route::get('/admin/categories', [PageController::class, 'adminCategories'])->name('admin.categories');
            Route::post('/admin/categories', [PageController::class, 'storeCategory'])->name('store.category');
            Route::get('/admin/ads', [PageController::class, 'adminAds'])->name('admin.ads');
            Route::get('/admin/items', [PageController::class, 'adminItems'])->name('admin.items');
            Route::get('/admin/users', [PageController::class, 'adminUsers'])->name('admin.users');
            Route::get('/admin/sellers', [PageController::class, 'adminSellers'])->name('admin.sellers');
        });
    });
