<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


/**
 * Admin Site Router
 */
if(function_exists('admin_prefix')) {
    $prefix = admin_prefix();

    Route::middleware(['web','auth', 'admin'])
    ->name('admin.seller')
    ->prefix($prefix.'/seller')->group(function () {
        Route::get('/', [
            \Jiny\Seller\Http\Controllers\Admin\AdminSeller::class,
            "index"]);

        Route::get('/type', [
            \Jiny\Seller\Http\Controllers\Admin\AdminSellerType::class,
            "index"]);

        Route::get('/products', [
            \Jiny\Seller\Http\Controllers\Admin\AdminSellerProducts::class,
            "index"]);

        Route::get('/products/category', [
            \Jiny\Seller\Http\Controllers\Admin\AdminSellerProductsCategory::class,
            "index"]);

        Route::get('/emoney/log', [
            \Jiny\Seller\Http\Controllers\Admin\AdminSellerEmoneyLog::class,
            "index"]);

        Route::get('/orders', [
            \Jiny\Seller\Http\Controllers\Admin\AdminSellerOrders::class,
            "index"]);
    });
}
